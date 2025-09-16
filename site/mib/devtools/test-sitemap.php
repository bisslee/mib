<?php
/**
 * Teste e Validação do Sitemap
 * Verifica se o sitemap está funcionando corretamente
 */

// Incluir configurações
require_once __DIR__ . '/../includes/config.php';

// Função para testar sitemap
function test_sitemap() {
    global $site_config;
    
    $results = [
        'sitemap_url' => $site_config['base_url'] . '/sitemap.xml',
        'tests' => [],
        'overall_status' => 'unknown'
    ];
    
    // Teste 1: Verificar se o arquivo existe
    $sitemap_file = __DIR__ . '/../sitemap.xml';
    $results['tests']['file_exists'] = [
        'name' => 'Arquivo sitemap.xml existe',
        'status' => file_exists($sitemap_file) ? 'pass' : 'fail',
        'message' => file_exists($sitemap_file) ? 'Arquivo encontrado' : 'Arquivo não encontrado'
    ];
    
    // Teste 2: Verificar se é XML válido
    if (file_exists($sitemap_file)) {
        $xml_content = file_get_contents($sitemap_file);
        $xml = simplexml_load_string($xml_content);
        
        $results['tests']['valid_xml'] = [
            'name' => 'XML válido',
            'status' => $xml !== false ? 'pass' : 'fail',
            'message' => $xml !== false ? 'XML válido' : 'XML inválido'
        ];
        
        // Teste 3: Contar URLs
        if ($xml !== false) {
            $url_count = count($xml->url);
            $results['tests']['url_count'] = [
                'name' => 'Número de URLs',
                'status' => $url_count > 0 ? 'pass' : 'fail',
                'message' => "{$url_count} URLs encontradas"
            ];
            
            // Teste 4: Verificar estrutura das URLs
            $valid_urls = 0;
            $invalid_urls = 0;
            
            foreach ($xml->url as $url) {
                if (isset($url->loc) && !empty($url->loc)) {
                    $valid_urls++;
                } else {
                    $invalid_urls++;
                }
            }
            
            $results['tests']['url_structure'] = [
                'name' => 'Estrutura das URLs',
                'status' => $invalid_urls == 0 ? 'pass' : 'fail',
                'message' => "{$valid_urls} URLs válidas, {$invalid_urls} inválidas"
            ];
            
            // Teste 5: Verificar URLs importantes
            $important_urls = [
                $site_config['base_url'] . '/',
                $site_config['base_url'] . '/contact.php',
                $site_config['base_url'] . '/equipamentos/mangueiras-de-incendio.php',
                $site_config['base_url'] . '/equipamentos/extintores-de-incendio.php'
            ];
            
            $found_important = 0;
            $urls_in_sitemap = [];
            
            foreach ($xml->url as $url) {
                $urls_in_sitemap[] = (string)$url->loc;
            }
            
            foreach ($important_urls as $important_url) {
                if (in_array($important_url, $urls_in_sitemap)) {
                    $found_important++;
                }
            }
            
            $results['tests']['important_urls'] = [
                'name' => 'URLs importantes incluídas',
                'status' => $found_important >= 3 ? 'pass' : 'fail',
                'message' => "{$found_important}/" . count($important_urls) . " URLs importantes encontradas"
            ];
        }
    }
    
    // Teste 6: Verificar acessibilidade via HTTP
    $sitemap_url = $site_config['base_url'] . '/sitemap.xml';
    $headers = @get_headers($sitemap_url);
    
    $results['tests']['http_accessible'] = [
        'name' => 'Acessível via HTTP',
        'status' => 'unknown',
        'message' => 'Não foi possível testar (ambiente local)'
    ];
    
    if ($headers) {
        $http_status = $headers[0];
        if (strpos($http_status, '200') !== false) {
            $results['tests']['http_accessible']['status'] = 'pass';
            $results['tests']['http_accessible']['message'] = 'Acessível via HTTP (200 OK)';
        } else {
            $results['tests']['http_accessible']['status'] = 'fail';
            $results['tests']['http_accessible']['message'] = "Status HTTP: {$http_status}";
        }
    }
    
    // Calcular status geral
    $passed_tests = 0;
    $total_tests = count($results['tests']);
    
    foreach ($results['tests'] as $test) {
        if ($test['status'] === 'pass') {
            $passed_tests++;
        }
    }
    
    if ($passed_tests == $total_tests) {
        $results['overall_status'] = 'pass';
    } elseif ($passed_tests > 0) {
        $results['overall_status'] = 'warning';
    } else {
        $results['overall_status'] = 'fail';
    }
    
    $results['summary'] = "{$passed_tests}/{$total_tests} testes passaram";
    
    return $results;
}

// Executar testes
$test_results = test_sitemap();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste do Sitemap - MIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .test-card { border-left: 4px solid #17a2b8; margin-bottom: 20px; }
        .status-pass { color: #28a745; }
        .status-fail { color: #dc3545; }
        .status-warning { color: #ffc107; }
        .status-unknown { color: #6c757d; }
        .overall-pass { background: linear-gradient(135deg, #28a745 0%, #20c997 100%); color: white; }
        .overall-warning { background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%); color: white; }
        .overall-fail { background: linear-gradient(135deg, #dc3545 0%, #e83e8c 100%); color: white; }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h2 text-dark">
                        <i class="fas fa-sitemap text-info me-2"></i>
                        Teste do Sitemap
                    </h1>
                    <div class="text-muted">
                        <small>URL: <?php echo $test_results['sitemap_url']; ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Geral -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card test-card">
                    <div class="card-header <?php echo 'overall-' . $test_results['overall_status']; ?>">
                        <h5 class="mb-0">
                            <i class="fas fa-chart-line me-2"></i>
                            Status Geral do Sitemap
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="mb-3">
                                    <?php if ($test_results['overall_status'] === 'pass'): ?>
                                        <i class="fas fa-check-circle me-2"></i>
                                        <strong>Sitemap Funcionando</strong>
                                    <?php elseif ($test_results['overall_status'] === 'warning'): ?>
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        <strong>Sitemap com Problemas</strong>
                                    <?php else: ?>
                                        <i class="fas fa-times-circle me-2"></i>
                                        <strong>Sitemap com Falhas</strong>
                                    <?php endif; ?>
                                </h4>
                                <p class="mb-0"><?php echo $test_results['summary']; ?></p>
                            </div>
                            <div class="col-md-4 text-end">
                                <?php if ($test_results['overall_status'] === 'pass'): ?>
                                    <span class="badge bg-success fs-6">✅ Funcionando</span>
                                <?php elseif ($test_results['overall_status'] === 'warning'): ?>
                                    <span class="badge bg-warning fs-6">⚠️ Atenção</span>
                                <?php else: ?>
                                    <span class="badge bg-danger fs-6">❌ Problemas</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resultados dos Testes -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card test-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-list me-2"></i>
                            Resultados dos Testes
                        </h5>
                    </div>
                    <div class="card-body">
                        <?php foreach ($test_results['tests'] as $test): ?>
                        <div class="row align-items-center mb-3 p-3 border rounded">
                            <div class="col-md-8">
                                <h6 class="mb-1"><?php echo $test['name']; ?></h6>
                                <p class="mb-0 text-muted"><?php echo $test['message']; ?></p>
                            </div>
                            <div class="col-md-4 text-end">
                                <?php if ($test['status'] === 'pass'): ?>
                                    <i class="fas fa-check-circle fa-2x status-pass"></i>
                                <?php elseif ($test['status'] === 'fail'): ?>
                                    <i class="fas fa-times-circle fa-2x status-fail"></i>
                                <?php elseif ($test['status'] === 'warning'): ?>
                                    <i class="fas fa-exclamation-triangle fa-2x status-warning"></i>
                                <?php else: ?>
                                    <i class="fas fa-question-circle fa-2x status-unknown"></i>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

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
                                <a href="<?php echo $test_results['sitemap_url']; ?>" target="_blank" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-external-link-alt me-2"></i>
                                    Ver Sitemap
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="https://search.google.com/search-console" target="_blank" class="btn btn-outline-success w-100">
                                    <i class="fab fa-google me-2"></i>
                                    Search Console
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <button class="btn btn-outline-info w-100" onclick="validateXML()">
                                    <i class="fas fa-check-double me-2"></i>
                                    Validar XML
                                </button>
                            </div>
                            <div class="col-md-3 mb-3">
                                <button class="btn btn-outline-warning w-100" onclick="location.reload()">
                                    <i class="fas fa-sync-alt me-2"></i>
                                    Testar Novamente
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informações Técnicas -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Informações Técnicas
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-muted">URLs do Sitemap:</h6>
                                <ul class="list-unstyled">
                                    <li><strong>Estático:</strong> <?php echo $test_results['sitemap_url']; ?></li>
                                    <li><strong>Dinâmico:</strong> <?php echo $test_results['sitemap_url']; ?>.php</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Configurações:</h6>
                                <ul class="list-unstyled">
                                    <li><strong>Encoding:</strong> UTF-8</li>
                                    <li><strong>Schema:</strong> Sitemap 0.9</li>
                                    <li><strong>Cache:</strong> 1 hora</li>
                                    <li><strong>Prioridade:</strong> 0.3 - 1.0</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function validateXML() {
            // Implementar validação XML online
            const sitemapUrl = '<?php echo $test_results['sitemap_url']; ?>';
            window.open('https://www.xml-sitemaps.com/validate-xml-sitemap.html?go=1&sitemap=' + encodeURIComponent(sitemapUrl), '_blank');
        }
    </script>
</body>
</html>
