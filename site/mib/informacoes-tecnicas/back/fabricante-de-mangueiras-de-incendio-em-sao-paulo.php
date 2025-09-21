<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Fabricante de Mangueiras de Incêndio em São Paulo - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Fabricante de mangueiras de incêndio em São Paulo – MIB. Produtos certificados ABNT NBR 11861, tipos 1 a 5, comprimentos de 15 a 30 m. Segurança com economia. Solicite já seu orçamento com a MIB',
    'keywords' => 'Luz de emergência, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php'
];

// Identificar página atual para menu ativo
$current_page = 'Fabricante de Mangueiras de Incêndio em São Paulo'; // deve corresponder ao item do menu

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
    ['text' => 'Fabricante de Mangueiras de Incêndio em São Paulo', 'active' => true]
];

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb
include __DIR__ . '/../includes/breadcrumb.php';

$HeroSection = [
    'title' => 'Fabricante de Mangueiras de Incêndio em São Paulo',
    'subtitle' => 'Produtos certificados ABNT NBR 11861, tipos 1 a 5, comprimentos de 15 a 30 m. Segurança com economia. Solicite já seu orçamento com a MIB'
];

$PageContent = [
    'sections' => [
        [
            'order' => 1,
            'title' => '',
            'content-list' => [
                [
                    'order' => 1,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/estoque-manqueiras-8.jpeg',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '🔥 A MIB Mangueiras de Incêndio Brasil é fabricante de mangueiras de incêndio em São Paulo, referência em qualidade, certificação ABNT e atendimento humanizado. Atuamos também como fabricante de mangueira ABNT São Paulo, fabricante de mangueira de combate a incêndio em SP, fabricante de mangueira certificada em São Paulo e fabricante de mangueira predial e industrial em São Paulo, atendendo condomínios, indústrias, comércios, hospitais e construtoras.',
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
                        ['item' => '✔ Todos os modelos seguem a ABNT NBR 11861, as exigências do Corpo de Bombeiros e o selo do Inmetro.'],
                        ['item' => '⚠️ Qualquer fabricante de mangueira de incêndio em SP precisa realizar os 19 testes obrigatórios da ABNT NBR 11861 para garantir desempenho, conformidade e segurança.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '🚒 Por que escolher a MIB Mangueiras de Incêndio Brasil?',
                        'list' => [
                            ['item' => '• <b>Fabricante de mangueira ABNT São Paulo</b>, com credibilidade e suporte técnico.'],
                            ['item' => '• <b>Fabricante de mangueiras certificadas em São Paulo</b>, homologadas pela ABNT NBR 11861 e auditadas periodicamente.'],
                            ['item' => '• <b>Fabricante especializado em mangueira de incêndio SP</b>, com laboratório próprio para os 19 ensaios normativos exigidos.'],
                            ['item' => '• Atendimento consultivo e entrega em todo o estado de São Paulo.'],
                            ['item' => '• Suporte técnico para condomínios, construtoras, hospitais, indústrias e galpões logísticos.'],
                        ]
                    ]
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '🤝 Vantagens de Comprar com a MIB',
                        'list' => [
                            ['item' => '• <b>Comprar com a MIB significa ter atendimento humanizado</b>, onde não apenas vendemos, mas ajudamos a escolher.'],
                            ['item' => '• <b>Preço justo com qualidade</b>.'],
                            ['item' => '• <b>Segurança com economia</b>.'],
                            ['item' => '• <b>Clareza para síndicos, engenheiros e gestores que precisam de orientação</b>.'],
                        ]
                    ]
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => 'Nosso objetivo é oferecer tranquilidade e confiança ao investir em uma <b>mangueira de combate a incêndio em São Paulo</b>, com credibilidade e certificação ABNT',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '📋 Projeto de Incêndio: A Base da Escolha Correta',
                        'list' => [
                            ['item' => '⚠️ Toda instalação deve ser baseada em projeto técnico aprovado pelo Corpo de Bombeiros. O projeto define:'],
                            ['item' => '• <b>Tipo correto da mangueira (1 a 5)</b>.'],
                            ['item' => '• <b>Pressões mínimas exigidas</b>.'],
                            ['item' => '• <b>Localização estratégica de hidrantes</b>.'],
                            ['item' => '• <b>Condições de uso (residencial, comercial, industrial, naval)</b>.'],
                        ]
                    ]
                ],
                [
                    'order' => 8,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '🔹 Informações Técnicas Mangueiras de Incêndio – ABNT NBR 11861',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '<h2>🏠 Predyflex – Tipo 1 (Residencial)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
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
                        ['item' => '• Diâmetro interno: 40 mm (1½”)'],
                        ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                        ['item' => '• Pressão de trabalho: 10 kgf/cm²'],
                        ['item' => '• Ensaio hidrostático: 20 kgf/cm²'],
                        ['item' => '• Ruptura mínima: 35 kgf/cm²'],
                        ['item' => '• Revestimento interno: borracha sintética'],
                        ['item' => '• Revestimento externo: poliéster de alta tenacidade'],
                        ['item' => '• Ensaios: todos os 19 obrigatórios conforme ABNT'],
                        ['item' => '✔ Onde usar: edifícios residenciais e condomínios'],
                        ['item' => '❌ Não usar: áreas comerciais ou industriais'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '<h2>🏢 Superflex – Tipo 2 (Comercial e Bombeiros)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 5,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-2-mib.png',
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
                        ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                        ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                        ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                        ['item' => '• Ensaio hidrostático: 28 kgf/cm²'],
                        ['item' => '• Ruptura mínima: 45 kgf/cm²'],
                        ['item' => '• Revestimento interno: borracha sintética preta'],
                        ['item' => '• Revestimento externo: poliéster de alta tenacidade'],
                        ['item' => '• Ensaios: 19 testes obrigatórios conforme ABNT'],
                        ['item' => '✔ Onde usar: prédios comerciais, escolas, depósitos, indústrias leves, Corpo de Bombeiros'],
                        ['item' => '❌ Não usar: áreas petroquímicas ou severas'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '<h2>⚓ Superflex Capa Dupla – Tipo 3 (Naval e Industrial)</h2>',
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
                        ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                        ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                        ['item' => '• Pressão de trabalho: 15 kgf/cm²'],
                        ['item' => '• Ensaio hidrostático: 30 kgf/cm²'],
                        ['item' => '• Ruptura mínima: 60 kgf/cm²'],
                        ['item' => '• Revestimento interno: borracha sintética aderente'],
                        ['item' => '• Revestimento externo: dupla capa de poliéster de alta tenacidade'],
                        ['item' => '• Ensaios: resistência extra à abrasão, tração e cortes'],
                        ['item' => '✔ Onde usar: indústrias pesadas, setor naval, estaleiros, plataformas marítimas'],
                        ['item' => '❌ Não usar: residências ou comércios comuns'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 10,
                    'image' => '',
                    'content' => '<h2>🏭 Plastflex – Tipo 4 (Industrial Severo)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 11,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-4-mib.png',
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
                        ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                        ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                        ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                        ['item' => '• Ensaio hidrostático: 28 kgf/cm²'],
                        ['item' => '• Ruptura mínima: 45 kgf/cm²'],
                        ['item' => '• Revestimento interno: borracha sintética aderente'],
                        ['item' => '• Revestimento externo: PVC reforçado + borracha nitrílica'],
                        ['item' => '• Resistência: contato com derivados de petróleo e agentes químicos'],
                        ['item' => '✔ Onde usar: indústrias químicas, petroquímicas, ambientes severos'],
                        ['item' => '❌ Não usar: residências ou prédios de baixo risco'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 13,
                    'image' => '',
                    'content' => '<h2>🔥 Ruberflex – Tipo 5 (Industrial Extremo e Bombeiros)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 14,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-5-mib.png',
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
                        ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                        ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                        ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                        ['item' => '• Ensaio hidrostático: 45 kgf/cm²'],
                        ['item' => '• Ruptura mínima: 55 kgf/cm²'],
                        ['item' => '• Revestimento interno: borracha sintética especial'],
                        ['item' => '• Revestimento externo: borracha nitrílica de alta performance'],
                        ['item' => '• Reforço: fios sintéticos de alta tenacidade'],
                        ['item' => '• Ensaios: todos os 19 exigidos pela ABNT NBR 11861'],
                        ['item' => '✔ Onde usar: refinarias, portos, aeroportos, petroquímicas, uso avançado dos Bombeiros'],
                        ['item' => '❌ Não usar: condomínios ou pequenos estabelecimentos'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 16,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [
                        'title' => '📊 Tabela Comparativa das Mangueiras MIB',
                        'table' => [
                            'headers' => ['Modelo', 'Diâmetro / Comp.', 'Pressões (kgf/cm²)', 'Aplicações'],
                            'rows' => [
                                ['item' => ['Predyflex – 1', '40 mm (1½”) – 15 a 30 m', 'Trabalho: 10 · Ensaio: 20 · Ruptura: 35', 'Residencial']],
                                ['item' => ['Superflex – 2', '40 / 65 mm – 15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Comercial / Bombeiros']],
                                ['item' => ['Superflex CD – 3', '40 / 65 mm – 15 a 30 m', 'Trabalho: 15 · Ensaio: 30 · Ruptura: 60', 'Naval / Industrial']],
                                ['item' => ['Plastflex – 4', '40 / 65 mm – 15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Químico / Petroquímico']],
                                ['item' => ['Ruberflex – 5', '40 / 65 mm – 15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Bombeiros / Extremo']],
                            ]
                        ]
                    ],
                    'list-with-title' => []
                ],
                [
                    'order' => 17,
                    'image' => '',
                    'content' => '⚠️ As mangueiras de incêndio não podem ser vendidas por metro, apenas em comprimentos padronizados (15, 20, 25 e 30 m).',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 3,
            'title' => '📌 Conformidade e Testes (ABNT NBR 11861)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/bancada-teste-cmc-16.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'A norma exige 19 ensaios obrigatórios, entre eles: hidrostático, ruptura, perda de carga, abrasão, flexão, aderência, estanqueidade, envelhecimento acelerado, ozônio, superfície quente, impacto, tração, rasgo, frio, dimensional, acoplamento, massa linear, alongamento sob pressão e torque de acoplamento.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '👉 Graças a essa padronização, as mangueiras da MIB são referência em segurança, durabilidade e certificação ABNT, consolidando sua posição como destaque em <b>fabricante de mangueira de incêndio em São Paulo</b>.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ]
    ],
    [
        'order' => 4,
        'title' => '❓ FAQ Estruturado – Fabricante de Mangueiras de Incêndio em São Paulo',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [
                    ['item' => '1.	As mangueiras MIB são certificadas? ✔ Sim. Todas seguem a ABNT NBR 11861 + Inmetro.'],
                    ['item' => '2.	Quais comprimentos estão disponíveis? ✔ 15, 20, 25 e 30 m.'],
                    ['item' => '3.	Posso comprar por metro? ❌ Não. Apenas nos comprimentos normatizados.'],
                    ['item' => '4.	Qual modelo é indicado para residências? ✔ Tipo 1 – Predyflex.'],
                    ['item' => '5.	Qual o modelo mais robusto? ✔ Tipo 5 – Ruberflex, indicado para uso extremo.'],
                    ['item' => '6.	A MIB entrega em todo SP? ✔ Sim, com logística própria.'],
                    ['item' => '7.	Todas as mangueiras passam por testes? ✔ Sim, os 19 exigidos pela ABNT.'],
                    ['item' => '8.	Qual a garantia? ✔ 12 meses contra defeitos de fabricação.'],
                    ['item' => '9.	Quem pode instalar? ✔ Empresas credenciadas com projeto aprovado pelo Corpo de Bombeiros.'],
                    ['item' => '10.	Por que comprar da MIB? ✔ Atendimento humanizado, preço justo e segurança com economia.'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ]
    ],
    [
        'order' => 5,
        'title' => '',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => [
                    ['item' => '🔗 Links Oficiais – Referência Técnica'],
                    ['item' => '• ABNT NBR 11861 – Catálogo Oficial: <a href="https://www.abntcatalogo.com.br/norma.aspx?ID=356331" target="_blank">https://www.abntcatalogo.com.br/norma.aspx?ID=356331</a>'],
                    ['item' => '• Inmetro – Regulamentação de Produtos: <a href="https://www.gov.br/inmetro/pt-br" target="_blank">https://www.gov.br/inmetro/pt-br</a>'],
                    ['item' => '• Corpo de Bombeiros SP – Projetos de Prevenção: <a href="https://www.corpodebombeiros.sp.gov.br" target="_blank">https://www.corpodebombeiros.sp.gov.br</a>'],

                ]
            ],
            [
                'order' => 2,
                'image' => '',
                'content' => '',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => [
                    ['item' => '📌 Meta Descrição (para programador)'],
                    ['item' => 'Fabricante de mangueiras de incêndio em São Paulo – MIB. Produtos certificados ABNT NBR 11861, tipos 1 a 5, comprimentos de 15 a 30 m. Segurança com economia. Solicite já seu orçamento com a MIB.'],
                ]
            ],
            [
                'order' => 3,
                'image' => '',
                'content' => '<b>URL:</b> <a href="www.mangueirasdeincendiobrasil.com.br/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php" target="_blank">www.mangueirasdeincendiobrasil.com.br/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php</a>',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ],
    ],
    [
        'order' => 6,
        'title' => '📌 Fabricante de Mangueiras de Incêndio em São Paulo | MIB – Mangueiras de Incêndio Brasil',
        'content-list' => [
            [
                'order' => 1,
                'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/estoque-manqueiras-8.jpeg',
                'content' => '',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 2,
                'image' => '',
                'content' => '🔥 A <b>MIB Mangueiras de Incêndio Brasil é fabricante de mangueiras de incêndio em São Paulo</b>, referência em qualidade, certificação ABNT e atendimento humanizado. Atuamos também como <b>fabricante de mangueira ABNT São Paulo</b> e <b>fabricante de mangueira de combate a incêndio em SP</b>, atendendo condomínios, indústrias, comércios, hospitais e construtoras.',
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
                    ['item' => '✔ Todos os modelos seguem a ABNT NBR 11861, as exigências do Corpo de Bombeiros e selo do Inmetro.'],
                    ['item' => '⚠️ Qualquer fabricante de mangueira de incêndio em SP precisa realizar os 19 testes obrigatórios da ABNT NBR 11861 para garantir desempenho, conformidade e segurança.'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 4,
                'image' => '',
                'content' => '',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => [
                    'title' => '🚒 Por que escolher a MIB Mangueiras de Incêndio Brasil?',
                    'list' => [
                        ['item' => '• Fabricante de mangueira ABNT São Paulo, com credibilidade e suporte técnico.'],
                        ['item' => '• Fabricante de mangueiras certificadas em São Paulo, homologadas pela ABNT NBR 11861 e auditadas periodicamente.'],
                        ['item' => '• Laboratório próprio de testes, com os 19 ensaios normativos exigidos.'],
                        ['item' => '• Atendimento consultivo e entrega em todo o estado de São Paulo.'],
                        ['item' => '• Suporte técnico para condomínios, construtoras, hospitais, indústrias e galpões logísticos.'],
                    ]
                ]
            ]
        ]
    ],
    [
        'order' => 7,
        'title' => '🚒 Por que escolher a MIB Mangueiras de Incêndio Brasil?',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [
                    ['item' => '• Fabricante de mangueira ABNT São Paulo, com credibilidade e suporte técnico.'],
                    ['item' => '• Produtos homologados pela ABNT NBR 11861 e auditados periodicamente.'],
                    ['item' => '• Laboratório próprio de testes, com os 19 ensaios normativos exigidos.'],
                    ['item' => '• Atendimento consultivo e entrega em todo o estado de São Paulo.'],
                    ['item' => '• Suporte técnico para condomínios, construtoras, hospitais, indústrias e galpões logísticos.'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ]
    ],
    [
        'order' => 8,
        'title' => '🤝 Vantagens de Comprar com a MIB',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [
                    ['item' => 'Comprar com a MIB significa ter <b>atendimento humanizado</b>, onde não apenas vendemos, mas ajudamos a escolher.'],
                    ['item' => '✔ Preço justo com qualidade.'],
                    ['item' => '✔ Segurança com economia.'],
                    ['item' => '✔ Clareza para síndicos, engenheiros e gestores que precisam de orientação.'],
                    ['item' => 'Nosso objetivo é oferecer tranquilidade e confiança ao investir em uma <b>mangueira de combate a incêndio SP/b> com credibilidade e certificação ABNT.'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ]
    ],
    [
        'order' => 9,
        'title' => '📋 Projeto de Incêndio: A Base da Escolha Correta',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => [
                    'title' => '⚠️ Toda instalação deve ser baseada em <b>projeto técnico aprovado pelo Corpo de Bombeiros</b>. O projeto define:',
                    'list' => [
                        ['item' => '• Tipo correto da mangueira (1 a 5)'],
                        ['item' => '• Pressões mínimas exigidas'],
                        ['item' => '• Localização estratégica de hidrantes'],
                        ['item' => '• Condições de uso (residencial, comercial, industrial, naval)'],
                    ]
                ]
            ]
        ]
    ],
    [
        'order' => 10,
        'title' => '🔹 Informações Técnicas Mangueiras de Incêndio – ABNT NBR 11861',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '<h2>🏠 Predyflex – Tipo 1 (Residencial)</h2>',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 2,
                'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
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
                    ['item' => '• Diâmetro interno: 40 mm (1½”)'],
                    ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                    ['item' => '• Pressão de trabalho: 10 kgf/cm²'],
                    ['item' => '• Ensaio hidrostático: 20 kgf/cm²'],
                    ['item' => '• Ruptura mínima: 35 kgf/cm²'],
                    ['item' => '• Revestimento interno: borracha sintética'],
                    ['item' => '• Revestimento externo: poliéster de alta tenacidade'],
                    ['item' => '• Ensaios: todos os 19 obrigatórios conforme ABNT'],
                    ['item' => '✔ Onde usar: edifícios residenciais e condomínios'],
                    ['item' => '❌ Não usar: áreas comerciais ou industriais'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 4,
                'image' => '',
                'content' => '<h2>🏢 Superflex – Tipo 2 (Comercial e Bombeiros) </h2>',
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
                    ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                    ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                    ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                    ['item' => '• Ensaio hidrostático: 28 kgf/cm²'],
                    ['item' => '• Ruptura mínima: 45 kgf/cm²'],
                    ['item' => '• Revestimento interno: borracha sintética preta'],
                    ['item' => '• Revestimento externo: poliéster de alta tenacidade'],
                    ['item' => '• Ensaios: 19 testes obrigatórios conforme ABNT'],
                    ['item' => '✔ Onde usar: prédios comerciais, escolas, depósitos, indústrias leves, Corpo de Bombeiros'],
                    ['item' => '❌ Não usar: áreas petroquímicas ou severas'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '<h2>⚓ Superflex Capa Dupla – Tipo 3 (Naval e Industrial)</h2>',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 8,
                'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-3-mib.png',
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
                    ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                    ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                    ['item' => '• Pressão de trabalho: 15 kgf/cm²'],
                    ['item' => '• Ensaio hidrostático: 30 kgf/cm²'],
                    ['item' => '• Ruptura mínima: 60 kgf/cm²'],
                    ['item' => '• Revestimento interno: borracha sintética aderente'],
                    ['item' => '• Revestimento externo: dupla capa de poliéster de alta tenacidade'],
                    ['item' => '• Ensaios: resistência extra à abrasão, tração e cortes'],
                    ['item' => '✔ Onde usar: indústrias pesadas, setor naval, estaleiros, plataformas marítimas'],
                    ['item' => '❌ Não usar: residências ou comércios comuns'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 10,
                'image' => '',
                'content' => '<h2>🏭 Plastflex – Tipo 4 (Industrial Severo)</h2>',
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
                    ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                    ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                    ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                    ['item' => '• Ensaio hidrostático: 28 kgf/cm²'],
                    ['item' => '• Ruptura mínima: 45 kgf/cm²'],
                    ['item' => '• Revestimento interno: borracha sintética aderente'],
                    ['item' => '• Revestimento externo: PVC reforçado + borracha nitrílica'],
                    ['item' => '• Resistência: contato com derivados de petróleo e agentes químicos'],
                    ['item' => '✔ Onde usar: indústrias químicas, petroquímicas, ambientes severos'],
                    ['item' => '❌ Não usar: residências ou prédios de baixo risco'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 13,
                'image' => '',
                'content' => '<h2>🔥 Ruberflex – Tipo 5 (Industrial Extremo e Bombeiros)</h2>',
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
                    ['item' => '• Diâmetros: 40 mm (1½”) e 65 mm (2½”)'],
                    ['item' => '• Comprimentos: 15, 20, 25 e 30 m'],
                    ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                    ['item' => '• Ensaio hidrostático: 45 kgf/cm²'],
                    ['item' => '• Ruptura mínima: 55 kgf/cm²'],
                    ['item' => '• Revestimento interno: borracha sintética especial'],
                    ['item' => '• Revestimento externo: borracha nitrílica de alta performance'],
                    ['item' => '• Reforço: fios sintéticos de alta tenacidade'],
                    ['item' => '• Ensaios: todos os 19 exigidos pela ABNT NBR 11861'],
                    ['item' => '✔ Onde usar: refinarias, portos, aeroportos, petroquímicas, uso avançado dos Bombeiros'],
                    ['item' => '❌ Não usar: condomínios ou pequenos estabelecimentos'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ]
    ],
    [
        'order' => 11,
        'title' => '📊 Tabela Comparativa das Mangueiras MIB',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [],
                'table' => [
                    'headers' => ['Modelo', 'Diâmetro / Comp.', 'Pressões (kgf/cm²)', 'Aplicações'],
                    'rows' => [
                        ['item' => ['Predyflex – 1', '40 mm (1½”) – 15 a 30 m', 'Trabalho: 10 · Ensaio: 20 · Ruptura: 35', 'Residencial']],
                        ['item' => ['Superflex – 2', '40 / 65 mm – 15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Comercial / Bombeiros']],
                        ['item' => ['Superflex CD – 3', '40 / 65 mm – 15 a 30 m', 'Trabalho: 15 · Ensaio: 30 · Ruptura: 60', 'Naval / Industrial']],
                        ['item' => ['Plastflex – 4', '40 / 65 mm – 15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Químico / Petroquímico']],
                        ['item' => ['Ruberflex – 5', '40 / 65 mm – 15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Bombeiros / Extremo']],
                    ]
                ],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 2,
                'image' => '',
                'content' => '⚠️ As mangueiras de incêndio não podem ser vendidas por metro, apenas em comprimentos padronizados (15, 20, 25 e 30 m).',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ]
    ],
    [
        'order' => 12,
        'title' => '📌 Conformidade e Testes (ABNT NBR 11861)',
        'content-list' => [
            [
                'order' => 1,
                'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/bancada-teste-cmc-16.webp',
                'content' => '',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 2,
                'image' => '',
                'content' => 'A norma exige <b>19 ensaios obrigatórios</b>, entre eles: hidrostático, ruptura, perda de carga, abrasão, flexão, aderência, estanqueidade, envelhecimento acelerado, ozônio, superfície quente, impacto, tração, rasgo, frio, dimensional, acoplamento, massa linear, alongamento sob pressão e torque de acoplamento.',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ],
            [
                'order' => 3,
                'image' => '',
                'content' => '👉 Graças a essa padronização, as mangueiras da MIB são referência em <b>segurança, durabilidade e certificação ABNT</b>, consolidando sua posição como destaque em <b>mangueira de combate a incêndio SP</b>.',
                'list' => [],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ]
    ],
    [
        'order' => 13,
        'title' => '❓ FAQ Estruturado – Fabricante de Mangueiras de Incêndio em São Paulo',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [
                    ['item' => '1.	As mangueiras MIB são certificadas? ✔ Sim. Todas seguem a ABNT NBR 11861 + Inmetro.'],
                    ['item' => '2.	Quais comprimentos estão disponíveis? ✔ 15, 20, 25 e 30 m.'],
                    ['item' => '3.	Posso comprar por metro? ❌ Não. Apenas nos comprimentos normatizados.'],
                    ['item' => '4.	Qual modelo é indicado para residências? ✔ Tipo 1 – Predyflex.'],
                    ['item' => '5.	Qual o modelo mais robusto? ✔ Tipo 5 – Ruberflex, indicado para uso extremo.'],
                    ['item' => '6.	A MIB entrega em todo SP? ✔ Sim, com logística própria.'],
                    ['item' => '7.	Todas as mangueiras passam por testes? ✔ Sim, os 19 exigidos pela ABNT.'],
                    ['item' => '8.	Qual a garantia? ✔ 12 meses contra defeitos de fabricação.'],
                    ['item' => '9.	Quem pode instalar? ✔ Empresas credenciadas com projeto aprovado pelo Corpo de Bombeiros.'],
                    ['item' => '10.	Por que comprar da MIB? ✔ Atendimento humanizado, preço justo e segurança com economia.'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
        ]
    ],
    [
        'order' => 14,
        'title' => '🔗 Links Oficiais – Referência Técnica',
        'content-list' => [
            [
                'order' => 1,
                'image' => '',
                'content' => '',
                'list' => [
                    ['item' => '• ABNT NBR 11861 – Catálogo Oficial: <a href="https://www.abntcatalogo.com.br/norma.aspx?ID=356331" target="_blank">https://www.abntcatalogo.com.br/norma.aspx?ID=356331</a>'],
                    ['item' => '• Inmetro – Regulamentação de Produtos: <a href="https://www.gov.br/inmetro/pt-br" target="_blank">https://www.gov.br/inmetro/pt-br</a>'],
                    ['item' => '• Corpo de Bombeiros SP – Projetos de Prevenção: <a href="https://www.corpodebombeiros.sp.gov.br" target="_blank">https://www.corpodebombeiros.sp.gov.br</a>'],
                ],
                'table' => [],
                'table-with-title' => [],
                'list-with-title' => []
            ]
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