<?php

/**
 * Arquivo de Funções Compartilhadas - MIB Site
 * Contém funções utilizadas em múltiplas páginas
 */

/**
 * Função para definir ícone baseado no título da página
 * 
 * @param string $title Título da página
 * @return string Classe CSS do ícone FontAwesome
 */
function getIconForPage($title) {
    // Ícones específicos para páginas principais
    if (strpos($title, 'Luz') !== false || strpos($title, 'LED') !== false) {
        return 'fas fa-lightbulb';
    } elseif (strpos($title, 'Dicas') !== false) {
        return 'fas fa-hand-holding-heart';
    } elseif (strpos($title, 'Fabricante') !== false) {
        return 'fas fa-industry';
    } elseif (strpos($title, 'certificada') !== false) {
        return 'fas fa-certificate';
    } elseif (strpos($title, 'São Paulo') !== false || strpos($title, 'grande') !== false) {
        return 'fas fa-map-marker-alt';
    } elseif (strpos($title, 'residencial') !== false) {
        return 'fas fa-home';
    } elseif (strpos($title, 'Validade') !== false) {
        return 'fas fa-calendar-alt';
    } elseif (strpos($title, 'Inspeção') !== false) {
        return 'fas fa-search';
    } elseif (strpos($title, 'condomínio') !== false || strpos($title, 'Condomínio') !== false) {
        return 'fas fa-building';
    }
    
    // Ícones para páginas antigas baseados no conteúdo
    elseif (strpos($title, 'Mangueira') !== false) {
        return 'fas fa-hose-reel';
    } elseif (strpos($title, 'Mangueiras') !== false) {
        return 'fas fa-hose-reel';
    } elseif (strpos($title, 'Extintor') !== false) {
        return 'fas fa-fire-extinguisher';
    } elseif (strpos($title, 'Esguicho') !== false) {
        return 'fas fa-spray-can';
    } elseif (strpos($title, 'Abrigo') !== false) {
        return 'fas fa-shield-alt';
    } elseif (strpos($title, 'Válvula') !== false) {
        return 'fas fa-valve';
    } elseif (strpos($title, 'Preço') !== false) {
        return 'fas fa-dollar-sign';
    } elseif (strpos($title, 'Equipamento') !== false) {
        return 'fas fa-tools';
    } elseif (strpos($title, 'Carretel') !== false) {
        return 'fas fa-circle';
    } elseif (strpos($title, 'Canhão') !== false) {
        return 'fas fa-crosshairs';
    } elseif (strpos($title, 'Placa') !== false) {
        return 'fas fa-sign';
    } elseif (strpos($title, 'Adaptador') !== false) {
        return 'fas fa-plug';
    } elseif (strpos($title, 'Hospital') !== false) {
        return 'fas fa-hospital';
    } elseif (strpos($title, 'AVCB') !== false) {
        return 'fas fa-file-alt';
    } elseif (strpos($title, 'Tampa') !== false) {
        return 'fas fa-circle';
    } elseif (strpos($title, 'Chave') !== false) {
        return 'fas fa-key';
    }
    
    // Ícone padrão
    return 'fas fa-helmet-safety';
}

/**
 * Função para formatar URLs relativas para absolutas
 * 
 * @param string $url URL relativa ou absoluta
 * @param string $base_url URL base do site
 * @return string URL absoluta
 */
function formatUrl($url, $base_url = '') {
    // Se já é uma URL absoluta, retorna como está
    if (strpos($url, 'http') === 0) {
        return $url;
    }
    
    // Se não tem base_url definida, usa a configuração global
    if (empty($base_url) && isset($GLOBALS['site_config']['base_url'])) {
        $base_url = $GLOBALS['site_config']['base_url'];
    }
    
    // Remove barra dupla se existir
    $url = ltrim($url, '/');
    
    return $base_url . '/' . $url;
}

/**
 * Função para gerar breadcrumbs HTML
 * 
 * @param array $breadcrumbs Array de breadcrumbs
 * @return string HTML dos breadcrumbs
 */
function generateBreadcrumbs($breadcrumbs) {
    if (empty($breadcrumbs)) {
        return '';
    }
    
    $html = '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    
    foreach ($breadcrumbs as $crumb) {
        if (isset($crumb['active']) && $crumb['active']) {
            $html .= '<li class="breadcrumb-item active" aria-current="page">' . htmlspecialchars($crumb['text']) . '</li>';
        } else {
            $html .= '<li class="breadcrumb-item"><a href="' . htmlspecialchars($crumb['url']) . '">' . htmlspecialchars($crumb['text']) . '</a></li>';
        }
    }
    
    $html .= '</ol></nav>';
    
    return $html;
}

/**
 * Função para sanitizar dados de entrada
 * 
 * @param mixed $data Dados a serem sanitizados
 * @return mixed Dados sanitizados
 */
function sanitizeInput($data) {
    if (is_array($data)) {
        return array_map('sanitizeInput', $data);
    }
    
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Função para verificar se uma página existe
 * 
 * @param string $file_path Caminho do arquivo
 * @return bool True se o arquivo existe, false caso contrário
 */
function pageExists($file_path) {
    return file_exists($file_path) && is_file($file_path);
}

/**
 * Função para gerar meta tags de SEO
 * 
 * @param array $config Configurações da página
 * @return string HTML das meta tags
 */
function generateMetaTags($config) {
    $html = '';
    
    if (isset($config['title'])) {
        $html .= '<title>' . htmlspecialchars($config['title']) . '</title>' . "\n";
    }
    
    if (isset($config['description'])) {
        $html .= '<meta name="description" content="' . htmlspecialchars($config['description']) . '">' . "\n";
    }
    
    if (isset($config['keywords'])) {
        $html .= '<meta name="keywords" content="' . htmlspecialchars($config['keywords']) . '">' . "\n";
    }
    
    if (isset($config['canonical'])) {
        $html .= '<link rel="canonical" href="' . htmlspecialchars($config['canonical']) . '">' . "\n";
    }
    
    return $html;
}
