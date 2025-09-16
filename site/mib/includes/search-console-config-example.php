<?php
/**
 * EXEMPLO de Configuração do Google Search Console
 * 
 * INSTRUÇÕES:
 * 1. Copie este arquivo para: includes/search-console-config.php
 * 2. Substitua 'SEU_CODIGO_AQUI' pelo código real do Search Console
 * 3. Salve o arquivo
 * 4. Verifique no Google Search Console
 */

// Configurações do Google Search Console
$search_console_config = [
    // ID do site no Search Console
    'site_id' => 'https://mangueirasdeincendiobrasil.com.br/',
    
    // Meta tag de verificação - SUBSTITUA 'SEU_CODIGO_AQUI' pelo código real
    'verification_code' => 'SEU_CODIGO_AQUI', // ← Cole aqui o código do Search Console
    
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

// Função para gerar meta tag de verificação (verifica se já existe)
if (!function_exists('generate_verification_meta')) {
    function generate_verification_meta($verification_code) {
        if (!empty($verification_code) && $verification_code !== 'SEU_CODIGO_AQUI') {
            return '<meta name="google-site-verification" content="' . htmlspecialchars($verification_code) . '">';
        }
        return '';
    }
}

// Função para gerar relatório de status do site (verifica se já existe)
if (!function_exists('generate_site_status_report')) {
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
}

// Função para verificar URLs importantes (verifica se já existe)
if (!function_exists('check_important_urls')) {
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
}

// Função para gerar dados estruturados para Search Console (verifica se já existe)
if (!function_exists('generate_search_console_data')) {
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
}

/*
EXEMPLO DE CÓDIGO DE VERIFICAÇÃO:

Quando você acessar o Google Search Console, o código será algo como:
'verification_code' => 'abc123def456ghi789jkl012mno345pqr678stu901vwx234yz567',

Substitua 'SEU_CODIGO_AQUI' por esse código real.

APÓS CONFIGURAR:
1. Salve este arquivo como: includes/search-console-config.php
2. Volte ao Google Search Console
3. Clique em "Verificar"
4. Se der sucesso, envie o sitemap: sitemap.xml
*/
?>
