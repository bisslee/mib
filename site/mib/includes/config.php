<?php
/**
 * Configurações Comuns - MIB Site
 * Incluído em todas as páginas
 */

// Configurações básicas
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Detectar ambiente automaticamente
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];

// Configurar base_url baseado no ambiente
if (strpos($host, 'localhost') !== false) {
    // Ambiente LOCAL: http://localhost:8133/
    $base_url = $protocol . '://' . $host;
} elseif (strpos($host, 'mib.biss.com.br') !== false) {
    // Ambiente HOMOLOGAÇÃO: https://mib.biss.com.br/
    $base_url = $protocol . '://' . $host;
} elseif (strpos($host, 'mangueirasdeincendiobrasil.com.br') !== false) {
    // Ambiente PRODUÇÃO: https://mangueirasdeincendiobrasil.com.br/
    $base_url = $protocol . '://' . $host;
} else {
    // Fallback para produção (caso não detecte o ambiente)
    $base_url = 'https://mangueirasdeincendiobrasil.com.br';
}

// Configurações globais do site
$site_config = [
    'title' => 'MIB - Mangueiras de Incêndio Brasil | Equipamentos Contra Incêndio',
    'description' => 'Especialistas em mangueiras de incêndio, extintores e equipamentos de segurança. Qualidade certificada ABNT para condomínios, indústrias e residências.',
    'keywords' => 'mangueira de incêndio, extintor, equipamento contra incêndio, segurança, ABNT, São Paulo',
    'author' => 'MIB - Mangueiras de Incêndio Brasil',
    'canonical' => $base_url . '/',
    'base_url' => $base_url
];

// Função para sanitizar dados
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Função para mostrar notificação
function show_notification($message, $type = 'info') {
    $_SESSION['notification'] = [
        'message' => $message,
        'type' => $type
    ];
}

// Função para obter notificação e limpar
function get_notification() {
    if (isset($_SESSION['notification'])) {
        $notification = $_SESSION['notification'];
        unset($_SESSION['notification']);
        return $notification;
    }
    return null;
}
?>
