<?php
/**
 * Teste da Configuração do Google Search Console
 * Verifica se a configuração está correta
 */

// Incluir configurações
require_once __DIR__ . '/../includes/config.php';

// Verificar se o arquivo de configuração existe
$config_file = __DIR__ . '/../includes/search-console-config.php';
$config_exists = file_exists($config_file);

// Verificar se o arquivo de exemplo existe
$example_file = __DIR__ . '/../includes/search-console-config-example.php';
$example_exists = file_exists($example_file);

// Se o arquivo de configuração não existir, usar o exemplo
if (!$config_exists && $example_exists) {
    $config_file = $example_file;
}

// Incluir configurações do Search Console
if (file_exists($config_file)) {
    include_once $config_file;
} else {
    $search_console_config = [
        'site_id' => '',
        'verification_code' => '',
        'monitoring' => [],
        'important_urls' => [],
        'keywords_to_monitor' => []
    ];
}

// Função para verificar status da configuração
function check_config_status() {
    global $search_console_config, $site_config;
    
    $status = [
        'config_file_exists' => file_exists(__DIR__ . '/../includes/search-console-config.php'),
        'verification_code_set' => !empty($search_console_config['verification_code']) && $search_console_config['verification_code'] !== 'SEU_CODIGO_AQUI',
        'site_id_set' => !empty($search_console_config['site_id']),
        'meta_tag_generated' => false,
        'schema_generated' => false
    ];
    
    // Verificar se a meta tag pode ser gerada
    if (function_exists('generate_verification_meta')) {
        $meta_tag = generate_verification_meta($search_console_config['verification_code']);
        $status['meta_tag_generated'] = !empty($meta_tag);
    }
    
    // Verificar se o schema pode ser gerado
    if (function_exists('generate_search_console_data')) {
        $schema = generate_search_console_data();
        $status['schema_generated'] = !empty($schema);
    }
    
    return $status;
}

// Executar verificação
$config_status = check_config_status();
$overall_status = $config_status['config_file_exists'] && $config_status['verification_code_set'] && $config_status['site_id_set'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Configuração Search Console - MIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .status-ok { color: #28a745; }
        .status-error { color: #dc3545; }
        .status-warning { color: #ffc107; }
        .test-card { border-left: 4px solid #17a2b8; margin-bottom: 20px; }
        .config-details { background: #f8f9fa; border-radius: 5px; padding: 15px; }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h2 text-dark">
                        <i class="fas fa-cog text-info me-2"></i>
                        Teste da Configuração Search Console
                    </h1>
                    <div class="text-muted">
                        <small>Site: <?php echo $site_config['base_url']; ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Geral -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card test-card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-chart-line me-2"></i>
                            Status Geral da Configuração
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="mb-3">
                                    <?php if ($overall_status): ?>
                                        <i class="fas fa-check-circle status-ok me-2"></i>
                                        Configuração <strong class="status-ok">OK</strong>
                                    <?php else: ?>
                                        <i class="fas fa-exclamation-triangle status-warning me-2"></i>
                                        Configuração <strong class="status-warning">Incompleta</strong>
                                    <?php endif; ?>
                                </h4>
                                <p class="mb-0">
                                    <?php if ($overall_status): ?>
                                        A configuração do Google Search Console está pronta para uso.
                                    <?php else: ?>
                                        Alguns itens ainda precisam ser configurados.
                                    <?php endif; ?>
                                </p>
                            </div>
                            <div class="col-md-4 text-end">
                                <?php if ($overall_status): ?>
                                    <span class="badge bg-success fs-6">100% Configurado</span>
                                <?php else: ?>
                                    <span class="badge bg-warning fs-6">Configuração Pendente</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detalhes da Configuração -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card test-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-list me-2"></i>
                            Detalhes da Configuração
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-muted">Verificações Técnicas</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Arquivo de configuração
                                        <?php if ($config_status['config_file_exists']): ?>
                                            <i class="fas fa-check-circle status-ok"></i>
                                        <?php else: ?>
                                            <i class="fas fa-times-circle status-error"></i>
                                        <?php endif; ?>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Código de verificação
                                        <?php if ($config_status['verification_code_set']): ?>
                                            <i class="fas fa-check-circle status-ok"></i>
                                        <?php else: ?>
                                            <i class="fas fa-times-circle status-error"></i>
                                        <?php endif; ?>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Site ID configurado
                                        <?php if ($config_status['site_id_set']): ?>
                                            <i class="fas fa-check-circle status-ok"></i>
                                        <?php else: ?>
                                            <i class="fas fa-times-circle status-error"></i>
                                        <?php endif; ?>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Meta tag gerada
                                        <?php if ($config_status['meta_tag_generated']): ?>
                                            <i class="fas fa-check-circle status-ok"></i>
                                        <?php else: ?>
                                            <i class="fas fa-times-circle status-error"></i>
                                        <?php endif; ?>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Schema gerado
                                        <?php if ($config_status['schema_generated']): ?>
                                            <i class="fas fa-check-circle status-ok"></i>
                                        <?php else: ?>
                                            <i class="fas fa-times-circle status-error"></i>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Configuração Atual</h6>
                                <div class="config-details">
                                    <div class="mb-2">
                                        <strong>Site ID:</strong>
                                        <code><?php echo !empty($search_console_config['site_id']) ? $search_console_config['site_id'] : 'Não configurado'; ?></code>
                                    </div>
                                    <div class="mb-2">
                                        <strong>Código de Verificação:</strong>
                                        <code><?php echo !empty($search_console_config['verification_code']) ? $search_console_config['verification_code'] : 'Não configurado'; ?></code>
                                    </div>
                                    <div class="mb-2">
                                        <strong>URLs Monitoradas:</strong>
                                        <span class="badge bg-info"><?php echo count($search_console_config['important_urls']); ?> URLs</span>
                                    </div>
                                    <div class="mb-2">
                                        <strong>Palavras-chave:</strong>
                                        <span class="badge bg-info"><?php echo count($search_console_config['keywords_to_monitor']); ?> keywords</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Próximos Passos -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card test-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-arrow-right me-2"></i>
                            Próximos Passos
                        </h5>
                    </div>
                    <div class="card-body">
                        <?php if (!$overall_status): ?>
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Configuração Incompleta</strong>
                                <p class="mb-0">Siga os passos abaixo para completar a configuração:</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-warning">Ações Necessárias:</h6>
                                    <ul class="list-group list-group-flush">
                                        <?php if (!$config_status['config_file_exists']): ?>
                                            <li class="list-group-item">
                                                <i class="fas fa-file-plus text-primary me-2"></i>
                                                Criar arquivo de configuração
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!$config_status['verification_code_set']): ?>
                                            <li class="list-group-item">
                                                <i class="fas fa-key text-warning me-2"></i>
                                                Adicionar código de verificação
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!$config_status['site_id_set']): ?>
                                            <li class="list-group-item">
                                                <i class="fas fa-globe text-info me-2"></i>
                                                Configurar Site ID
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-success">Links Úteis:</h6>
                                    <div class="d-grid gap-2">
                                        <a href="google-search-console-setup.php" class="btn btn-outline-primary">
                                            <i class="fas fa-cog me-2"></i>
                                            Guia de Configuração
                                        </a>
                                        <a href="https://search.google.com/search-console" target="_blank" class="btn btn-outline-success">
                                            <i class="fab fa-google me-2"></i>
                                            Google Search Console
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                <strong>Configuração Completa!</strong>
                                <p class="mb-0">A configuração está pronta. Você pode agora:</p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-success">Ações Disponíveis:</h6>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <i class="fas fa-search text-primary me-2"></i>
                                            Verificar no Google Search Console
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-sitemap text-success me-2"></i>
                                            Enviar sitemap
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-chart-line text-info me-2"></i>
                                            Monitorar indexação
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-info">Ferramentas:</h6>
                                    <div class="d-grid gap-2">
                                        <a href="search-console-monitor.php" class="btn btn-outline-info">
                                            <i class="fas fa-tools me-2"></i>
                                            Painel de Monitoramento
                                        </a>
                                        <a href="https://search.google.com/search-console" target="_blank" class="btn btn-outline-success">
                                            <i class="fab fa-google me-2"></i>
                                            Abrir Search Console
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Teste da Meta Tag -->
        <?php if ($config_status['meta_tag_generated']): ?>
        <div class="row mb-4">
            <div class="col-12">
                <div class="card test-card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-code me-2"></i>
                            Teste da Meta Tag de Verificação
                        </h5>
                    </div>
                    <div class="card-body">
                        <h6 class="text-muted">Meta tag gerada:</h6>
                        <div class="config-details">
                            <code><?php echo htmlspecialchars(generate_verification_meta($search_console_config['verification_code'])); ?></code>
                        </div>
                        <div class="alert alert-info mt-3">
                            <i class="fas fa-info-circle me-2"></i>
                            Esta meta tag será automaticamente incluída no <code>&lt;head&gt;</code> de todas as páginas do site.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
