<?php
/**
 * Check API - Versão JSON para APIs
 * Retorna informações do sistema em formato JSON
 */

// Configurar cabeçalho JSON
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

// Função para verificar extensões
function getExtensionsStatus() {
    $extensions = [
        'curl', 'mysqli', 'pdo', 'gd', 'json', 'mbstring', 
        'openssl', 'zip', 'xml', 'session', 'redis', 'memcached'
    ];
    
    $status = [];
    foreach ($extensions as $ext) {
        $status[$ext] = extension_loaded($ext);
    }
    
    return $status;
}

// Função para verificar configurações
function getConfiguration() {
    return [
        'php_version' => PHP_VERSION,
        'php_sapi' => php_sapi_name(),
        'memory_limit' => ini_get('memory_limit'),
        'max_execution_time' => (int)ini_get('max_execution_time'),
        'upload_max_filesize' => ini_get('upload_max_filesize'),
        'post_max_size' => ini_get('post_max_size'),
        'display_errors' => (bool)ini_get('display_errors'),
        'error_reporting' => error_reporting(),
        'default_timezone' => date_default_timezone_get(),
        'session_save_path' => session_save_path() ?: sys_get_temp_dir()
    ];
}

// Função para informações do servidor
function getServerInfo() {
    return [
        'os' => PHP_OS,
        'server_software' => $_SERVER['SERVER_SOFTWARE'] ?? null,
        'document_root' => $_SERVER['DOCUMENT_ROOT'] ?? null,
        'server_name' => $_SERVER['SERVER_NAME'] ?? null,
        'server_port' => $_SERVER['SERVER_PORT'] ?? null,
        'https' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'),
        'remote_addr' => $_SERVER['REMOTE_ADDR'] ?? null,
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null
    ];
}

// Função para testes de conectividade
function getConnectivityTests() {
    $tests = [];
    
    // Teste DNS
    $dns_test = gethostbyname('google.com');
    $tests['dns'] = [
        'status' => ($dns_test !== 'google.com'),
        'resolved_ip' => $dns_test !== 'google.com' ? $dns_test : null
    ];
    
    // Teste cURL
    if (extension_loaded('curl')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://httpbin.org/get');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        $result = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        
        $tests['http_request'] = [
            'status' => ($http_code === 200),
            'http_code' => $http_code,
            'error' => $error ?: null
        ];
    } else {
        $tests['http_request'] = [
            'status' => false,
            'error' => 'cURL extension not available'
        ];
    }
    
    return $tests;
}

// Função para verificar permissões
function getPermissions() {
    $directories = [
        'current' => __DIR__,
        'temp' => sys_get_temp_dir(),
        'session' => session_save_path() ?: sys_get_temp_dir()
    ];
    
    $permissions = [];
    foreach ($directories as $key => $dir) {
        $permissions[$key] = [
            'path' => $dir,
            'exists' => is_dir($dir),
            'readable' => is_readable($dir),
            'writable' => is_writable($dir)
        ];
    }
    
    return $permissions;
}

// Função para verificações de segurança
function getSecurityChecks() {
    return [
        'display_errors' => [
            'enabled' => (bool)ini_get('display_errors'),
            'recommendation' => 'Should be disabled in production'
        ],
        'expose_php' => [
            'enabled' => (bool)ini_get('expose_php'),
            'recommendation' => 'Should be disabled to hide PHP version'
        ],
        'session_cookie_httponly' => [
            'enabled' => (bool)ini_get('session.cookie_httponly'),
            'recommendation' => 'Should be enabled for security'
        ],
        'session_cookie_secure' => [
            'enabled' => (bool)ini_get('session.cookie_secure'),
            'recommendation' => 'Should be enabled when using HTTPS'
        ]
    ];
}

// Montar resposta completa
try {
    $response = [
        'status' => 'success',
        'timestamp' => date('c'),
        'data' => [
            'configuration' => getConfiguration(),
            'extensions' => getExtensionsStatus(),
            'server_info' => getServerInfo(),
            'connectivity' => getConnectivityTests(),
            'permissions' => getPermissions(),
            'security_checks' => getSecurityChecks()
        ]
    ];
    
    // Adicionar informações de performance
    $response['data']['performance'] = [
        'memory_usage' => memory_get_usage(true),
        'memory_peak' => memory_get_peak_usage(true),
        'execution_time' => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']
    ];
    
} catch (Exception $e) {
    $response = [
        'status' => 'error',
        'timestamp' => date('c'),
        'error' => [
            'message' => $e->getMessage(),
            'code' => $e->getCode()
        ]
    ];
}

// Retornar JSON
echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>

