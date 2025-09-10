<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => '<b>mangueiras de incêndio na Grande SP</b> - MIB | Mangueiras de Incêndio Brasil',
    'description' => '<b>mangueiras de incêndio na Grande SP</b> certificadas ABNT NBR 11861. Tipos 1 a 5 (1 ½″ e 2 ½″), 15–30 m, selo ABNT + INMETRO, auditoria por lote, inspeções obrigatórias e aprovação no Corpo de Bombeiros.',
    'keywords' => 'Mangueiras de incêndio, certificação ABNT NBR 11861, tipos 1 a 5, 1 ½″ e 2 ½″, 15–30 m, selo ABNT + INMETRO, auditoria por lote, inspeções obrigatórias, aprovação no Corpo de Bombeiros',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/mangueiras-de-incendio-na-grande-sp.php'
];

// Identificar página atual para menu ativo
$current_page = '<b>mangueiras de incêndio na Grande SP</b>'; // deve corresponder ao item do menu

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/informacoes-tecnicas/',
        'text' => 'Informações Técnicas',
    ),
    1 => array(
        'url' => '',
        'text' => '<b>mangueiras de incêndio na Grande SP</b>',
    ),
);

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb (opcional)
if (isset($breadcrumbs)) {
    include __DIR__ . '/../includes/breadcrumb.php';
}

$HeroSection = [
    'title' => '<b>mangueiras de incêndio na Grande SP</b>',
    'subtitle' => 'ABNT NBR 1186'
];

$PageContent = [
    'sections' => [
        [
            'order' => 1,
            'title' => '',
            'content-list' => [
                [
                    'order' => 1,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '<b>💡 Se você busca <b>mangueiras de incêndio na Grande SP</b>, a MIB Mangueiras de Incêndio Brasil é a escolha certa.</b> Somos referência no fornecimento de <b>mangueiras de combate a incêndio para condomínios, indústrias, hospitais, galpões logísticos e comércios</b> em toda a <b>Região Metropolitana de São Paulo</b>, com atendimento consultivo e entrega ágil.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '<b>🔒 Segurança que passa em vistoria, sem dor de cabeça.</b> Nossos modelos são <b>certificados ABNT NBR 11861</b> e possuem <b>selo ABNT + INMETRO</b>, com <b>rastreabilidade por lote</b> e ensaios realizados em laboratórios credenciados. Isso significa <b>conformidade técnica garantida</b>, desempenho real em campo e <b>aprovação em projetos e vistorias do Corpo de Bombeiros.</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '<b>⚠️ Decisão crítica para o seu patrimônio:</b> nunca adquira mangueiras fora das normas <b>ABNT e INMETRO</b>. Somente <b>mangueiras de incêndio certificadas na Grande SP</b> oferecem a <b>proteção devida</b>, evitam reprovações e reduzem riscos operacionais e jurídicos.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '🚀 Diferenciais MIB (o que você ganha):',
                        'list' => [
                            ['item' => '•	Orientação técnica para o modelo certo (Tipos 1 a 5) conforme seu projeto;'],
                            ['item' => '•	Qualidade auditada e constância de performance;'],
                            ['item' => '•	Atendimento rápido na Grande SP e suporte pós-venda;'],
                            ['item' => '•	Custo total otimizado: compra certa, menos manutenção e reduções de retrabalhos de vistoria.'],
                        ]
                    ]
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '<b>👉 Próximo passo:</b> peça um <b>orçamento sem compromisso</b> e receba a indicação do <b>modelo ideal</b> para sua edificação ou processo. Segurança começa com a escolha certa.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '🚒 Por que comprar <b>mangueiras de incêndio na Grande SP</b> com a MIB',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '•	Cobertura completa em São Paulo e região metropolitana.'],
                        ['item' => '•	Produtos 100% auditados e homologados pela ABNT NBR 11861.'],
                        ['item' => '•	Certificação ABNT + INMETRO com rastreabilidade por lote.'],
                        ['item' => '•	Atendimento consultivo especializado, auxiliando síndicos, engenheiros e compradores.'],
                        ['item' => '•	Conformidade garantida com projetos de incêndio aprovados pelo Corpo de Bombeiros.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '👉 A MIB é o <b>fabricante de mangueiras de incêndio em São Paulo</b> que une credibilidade, segurança e preço justo.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 3,
            'title' => '📋 Conformidade e Auditorias de Fabricação',
            'content-list' => [
                [
                    'order' => 1,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/abnt-14.jpg',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'Todas as <b>mangueiras de incêndio certificadas ABNT</b> da MIB seguem a NBR 11861. Cada lote passa por testes laboratoriais, internos e externos, credenciados pelo <b>INMETRO</b>.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 4,
            'title' => '📏 Especificações Essenciais',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '•	Comprimentos oficiais: 15, 20, 25 e 30 m.'],
                        ['item' => '•	Proibida a venda por metro.'],
                        ['item' => '•	Uniões Storz: conforme NBR 14349.'],
                        ['item' => '•	Tolerância de comprimento: nunca inferior a 95% do valor nominal (30 m → mínimo 28,5 m).'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 5,
            'title' => '🚒 Tipos de <b>mangueiras de incêndio na Grande SP</b> – Modelos MIB',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '<h2>🔹 Predyflex – Tipo 1 (Residencial)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Cor: </b>Branca ⚪'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½″ (38 mm) — único permitido pela norma para este tipo.'],
                        ['item' => '<b>• Comprimentos normatizados:</b> 15, 20, 25 e 30 metros.'],
                        ['item' => '<b>• Pressão de trabalho:</b> 10 kgf/cm².'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 21 kgf/cm².'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> ≥ 35 kgf/cm².'],
                        ['item' => '<b>• Revestimento interno:</b> borracha sintética de alta resistência.'],
                        ['item' => '<b>• Revestimento externo:</b> poliéster trançado de alta tenacidade.'],
                        ['item' => '✔️ Onde usar: edifícios residenciais e condomínios — opção ideal de <b>mangueiras de incêndio na Grande SP</b> para áreas habitacionais.'],
                        ['item' => '❌ Não usar: indústrias ou galpões.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '<h2>🔹 Superflex – Tipo 2 (Comercial e Bombeiros)</h2>',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 5,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-2-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Cor: </b>Branca ⚪'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½″ (38 mm) e 2 ½″ (65 mm).'],
                        ['item' => '<b>• Comprimentos normatizados:</b> 15, 20, 25 e 30 metros.'],
                        ['item' => '<b>• Pressão de trabalho:</b> 14 kgf/cm².'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 28 kgf/cm².'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> ≥ 45 kgf/cm².'],
                        ['item' => '<b>• Revestimento interno:</b> borracha sintética vulcanizada.'],
                        ['item' => '<b>• Revestimento externo:</b> poliéster de alta resistência mecânica.'],
                        ['item' => '✔️ Onde usar: prédios comerciais, shoppings, depósitos, escolas, indústrias leves e Corpo de Bombeiros — bastante utilizada em projetos de combate a incêndio na Grande São Paulo.'],
                        ['item' => '❌ Não usar: indústrias químicas severas.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '<h2>🔹 Superflex Capa Dupla – Tipo 3 (Naval / Industrial)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 8,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-3-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 9,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Cor:</b> Branca ⚪'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½″ (38 mm) e 2 ½″ (65 mm).'],
                        ['item' => '<b>• Comprimentos normatizados:</b> 15, 20, 25 e 30 metros.'],
                        ['item' => '<b>• Pressão de trabalho:</b> 15 kgf/cm².'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 30 kgf/cm².'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> ≥ 60 kgf/cm².'],
                        ['item' => '<b>• Revestimento interno:</b> borracha sintética resistente a variações térmicas.'],
                        ['item' => '<b>• Revestimento externo:</b> dupla camada de poliéster trançado, resistente à abrasão.'],
                        ['item' => '✔️ Onde usar: indústrias pesadas, setor naval, estaleiros e plataformas — indicada como <b>mangueira industrial certificada na Grande SP</b>.'],
                        ['item' => '❌ Não usar: prédios residenciais.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 10,
                    'image' => '',
                    'content' => '<h2>🔹 Plastflex – Tipo 4 (Industrial Severo)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 11,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-4-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 12,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Cor:</b> Vermelha 🔴'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½″ (38 mm) e 2 ½″ (65 mm).'],
                        ['item' => '<b>• Comprimentos normatizados:</b> 15, 20, 25 e 30 metros.'],
                        ['item' => '<b>• Pressão de trabalho:</b> 14 kgf/cm².'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 28 kgf/cm².'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> ≥ 45 kgf/cm².'],
                        ['item' => '<b>• Revestimento interno:</b> borracha sintética especial resistente a produtos químicos.'],
                        ['item' => '<b>• Revestimento externo:</b> poliéster de alta tenacidade com proteção contra abrasão.'],
                        ['item' => '✔️ Onde usar: indústrias químicas, petroquímicas, laboratórios e ambientes abrasivos — uma das mangueiras de incêndio certificadas na Grande SP mais requisitadas no setor industrial.'],
                        ['item' => '❌ Não usar: residências ou pequenos comércios.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 13,
                    'image' => '',
                    'content' => '<h2>🔹 Ruberflex – Tipo 5 (Industrial Extremo / Bombeiros)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 14,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-5-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 15,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Cor:</b> Vermelha 🔴'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½″ (38 mm) e 2 ½″ (65 mm).'],
                        ['item' => '<b>• Comprimentos normatizados:</b> 15, 20, 25 e 30 metros.'],
                        ['item' => '<b>• Pressão de trabalho:</b> 14 kgf/cm².'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 28 kgf/cm².'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> ≥ 45 kgf/cm².'],
                        ['item' => '<b>• Revestimento interno:</b> borracha nitrílica de alta performance.'],
                        ['item' => '<b>• Revestimento externo:</b> borracha vulcanizada com reforço têxtil de poliéster.'],
                        ['item' => '✔️ Onde usar: refinarias, portos, aeroportos, indústrias petroquímicas e Corpo de Bombeiros — referência em mangueiras de incêndio na Grande SP para riscos extremos.'],
                        ['item' => '❌ Não usar: residências ou ambientes de baixo risco.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 6,
            'title' => '📊 Tabela Comparativa – Mangueiras de Incêndio na Grande SP',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [
                        'headers' => ['Modelo MIB', 'Diâmetros', 'Comprimentos', 'Trabalho', 'Ensaio', 'Ruptura', 'Aplicações'],
                        'rows' => [
                            ['item' => ['Predyflex – Tipo 1', '1 ½″', '15–30 m', '10 kgf/cm²', '20 kgf/cm²', '≥ 35 kgf/cm²', 'Residenciais']],
                            ['item' => ['Superflex – Tipo 2', '1 ½″ / 2 ½″', '15–30 m', '14 kgf/cm²', '28 kgf/cm²', '≥ 45 kgf/cm²', 'Comerciais / Bombeiros']],
                            ['item' => ['Superflex CD – Tipo 3', '1 ½″ / 2 ½″', '15–30 m', '15 kgf/cm²', '30 kgf/cm²', '≥ 60 kgf/cm²', 'Naval / Industrial']],
                            ['item' => ['Plastflex – Tipo 4', '1 ½″ / 2 ½″', '15–30 m', '14 kgf/cm²', '28 kgf/cm²', '≥ 45 kgf/cm²', 'Indústrias Químicas']],
                            ['item' => ['Ruberflex – Tipo 5', '1 ½″ / 2 ½″', '15–30 m', '21 kgf/cm²', '28 kgf/cm²', '≥ 45 kgf/cm²', 'Extremo / Bombeiros']],
                        ]
                    ],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 7,
            'title' => '🔍 Checklist Antifraude',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '•	Gravação obrigatória nas extremidades.'],
                        ['item' => '•	Selo ABNT + INMETRO.'],
                        ['item' => '•	Certificado válido fornecido pelo fabricante.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '⚠️ Recuse mangueiras sem certificação oficial.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 8,
            'title' => '🔍 Ensaios Obrigatórios – NBR 11861',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'A NBR 11861 determina 19 ensaios obrigatórios para garantir a segurança das mangueiras de incêndio certificadas.<br>
                                  Entre eles: ensaio hidrostático, perda de carga, ruptura, abrasão, flexão, aderência, torque de acoplamento, resistência ao calor e ao envelhecimento.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '👉 Apenas as mangueiras certificadas ABNT + INMETRO passam por todos esses testes.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 9,
            'title' => '🛠️ Cuidados e Vida Útil',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '•	Inspeção visual a cada 3 meses.'],
                        ['item' => '•	Ensaio hidrostático anual (NBR 12779).'],
                        ['item' => '•	Armazenamento em abrigos adequados.'],
                        ['item' => '•	Vida útil média: 5–10 anos.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 10,
            'title' => '❓ FAQ – Perguntas Frequentes sobre Mangueiras de Incêndio na Grande SP',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '1.	Quais são os comprimentos padronizados? 👉 15, 20, 25 e 30 m.'],
                        ['item' => '2.	Qual indicada para uso residencial? 👉 Predyflex – Tipo 1.'],
                        ['item' => '3.	Qual para prédios comerciais? 👉 Superflex – Tipo 2.'],
                        ['item' => '4.	Qual é a mais robusta? 👉 Ruberflex – Tipo 5 para maio pressão a Tipo 3 .'],
                        ['item' => '5.	Todas possuem certificação? ✔️ Sim, ABNT + INMETRO.'],
                        ['item' => '6.	Qual a garantia? 👉 12 meses contra defeitos de fabricação.'],
                        ['item' => '7.	O Corpo de Bombeiros aceita qualquer modelo? 🚫 Não, apenas certificadas.'],
                        ['item' => '8.	Como identificar uma mangueira certificada? 👉 Gravação obrigatória e selos ABNT/INMETRO e solicitar ao vendedor o certificado emitido pela ABNT com a especificação do fabricante e modelo.'],
                        ['item' => '9.	Quando devo inspecionar? 👉 A cada 3 meses + ensaio anual.'],
                        ['item' => '10.	Posso usar a mesma para treino e combate? 🚫 Não.'],
                        ['item' => '11.	Qual a pressão mínima e máxima? 👉 10 Kgf/cm2 a tipo 1 a 14 kgf/cm² tipos 2,4,5 e   15 Kgf/cm2 Tipo 3 '],
                        ['item' => '12.	A MIB atende toda a Grande SP? ✔️ Sim.'],
                        ['item' => '13.	O que acontece se eu comprar sem selo? 👉 Risco de reprovação e falha.'],
                        ['item' => '14.	Quanto tempo dura? 👉 5 anos podendo durar mais.'],
                        ['item' => '15.	Como solicitar orçamento? 👉 WhatsApp, e-mail ou site oficial.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ]
    ]
];


?>

<!-- Hero Section da Página -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title"><?php echo $HeroSection['title']; ?></h1>
                <p class="page-subtitle"><?php echo $HeroSection['subtitle']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Conteúdo Principal -->
<main id="main-content">
    <?php
    // Ordenar seções por ordem
    $sections = $PageContent['sections'];
    usort($sections, function ($a, $b) {
        return $a['order'] - $b['order'];
    });

    // Loop para renderizar cada seção
    foreach ($sections as $section):
        // Ordenar itens de conteúdo por ordem
        $content_items = $section['content-list'];
        usort($content_items, function ($a, $b) {
            return $a['order'] - $b['order'];
        });
    ?>

        <!-- Seção de Conteúdo -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if (!empty($section['title'])): ?>
                            <h2 class="section-title"><?php echo $section['title']; ?></h2>
                        <?php endif; ?>

                        <?php foreach ($content_items as $item): ?>
                            <div class="content-item mb-4">
                                <?php if (!empty($item['image'])): ?>
                                    <div class="content-image text-center mb-3">
                                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $section['title']; ?>" class="img-fluid">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['content'])): ?>
                                    <div class="content-text">
                                        <?php echo $item['content']; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['list'])): ?>
                                    <div class="content-list">
                                        <ul class="list-unstyled">
                                            <?php foreach ($item['list'] as $list_item): ?>
                                                <li class="mb-2"><?php echo $list_item['item']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['table'])): ?>
                                    <div class="content-table">
                                        <table class="table table-striped table-bordered">
                                            <?php if (!empty($item['table']['headers'])): ?>
                                                <thead class="table-dark">
                                                    <tr>
                                                        <?php foreach ($item['table']['headers'] as $header): ?>
                                                            <th><?php echo $header; ?></th>
                                                        <?php endforeach; ?>
                                                    </tr>
                                                </thead>
                                            <?php endif; ?>
                                            <tbody>
                                                <?php if (!empty($item['table']['rows'])): ?>
                                                    <?php foreach ($item['table']['rows'] as $row): ?>
                                                        <tr>
                                                            <?php foreach ($row['item'] as $cell): ?>
                                                                <td><?php echo $cell; ?></td>
                                                            <?php endforeach; ?>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['table-with-title'])): ?>
                                    <div class="content-table-with-title">
                                        <?php if (is_array($item['table-with-title']) && isset($item['table-with-title']['title'])): ?>
                                            <h4 class="table-title"><?php echo $item['table-with-title']['title']; ?></h4>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered">
                                                    <?php if (!empty($item['table-with-title']['table']['headers'])): ?>
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <?php foreach ($item['table-with-title']['table']['headers'] as $header): ?>
                                                                    <th><?php echo $header; ?></th>
                                                                <?php endforeach; ?>
                                                            </tr>
                                                        </thead>
                                                    <?php endif; ?>
                                                    <tbody>
                                                        <?php if (!empty($item['table-with-title']['table']['rows'])): ?>
                                                            <?php foreach ($item['table-with-title']['table']['rows'] as $row): ?>
                                                                <tr>
                                                                    <?php foreach ($row['item'] as $cell): ?>
                                                                        <td><?php echo $cell; ?></td>
                                                                    <?php endforeach; ?>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['list-with-title'])): ?>
                                    <div class="content-list-with-title">
                                        <?php if (is_array($item['list-with-title']) && isset($item['list-with-title']['title'])): ?>
                                            <h4 class="list-title"><?php echo $item['list-with-title']['title']; ?></h4>
                                            <ul class="list-unstyled">
                                                <?php if (!empty($item['list-with-title']['list'])): ?>
                                                    <?php foreach ($item['list-with-title']['list'] as $list_item): ?>
                                                        <li class="mb-2"><?php echo $list_item['item']; ?></li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endforeach; ?>
</main>

<?php
// Incluir footer
include __DIR__ . '/../includes/footer.php';
?>