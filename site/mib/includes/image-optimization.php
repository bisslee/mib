<?php
/**
 * Funções de Otimização de Imagens - MIB Site
 * 
 * Este arquivo contém funções para otimizar imagens automaticamente
 * 
 * @author Biss Solutions
 * @version 1.0
 * @since 2025
 */

/**
 * Gera alt text otimizado para SEO
 */
function generate_optimized_alt_text($filename, $context = '') {
    $base_name = pathinfo($filename, PATHINFO_FILENAME);
    
    // Remover extensão e normalizar
    $clean_name = str_replace(['-', '_'], ' ', $base_name);
    $clean_name = ucwords($clean_name);
    
    // Adicionar contexto específico
    $contexts = [
        'mangueira' => 'Mangueira de Incêndio certificada ABNT',
        'extintor' => 'Extintor de Incêndio certificado ABNT',
        'esguicho' => 'Esguicho para equipamentos contra incêndio',
        'hidrante' => 'Hidrante contra incêndio certificado ABNT',
        'abrigo' => 'Abrigo para equipamentos contra incêndio',
        'armario' => 'Armário para equipamentos contra incêndio',
        'caixa' => 'Caixa para equipamentos contra incêndio',
        'valvula' => 'Válvula para sistemas contra incêndio',
        'placa' => 'Placa de sinalização para emergência'
    ];
    
    $description = '';
    foreach ($contexts as $key => $value) {
        if (stripos($clean_name, $key) !== false) {
            $description = $value;
            break;
        }
    }
    
    if (empty($description)) {
        $description = 'Equipamento contra incêndio certificado ABNT';
    }
    
    // Adicionar palavras-chave locais
    $local_keywords = ' - MIB São Paulo';
    
    return $description . $local_keywords;
}

/**
 * Gera atributos otimizados para imagem
 */
function generate_image_attributes($src, $alt = '', $width = 300, $height = 200, $class = 'img-fluid') {
    // Gerar alt text se não fornecido
    if (empty($alt)) {
        $alt = generate_optimized_alt_text($src);
    }
    
    $attributes = [
        'src' => $src,
        'alt' => $alt,
        'loading' => 'lazy',
        'width' => $width,
        'height' => $height,
        'class' => $class
    ];
    
    return $attributes;
}

/**
 * Renderiza tag img otimizada
 */
function render_optimized_image($src, $alt = '', $width = 300, $height = 200, $class = 'img-fluid', $additional_attrs = []) {
    $attrs = generate_image_attributes($src, $alt, $width, $height, $class);
    
    // Mesclar atributos adicionais
    $attrs = array_merge($attrs, $additional_attrs);
    
    // Construir string de atributos
    $attr_string = '';
    foreach ($attrs as $key => $value) {
        $attr_string .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
    }
    
    return '<img' . $attr_string . '>';
}

/**
 * Otimiza imagens em conteúdo HTML
 */
function optimize_images_in_content($content) {
    // Padrão para encontrar imagens
    $pattern = '/<img([^>]*?)src="([^"]+)"([^>]*?)>/i';
    
    return preg_replace_callback($pattern, function($matches) {
        $before = $matches[1];
        $src = $matches[2];
        $after = $matches[3];
        
        // Verificar se já tem lazy loading
        if (strpos($matches[0], 'loading=') !== false) {
            return $matches[0]; // Já otimizada
        }
        
        // Verificar se é logo ou ícone (não precisa de lazy loading)
        if (strpos($src, 'logo') !== false || strpos($src, 'icon') !== false || strpos($src, 'favicon') !== false) {
            return $matches[0];
        }
        
        // Extrair alt text atual
        $alt_match = [];
        preg_match('/alt="([^"]*)"/', $matches[0], $alt_match);
        $current_alt = isset($alt_match[1]) ? $alt_match[1] : '';
        
        // Melhorar alt text se necessário
        $improved_alt = $current_alt;
        if (empty($current_alt) || strlen($current_alt) < 10) {
            $improved_alt = generate_optimized_alt_text($src);
        }
        
        // Determinar dimensões baseado no contexto
        $width = 300;
        $height = 200;
        
        if (strpos($src, 'old-site') !== false) {
            // Imagens de produtos
            $width = 250;
            $height = 180;
        } elseif (strpos($src, 'hero') !== false || strpos($src, 'banner') !== false) {
            // Imagens de destaque
            $width = 400;
            $height = 300;
        }
        
        // Construir nova tag
        $new_tag = '<img' . $before . 'src="' . $src . '" alt="' . $improved_alt . '"' . $after . ' loading="lazy" width="' . $width . '" height="' . $height . '">';
        
        return $new_tag;
    }, $content);
}

/**
 * Configurações de otimização para diferentes tipos de imagem
 */
$image_optimization_config = [
    'product_images' => [
        'width' => 250,
        'height' => 180,
        'class' => 'img-fluid',
        'loading' => 'lazy'
    ],
    'hero_images' => [
        'width' => 400,
        'height' => 300,
        'class' => 'img-fluid',
        'loading' => 'lazy'
    ],
    'thumbnail_images' => [
        'width' => 150,
        'height' => 100,
        'class' => 'img-thumbnail',
        'loading' => 'lazy'
    ],
    'logo_images' => [
        'width' => 200,
        'height' => 80,
        'class' => 'img-fluid',
        'loading' => 'eager' // Logo deve carregar imediatamente
    ]
];

// Função para obter configuração por tipo
function get_image_config($type = 'product_images') {
    global $image_optimization_config;
    return isset($image_optimization_config[$type]) ? $image_optimization_config[$type] : $image_optimization_config['product_images'];
}
?>
