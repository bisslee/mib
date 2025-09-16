<?php
/**
 * Configurações do Google Search Console
 * Sistema para monitoramento de indexação e erros
 */

// Configurações do Google Search Console
$search_console_config = [
    // ID do site no Search Console (será preenchido quando o site for verificado)
    'site_id' => '', // Exemplo: 'https://mangueirasdeincendiobrasil.com.br/'
    
    // Meta tag de verificação (será gerada pelo Search Console)
    'verification_code' => '', // Exemplo: 'abc123def456ghi789'
    
    // Configurações de monitoramento
    'monitoring' => [
        'check_indexing' => true,
        'check_errors' => true,
        'check_sitemap' => true,
        'check_mobile_usability' => true,
        'check_core_web_vitals' => true
    ],
    
    // URLs importantes para monitorar
    'important_urls' => [
        'home' => '/',
        'contact' => '/contact.php',
        'equipamentos' => '/equipamentos/',
        'mangueiras' => '/equipamentos/mangueiras-de-incendio.php',
        'extintores' => '/equipamentos/extintores-de-incendio.php',
        'hidrantes' => '/equipamentos/hidrante-contra-incendio.php',
        'esguichos' => '/equipamentos/esguichos-para-equipamentos-contra-incendio.php'
    ],
    
    // Palavras-chave importantes para monitorar
    'keywords_to_monitor' => [
        'mangueira de incêndio',
        'extintor de incêndio',
        'equipamentos contra incêndio',
        'hidrante contra incêndio',
        'mangueiras de incêndio brasil',
        'mib equipamentos',
        'sistema de combate a incêndio',
        'equipamentos de segurança',
        'abnt certificado'
    ]
];

// Função para gerar meta tag de verificação
function generate_verification_meta($verification_code) {
    if (!empty($verification_code)) {
        return '<meta name="google-site-verification" content="' . htmlspecialchars($verification_code) . '">';
    }
    return '';
}

// Função para gerar relatório de status do site
function generate_site_status_report() {
    global $site_config;
    
    $report = [
        'timestamp' => date('Y-m-d H:i:s'),
        'site_url' => $site_config['base_url'],
        'sitemap_url' => $site_config['base_url'] . '/sitemap.xml',
        'robots_txt_url' => $site_config['base_url'] . '/robots.txt',
        'status' => 'active'
    ];
    
    // Verificar se arquivos importantes existem
    $important_files = [
        'sitemap.xml.php' => __DIR__ . '/../sitemap.xml.php',
        'robots.txt' => __DIR__ . '/../robots.txt',
        'index.php' => __DIR__ . '/../index.php'
    ];
    
    foreach ($important_files as $file => $path) {
        $report['files'][$file] = file_exists($path) ? 'exists' : 'missing';
    }
    
    return $report;
}

// Função para verificar URLs importantes
function check_important_urls() {
    global $search_console_config, $site_config;
    
    $results = [];
    
    foreach ($search_console_config['important_urls'] as $name => $url) {
        $full_url = $site_config['base_url'] . $url;
        
        // Simular verificação (em produção, usaria API do Search Console)
        $results[$name] = [
            'url' => $full_url,
            'status' => 'active', // Seria verificado via API
            'last_checked' => date('Y-m-d H:i:s')
        ];
    }
    
    return $results;
}

// Função para gerar dados estruturados para Search Console
function generate_search_console_data() {
    global $site_config;
    
    return [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'MIB - Mangueiras de Incêndio Brasil',
        'url' => $site_config['base_url'],
        'description' => 'Especialistas em mangueiras de incêndio, extintores e equipamentos de segurança certificados ABNT para todo o Brasil.',
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'MIB - Mangueiras de Incêndio Brasil',
            'url' => $site_config['base_url']
        ],
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => $site_config['base_url'] . '/search?q={search_term_string}',
            'query-input' => 'required name=search_term_string'
        ]
    ];
}
?>
