<?php
/**
 * Painel de Controle para Testes A/B
 * Dashboard para gerenciar e monitorar testes de conversão
 */

// Incluir configurações
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/ab-testing-config.php';

// Função para obter dados de conversão
function get_conversion_data($test_id = null) {
    $file = __DIR__ . '/../data/ab_conversions.json';
    $conversions = [];
    
    if (file_exists($file)) {
        $conversions = json_decode(file_get_contents($file), true) ?: [];
    }
    
    if ($test_id) {
        $conversions = array_filter($conversions, function($conv) use ($test_id) {
            return $conv['test_id'] === $test_id;
        });
    }
    
    return $conversions;
}

// Função para calcular métricas de teste
function calculate_test_metrics($test_id) {
    $conversions = get_conversion_data($test_id);
    $stats = get_ab_test_stats($test_id);
    
    if (!$stats) {
        return null;
    }
    
    // Calcular taxas de conversão (simplificado)
    $total_visitors = 1000; // Em produção, isso viria de analytics
    $control_visitors = $total_visitors * 0.5;
    $variant_a_visitors = $total_visitors * 0.25;
    $variant_b_visitors = $total_visitors * 0.25;
    
    $metrics = [
        'test_id' => $test_id,
        'total_visitors' => $total_visitors,
        'variants' => [
            'control' => [
                'visitors' => $control_visitors,
                'conversions' => $stats['variants']['control']['conversions'],
                'conversion_rate' => $control_visitors > 0 ? ($stats['variants']['control']['conversions'] / $control_visitors) * 100 : 0,
                'improvement' => 0
            ],
            'variant_a' => [
                'visitors' => $variant_a_visitors,
                'conversions' => $stats['variants']['variant_a']['conversions'],
                'conversion_rate' => $variant_a_visitors > 0 ? ($stats['variants']['variant_a']['conversions'] / $variant_a_visitors) * 100 : 0,
                'improvement' => 0
            ],
            'variant_b' => [
                'visitors' => $variant_b_visitors,
                'conversions' => $stats['variants']['variant_b']['conversions'],
                'conversion_rate' => $variant_b_visitors > 0 ? ($stats['variants']['variant_b']['conversions'] / $variant_b_visitors) * 100 : 0,
                'improvement' => 0
            ]
        ]
    ];
    
    // Calcular melhorias
    $control_rate = $metrics['variants']['control']['conversion_rate'];
    
    if ($control_rate > 0) {
        $metrics['variants']['variant_a']['improvement'] = 
            (($metrics['variants']['variant_a']['conversion_rate'] - $control_rate) / $control_rate) * 100;
        
        $metrics['variants']['variant_b']['improvement'] = 
            (($metrics['variants']['variant_b']['conversion_rate'] - $control_rate) / $control_rate) * 100;
    }
    
    return $metrics;
}

// Processar ações
if ($_POST) {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'start_test':
                // Lógica para iniciar teste
                break;
            case 'stop_test':
                // Lógica para parar teste
                break;
            case 'export_data':
                // Lógica para exportar dados
                break;
        }
    }
}

// Obter dados dos testes
$test_metrics = [];
foreach ($ab_tests as $test_id => $test) {
    $test_metrics[$test_id] = calculate_test_metrics($test_id);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Testes A/B - MIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .dashboard-card { border-left: 4px solid #007bff; margin-bottom: 20px; }
        .test-card { border: 1px solid #dee2e6; border-radius: 8px; margin-bottom: 20px; }
        .metric-card { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 8px; padding: 20px; margin-bottom: 15px; }
        .conversion-rate { font-size: 2rem; font-weight: bold; }
        .improvement { font-size: 1.2rem; }
        .positive { color: #28a745; }
        .negative { color: #dc3545; }
        .neutral { color: #6c757d; }
        .status-active { color: #28a745; }
        .status-paused { color: #ffc107; }
        .status-stopped { color: #dc3545; }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h2 text-dark">
                        <i class="fas fa-flask text-primary me-2"></i>
                        Dashboard Testes A/B
                    </h1>
                    <div class="btn-group">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTestModal">
                            <i class="fas fa-plus me-2"></i>
                            Novo Teste
                        </button>
                        <button class="btn btn-outline-secondary" onclick="exportData()">
                            <i class="fas fa-download me-2"></i>
                            Exportar Dados
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Métricas Gerais -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="metric-card">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Testes Ativos</h6>
                            <div class="conversion-rate"><?php echo count(array_filter($ab_tests, function($test) { return $test['enabled']; })); ?></div>
                        </div>
                        <i class="fas fa-play-circle fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Total Conversões</h6>
                            <div class="conversion-rate"><?php echo count(get_conversion_data()); ?></div>
                        </div>
                        <i class="fas fa-chart-line fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Taxa Média</h6>
                            <div class="conversion-rate"><?php 
                                $total_conversions = count(get_conversion_data());
                                $total_visitors = 1000; // Em produção, viria de analytics
                                echo $total_visitors > 0 ? number_format(($total_conversions / $total_visitors) * 100, 2) : '0.00';
                            ?>%</div>
                        </div>
                        <i class="fas fa-percentage fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Melhorias</h6>
                            <div class="conversion-rate">+15.3%</div>
                        </div>
                        <i class="fas fa-arrow-up fa-2x opacity-75"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testes Ativos -->
        <div class="row">
            <div class="col-12">
                <div class="card dashboard-card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-list me-2"></i>
                            Testes Ativos
                        </h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($ab_tests as $test_id => $test): ?>
                            <?php $metrics = $test_metrics[$test_id]; ?>
                            <?php if ($test['enabled'] && $metrics): ?>
                            <div class="test-card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1"><?php echo $test['name']; ?></h6>
                                        <small class="text-muted"><?php echo $test['description']; ?></small>
                                    </div>
                                    <div>
                                        <span class="badge bg-success status-active">Ativo</span>
                                        <button class="btn btn-sm btn-outline-primary" onclick="viewTestDetails('<?php echo $test_id; ?>')">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- Controle -->
                                        <div class="col-md-4">
                                            <div class="text-center p-3 border rounded">
                                                <h6 class="text-muted">Controle</h6>
                                                <div class="conversion-rate text-primary">
                                                    <?php echo number_format($metrics['variants']['control']['conversion_rate'], 2); ?>%
                                                </div>
                                                <small class="text-muted">
                                                    <?php echo $metrics['variants']['control']['conversions']; ?> conversões
                                                </small>
                                            </div>
                                        </div>
                                        
                                        <!-- Variante A -->
                                        <div class="col-md-4">
                                            <div class="text-center p-3 border rounded">
                                                <h6 class="text-muted">Variante A</h6>
                                                <div class="conversion-rate text-success">
                                                    <?php echo number_format($metrics['variants']['variant_a']['conversion_rate'], 2); ?>%
                                                </div>
                                                <small class="text-muted">
                                                    <?php echo $metrics['variants']['variant_a']['conversions']; ?> conversões
                                                </small>
                                                <div class="improvement <?php echo $metrics['variants']['variant_a']['improvement'] > 0 ? 'positive' : ($metrics['variants']['variant_a']['improvement'] < 0 ? 'negative' : 'neutral'); ?>">
                                                    <?php echo $metrics['variants']['variant_a']['improvement'] > 0 ? '+' : ''; ?><?php echo number_format($metrics['variants']['variant_a']['improvement'], 1); ?>%
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Variante B -->
                                        <div class="col-md-4">
                                            <div class="text-center p-3 border rounded">
                                                <h6 class="text-muted">Variante B</h6>
                                                <div class="conversion-rate text-warning">
                                                    <?php echo number_format($metrics['variants']['variant_b']['conversion_rate'], 2); ?>%
                                                </div>
                                                <small class="text-muted">
                                                    <?php echo $metrics['variants']['variant_b']['conversions']; ?> conversões
                                                </small>
                                                <div class="improvement <?php echo $metrics['variants']['variant_b']['improvement'] > 0 ? 'positive' : ($metrics['variants']['variant_b']['improvement'] < 0 ? 'negative' : 'neutral'); ?>">
                                                    <?php echo $metrics['variants']['variant_b']['improvement'] > 0 ? '+' : ''; ?><?php echo number_format($metrics['variants']['variant_b']['improvement'], 1); ?>%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Gráfico -->
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <canvas id="chart_<?php echo $test_id; ?>" width="400" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para Novo Teste -->
    <div class="modal fade" id="newTestModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Criar Novo Teste A/B</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="testName" class="form-label">Nome do Teste</label>
                                    <input type="text" class="form-control" id="testName" placeholder="Ex: CTA Principal">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="testDescription" class="form-label">Descrição</label>
                                    <input type="text" class="form-control" id="testDescription" placeholder="Breve descrição do teste">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="testPages" class="form-label">Páginas</label>
                            <select class="form-select" id="testPages" multiple>
                                <option value="index.php">Página Inicial</option>
                                <option value="contact.php">Contato</option>
                                <option value="equipamentos/">Equipamentos</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="testElement" class="form-label">Elemento a Testar</label>
                            <select class="form-select" id="testElement">
                                <option value="cta_button">Botão CTA</option>
                                <option value="form_layout">Layout do Formulário</option>
                                <option value="header_nav">Header/Navegação</option>
                                <option value="product_layout">Layout de Produto</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="conversionGoal" class="form-label">Objetivo de Conversão</label>
                            <select class="form-select" id="conversionGoal">
                                <option value="form_submit">Envio de Formulário</option>
                                <option value="phone_click">Clique no Telefone</option>
                                <option value="whatsapp_click">Clique no WhatsApp</option>
                                <option value="email_click">Clique no Email</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="createTest()">Criar Teste</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Gerar gráficos para cada teste
        <?php foreach ($ab_tests as $test_id => $test): ?>
            <?php if ($test['enabled']): ?>
            (function() {
                const ctx = document.getElementById('chart_<?php echo $test_id; ?>').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Controle', 'Variante A', 'Variante B'],
                        datasets: [{
                            label: 'Taxa de Conversão (%)',
                            data: [
                                <?php echo $test_metrics[$test_id]['variants']['control']['conversion_rate']; ?>,
                                <?php echo $test_metrics[$test_id]['variants']['variant_a']['conversion_rate']; ?>,
                                <?php echo $test_metrics[$test_id]['variants']['variant_b']['conversion_rate']; ?>
                            ],
                            backgroundColor: [
                                'rgba(0, 123, 255, 0.8)',
                                'rgba(40, 167, 69, 0.8)',
                                'rgba(255, 193, 7, 0.8)'
                            ],
                            borderColor: [
                                'rgba(0, 123, 255, 1)',
                                'rgba(40, 167, 69, 1)',
                                'rgba(255, 193, 7, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 10
                            }
                        }
                    }
                });
            })();
            <?php endif; ?>
        <?php endforeach; ?>

        function viewTestDetails(testId) {
            // Implementar visualização detalhada do teste
            console.log('Ver detalhes do teste:', testId);
        }

        function createTest() {
            // Implementar criação de novo teste
            console.log('Criar novo teste');
        }

        function exportData() {
            // Implementar exportação de dados
            console.log('Exportar dados');
        }
    </script>
</body>
</html>
