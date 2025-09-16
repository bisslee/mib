<?php
/**
 * Gerador Dinâmico de Sitemap.xml - MIB Site
 * 
 * Este arquivo gera automaticamente o sitemap.xml com todas as páginas do site
 * Inclui páginas estáticas, produtos, equipamentos e informações técnicas
 * 
 * @author Biss Solutions
 * @version 1.0
 * @since 2025
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurar headers para XML
header('Content-Type: application/xml; charset=utf-8');
header('Cache-Control: public, max-age=3600'); // Cache por 1 hora

// Configurações do sitemap
$sitemap_config = [
    'base_url' => $site_config['base_url'],
    'lastmod' => date('Y-m-d'),
    'changefreq' => [
        'home' => 'daily',
        'produtos' => 'weekly',
        'equipamentos' => 'weekly',
        'informacoes_tecnicas' => 'monthly',
        'static' => 'monthly'
    ],
    'priority' => [
        'home' => '1.0',
        'produtos' => '0.9',
        'equipamentos' => '0.9',
        'informacoes_tecnicas' => '0.8',
        'static' => '0.7'
    ]
];

// Definir todas as páginas do site
$pages = [
    // Páginas principais
    [
        'url' => '/',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['home'],
        'priority' => $sitemap_config['priority']['home']
    ],
    [
        'url' => '/empresa.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['static'],
        'priority' => $sitemap_config['priority']['static']
    ],
    [
        'url' => '/contact.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['static'],
        'priority' => $sitemap_config['priority']['static']
    ],
    [
        'url' => '/novidades/',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['static'],
        'priority' => $sitemap_config['priority']['static']
    ],
    [
        'url' => '/privacy.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => 'yearly',
        'priority' => '0.3'
    ],

    // Equipamentos
    [
        'url' => '/equipamentos/',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],
    [
        'url' => '/equipamentos/mangueiras-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],
    [
        'url' => '/equipamentos/extintores-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],
    [
        'url' => '/equipamentos/esguichos-para-equipamentos-contra-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],
    [
        'url' => '/equipamentos/canhao-monitor-de-combate-a-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],
    [
        'url' => '/equipamentos/derivante-para-mangueira-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],
    [
        'url' => '/equipamentos/sistema-aerossol-de-supressao-a-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],
    [
        'url' => '/equipamentos/hidrante-contra-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['equipamentos'],
        'priority' => $sitemap_config['priority']['equipamentos']
    ],

    // Produtos
    [
        'url' => '/produtos/',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/abrigos-para-equipamentos-contra-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/adaptador-para-mangueira-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/armario-para-mangueira-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/bico-para-mangueira-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/caixas-para-equipamentos-contra-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/conjunto-da-mangueira-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/gabinete-para-hidrante.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/liquido-gerador-de-espuma.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/material-de-combate-a-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/placas-de-sinalizacao.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],
    [
        'url' => '/produtos/valvulas.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['produtos'],
        'priority' => $sitemap_config['priority']['produtos']
    ],

    // Informações Técnicas
    [
        'url' => '/informacoes-tecnicas/',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/informacoes-tecnicas-mangueiras-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/inspecao-de-equipamentos-de-combate-a-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/luzes-de-emergencia-led.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/mangueira-de-incendio-para-condominio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/mangueiras-de-incendio-certificada.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/mangueiras-de-incendio-na-grande-sp.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/mangueiras-de-incendio-para-area-residencial.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ],
    [
        'url' => '/informacoes-tecnicas/validade-da-mangueira-de-incendio.php',
        'lastmod' => $sitemap_config['lastmod'],
        'changefreq' => $sitemap_config['changefreq']['informacoes_tecnicas'],
        'priority' => $sitemap_config['priority']['informacoes_tecnicas']
    ]
];

// Função para escapar XML
function escape_xml($string) {
    return htmlspecialchars($string, ENT_XML1, 'UTF-8');
}

// Iniciar XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Gerar URLs
foreach ($pages as $page) {
    $full_url = $sitemap_config['base_url'] . $page['url'];
    
    echo "  <url>\n";
    echo "    <loc>" . escape_xml($full_url) . "</loc>\n";
    echo "    <lastmod>" . escape_xml($page['lastmod']) . "</lastmod>\n";
    echo "    <changefreq>" . escape_xml($page['changefreq']) . "</changefreq>\n";
    echo "    <priority>" . escape_xml($page['priority']) . "</priority>\n";
    echo "  </url>\n";
}

// Fechar XML
echo '</urlset>' . "\n";
?>
