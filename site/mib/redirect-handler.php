<?php
/**
 * MIB - Mangueiras de Incêndio Brasil
 * Sistema de Redirecionamento Inteligente
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Função para verificar se uma página existe
function pageExists($path) {
    return file_exists($path) && is_file($path);
}

// Função para obter a URL solicitada
function getRequestedUrl() {
    $request_uri = $_SERVER['REQUEST_URI'];
    
    // Remove query string
    $request_uri = strtok($request_uri, '?');
    
    // Remove barras do início e fim
    $request_uri = trim($request_uri, '/');
    
    return $request_uri;
}

// Função para redirecionar para página 404
function redirectTo404() {
    http_response_code(404);
    include '404.php';
    exit;
}

// Função para redirecionar com código 301
function redirect301($url) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $url);
    exit;
}

// Mapeamento de URLs antigas para novas (apenas casos especiais)
$redirect_map = [
    // Página de contato antiga
    'contato.php' => 'contact.php',
];

// Obter URL solicitada
$requested_url = getRequestedUrl();

// Verificar se é uma página PHP
if (preg_match('/\.php$/', $requested_url)) {
    
    // Verificar se existe mapeamento específico (casos especiais)
    if (isset($redirect_map[$requested_url])) {
        $target_url = $redirect_map[$requested_url];
        
        // Verificar se a página de destino existe
        if (pageExists($target_url)) {
            redirect301($target_url);
        } else {
            // Se não existe, mostrar 404
            redirectTo404();
        }
    } else {
        // Verificar se existe na pasta old-pages (caso padrão)
        $old_page_path = 'old-pages/' . $requested_url;
        if (pageExists($old_page_path)) {
            redirect301($old_page_path);
        } else {
            // Se não existe em lugar nenhum, mostrar 404
            redirectTo404();
        }
    }
} else {
    // Se não é uma página PHP, mostrar 404
    redirectTo404();
}
?>
