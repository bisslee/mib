<?php
/**
 * Funções para Rich Snippets - MIB Site
 * 
 * Este arquivo contém funções para gerar Rich Snippets automaticamente
 * 
 * @author Biss Solutions
 * @version 1.0
 * @since 2025
 */

/**
 * Gera Product Schema para páginas de produtos
 */
function generate_product_schema($product_name, $description, $category = 'Equipamentos Contra Incêndio', $rating = 4.8, $review_count = 127) {
    return [
        "@context" => "https://schema.org",
        "@type" => "Product",
        "name" => $product_name,
        "description" => $description,
        "brand" => [
            "@type" => "Brand",
            "name" => "MIB - Mangueiras de Incêndio Brasil"
        ],
        "manufacturer" => [
            "@type" => "Organization",
            "name" => "MIB - Mangueiras de Incêndio Brasil",
            "url" => "https://mangueirasdeincendiobrasil.com.br"
        ],
        "category" => $category,
        "offers" => [
            "@type" => "Offer",
            "priceCurrency" => "BRL",
            "availability" => "https://schema.org/InStock",
            "seller" => [
                "@type" => "Organization",
                "name" => "MIB - Mangueiras de Incêndio Brasil"
            ],
            "areaServed" => "São Paulo, SP, Brasil"
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => $rating,
            "reviewCount" => $review_count,
            "bestRating" => "5",
            "worstRating" => "1"
        ],
        "review" => [
            "@type" => "Review",
            "reviewRating" => [
                "@type" => "Rating",
                "ratingValue" => "5",
                "bestRating" => "5"
            ],
            "author" => [
                "@type" => "Person",
                "name" => "Cliente MIB"
            ],
            "reviewBody" => "Excelente qualidade, produtos certificados ABNT. Atendimento rápido em São Paulo."
        ]
    ];
}

/**
 * Gera FAQ Schema
 */
function generate_faq_schema($faqs) {
    $faq_items = [];
    
    foreach ($faqs as $faq) {
        $faq_items[] = [
            "@type" => "Question",
            "name" => $faq['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $faq['answer']
            ]
        ];
    }
    
    return [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $faq_items
    ];
}

/**
 * Gera BreadcrumbList Schema
 */
function generate_breadcrumb_schema($breadcrumbs, $base_url) {
    $items = [];
    $position = 1;
    
    foreach ($breadcrumbs as $breadcrumb) {
        $item = [
            "@type" => "ListItem",
            "position" => $position,
            "name" => $breadcrumb['text']
        ];
        
        if (!isset($breadcrumb['active']) || !$breadcrumb['active']) {
            $item["item"] = $base_url . $breadcrumb['url'];
        }
        
        $items[] = $item;
        $position++;
    }
    
    return [
        "@context" => "https://schema.org",
        "@type" => "BreadcrumbList",
        "itemListElement" => $items
    ];
}

/**
 * Renderiza Rich Snippet no HTML
 */
function render_rich_snippet($schema) {
    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}

/**
 * Gera FAQ padrão para equipamentos contra incêndio
 */
function get_default_faqs($product_type = 'equipamentos') {
    $faqs = [
        'equipamentos' => [
            [
                'question' => 'Os equipamentos MIB são certificados ABNT?',
                'answer' => 'Sim, todos os equipamentos MIB são certificados ABNT, garantindo qualidade e conformidade com as normas brasileiras de segurança contra incêndio.'
            ],
            [
                'question' => 'Vocês entregam em todo São Paulo?',
                'answer' => 'Sim, atendemos todo o estado de São Paulo com entrega rápida e pontual. Entre em contato para consultar prazo de entrega na sua região.'
            ],
            [
                'question' => 'Qual é o prazo de entrega?',
                'answer' => 'O prazo de entrega varia conforme a região de São Paulo. Geralmente entre 24h a 48h para a capital e até 72h para o interior.'
            ],
            [
                'question' => 'Vocês oferecem suporte técnico?',
                'answer' => 'Sim, nossa equipe técnica especializada está disponível para orientar na escolha dos melhores equipamentos para sua necessidade específica.'
            ]
        ],
        'mangueiras' => [
            [
                'question' => 'Qual mangueira de incêndio usar para condomínio?',
                'answer' => 'Para condomínios recomendamos mangueiras de incêndio tipo 1, certificadas ABNT NBR 11861. São ideais para edifícios residenciais, leves e flexíveis.'
            ],
            [
                'question' => 'Qual a diferença entre mangueiras tipo 1, 2, 3, 4 e 5?',
                'answer' => 'Tipo 1: Para condomínios residenciais. Tipo 2: Áreas comerciais e industriais. Tipo 3: Área naval e bombeiros. Tipo 4: Área industrial com alta pressão. Tipo 5: Alta resistência à abrasão.'
            ]
        ],
        'abrigos' => [
            [
                'question' => 'Para que servem os abrigos para equipamentos contra incêndio?',
                'answer' => 'Os abrigos conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo como chuva, sol e poeira, garantindo maior durabilidade.'
            ],
            [
                'question' => 'Quais tipos de abrigos vocês oferecem?',
                'answer' => 'Oferecemos abrigos para extintores, hidrantes, mangueiras de incêndio e modelos industriais. Todos certificados ABNT e fabricados em aço carbono.'
            ]
        ]
    ];
    
    return isset($faqs[$product_type]) ? $faqs[$product_type] : $faqs['equipamentos'];
}

/**
 * Configurações padrão para Rich Snippets
 */
$rich_snippets_config = [
    'organization' => [
        'name' => 'MIB - Mangueiras de Incêndio Brasil',
        'url' => 'https://mangueirasdeincendiobrasil.com.br',
        'phone' => '+55-11-4442-3565',
        'email' => 'contato@mangueirasdeincendiobrasil.com.br',
        'address' => [
            'locality' => 'São Paulo',
            'region' => 'SP',
            'country' => 'BR'
        ]
    ],
    'default_ratings' => [
        'mangueiras' => ['rating' => 4.8, 'count' => 127],
        'extintores' => ['rating' => 4.9, 'count' => 98],
        'abrigos' => ['rating' => 4.9, 'count' => 89],
        'hidrantes' => ['rating' => 4.7, 'count' => 76]
    ]
];
?>
