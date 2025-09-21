<?php
/**
 * ÍNDICE DE DADOS DAS PÁGINAS - SISTEMA MODULAR
 * 
 * Este arquivo gerencia os dados de todas as páginas de forma modular,
 * com arquivos separados para cada página.
 * 
 * @author Biss Solutions
 * @version 3.0 - Sistema Modular
 * @since 2025
 */

// Configuração do site
$site_config = [
    'base_url' => 'https://mangueirasdeincendiobrasil.com.br'
];

// Mapeamento das páginas para seus arquivos de dados
$pages_data_files = [
    'fabricante-de-mangueiras-de-incendio-em-sao-paulo.php' => 'fabricante-de-mangueiras-de-incendio-em-sao-paulo-data.php',
    'dicas-de-cuidados-mangueira-de-incendio.php' => 'dicas-de-cuidados-mangueira-de-incendio-data.php',
    'informacoes-tecnicas-mangueiras-incendio.php' => 'informacoes-tecnicas-mangueiras-incendio-data.php',
    'luzes-de-emergencia-led.php' => 'luzes-de-emergencia-led-data.php',
    'mangueira-de-incendio-para-condominio.php' => 'mangueira-de-incendio-para-condominio-data.php',
    'mangueiras-de-incendio-certificada.php' => 'mangueiras-de-incendio-certificada-data.php',
    'mangueiras-de-incendio-na-grande-sp.php' => 'mangueiras-de-incendio-na-grande-sp-data.php',
    'mangueiras-de-incendio-para-area-residencial.php' => 'mangueiras-de-incendio-para-area-residencial-data.php',
    'validade-da-mangueira-de-incendio.php' => 'validade-da-mangueira-de-incendio-data.php',
    'inspecao-de-equipamentos-de-combate-a-incendio.php' => 'inspecao-de-equipamentos-de-combate-a-incendio-data.php'
];

// STATUS DOS ARQUIVOS DATA
$data_status = [
    'fabricante-de-mangueiras-de-incendio-em-sao-paulo.php' => '✅ COMPLETO (14 seções)',
    'dicas-de-cuidados-mangueira-de-incendio.php' => '✅ COMPLETO (9 seções)',
    'informacoes-tecnicas-mangueiras-incendio.php' => '✅ COMPLETO (4 seções)',
    'luzes-de-emergencia-led.php' => '✅ COMPLETO (8 seções)',
    'mangueira-de-incendio-para-condominio.php' => '✅ COMPLETO (8 seções)',
    'mangueiras-de-incendio-certificada.php' => '✅ COMPLETO (7 seções)',
    'mangueiras-de-incendio-na-grande-sp.php' => '✅ COMPLETO (10 seções)',
    'mangueiras-de-incendio-para-area-residencial.php' => '✅ COMPLETO (13 seções)',
    'validade-da-mangueira-de-incendio.php' => '✅ COMPLETO (11 seções)',
    'inspecao-de-equipamentos-de-combate-a-incendio.php' => '✅ COMPLETO (7 seções)'
];

/**
 * Carrega os dados de uma página específica
 */
function loadPageData($page_name) {
    global $pages_data_files;
    
    if (isset($pages_data_files[$page_name])) {
        $data_file_path = __DIR__ . '/' . $pages_data_files[$page_name];
        
        if (file_exists($data_file_path)) {
            require_once $data_file_path;
            return getPageData();
        } else {
            error_log("Arquivo data não encontrado: " . $data_file_path);
            return getDefaultPageData($page_name);
        }
    }
    
    return getDefaultPageData($page_name);
}

/**
 * Retorna dados padrão para páginas sem arquivo específico
 */
function getDefaultPageData($page_name) {
    global $site_config;
    
    return [
        'page_config' => [
            'title' => 'Mangueiras de Incêndio Brasil - MIB',
            'description' => 'Informações técnicas sobre mangueiras de incêndio',
            'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio',
            'canonical' => $site_config['base_url'] . '/informacoes-tecnicas/' . $page_name
        ],
        'current_page' => 'Informações Técnicas',
        'breadcrumbs' => [
            ['text' => 'Home', 'url' => '/'],
            ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
            ['text' => 'Página', 'active' => true]
        ],
        'heroSection' => [
            'title' => 'Informações Técnicas',
            'subtitle' => 'Dados técnicos sobre equipamentos contra incêndio'
        ],
        'pageContent' => [
            'sections' => []
        ]
    ];
}

/**
 * Funções de compatibilidade com o sistema anterior
 */
function getPageDataOld($page_name) {
    return loadPageData($page_name);
}

function getPageConfig($page_name) {
    $data = loadPageData($page_name);
    return $data['page_config'] ?? [];
}

function getCurrentPageName($page_name) {
    $data = loadPageData($page_name);
    return $data['current_page'] ?? 'Página';
}

function getBreadcrumbs($page_name) {
    $data = loadPageData($page_name);
    return $data['breadcrumbs'] ?? [];
}

function getHeroSection($page_name) {
    $data = loadPageData($page_name);
    return $data['heroSection'] ?? [];
}

function getPageContent($page_name) {
    $data = loadPageData($page_name);
    return $data['pageContent'] ?? ['sections' => []];
}

function pageExists($page_name) {
    global $pages_data_files;
    return isset($pages_data_files[$page_name]);
}

/**
 * Funções de gerenciamento
 */
function listAvailablePages() {
    global $pages_data_files;
    return array_keys($pages_data_files);
}

function getDataStatus() {
    global $data_status;
    return $data_status;
}

function checkDataFileExists($page_name) {
    global $pages_data_files;
    
    if (isset($pages_data_files[$page_name])) {
        $data_file_path = __DIR__ . '/' . $pages_data_files[$page_name];
        return file_exists($data_file_path);
    }
    
    return false;
}

/**
 * Auto-load para compatibilidade
 * Detecta a página atual e carrega os dados automaticamente
 */
function autoLoadCurrentPageData() {
    $current_file = basename($_SERVER['PHP_SELF']);
    $data = loadPageData($current_file);
    
    // Definir variáveis globais para compatibilidade
    global $page_config, $current_page, $breadcrumbs, $HeroSection, $PageContent;
    
    $page_config = $data['page_config'];
    $current_page = $data['current_page'];
    $breadcrumbs = $data['breadcrumbs'];
    $HeroSection = $data['heroSection'];
    $PageContent = $data['pageContent'];
    
    return $data;
}

// Auto-carregar dados se chamado diretamente
if (basename($_SERVER['PHP_SELF']) !== 'data-index.php') {
    autoLoadCurrentPageData();
}

?>
