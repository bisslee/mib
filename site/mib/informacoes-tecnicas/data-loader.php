<?php
/**
 * Data Loader - Carrega automaticamente o arquivo data correto para cada página
 * 
 * Como usar:
 * 1. Inclua este arquivo no início da sua página PHP
 * 2. Use as funções: getPageData(), getPageConfig(), getBreadcrumbs(), etc.
 */

// Obter o nome do arquivo atual
$current_file = basename($_SERVER['PHP_SELF']);

// Mapear arquivo para seu respectivo data
$data_files = [
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

// Verificar se existe arquivo data específico para a página atual
if (isset($data_files[$current_file])) {
    $data_file_path = __DIR__ . '/' . $data_files[$current_file];
    
    // Verificar se o arquivo existe
    if (file_exists($data_file_path)) {
        // Incluir o arquivo data específico
        require_once $data_file_path;
        
        // Definir variáveis globais para compatibilidade
        $page_config = getPageConfig();
        $current_page = getCurrentPageName();
        $breadcrumbs = getBreadcrumbs();
        $HeroSection = getHeroSection();
        $PageContent = getPageContent();
        
    } else {
        // Arquivo data não encontrado, usar dados padrão
        error_log("Arquivo data não encontrado: " . $data_file_path);
        
        // Dados padrão básicos
        $page_config = [
            'title' => 'Mangueiras de Incêndio Brasil - MIB',
            'description' => 'Informações técnicas sobre mangueiras de incêndio',
            'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio',
            'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/' . $current_file
        ];
        
        $current_page = 'Informações Técnicas';
        $breadcrumbs = [
            ['text' => 'Home', 'url' => '/'],
            ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
            ['text' => 'Página', 'active' => true]
        ];
        
        $HeroSection = [
            'title' => 'Informações Técnicas',
            'subtitle' => 'Dados técnicos sobre equipamentos contra incêndio'
        ];
        
        $PageContent = [
            'sections' => []
        ];
    }
} else {
    // Página não mapeada, usar dados padrão
    error_log("Página não mapeada no data-loader: " . $current_file);
    
    // Dados padrão básicos
    $page_config = [
        'title' => 'Mangueiras de Incêndio Brasil - MIB',
        'description' => 'Informações técnicas sobre mangueiras de incêndio',
        'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio',
        'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/' . $current_file
    ];
    
    $current_page = 'Informações Técnicas';
    $breadcrumbs = [
        ['text' => 'Home', 'url' => '/'],
        ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
        ['text' => 'Página', 'active' => true]
    ];
    
    $HeroSection = [
        'title' => 'Informações Técnicas',
        'subtitle' => 'Dados técnicos sobre equipamentos contra incêndio'
    ];
    
    $PageContent = [
        'sections' => []
    ];
}

// Funções de conveniência para usar nas páginas
function loadPageData($page_name = null) {
    global $data_files;
    
    if ($page_name === null) {
        $page_name = basename($_SERVER['PHP_SELF']);
    }
    
    if (isset($data_files[$page_name])) {
        $data_file_path = __DIR__ . '/' . $data_files[$page_name];
        if (file_exists($data_file_path)) {
            require_once $data_file_path;
            return getPageData();
        }
    }
    
    return null;
}

function getDataFileName($page_name) {
    global $data_files;
    return isset($data_files[$page_name]) ? $data_files[$page_name] : null;
}

function listAvailableDataFiles() {
    global $data_files;
    return $data_files;
}

?>
