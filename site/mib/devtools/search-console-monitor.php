<?php
/**
 * Painel de Monitoramento do Google Search Console
 * Ferramenta para verificar indexação e erros
 */

// Incluir configurações
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/search-console-config.php';

// Função para verificar status do sitemap
function check_sitemap_status() {
    global $site_config;
    
    $sitemap_url = $site_config['base_url'] . '/sitemap.xml';
    
    // Verificar se o sitemap está acessível
    $headers = @get_headers($sitemap_url);
    $status = false;
    
    if ($headers && strpos($headers[0], '200') !== false) {
        $status = true;
    }
    
    return [
        'url' => $sitemap_url,
        'accessible' => $status,
        'last_checked' => date('Y-m-d H:i:s')
    ];
}

// Função para verificar robots.txt
function check_robots_txt() {
    global $site_config;
    
    $robots_url = $site_config['base_url'] . '/robots.txt';
    
    // Verificar se o robots.txt está acessível
    $headers = @get_headers($robots_url);
    $status = false;
    
    if ($headers && strpos($headers[0], '200') !== false) {
        $status = true;
    }
    
    return [
        'url' => $robots_url,
        'accessible' => $status,
        'last_checked' => date('Y-m-d H:i:s')
    ];
}

// Função para verificar URLs importantes
function check_urls_accessibility() {
    global $search_console_config, $site_config;
    
    $results = [];
    
    foreach ($search_console_config['important_urls'] as $name => $url) {
        $full_url = $site_config['base_url'] . $url;
        
        // Verificar se a URL está acessível
        $headers = @get_headers($full_url);
        $status = false;
        
        if ($headers && strpos($headers[0], '200') !== false) {
            $status = true;
        }
        
        $results[$name] = [
            'url' => $full_url,
            'accessible' => $status,
            'last_checked' => date('Y-m-d H:i:s')
        ];
    }
    
    return $results;
}

// Função para gerar relatório de SEO
function generate_seo_report() {
    global $site_config;
    
    $report = [
        'timestamp' => date('Y-m-d H:i:s'),
        'site_url' => $site_config['base_url'],
        'checks' => [
            'sitemap' => check_sitemap_status(),
            'robots_txt' => check_robots_txt(),
            'urls' => check_urls_accessibility()
        ]
    ];
    
    return $report;
}

// Executar verificações
$seo_report = generate_seo_report();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Console Monitor - MIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .status-good { color: #28a745; }
        .status-bad { color: #dc3545; }
        .status-warning { color: #ffc107; }
        .card-header { background: linear-gradient(135deg, #2c5530, #4a7c59); color: white; }
        .monitor-card { border-left: 4px solid #2c5530; }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h3 text-dark">
                        <i class="fas fa-search text-success me-2"></i>
                        Search Console Monitor
                    </h1>
                    <div class="text-muted">
                        <small>Última verificação: <?php echo $seo_report['timestamp']; ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Geral -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card monitor-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-chart-line me-2"></i>
                            Status Geral do Site
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h6 class="text-muted">Site URL</h6>
                                    <p class="mb-0"><strong><?php echo $seo_report['site_url']; ?></strong></p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h6 class="text-muted">Sitemap</h6>
                                    <p class="mb-0">
                                        <?php if ($seo_report['checks']['sitemap']['accessible']): ?>
                                            <i class="fas fa-check-circle status-good"></i> Acessível
                                        <?php else: ?>
                                            <i class="fas fa-times-circle status-bad"></i> Inacessível
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h6 class="text-muted">Robots.txt</h6>
                                    <p class="mb-0">
                                        <?php if ($seo_report['checks']['robots_txt']['accessible']): ?>
                                            <i class="fas fa-check-circle status-good"></i> Acessível
                                        <?php else: ?>
                                            <i class="fas fa-times-circle status-bad"></i> Inacessível
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h6 class="text-muted">Status</h6>
                                    <p class="mb-0">
                                        <span class="badge bg-success">Ativo</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Verificação de URLs -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card monitor-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-link me-2"></i>
                            Verificação de URLs Importantes
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Página</th>
                                        <th>URL</th>
                                        <th>Status</th>
                                        <th>Última Verificação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($seo_report['checks']['urls'] as $name => $data): ?>
                                    <tr>
                                        <td><strong><?php echo ucfirst(str_replace('_', ' ', $name)); ?></strong></td>
                                        <td>
                                            <a href="<?php echo $data['url']; ?>" target="_blank" class="text-decoration-none">
                                                <?php echo $data['url']; ?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php if ($data['accessible']): ?>
                                                <span class="badge bg-success">
                                                    <i class="fas fa-check me-1"></i>Acessível
                                                </span>
                                            <?php else: ?>
                                                <span class="badge bg-danger">
                                                    <i class="fas fa-times me-1"></i>Inacessível
                                                </span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $data['last_checked']; ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instruções do Search Console -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card monitor-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-cog me-2"></i>
                            Configuração do Google Search Console
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-success">✅ Passos para Configurar:</h6>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item">Acesse <a href="https://search.google.com/search-console" target="_blank">Google Search Console</a></li>
                                    <li class="list-group-item">Adicione sua propriedade: <code><?php echo $seo_report['site_url']; ?></code></li>
                                    <li class="list-group-item">Escolha "Tag HTML" para verificação</li>
                                    <li class="list-group-item">Copie o código de verificação</li>
                                    <li class="list-group-item">Cole no arquivo <code>includes/search-console-config.php</code></li>
                                </ol>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-info">📊 Monitoramento Disponível:</h6>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <i class="fas fa-sitemap text-primary me-2"></i>
                                        Status de Indexação
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-exclamation-triangle text-warning me-2"></i>
                                        Erros de Rastreamento
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-mobile-alt text-success me-2"></i>
                                        Usabilidade Mobile
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-tachometer-alt text-info me-2"></i>
                                        Core Web Vitals
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ações Rápidas -->
        <div class="row">
            <div class="col-12">
                <div class="card monitor-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-tools me-2"></i>
                            Ações Rápidas
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a href="<?php echo $site_config['base_url']; ?>/sitemap.xml" target="_blank" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-sitemap me-2"></i>
                                    Ver Sitemap
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="<?php echo $site_config['base_url']; ?>/robots.txt" target="_blank" class="btn btn-outline-secondary w-100">
                                    <i class="fas fa-robot me-2"></i>
                                    Ver Robots.txt
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="https://search.google.com/search-console" target="_blank" class="btn btn-outline-success w-100">
                                    <i class="fas fa-external-link-alt me-2"></i>
                                    Search Console
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <button onclick="location.reload()" class="btn btn-outline-info w-100">
                                    <i class="fas fa-sync-alt me-2"></i>
                                    Atualizar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
