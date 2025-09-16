<?php
/**
 * Script para verificar status do site
 * Verifica indexação, sitemap, robots.txt e URLs importantes
 */

// Incluir configurações
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/search-console-config.php';

// Função para verificar se uma URL está acessível
function check_url_status($url) {
    $headers = @get_headers($url, 1);
    
    if (!$headers) {
        return [
            'status' => 'error',
            'code' => 0,
            'message' => 'Não foi possível conectar'
        ];
    }
    
    $status_line = $headers[0];
    preg_match('/HTTP\/\d\.\d\s+(\d+)/', $status_line, $matches);
    $status_code = isset($matches[1]) ? intval($matches[1]) : 0;
    
    return [
        'status' => $status_code >= 200 && $status_code < 400 ? 'ok' : 'error',
        'code' => $status_code,
        'message' => $status_line
    ];
}

// Função para verificar sitemap
function check_sitemap() {
    global $site_config;
    
    $sitemap_url = $site_config['base_url'] . '/sitemap.xml';
    $result = check_url_status($sitemap_url);
    
    if ($result['status'] === 'ok') {
        // Verificar se é XML válido
        $content = @file_get_contents($sitemap_url);
        if ($content && strpos($content, '<?xml') !== false) {
            $result['valid_xml'] = true;
            $result['url_count'] = substr_count($content, '<url>');
        } else {
            $result['valid_xml'] = false;
        }
    }
    
    return $result;
}

// Função para verificar robots.txt
function check_robots() {
    global $site_config;
    
    $robots_url = $site_config['base_url'] . '/robots.txt';
    $result = check_url_status($robots_url);
    
    if ($result['status'] === 'ok') {
        $content = @file_get_contents($robots_url);
        if ($content) {
            $result['has_sitemap'] = strpos($content, 'Sitemap:') !== false;
            $result['has_disallow'] = strpos($content, 'Disallow:') !== false;
        }
    }
    
    return $result;
}

// Função para verificar URLs importantes
function check_important_urls() {
    global $search_console_config, $site_config;
    
    $results = [];
    
    foreach ($search_console_config['important_urls'] as $name => $path) {
        $url = $site_config['base_url'] . $path;
        $results[$name] = check_url_status($url);
    }
    
    return $results;
}

// Função para gerar relatório completo
function generate_site_report() {
    global $site_config;
    
    $report = [
        'timestamp' => date('Y-m-d H:i:s'),
        'site_url' => $site_config['base_url'],
        'checks' => [
            'sitemap' => check_sitemap(),
            'robots' => check_robots(),
            'urls' => check_important_urls()
        ]
    ];
    
    // Calcular score geral
    $total_checks = 0;
    $passed_checks = 0;
    
    // Sitemap
    $total_checks++;
    if ($report['checks']['sitemap']['status'] === 'ok') {
        $passed_checks++;
    }
    
    // Robots
    $total_checks++;
    if ($report['checks']['robots']['status'] === 'ok') {
        $passed_checks++;
    }
    
    // URLs importantes
    foreach ($report['checks']['urls'] as $url_result) {
        $total_checks++;
        if ($url_result['status'] === 'ok') {
            $passed_checks++;
        }
    }
    
    $report['score'] = $total_checks > 0 ? round(($passed_checks / $total_checks) * 100) : 0;
    $report['total_checks'] = $total_checks;
    $report['passed_checks'] = $passed_checks;
    
    return $report;
}

// Executar verificação
$report = generate_site_report();

// Se executado via linha de comando, mostrar resultado simples
if (php_sapi_name() === 'cli') {
    echo "=== RELATÓRIO DE STATUS DO SITE ===\n";
    echo "Site: " . $report['site_url'] . "\n";
    echo "Data: " . $report['timestamp'] . "\n";
    echo "Score: " . $report['score'] . "% (" . $report['passed_checks'] . "/" . $report['total_checks'] . ")\n\n";
    
    echo "SITEMAP:\n";
    $sitemap = $report['checks']['sitemap'];
    echo "  Status: " . ($sitemap['status'] === 'ok' ? 'OK' : 'ERRO') . "\n";
    echo "  Código: " . $sitemap['code'] . "\n";
    if (isset($sitemap['url_count'])) {
        echo "  URLs: " . $sitemap['url_count'] . "\n";
    }
    echo "\n";
    
    echo "ROBOTS.TXT:\n";
    $robots = $report['checks']['robots'];
    echo "  Status: " . ($robots['status'] === 'ok' ? 'OK' : 'ERRO') . "\n";
    echo "  Código: " . $robots['code'] . "\n";
    echo "\n";
    
    echo "URLS IMPORTANTES:\n";
    foreach ($report['checks']['urls'] as $name => $url_result) {
        echo "  " . ucfirst($name) . ": " . ($url_result['status'] === 'ok' ? 'OK' : 'ERRO') . " (" . $url_result['code'] . ")\n";
    }
    
    exit(0);
}

// Se executado via web, mostrar resultado JSON
header('Content-Type: application/json');
echo json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
