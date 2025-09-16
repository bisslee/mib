<?php
/**
 * Guia Interativo para Configuração do Google Search Console
 * Este arquivo fornece instruções passo a passo para configurar a verificação
 */

// Incluir configurações
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/search-console-config.php';

// Simular código de verificação (será substituído pelo real)
$sample_verification_code = 'abc123def456ghi789jkl012mno345pqr678stu901vwx234yz567';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuração Google Search Console - MIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .step-card { border-left: 4px solid #28a745; margin-bottom: 20px; }
        .step-number { background: #28a745; color: white; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; font-weight: bold; }
        .code-block { background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 5px; padding: 15px; font-family: monospace; }
        .highlight { background: #fff3cd; padding: 10px; border-radius: 5px; border-left: 4px solid #ffc107; }
        .success { color: #28a745; }
        .warning { color: #ffc107; }
        .info { color: #17a2b8; }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="h2 text-dark">
                        <i class="fab fa-google text-success me-2"></i>
                        Configuração Google Search Console
                    </h1>
                    <div class="text-muted">
                        <small>Site: <?php echo $site_config['base_url']; ?></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Status Atual -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Status Atual da Configuração
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-muted">Configuração do Site</h6>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check-circle text-success me-2"></i> Site URL: <strong><?php echo $site_config['base_url']; ?></strong></li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i> Sitemap: <strong><?php echo $site_config['base_url']; ?>/sitemap.xml</strong></li>
                                    <li><i class="fas fa-check-circle text-success me-2"></i> Robots.txt: <strong><?php echo $site_config['base_url']; ?>/robots.txt</strong></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-muted">Status da Verificação</h6>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-times-circle text-danger me-2"></i> Código de verificação: <strong>Não configurado</strong></li>
                                    <li><i class="fas fa-times-circle text-danger me-2"></i> Meta tag: <strong>Não adicionada</strong></li>
                                    <li><i class="fas fa-exclamation-triangle text-warning me-2"></i> Status: <strong>Aguardando configuração</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passo 1: Acessar Google Search Console -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="step-number me-3">1</div>
                            <div class="flex-grow-1">
                                <h5 class="card-title">Acessar o Google Search Console</h5>
                                <p class="card-text">Primeiro, você precisa acessar a plataforma do Google Search Console.</p>
                                
                                <div class="highlight mb-3">
                                    <strong><i class="fas fa-external-link-alt me-2"></i>Ação:</strong>
                                    <a href="https://search.google.com/search-console" target="_blank" class="btn btn-primary ms-2">
                                        <i class="fab fa-google me-2"></i>
                                        Abrir Google Search Console
                                    </a>
                                </div>
                                
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Faça login com sua conta Google
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-check-circle text-success me-2"></i>
                                        Se não tiver conta, crie uma gratuitamente
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-info-circle text-info me-2"></i>
                                        Use a mesma conta do Google Analytics (se tiver)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passo 2: Adicionar Propriedade -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="step-number me-3">2</div>
                            <div class="flex-grow-1">
                                <h5 class="card-title">Adicionar Nova Propriedade</h5>
                                <p class="card-text">Adicione seu site como uma nova propriedade no Search Console.</p>
                                
                                <div class="highlight mb-3">
                                    <strong><i class="fas fa-mouse-pointer me-2"></i>Ações no Search Console:</strong>
                                    <ol>
                                        <li>Clique em <strong>"Adicionar propriedade"</strong></li>
                                        <li>Selecione <strong>"Prefixo de URL"</strong></li>
                                        <li>Digite exatamente: <code class="text-primary"><?php echo $site_config['base_url']; ?>/</code></li>
                                        <li>Clique em <strong>"Continuar"</strong></li>
                                    </ol>
                                </div>
                                
                                <div class="alert alert-warning">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <strong>Importante:</strong> Use exatamente a URL com "https://" e a barra final "/"
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passo 3: Verificação -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="step-number me-3">3</div>
                            <div class="flex-grow-1">
                                <h5 class="card-title">Escolher Método de Verificação</h5>
                                <p class="card-text">Escolha o método "Tag HTML" para verificação mais simples.</p>
                                
                                <div class="highlight mb-3">
                                    <strong><i class="fas fa-mouse-pointer me-2"></i>No Search Console:</strong>
                                    <ol>
                                        <li>Selecione <strong>"Tag HTML"</strong> na lista de métodos</li>
                                        <li>Copie o código de verificação que aparece</li>
                                        <li><strong>NÃO</strong> clique em "Verificar" ainda!</li>
                                    </ol>
                                </div>
                                
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i>
                                    O código será algo como: <code><?php echo $sample_verification_code; ?></code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passo 4: Adicionar Código -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="step-number me-3">4</div>
                            <div class="flex-grow-1">
                                <h5 class="card-title">Adicionar Código de Verificação</h5>
                                <p class="card-text">Adicione o código de verificação ao arquivo de configuração.</p>
                                
                                <div class="highlight mb-3">
                                    <strong><i class="fas fa-file-code me-2"></i>Editar arquivo:</strong>
                                    <code>includes/search-console-config.php</code>
                                </div>
                                
                                <div class="code-block mb-3">
                                    <div class="text-muted mb-2">Localize esta linha (linha 13):</div>
                                    <code>'verification_code' => '', // Exemplo: 'abc123def456ghi789'</code>
                                    
                                    <div class="text-muted mb-2 mt-3">Substitua por:</div>
                                    <code>'verification_code' => '<span class="text-success">SEU_CODIGO_AQUI</span>',</code>
                                </div>
                                
                                <div class="alert alert-success">
                                    <i class="fas fa-lightbulb me-2"></i>
                                    <strong>Exemplo:</strong> Se seu código for "xyz789abc123", a linha ficará:<br>
                                    <code>'verification_code' => 'xyz789abc123',</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passo 5: Verificar -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="step-number me-3">5</div>
                            <div class="flex-grow-1">
                                <h5 class="card-title">Verificar Propriedade</h5>
                                <p class="card-text">Volte ao Search Console e clique em "Verificar".</p>
                                
                                <div class="highlight mb-3">
                                    <strong><i class="fas fa-mouse-pointer me-2"></i>No Search Console:</strong>
                                    <ol>
                                        <li>Volte à tela de verificação</li>
                                        <li>Clique em <strong>"Verificar"</strong></li>
                                        <li>Aguarde a confirmação de sucesso</li>
                                    </ol>
                                </div>
                                
                                <div class="alert alert-success">
                                    <i class="fas fa-check-circle me-2"></i>
                                    Se tudo estiver correto, você verá: <strong>"Propriedade verificada com sucesso!"</strong>
                                </div>
                                
                                <div class="alert alert-danger">
                                    <i class="fas fa-times-circle me-2"></i>
                                    Se der erro, verifique se:
                                    <ul class="mb-0">
                                        <li>O código foi adicionado corretamente</li>
                                        <li>O arquivo foi salvo</li>
                                        <li>O site está acessível</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Passo 6: Enviar Sitemap -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="step-number me-3">6</div>
                            <div class="flex-grow-1">
                                <h5 class="card-title">Enviar Sitemap</h5>
                                <p class="card-text">Envie o sitemap para acelerar a indexação das páginas.</p>
                                
                                <div class="highlight mb-3">
                                    <strong><i class="fas fa-mouse-pointer me-2"></i>No Search Console:</strong>
                                    <ol>
                                        <li>Vá para <strong>"Sitemaps"</strong> no menu lateral</li>
                                        <li>Digite: <code>sitemap.xml</code></li>
                                        <li>Clique em <strong>"Enviar"</strong></li>
                                    </ol>
                                </div>
                                
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i>
                                    URL completa do sitemap: <code><?php echo $site_config['base_url']; ?>/sitemap.xml</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Verificação Final -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card step-card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-check-circle me-2"></i>
                            Verificação Final
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-success">✅ Checklist de Configuração:</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <input type="checkbox" class="form-check-input me-2" id="check1">
                                        <label for="check1">Conta Google Search Console criada</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" class="form-check-input me-2" id="check2">
                                        <label for="check2">Propriedade adicionada</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" class="form-check-input me-2" id="check3">
                                        <label for="check3">Código de verificação adicionado</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" class="form-check-input me-2" id="check4">
                                        <label for="check4">Propriedade verificada</label>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" class="form-check-input me-2" id="check5">
                                        <label for="check5">Sitemap enviado</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6 class="text-info">📊 Próximos Passos:</h6>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="fas fa-chart-line text-primary me-2"></i>
                                        Monitorar indexação (24-48h)
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-search text-success me-2"></i>
                                        Verificar relatórios de performance
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-mobile-alt text-warning me-2"></i>
                                        Analisar usabilidade mobile
                                    </li>
                                    <li class="list-group-item">
                                        <i class="fas fa-tachometer-alt text-info me-2"></i>
                                        Acompanhar Core Web Vitals
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Links Úteis -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">
                            <i class="fas fa-link me-2"></i>
                            Links Úteis
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="https://search.google.com/search-console" target="_blank" class="btn btn-outline-primary w-100">
                                    <i class="fab fa-google me-2"></i>
                                    Google Search Console
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="<?php echo $site_config['base_url']; ?>/sitemap.xml" target="_blank" class="btn btn-outline-success w-100">
                                    <i class="fas fa-sitemap me-2"></i>
                                    Ver Sitemap
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="<?php echo $site_config['base_url']; ?>/devtools/search-console-monitor.php" target="_blank" class="btn btn-outline-info w-100">
                                    <i class="fas fa-tools me-2"></i>
                                    Monitor MIB
                                </a>
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
