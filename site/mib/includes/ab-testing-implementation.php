<?php
/**
 * Implementação dos Testes A/B
 * Sistema para aplicar testes nas páginas do site
 */

// Incluir configurações do A/B Testing
if (file_exists(__DIR__ . '/ab-testing-config.php')) {
    include_once __DIR__ . '/ab-testing-config.php';
}

// Função para aplicar teste A/B em elemento específico
function apply_ab_test($test_id, $element_type = 'default') {
    global $ab_tests, $ab_testing_config;
    
    if (!$ab_testing_config['enabled'] || !isset($ab_tests[$test_id])) {
        return null;
    }
    
    $test = $ab_tests[$test_id];
    
    if (!$test['enabled']) {
        return null;
    }
    
    // Verificar se a página atual está no teste
    $current_page = basename($_SERVER['PHP_SELF']);
    $page_match = false;
    
    foreach ($test['pages'] as $page) {
        if ($page === '*' || $page === $current_page || strpos($current_page, $page) !== false) {
            $page_match = true;
            break;
        }
    }
    
    if (!$page_match) {
        return null;
    }
    
    // Obter variante para este usuário
    $variant = get_ab_variant($test_id);
    
    if (!isset($test['elements'][$variant])) {
        $variant = 'control';
    }
    
    $element_config = $test['elements'][$variant];
    
    // Adicionar dados do teste para JavaScript
    $test_data = [
        'test_id' => $test_id,
        'variant' => $variant,
        'element_config' => $element_config,
        'conversion_goals' => $test['conversion_goals']
    ];
    
    // Gerar JavaScript para aplicar o teste
    $js_code = "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var testData = " . json_encode($test_data) . ";
        
        // Aplicar configurações do teste
        applyABTest(testData);
        
        // Configurar tracking de conversões
        setupConversionTracking(testData);
    });
    
    function applyABTest(testData) {
        var element = document.getElementById(testData.element_config.id);
        if (!element) return;
        
        // Aplicar configurações visuais
        if (testData.element_config.text) {
            element.textContent = testData.element_config.text;
        }
        
        if (testData.element_config.class) {
            element.className = testData.element_config.class;
        }
        
        if (testData.element_config.color) {
            element.style.backgroundColor = testData.element_config.color;
        }
        
        if (testData.element_config.position) {
            element.style.textAlign = testData.element_config.position;
        }
        
        // Aplicar configurações específicas por tipo de elemento
        switch(testData.test_id) {
            case 'contact_form':
                applyContactFormTest(testData);
                break;
            case 'header_navigation':
                applyHeaderTest(testData);
                break;
            case 'product_pages':
                applyProductPageTest(testData);
                break;
        }
    }
    
    function applyContactFormTest(testData) {
        var form = document.querySelector('form');
        if (!form) return;
        
        var config = testData.element_config;
        
        // Aplicar layout
        if (config.layout === 'horizontal') {
            form.classList.add('form-horizontal');
        } else if (config.layout === 'compact') {
            form.classList.add('form-compact');
        }
        
        // Aplicar campos
        var fields = form.querySelectorAll('.form-group');
        fields.forEach(function(field, index) {
            if (index >= config.fields.length) {
                field.style.display = 'none';
            }
        });
        
        // Aplicar botão
        var submitBtn = form.querySelector('button[type=\"submit\"]');
        if (submitBtn && config.button_text) {
            submitBtn.textContent = config.button_text;
        }
        if (submitBtn && config.button_color) {
            submitBtn.style.backgroundColor = config.button_color;
        }
    }
    
    function applyHeaderTest(testData) {
        var header = document.querySelector('header');
        if (!header) return;
        
        var config = testData.element_config;
        
        // Aplicar posição do logo
        var logo = header.querySelector('.logo');
        if (logo && config.logo_position) {
            logo.style.textAlign = config.logo_position;
        }
        
        // Aplicar estilo do menu
        var menu = header.querySelector('.navbar-nav');
        if (menu && config.menu_style === 'dropdown') {
            menu.classList.add('dropdown-menu');
        }
        
        // Aplicar botão CTA
        var ctaBtn = header.querySelector('.cta-button');
        if (ctaBtn) {
            ctaBtn.style.display = config.cta_button ? 'block' : 'none';
        }
        
        // Aplicar informações de contato
        var contactInfo = header.querySelector('.contact-info');
        if (contactInfo) {
            contactInfo.style.display = config.contact_info ? 'block' : 'none';
        }
    }
    
    function applyProductPageTest(testData) {
        var productSection = document.querySelector('.product-section');
        if (!productSection) return;
        
        var config = testData.element_config;
        
        // Aplicar posição da imagem
        var image = productSection.querySelector('.product-image');
        if (image && config.image_position) {
            image.style.float = config.image_position;
        }
        
        // Aplicar posição do CTA
        var cta = productSection.querySelector('.product-cta');
        if (cta && config.cta_position) {
            if (config.cta_position === 'sidebar') {
                cta.classList.add('sidebar-cta');
            } else if (config.cta_position === 'inline') {
                cta.classList.add('inline-cta');
            }
        }
        
        // Aplicar estilo das características
        var features = productSection.querySelector('.product-features');
        if (features && config.features_style) {
            features.classList.add('features-' + config.features_style);
        }
        
        // Aplicar prova social
        var socialProof = productSection.querySelector('.social-proof');
        if (socialProof) {
            socialProof.style.display = config.social_proof ? 'block' : 'none';
        }
    }
    
    function setupConversionTracking(testData) {
        // Tracking de cliques em botões
        var buttons = document.querySelectorAll('button, .btn, .cta-button');
        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                trackConversion(testData.test_id, testData.variant, 'button_click');
            });
        });
        
        // Tracking de cliques em links de telefone
        var phoneLinks = document.querySelectorAll('a[href^=\"tel:\"]');
        phoneLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                trackConversion(testData.test_id, testData.variant, 'phone_click');
            });
        });
        
        // Tracking de cliques em WhatsApp
        var whatsappLinks = document.querySelectorAll('a[href*=\"whatsapp\"]');
        whatsappLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                trackConversion(testData.test_id, testData.variant, 'whatsapp_click');
            });
        });
        
        // Tracking de cliques em email
        var emailLinks = document.querySelectorAll('a[href^=\"mailto:\"]');
        emailLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                trackConversion(testData.test_id, testData.variant, 'email_click');
            });
        });
        
        // Tracking de envio de formulário
        var forms = document.querySelectorAll('form');
        forms.forEach(function(form) {
            form.addEventListener('submit', function() {
                trackConversion(testData.test_id, testData.variant, 'form_submit');
            });
        });
        
        // Tracking de visualização de produto
        if (testData.test_id === 'product_pages') {
            trackConversion(testData.test_id, testData.variant, 'product_view');
        }
    }
    
    function trackConversion(testId, variant, goal) {
        // Enviar para GTM se disponível
        if (typeof dataLayer !== 'undefined') {
            dataLayer.push({
                'event': 'ab_test_conversion',
                'test_id': testId,
                'variant': variant,
                'conversion_goal': goal,
                'timestamp': new Date().toISOString()
            });
        }
        
        // Enviar para servidor
        fetch('/devtools/track-conversion.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                test_id: testId,
                variant: variant,
                goal: goal,
                page_url: window.location.href,
                user_agent: navigator.userAgent
            })
        }).catch(function(error) {
            console.log('Erro ao enviar conversão:', error);
        });
    }
    </script>
    ";
    
    return $js_code;
}

// Função para aplicar teste A/B na página atual
function apply_page_ab_tests() {
    global $ab_tests;
    
    $current_page = basename($_SERVER['PHP_SELF']);
    $applied_tests = [];
    
    foreach ($ab_tests as $test_id => $test) {
        if (!$test['enabled']) continue;
        
        $page_match = false;
        foreach ($test['pages'] as $page) {
            if ($page === '*' || $page === $current_page || strpos($current_page, $page) !== false) {
                $page_match = true;
                break;
            }
        }
        
        if ($page_match) {
            $test_code = apply_ab_test($test_id);
            if ($test_code) {
                $applied_tests[] = $test_code;
            }
        }
    }
    
    return implode("\n", $applied_tests);
}

// Função para gerar CSS específico para testes A/B
function generate_ab_test_css() {
    $css = "
    <style>
    /* Estilos para Testes A/B */
    
    /* Formulário Horizontal */
    .form-horizontal .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }
    
    .form-horizontal .form-group label {
        width: 120px;
        margin-right: 15px;
        margin-bottom: 0;
    }
    
    .form-horizontal .form-group input,
    .form-horizontal .form-group textarea {
        flex: 1;
    }
    
    /* Formulário Compacto */
    .form-compact .form-group {
        margin-bottom: 10px;
    }
    
    .form-compact .form-group label {
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    
    .form-compact .form-group input,
    .form-compact .form-group textarea {
        padding: 8px 12px;
        font-size: 0.9rem;
    }
    
    /* CTA Sidebar */
    .sidebar-cta {
        position: fixed;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1000;
        background: #007bff;
        color: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    /* CTA Inline */
    .inline-cta {
        display: inline-block;
        margin: 10px 0;
    }
    
    /* Características em Cards */
    .features-cards .feature-item {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 10px;
    }
    
    /* Características em Grid */
    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 15px;
    }
    
    .features-grid .feature-item {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 15px;
    }
    
    /* Prova Social */
    .social-proof {
        background: #e8f5e8;
        border: 1px solid #28a745;
        border-radius: 8px;
        padding: 15px;
        margin: 20px 0;
    }
    
    .social-proof h6 {
        color: #28a745;
        margin-bottom: 10px;
    }
    
    .social-proof ul {
        margin-bottom: 0;
        padding-left: 20px;
    }
    
    .social-proof li {
        color: #155724;
        margin-bottom: 5px;
    }
    
    /* Responsividade */
    @media (max-width: 768px) {
        .sidebar-cta {
            position: static;
            transform: none;
            margin: 20px 0;
        }
        
        .form-horizontal .form-group {
            flex-direction: column;
            align-items: stretch;
        }
        
        .form-horizontal .form-group label {
            width: auto;
            margin-right: 0;
            margin-bottom: 5px;
        }
    }
    </style>
    ";
    
    return $css;
}

// Função para criar diretório de dados se não existir
function ensure_data_directory() {
    $data_dir = __DIR__ . '/../data';
    if (!is_dir($data_dir)) {
        mkdir($data_dir, 0755, true);
    }
    return $data_dir;
}

// Função para salvar dados de conversão
function save_conversion_data($data) {
    $data_dir = ensure_data_directory();
    $file = $data_dir . '/ab_conversions.json';
    
    // Carregar dados existentes
    $existing_data = [];
    if (file_exists($file)) {
        $existing_data = json_decode(file_get_contents($file), true) ?: [];
    }
    
    // Adicionar timestamp se não existir
    if (!isset($data['timestamp'])) {
        $data['timestamp'] = date('Y-m-d H:i:s');
    }
    
    // Adicionar nova conversão
    $existing_data[] = $data;
    
    // Salvar dados
    file_put_contents($file, json_encode($existing_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    
    return true;
}
?>
