<?php
/**
 * Configurações para Testes A/B - Sistema de Otimização de Conversão
 * Sistema para testar diferentes versões de elementos e medir conversões
 */

// Configurações gerais dos testes A/B
$ab_testing_config = [
    // Configurações do sistema
    'enabled' => true,
    'tracking_enabled' => true,
    'cookie_duration' => 30, // dias
    'min_sample_size' => 100, // tamanho mínimo da amostra
    
    // Configurações de distribuição
    'distribution' => [
        'control' => 50,    // 50% para versão controle
        'variant' => 50     // 50% para versão teste
    ],
    
    // Configurações de tracking
    'tracking' => [
        'gtm_enabled' => true,
        'analytics_enabled' => true,
        'custom_events' => true
    ]
];

// Testes A/B ativos
$ab_tests = [
    // Teste 1: CTA Principal da Página Inicial
    'homepage_cta' => [
        'name' => 'CTA Principal - Página Inicial',
        'description' => 'Teste de diferentes textos e cores do botão CTA principal',
        'enabled' => true,
        'start_date' => '2025-01-01',
        'end_date' => '2025-03-31',
        'pages' => ['index.php', 'index.html'],
        'elements' => [
            'control' => [
                'id' => 'cta-primary',
                'text' => 'Solicitar Orçamento',
                'class' => 'btn btn-primary btn-lg',
                'color' => '#007bff',
                'position' => 'center'
            ],
            'variant_a' => [
                'id' => 'cta-primary',
                'text' => 'Orçamento Gratuito',
                'class' => 'btn btn-success btn-lg',
                'color' => '#28a745',
                'position' => 'center'
            ],
            'variant_b' => [
                'id' => 'cta-primary',
                'text' => 'Fale Conosco Agora',
                'class' => 'btn btn-warning btn-lg',
                'color' => '#ffc107',
                'position' => 'center'
            ]
        ],
        'conversion_goals' => [
            'contact_form_submit',
            'phone_click',
            'whatsapp_click',
            'email_click'
        ]
    ],
    
    // Teste 2: Formulário de Contato
    'contact_form' => [
        'name' => 'Formulário de Contato',
        'description' => 'Teste de diferentes layouts e campos do formulário',
        'enabled' => true,
        'start_date' => '2025-01-01',
        'end_date' => '2025-03-31',
        'pages' => ['contact.php'],
        'elements' => [
            'control' => [
                'layout' => 'vertical',
                'fields' => ['name', 'email', 'phone', 'message'],
                'button_text' => 'Enviar Mensagem',
                'button_color' => '#007bff'
            ],
            'variant_a' => [
                'layout' => 'horizontal',
                'fields' => ['name', 'email', 'phone', 'company', 'message'],
                'button_text' => 'Solicitar Orçamento',
                'button_color' => '#28a745'
            ],
            'variant_b' => [
                'layout' => 'compact',
                'fields' => ['name', 'phone', 'message'],
                'button_text' => 'Enviar',
                'button_color' => '#ffc107'
            ]
        ],
        'conversion_goals' => [
            'form_submit',
            'form_completion',
            'form_validation_error'
        ]
    ],
    
    // Teste 3: Header/Navegação
    'header_navigation' => [
        'name' => 'Header e Navegação',
        'description' => 'Teste de diferentes layouts e elementos do header',
        'enabled' => true,
        'start_date' => '2025-01-01',
        'end_date' => '2025-03-31',
        'pages' => ['*'], // Todas as páginas
        'elements' => [
            'control' => [
                'logo_position' => 'left',
                'menu_style' => 'horizontal',
                'cta_button' => true,
                'contact_info' => true
            ],
            'variant_a' => [
                'logo_position' => 'center',
                'menu_style' => 'horizontal',
                'cta_button' => true,
                'contact_info' => false
            ],
            'variant_b' => [
                'logo_position' => 'left',
                'menu_style' => 'dropdown',
                'cta_button' => false,
                'contact_info' => true
            ]
        ],
        'conversion_goals' => [
            'menu_click',
            'logo_click',
            'cta_click',
            'contact_click'
        ]
    ],
    
    // Teste 4: Páginas de Produtos
    'product_pages' => [
        'name' => 'Páginas de Produtos',
        'description' => 'Teste de diferentes layouts e elementos nas páginas de produtos',
        'enabled' => true,
        'start_date' => '2025-01-01',
        'end_date' => '2025-03-31',
        'pages' => [
            'equipamentos/mangueiras-de-incendio.php',
            'equipamentos/extintores-de-incendio.php',
            'equipamentos/hidrante-contra-incendio.php'
        ],
        'elements' => [
            'control' => [
                'image_position' => 'left',
                'cta_position' => 'bottom',
                'features_style' => 'list',
                'social_proof' => false
            ],
            'variant_a' => [
                'image_position' => 'top',
                'cta_position' => 'sidebar',
                'features_style' => 'cards',
                'social_proof' => true
            ],
            'variant_b' => [
                'image_position' => 'right',
                'cta_position' => 'inline',
                'features_style' => 'grid',
                'social_proof' => true
            ]
        ],
        'conversion_goals' => [
            'product_view',
            'cta_click',
            'contact_form',
            'phone_click'
        ]
    ]
];

// Função para determinar qual variante mostrar
function get_ab_variant($test_id, $user_id = null) {
    global $ab_tests, $ab_testing_config;
    
    if (!$ab_testing_config['enabled'] || !isset($ab_tests[$test_id])) {
        return 'control';
    }
    
    $test = $ab_tests[$test_id];
    
    if (!$test['enabled']) {
        return 'control';
    }
    
    // Verificar se o teste está ativo
    $current_date = date('Y-m-d');
    if ($current_date < $test['start_date'] || $current_date > $test['end_date']) {
        return 'control';
    }
    
    // Gerar ID único do usuário se não fornecido
    if (!$user_id) {
        $user_id = get_user_session_id();
    }
    
    // Gerar hash determinístico baseado no user_id e test_id
    $hash = crc32($user_id . $test_id);
    $variant_index = abs($hash) % 100;
    
    // Distribuir baseado na configuração
    if ($variant_index < $ab_testing_config['distribution']['control']) {
        return 'control';
    } elseif ($variant_index < $ab_testing_config['distribution']['control'] + $ab_testing_config['distribution']['variant']) {
        return 'variant_a';
    } else {
        return 'variant_b';
    }
}

// Função para gerar ID único de sessão do usuário
function get_user_session_id() {
    if (!isset($_SESSION['ab_user_id'])) {
        $_SESSION['ab_user_id'] = uniqid('ab_', true);
    }
    return $_SESSION['ab_user_id'];
}

// Função para registrar conversão
function track_ab_conversion($test_id, $variant, $conversion_goal, $value = null) {
    global $ab_testing_config;
    
    if (!$ab_testing_config['tracking_enabled']) {
        return false;
    }
    
    $conversion_data = [
        'test_id' => $test_id,
        'variant' => $variant,
        'goal' => $conversion_goal,
        'value' => $value,
        'timestamp' => date('Y-m-d H:i:s'),
        'user_id' => get_user_session_id(),
        'page_url' => $_SERVER['REQUEST_URI'],
        'user_agent' => $_SERVER['HTTP_USER_AGENT']
    ];
    
    // Salvar no banco de dados ou arquivo
    save_conversion_data($conversion_data);
    
    // Enviar evento para GTM se habilitado
    if ($ab_testing_config['tracking']['gtm_enabled']) {
        send_gtm_conversion_event($conversion_data);
    }
    
    return true;
}

// Função para salvar dados de conversão (verifica se já existe)
if (!function_exists('save_conversion_data')) {
    function save_conversion_data($data) {
        $file = __DIR__ . '/../data/ab_conversions.json';
        
        // Criar diretório se não existir
        $dir = dirname($file);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        // Carregar dados existentes
        $existing_data = [];
        if (file_exists($file)) {
            $existing_data = json_decode(file_get_contents($file), true) ?: [];
        }
        
        // Adicionar nova conversão
        $existing_data[] = $data;
        
        // Salvar dados
        file_put_contents($file, json_encode($existing_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}

// Função para enviar evento para GTM
function send_gtm_conversion_event($data) {
    $event_data = [
        'event' => 'ab_test_conversion',
        'test_id' => $data['test_id'],
        'variant' => $data['variant'],
        'conversion_goal' => $data['goal'],
        'conversion_value' => $data['value']
    ];
    
    // Gerar JavaScript para enviar evento
    $js = "dataLayer.push(" . json_encode($event_data) . ");";
    echo "<script>{$js}</script>";
}

// Função para obter estatísticas do teste
function get_ab_test_stats($test_id) {
    global $ab_tests;
    
    if (!isset($ab_tests[$test_id])) {
        return false;
    }
    
    $file = __DIR__ . '/../data/ab_conversions.json';
    $conversions = [];
    
    if (file_exists($file)) {
        $conversions = json_decode(file_get_contents($file), true) ?: [];
    }
    
    // Filtrar conversões para este teste
    $test_conversions = array_filter($conversions, function($conv) use ($test_id) {
        return $conv['test_id'] === $test_id;
    });
    
    // Calcular estatísticas
    $stats = [
        'test_id' => $test_id,
        'total_conversions' => count($test_conversions),
        'variants' => []
    ];
    
    $variants = ['control', 'variant_a', 'variant_b'];
    
    foreach ($variants as $variant) {
        $variant_conversions = array_filter($test_conversions, function($conv) use ($variant) {
            return $conv['variant'] === $variant;
        });
        
        $stats['variants'][$variant] = [
            'conversions' => count($variant_conversions),
            'goals' => []
        ];
        
        // Agrupar por objetivo de conversão
        foreach ($variant_conversions as $conv) {
            $goal = $conv['goal'];
            if (!isset($stats['variants'][$variant]['goals'][$goal])) {
                $stats['variants'][$variant]['goals'][$goal] = 0;
            }
            $stats['variants'][$variant]['goals'][$goal]++;
        }
    }
    
    return $stats;
}

// Função para gerar relatório de teste
function generate_ab_test_report($test_id) {
    $stats = get_ab_test_stats($test_id);
    
    if (!$stats) {
        return false;
    }
    
    $report = [
        'test_id' => $test_id,
        'generated_at' => date('Y-m-d H:i:s'),
        'total_conversions' => $stats['total_conversions'],
        'variants' => $stats['variants'],
        'winner' => null,
        'confidence' => null
    ];
    
    // Determinar vencedor (simplificado)
    $control_conversions = $stats['variants']['control']['conversions'];
    $variant_a_conversions = $stats['variants']['variant_a']['conversions'];
    $variant_b_conversions = $stats['variants']['variant_b']['conversions'];
    
    if ($variant_a_conversions > $control_conversions && $variant_a_conversions > $variant_b_conversions) {
        $report['winner'] = 'variant_a';
    } elseif ($variant_b_conversions > $control_conversions && $variant_b_conversions > $variant_a_conversions) {
        $report['winner'] = 'variant_b';
    } else {
        $report['winner'] = 'control';
    }
    
    return $report;
}
?>
