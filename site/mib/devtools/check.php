<?php
/**
 * Check.php - Script de Verificação do Sistema PHP
 * 
 * Este script fornece informações detalhadas sobre:
 * - Configurações do PHP
 * - Extensões instaladas
 * - Status do servidor
 * - Informações do sistema
 * - Verificações de segurança básicas
 */

// Configurações de exibição
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Função para formatar saída HTML
function formatOutput($title, $content, $type = 'info') {
    $colors = [
        'info' => '#e3f2fd',
        'success' => '#e8f5e8',
        'warning' => '#fff3cd',
        'error' => '#f8d7da'
    ];
    
    $color = $colors[$type] ?? $colors['info'];
    
    echo "<div style='margin: 10px 0; padding: 15px; background-color: {$color}; border-radius: 5px; border-left: 4px solid #007bff;'>";
    echo "<h3 style='margin: 0 0 10px 0; color: #333;'>{$title}</h3>";
    echo "<div style='color: #555;'>{$content}</div>";
    echo "</div>";
}

// Função para verificar extensões PHP
function checkExtensions() {
    $extensions = [
        'curl' => 'Necessário para requisições HTTP',
        'mysqli' => 'Conexão com MySQL',
        'pdo' => 'Interface de banco de dados',
        'gd' => 'Manipulação de imagens',
        'json' => 'Processamento JSON',
        'mbstring' => 'Strings multibyte',
        'openssl' => 'Criptografia e SSL',
        'zip' => 'Manipulação de arquivos ZIP',
        'xml' => 'Processamento XML',
        'session' => 'Gerenciamento de sessões'
    ];
    
    $result = "<table style='width: 100%; border-collapse: collapse;'>";
    $result .= "<tr style='background-color: #f8f9fa;'><th style='padding: 8px; border: 1px solid #ddd;'>Extensão</th><th style='padding: 8px; border: 1px solid #ddd;'>Status</th><th style='padding: 8px; border: 1px solid #ddd;'>Descrição</th></tr>";
    
    foreach ($extensions as $ext => $desc) {
        $status = extension_loaded($ext) ? 
            "<span style='color: green; font-weight: bold;'>✓ Instalada</span>" : 
            "<span style='color: red; font-weight: bold;'>✗ Não instalada</span>";
        
        $result .= "<tr>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd;'>{$ext}</td>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd;'>{$status}</td>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd;'>{$desc}</td>";
        $result .= "</tr>";
    }
    
    $result .= "</table>";
    return $result;
}

// Função para verificar configurações importantes
function checkConfiguration() {
    $configs = [
        'PHP Version' => PHP_VERSION,
        'Server API' => php_sapi_name(),
        'Memory Limit' => ini_get('memory_limit'),
        'Max Execution Time' => ini_get('max_execution_time') . ' segundos',
        'Upload Max Filesize' => ini_get('upload_max_filesize'),
        'Post Max Size' => ini_get('post_max_size'),
        'Display Errors' => ini_get('display_errors') ? 'Habilitado' : 'Desabilitado',
        'Error Reporting' => error_reporting(),
        'Default Timezone' => date_default_timezone_get(),
        'Session Save Path' => session_save_path() ?: 'Padrão do sistema'
    ];
    
    $result = "<table style='width: 100%; border-collapse: collapse;'>";
    $result .= "<tr style='background-color: #f8f9fa;'><th style='padding: 8px; border: 1px solid #ddd;'>Configuração</th><th style='padding: 8px; border: 1px solid #ddd;'>Valor</th></tr>";
    
    foreach ($configs as $config => $value) {
        $result .= "<tr>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>{$config}</td>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd;'>{$value}</td>";
        $result .= "</tr>";
    }
    
    $result .= "</table>";
    return $result;
}

// Função para verificar informações do servidor
function checkServerInfo() {
    $info = [
        'Sistema Operacional' => PHP_OS,
        'Servidor Web' => $_SERVER['SERVER_SOFTWARE'] ?? 'Não disponível',
        'Document Root' => $_SERVER['DOCUMENT_ROOT'] ?? 'Não disponível',
        'Server Name' => $_SERVER['SERVER_NAME'] ?? 'Não disponível',
        'Server Port' => $_SERVER['SERVER_PORT'] ?? 'Não disponível',
        'HTTPS' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'Habilitado' : 'Desabilitado',
        'User Agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Não disponível',
        'Remote Address' => $_SERVER['REMOTE_ADDR'] ?? 'Não disponível'
    ];
    
    $result = "<table style='width: 100%; border-collapse: collapse;'>";
    $result .= "<tr style='background-color: #f8f9fa;'><th style='padding: 8px; border: 1px solid #ddd;'>Informação</th><th style='padding: 8px; border: 1px solid #ddd;'>Valor</th></tr>";
    
    foreach ($info as $key => $value) {
        $result .= "<tr>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>{$key}</td>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd;'>{$value}</td>";
        $result .= "</tr>";
    }
    
    $result .= "</table>";
    return $result;
}

// Função para verificar permissões de diretórios
function checkPermissions() {
    $directories = [
        __DIR__ => 'Diretório atual',
        sys_get_temp_dir() => 'Diretório temporário',
        session_save_path() ?: sys_get_temp_dir() => 'Diretório de sessões'
    ];
    
    $result = "<table style='width: 100%; border-collapse: collapse;'>";
    $result .= "<tr style='background-color: #f8f9fa;'><th style='padding: 8px; border: 1px solid #ddd;'>Diretório</th><th style='padding: 8px; border: 1px solid #ddd;'>Caminho</th><th style='padding: 8px; border: 1px solid #ddd;'>Permissões</th></tr>";
    
    foreach ($directories as $dir => $desc) {
        if (is_dir($dir)) {
            $readable = is_readable($dir) ? '✓' : '✗';
            $writable = is_writable($dir) ? '✓' : '✗';
            $permissions = "Leitura: {$readable} | Escrita: {$writable}";
            $color = (is_readable($dir) && is_writable($dir)) ? 'green' : 'red';
        } else {
            $permissions = 'Diretório não existe';
            $color = 'red';
        }
        
        $result .= "<tr>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>{$desc}</td>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd;'>{$dir}</td>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd; color: {$color};'>{$permissions}</td>";
        $result .= "</tr>";
    }
    
    $result .= "</table>";
    return $result;
}

// Função para teste de conectividade
function testConnectivity() {
    $tests = [];
    
    // Teste de DNS
    $dns_test = gethostbyname('google.com');
    $tests['DNS Resolution'] = ($dns_test !== 'google.com') ? 
        "<span style='color: green;'>✓ Funcionando ({$dns_test})</span>" : 
        "<span style='color: red;'>✗ Falhou</span>";
    
    // Teste de cURL (se disponível)
    if (extension_loaded('curl')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://httpbin.org/get');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        $result = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        $tests['HTTP Request (cURL)'] = ($http_code === 200) ? 
            "<span style='color: green;'>✓ Funcionando (HTTP {$http_code})</span>" : 
            "<span style='color: red;'>✗ Falhou (HTTP {$http_code})</span>";
    } else {
        $tests['HTTP Request (cURL)'] = "<span style='color: orange;'>⚠ cURL não disponível</span>";
    }
    
    $result = "<table style='width: 100%; border-collapse: collapse;'>";
    $result .= "<tr style='background-color: #f8f9fa;'><th style='padding: 8px; border: 1px solid #ddd;'>Teste</th><th style='padding: 8px; border: 1px solid #ddd;'>Resultado</th></tr>";
    
    foreach ($tests as $test => $status) {
        $result .= "<tr>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd; font-weight: bold;'>{$test}</td>";
        $result .= "<td style='padding: 8px; border: 1px solid #ddd;'>{$status}</td>";
        $result .= "</tr>";
    }
    
    $result .= "</table>";
    return $result;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check PHP - Verificação do Sistema</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        .timestamp {
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 30px;
            font-style: italic;
        }
        table {
            font-size: 14px;
        }
        th {
            background-color: #34495e !important;
            color: white !important;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ecf0f1;
            color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 Check PHP - Verificação do Sistema</h1>
        <div class="timestamp">
            Executado em: <?php echo date('d/m/Y H:i:s'); ?>
        </div>

        <?php
        // Exibir todas as verificações
        formatOutput('📋 Configurações do PHP', checkConfiguration());
        formatOutput('🔧 Extensões PHP', checkExtensions());
        formatOutput('🖥️ Informações do Servidor', checkServerInfo());
        formatOutput('📁 Permissões de Diretórios', checkPermissions());
        formatOutput('🌐 Testes de Conectividade', testConnectivity());
        
        // Verificação adicional de segurança
        $security_issues = [];
        
        if (ini_get('display_errors')) {
            $security_issues[] = 'Display errors está habilitado (não recomendado em produção)';
        }
        
        if (ini_get('expose_php')) {
            $security_issues[] = 'Expose PHP está habilitado (revela versão do PHP)';
        }
        
        if (!ini_get('session.cookie_httponly')) {
            $security_issues[] = 'Session cookies não estão configurados como HTTP-only';
        }
        
        if (empty($security_issues)) {
            formatOutput('🔒 Verificações de Segurança', '<p style="color: green; font-weight: bold;">✓ Nenhum problema de segurança detectado!</p>', 'success');
        } else {
            $issues_list = '<ul>';
            foreach ($security_issues as $issue) {
                $issues_list .= "<li style='color: #d32f2f; margin: 5px 0;'>⚠ {$issue}</li>";
            }
            $issues_list .= '</ul>';
            formatOutput('🔒 Verificações de Segurança', $issues_list, 'warning');
        }
        ?>

        <div class="footer">
            <p><strong>Check PHP v1.0</strong> - Script de verificação do sistema PHP</p>
            <p>Para mais informações detalhadas, execute <code>phpinfo()</code></p>
        </div>
    </div>
</body>
</html>

