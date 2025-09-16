<?php
/**
 * Configuração do Google Tag Manager - MIB Site
 * Centraliza configurações e eventos personalizados
 */

// Configurações do GTM
$gtm_config = [
    'container_id' => 'GTM-WZKDXGP',
    'data_layer' => 'dataLayer',
    
    // Eventos personalizados para conversões
    'events' => [
        'contact_form_submit' => 'contact_form_submit',
        'product_view' => 'product_view',
        'equipment_inquiry' => 'equipment_inquiry',
        'whatsapp_click' => 'whatsapp_click',
        'phone_call' => 'phone_call',
        'email_click' => 'email_click'
    ],
    
    // Categorias de produtos para Enhanced Ecommerce
    'product_categories' => [
        'mangueiras' => 'Mangueiras de Incêndio',
        'extintores' => 'Extintores de Incêndio',
        'hidrantes' => 'Hidrantes Contra Incêndio',
        'esguichos' => 'Esguichos para Equipamentos',
        'abrigos' => 'Abrigos para Equipamentos',
        'caixas' => 'Caixas para Equipamentos',
        'acessorios' => 'Acessórios Contra Incêndio'
    ]
];

// Função para enviar eventos personalizados para o GTM
function send_gtm_event($event_name, $event_data = []) {
    global $gtm_config;
    
    $category = isset($event_data['category']) ? $event_data['category'] : 'interaction';
    $action = isset($event_data['action']) ? $event_data['action'] : 'click';
    $label = isset($event_data['label']) ? $event_data['label'] : '';
    $value = isset($event_data['value']) ? $event_data['value'] : '';
    
    $event_script = "
    <script>
        dataLayer.push({
            'event': '{$event_name}',
            'event_category': '{$category}',
            'event_action': '{$action}',
            'event_label': '{$label}',
            'value': '{$value}',
            'page_title': document.title,
            'page_location': window.location.href,
            'timestamp': new Date().toISOString()
        });
    </script>";
    
    return $event_script;
}

// Função para tracking de visualização de produtos
function track_product_view($product_name, $product_category, $product_price = '') {
    $event_data = [
        'category' => 'product',
        'action' => 'view',
        'label' => $product_name,
        'value' => $product_price
    ];
    
    return send_gtm_event('product_view', $event_data);
}

// Função para tracking de cliques no WhatsApp
function track_whatsapp_click($product_name = '') {
    $event_data = [
        'category' => 'contact',
        'action' => 'whatsapp_click',
        'label' => $product_name ?: 'general_inquiry',
        'value' => '1'
    ];
    
    return send_gtm_event('whatsapp_click', $event_data);
}

// Função para tracking de cliques em telefone
function track_phone_click($phone_number = '') {
    $event_data = [
        'category' => 'contact',
        'action' => 'phone_click',
        'label' => $phone_number ?: 'phone_contact',
        'value' => '1'
    ];
    
    return send_gtm_event('phone_click', $event_data);
}

// Função para tracking de cliques em email
function track_email_click($email_address = '') {
    $event_data = [
        'category' => 'contact',
        'action' => 'email_click',
        'label' => $email_address ?: 'email_contact',
        'value' => '1'
    ];
    
    return send_gtm_event('email_click', $event_data);
}

// Função para tracking de formulário de contato
function track_contact_form_submit($form_type = 'contact') {
    $event_data = [
        'category' => 'form',
        'action' => 'submit',
        'label' => $form_type,
        'value' => '1'
    ];
    
    return send_gtm_event('contact_form_submit', $event_data);
}

// Função para tracking de navegação entre páginas
function track_page_view($page_name, $page_category = '') {
    $event_data = [
        'category' => 'navigation',
        'action' => 'page_view',
        'label' => $page_name,
        'value' => $page_category
    ];
    
    return send_gtm_event('page_view', $event_data);
}
?>
