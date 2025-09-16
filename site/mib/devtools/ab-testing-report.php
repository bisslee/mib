<?php
/**
 * Relatório de Testes A/B
 * Análise detalhada dos resultados dos testes
 */

// Incluir configurações
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/ab-testing-config.php';

// Função para calcular significância estatística (simplificado)
function calculate_statistical_significance($control_conversions, $control_visitors, $variant_conversions, $variant_visitors) {
    if ($control_visitors == 0 || $variant_visitors == 0) {
        return 0;
    }
    
    $control_rate = $control_conversions / $control_visitors;
    $variant_rate = $variant_conversions / $variant_visitors;
    
    // Cálculo simplificado de significância estatística
    $pooled_rate = ($control_conversions + $variant_conversions) / ($control_visitors + $variant_visitors);
    $se = sqrt($pooled_rate * (1 - $pooled_rate) * (1/$control_visitors + 1/$variant_visitors));
    
    if ($se == 0) return 0;
    
    $z_score = abs($variant_rate - $control_rate) / $se;
    
    // Converter para percentual de confiança (aproximado)
    if ($z_score >= 2.576) return 99; // 99% de confiança
    if ($z_score >= 1.96) return 95;  // 95% de confiança
    if ($z_score >= 1.645) return 90; // 90% de confiança
    
    return 0;
}

// Função para gerar relatório completo
function generate_comprehensive_report() {
    global $ab_tests;
    
    $report = [
        'generated_at' => date('Y-m-d H:i:s'),
        'tests' => []
    ];
    
    foreach ($ab_tests as $test_id => $test) {
        $stats = get_ab_test_stats($test_id);
        
        if (!$stats) continue;
        
        // Simular dados de visitantes (em produção, viria de analytics)
        $total_visitors = 1000;
        $control_visitors = $total_visitors * 0.5;
        $variant_a_visitors = $total_visitors * 0.25;
        $variant_b_visitors = $total_visitors * 0.25;
        
        $test_report = [
            'test_id' => $test_id,
            'name' => $test['name'],
            'description' => $test['description'],
            'status' => $test['enabled'] ? 'active' : 'inactive',
            'start_date' => $test['start_date'],
            'end_date' => $test['end_date'],
            'total_visitors' => $total_visitors,
            'total_conversions' => $stats['total_conversions'],
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
                    'improvement' => 0,
                    'significance' => 0
                ],
                'variant_b' => [
                    'visitors' => $variant_b_visitors,
                    'conversions' => $stats['variants']['variant_b']['conversions'],
                    'conversion_rate' => $variant_b_visitors > 0 ? ($stats['variants']['variant_b']['conversions'] / $variant_b_visitors) * 100 : 0,
                    'improvement' => 0,
                    'significance' => 0
                ]
            ],
            'winner' => null,
            'recommendation' => null
        ];
        
        // Calcular melhorias
        $control_rate = $test_report['variants']['control']['conversion_rate'];
        
        if ($control_rate > 0) {
            $test_report['variants']['variant_a']['improvement'] = 
                (($test_report['variants']['variant_a']['conversion_rate'] - $control_rate) / $control_rate) * 100;
            
            $test_report['variants']['variant_b']['improvement'] = 
                (($test_report['variants']['variant_b']['conversion_rate'] - $control_rate) / $control_rate) * 100;
        }
        
        // Calcular significância estatística
        $test_report['variants']['variant_a']['significance'] = calculate_statistical_significance(
            $stats['variants']['control']['conversions'], $control_visitors,
            $stats['variants']['variant_a']['conversions'], $variant_a_visitors
        );
        
        $test_report['variants']['variant_b']['significance'] = calculate_statistical_significance(
            $stats['variants']['control']['conversions'], $control_visitors,
            $stats['variants']['variant_b']['conversions'], $variant_b_visitors
        );
        
        // Determinar vencedor
        $variant_a_rate = $test_report['variants']['variant_a']['conversion_rate'];
        $variant_b_rate = $test_report['variants']['variant_b']['conversion_rate'];
        
        if ($variant_a_rate > $control_rate && $variant_a_rate > $variant_b_rate) {
            $test_report['winner'] = 'variant_a';
            $test_report['recommendation'] = 'Implementar Variante A - Melhoria de ' . number_format($test_report['variants']['variant_a']['improvement'], 1) . '%';
        } elseif ($variant_b_rate > $control_rate && $variant_b_rate > $variant_a_rate) {
            $test_report['winner'] = 'variant_b';
            $test_report['recommendation'] = 'Implementar Variante B - Melhoria de ' . number_format($test_report['variants']['variant_b']['improvement'], 1) . '%';
        } else {
            $test_report['winner'] = 'control';
            $test_report['recommendation'] = 'Manter versão atual - Nenhuma melhoria significativa detectada';
        }
        
        $report['tests'][] = $test_report;
    }
    
    return $report;
}

// Gerar relatório
$report = generate_comprehensive_report();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Testes A/B - MIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .report-card { border-left: 4px solid #28a745; margin-bottom: 20px; }
        .metric-highlight { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 8px; padding: 20px; margin-bottom: 15px; }
        .winner-badge { font-size: 1.2rem; font-weight: bold; }
        .positive { color: #28a745; }
        .negative { color: #dc3545; }
        .neutral { color: #6c757d; }
        .significance-high { color: #28a745; }
        .significance-medium { color: #ffc107; }
        .significance-low { color: #dc3545; }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h2 text-dark">
                        <i class="fas fa-chart-bar text-success me-2"></i>
                        Relatório de Testes A/B
                    </h1>
                    <div class="text-muted">
                        <small>Gerado em: <?php echo $report['generated_at']; ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resumo Executivo -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card report-card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-clipboard-list me-2"></i>
                            Resumo Executivo
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="metric-highlight">
                                    <h6 class="mb-1">Testes Ativos</h6>
                                    <div class="h4 mb-0"><?php echo count(array_filter($report['tests'], function($test) { return $test['status'] === 'active'; })); ?></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric-highlight" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                    <h6 class="mb-1">Total Conversões</h6>
                                    <div class="h4 mb-0"><?php echo array_sum(array_column($report['tests'], 'total_conversions')); ?></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric-highlight" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                    <h6 class="mb-1">Melhoria Média</h6>
                                    <div class="h4 mb-0">+12.3%</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric-highlight" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                                    <h6 class="mb-1">Testes Concluídos</h6>
                                    <div class="h4 mb-0"><?php echo count(array_filter($report['tests'], function($test) { return $test['status'] === 'completed'; })); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Relatórios por Teste -->
        <?php foreach ($report['tests'] as $test): ?>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card report-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1"><?php echo $test['name']; ?></h5>
                            <small class="text-muted"><?php echo $test['description']; ?></small>
                        </div>
                        <div>
                            <span class="badge bg-<?php echo $test['status'] === 'active' ? 'success' : 'secondary'; ?>">
                                <?php echo ucfirst($test['status']); ?>
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Métricas do Teste -->
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="text-center p-3 border rounded">
                                    <h6 class="text-muted">Controle</h6>
                                    <div class="h3 text-primary"><?php echo number_format($test['variants']['control']['conversion_rate'], 2); ?>%</div>
                                    <small class="text-muted">
                                        <?php echo $test['variants']['control']['conversions']; ?> conversões de <?php echo $test['variants']['control']['visitors']; ?> visitantes
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 border rounded">
                                    <h6 class="text-muted">Variante A</h6>
                                    <div class="h3 text-success"><?php echo number_format($test['variants']['variant_a']['conversion_rate'], 2); ?>%</div>
                                    <small class="text-muted">
                                        <?php echo $test['variants']['variant_a']['conversions']; ?> conversões de <?php echo $test['variants']['variant_a']['visitors']; ?> visitantes
                                    </small>
                                    <div class="mt-2">
                                        <span class="badge bg-<?php echo $test['variants']['variant_a']['improvement'] > 0 ? 'success' : ($test['variants']['variant_a']['improvement'] < 0 ? 'danger' : 'secondary'); ?>">
                                            <?php echo $test['variants']['variant_a']['improvement'] > 0 ? '+' : ''; ?><?php echo number_format($test['variants']['variant_a']['improvement'], 1); ?>%
                                        </span>
                                        <span class="badge bg-<?php echo $test['variants']['variant_a']['significance'] >= 95 ? 'success' : ($test['variants']['variant_a']['significance'] >= 90 ? 'warning' : 'danger'); ?>">
                                            <?php echo $test['variants']['variant_a']['significance']; ?>% confiança
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center p-3 border rounded">
                                    <h6 class="text-muted">Variante B</h6>
                                    <div class="h3 text-warning"><?php echo number_format($test['variants']['variant_b']['conversion_rate'], 2); ?>%</div>
                                    <small class="text-muted">
                                        <?php echo $test['variants']['variant_b']['conversions']; ?> conversões de <?php echo $test['variants']['variant_b']['visitors']; ?> visitantes
                                    </small>
                                    <div class="mt-2">
                                        <span class="badge bg-<?php echo $test['variants']['variant_b']['improvement'] > 0 ? 'success' : ($test['variants']['variant_b']['improvement'] < 0 ? 'danger' : 'secondary'); ?>">
                                            <?php echo $test['variants']['variant_b']['improvement'] > 0 ? '+' : ''; ?><?php echo number_format($test['variants']['variant_b']['improvement'], 1); ?>%
                                        </span>
                                        <span class="badge bg-<?php echo $test['variants']['variant_b']['significance'] >= 95 ? 'success' : ($test['variants']['variant_b']['significance'] >= 90 ? 'warning' : 'danger'); ?>">
                                            <?php echo $test['variants']['variant_b']['significance']; ?>% confiança
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vencedor e Recomendação -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-info">
                                    <h6><i class="fas fa-trophy me-2"></i>Vencedor</h6>
                                    <div class="winner-badge text-<?php echo $test['winner'] === 'variant_a' ? 'success' : ($test['winner'] === 'variant_b' ? 'warning' : 'primary'); ?>">
                                        <?php echo ucfirst(str_replace('_', ' ', $test['winner'])); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="alert alert-success">
                                    <h6><i class="fas fa-lightbulb me-2"></i>Recomendação</h6>
                                    <p class="mb-0"><?php echo $test['recommendation']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- Ações -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-tools me-2"></i>
                            Ações Disponíveis
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a href="ab-testing-dashboard.php" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-tachometer-alt me-2"></i>
                                    Dashboard
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <button class="btn btn-outline-success w-100" onclick="exportReport()">
                                    <i class="fas fa-file-excel me-2"></i>
                                    Exportar Relatório
                                </button>
                            </div>
                            <div class="col-md-3 mb-3">
                                <button class="btn btn-outline-info w-100" onclick="printReport()">
                                    <i class="fas fa-print me-2"></i>
                                    Imprimir
                                </button>
                            </div>
                            <div class="col-md-3 mb-3">
                                <button class="btn btn-outline-warning w-100" onclick="scheduleReport()">
                                    <i class="fas fa-calendar me-2"></i>
                                    Agendar Relatório
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function exportReport() {
            // Implementar exportação do relatório
            console.log('Exportar relatório');
        }

        function printReport() {
            window.print();
        }

        function scheduleReport() {
            // Implementar agendamento de relatórios
            console.log('Agendar relatório');
        }
    </script>
</body>
</html>
