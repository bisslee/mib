<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Dicas de Cuidados com Mangueiras de Incêndio – MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Dicas de cuidados com mangueiras de incêndio MIB. Normas ABNT NBR 11861 e 12779, inspeções, testes hidrostáticos, tolerância de comprimento, limpeza, armazenamento e garantia de 12 meses',
    'keywords' => 'Luz de emergência, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas//dicas-de-cuidados-mangueira-de-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'Dicas de Cuidados com Mangueiras de Incêndio'; // deve corresponder ao item do menu

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
    ['text' => 'Dicas de Cuidados com Mangueiras de Incêndio', 'active' => true]
];

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb
include __DIR__ . '/../includes/breadcrumb.php';

$HeroSection = [
    'title' => 'Dicas de Cuidados com Mangueiras de Incêndio',
    'subtitle' => 'Normas ABNT NBR 11861 e 12779, inspeções, testes hidrostáticos, tolerância de comprimento, limpeza, armazenamento e garantia de 12 meses'
];

$PageContent = [
    'sections' => [
        [
            'order' => 1,
            'title' => '',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/aduchamento-mangueira-15.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'A MIB – Mangueiras de Incêndio Brasil é especialista em fornecer mangueiras de combate a incêndio certificadas ABNT + Inmetro para condomínios, indústrias, comércios e hospitais. Para garantir máxima eficiência e durabilidade, é indispensável seguir a ABNT NBR 11861 (fabricação) e a ABNT NBR 12779 (inspeção e manutenção).',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '⚠️ ATENÇÃO: É de suma importância contratar empresas sérias e certificadas, com equipamentos adequados, para executarem os testes hidrostáticos obrigatórios a cada 12 meses. Em caso de falha, solicite fotos e vídeos do local exato onde o problema ocorreu. Antes de enviar a mangueira para teste, identifique-a de forma clara para ter certeza de que receberá a mesma unidade após o ensaio.',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '🔹 O uso destas dicas de cuidados com mangueiras de incêndio tem como objetivo aumentar a durabilidade da sua mangueira de combate a incêndio, reduzindo custos e manutenções no condomínio ou empresa. Essas orientações garantem que a mangueira esteja sempre pronta para uso, prolongam sua vida útil e asseguram conformidade com projetos de incêndio aprovados pelo Corpo de Bombeiros.',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '⚠️ Importante: mangueiras de incêndio não podem ser vendidas por metro. Sempre devem seguir os comprimentos normatizados: 15, 20, 25 e 30 m.',
                    'list' => [],
                    'table' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '⚠️ Instalação e Aquisição de Equipamentos Contra Incêndio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '🔹 Peça sempre o Certificado ABNT ao vendedor. Toda instalação deve ser feita com base em projeto técnico aprovado pelo Corpo de Bombeiros, em conformidade com ABNT e Inmetro. Isso garante segurança legal, preservação do patrimônio e aprovação em vistorias.',
                    'list' => [],
                    'table' => [],
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '📌 Nunca adquira equipamentos sem respaldo normativo ou fora das especificações técnicas.',
                    'list' => [],
                    'table' => []
                ]
            ],
        ],
        [
            'order' => 3,
            'title' => '🔹 Tipos de Mangueiras segundo ABNT NBR 11861',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '⚠️ A escolha correta garante aprovação em vistorias, segurança de pessoas e preservação do patrimônio. O uso destas dicas de cuidados com mangueiras de combate a incêndio tem como objetivo aumentar a durabilidade do equipamento, reduzindo custos de manutenção. Essas orientações mantêm a mangueira sempre pronta para uso e em conformidade com projetos de incêndio aprovados pelo Corpo de Bombeiros.',
                    'list' => [],
                    'table' => [],
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '<H2>🏠 Tipo 1 – Predyflex (Residencial)</H2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 3,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '✔ Uso: edifícios residenciais'],
                        ['item' => '❌ Não usar: comércio/indústria'],
                    ],
                    'table' => []
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Especificações Técnicas (NBR 11861):',
                        'list' => [
                            ['item' => '• Diâmetro interno: 40 mm (1½”)'],
                            ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                            ['item' => '• Pressão de trabalho: 10 kgf/cm²'],
                            ['item' => '• Ensaio hidrostático: 20 kgf/cm²'],
                            ['item' => '• Ruptura mínima: 35 kgf/cm²'],
                            ['item' => '• Revestimento interno: borracha'],
                            ['item' => '• Revestimento externo: tecido de poliéster'],
                        ]
                    ],
                ]
            ],
        ],
        [
            'order' => 4,
            'title' => '🏠 Tipo 2 – Superflex (Comercial/Industrial)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-2-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '✔ Uso: prédios comerciais, depósitos, brigadas'],
                        ['item' => '❌ Não usar: ambientes químicos severos'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Especificações Técnicas (NBR 11861):',
                        'list' => [
                            ['item' => '• Diâmetro interno: 40 mm (1½”)'],
                            ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                            ['item' => '• Pressão de trabalho: 10 kgf/cm²'],
                            ['item' => '• Ensaio hidrostático: 20 kgf/cm²'],
                            ['item' => '• Ruptura mínima: 35 kgf/cm²'],
                            ['item' => '• Revestimento interno: borracha'],
                            ['item' => '• Revestimento externo: tecido de poliéster'],
                        ]
                    ]
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Dicas de Cuidados:',
                        'list' => [
                            ['item' => '• Enrole em formato circular para evitar dobras permanentes.'],
                            ['item' => '• Evite contato direto com óleo ou graxa.'],
                            ['item' => '• Verifique anualmente a estanqueidade em ensaio hidrostático.'],
                            ['item' => '• Mantenha a mangueira longe de produtos químicos agressivos.'],
                        ]
                    ]
                ]

            ]
        ],
        [
            'order' => 5,
            'title' => '⚓ Tipo 3 – Superflex Capa Dupla (Naval/Industrial Pesado)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-3-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '✔ Uso: setor naval, estaleiros, indústrias pesadas'],
                        ['item' => '❌ Não usar: uso residencial'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Especificações Técnicas (NBR 11861):',
                        'list' => [
                            ['item' => '• Diâmetros internos: 40 mm (1½”) e 65 mm (2½”)'],
                            ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                            ['item' => '• Pressão de trabalho: 15 kgf/cm²'],
                            ['item' => '• Ensaio hidrostático: 28 kgf/cm²'],
                            ['item' => '• Ruptura mínima: 60 kgf/cm²'],
                            ['item' => '• Revestimento interno: borracha nitrílica'],
                            ['item' => '• Revestimento externo: dupla capa de poliéster de alta resistência'],
                        ]
                    ]
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Dicas de Cuidados:',
                        'list' => [
                            ['item' => '• Lave com água doce após uso em ambiente salino (naval).'],
                            ['item' => '• Evite armazenar dobrada em locais úmidos.'],
                            ['item' => '• Lubrifique conexões regularmente para evitar travamentos.'],
                            ['item' => '• Ideal manter em suportes aéreos para não ter contato direto com o piso.'],
                        ]
                    ]
                ]
            ]
        ],
        [
            'order' => 6,
            'title' => '🏭 Tipo 4 – Plastflex (Químico/Petroquímico)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-4-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '✔ Uso: fábricas químicas e petroquímicas'],
                        ['item' => '❌ Não usar: residência'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Especificações Técnicas (NBR 11861):',
                        'list' => [
                            ['item' => '• Diâmetros internos: 40 mm (1½”) e 65 mm (2½”)'],
                            ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                            ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                            ['item' => '• Ensaio hidrostático: 28 kgf/cm²'],
                            ['item' => '• Ruptura mínima: 45 kgf/cm²'],
                            ['item' => '• Revestimento interno: borracha sintética resistente a agentes químicos'],
                            ['item' => '• Revestimento externo: tecido com tratamento especial anti-óleo e anti-químico'],
                        ]
                    ]
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Dicas de Cuidados:',
                        'list' => [
                            ['item' => '• Nunca use em locais residenciais.'],
                            ['item' => '• Armazene em ambiente ventilado e longe de vapores químicos.'],
                            ['item' => '• Após contato com produtos químicos, lave imediatamente com água corrente.'],
                            ['item' => '• Revise periodicamente a integridade do revestimento interno.'],
                        ]
                    ]
                ]
            ]
        ],
        [
            'order' => 7,
            'title' => '🚒 Tipo 5 – Ruberflex (Bombeiros/Aeroportos/Portos)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-5-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '✔ Uso: petroquímicas, portos, aeroportos, Corpo de Bombeiros'],
                        ['item' => '❌ Não usar: residências/baixo porte'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Especificações Técnicas (NBR 11861):',
                        'list' => [
                            ['item' => '• Diâmetros internos: 40 mm (1½”) e 65 mm (2½”)'],
                            ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                            ['item' => '• Pressão de trabalho: 14 kgf/cm²'],
                            ['item' => '• Ensaio hidrostático: 28 kgf/cm²'],
                            ['item' => '• Ruptura mínima: 45 kgf/cm²'],
                            ['item' => '• Revestimento interno: borracha nitrílica de alta performance'],
                            ['item' => '• Revestimento externo: borracha vulcanizada super resistente'],
                        ]
                    ]
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Dicas de Cuidados:',
                        'list' => [
                            ['item' => '• Guarde em locais secos e limpos, sem contato direto com o solo.'],
                            ['item' => '• Realize testes de pressão regularmente (mínimo 1 vez ao ano).'],
                            ['item' => '• Após o uso, higienize bem e mantenha enrolada em carretel adequado.'],
                            ['item' => '• Não deixe exposta por longos períodos ao sol sem abrigo.'],
                        ]
                    ]
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [
                        'title' => '📊 Tabela Comparativa das Mangueiras MIB (Compacta)',
                        'table' => [
                            'headers' => ['Modelo (Tipo)', 'Diâmetro(s)', 'Comprimentos', 'Pressões (kgf/cm²)', 'Aplicações'],
                            'rows' => [
                                ['item' => ['Predyflex – 1', '40 mm (1½”)', '15 a 30 m', 'Trabalho: 10 · Ensaio: 20 · Ruptura: 35', 'Residencial']],
                                ['item' => ['Superflex – 2', '40 mm (1½”) e 65 mm (2½”)', '15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Comercial / Brigadas']],
                                ['item' => ['Superflex CD – 3', '40 mm (1½”) e 65 mm (2½”)', '15 a 30 m', 'Trabalho: 15 · Ensaio: 28 · Ruptura: 60', 'Naval / Industrial']],
                                ['item' => ['Plastflex – 4', '40 mm (1½”) e 65 mm (2½”)', '15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Químico / Petroquímico']],
                                ['item' => ['Ruberflex – 5', '40 mm (1½”) e 65 mm (2½”)', '15 a 30 m', 'Trabalho: 14 · Ensaio: 28 · Ruptura: 45', 'Bombeiros / Aeroportos']],
                            ]
                        ]
                    ],
                    'list-with-title' => []
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '⚠️ Atenção: apenas comprimentos padronizados (15, 20, 25 e 30 m), conforme ABNT NBR 11861.',
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
                        'title' => '📏 Comprimento Nominal e Tolerância (NBR 11861)<br>O comprimento efetivo não pode ser inferior a 95% do nominal. Exemplos:',
                        'list' => [
                            ['item' => '• 15 m → mínimo 14,25 m'],
                            ['item' => '• 20 m → mínimo 19 m'],
                            ['item' => '• 25 m → mínimo 23,75 m'],
                            ['item' => '• 30 m → mínimo 28,5 m'],
                        ]
                    ]
                ],
                [
                    'order' => 8,
                    'image' => '',
                    'content' => '👉 Essa tolerância evita reprovações em inspeções do Corpo de Bombeiros.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 9,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '✅ Inspeções e Manutenção (ABNT NBR 12779)',
                        'list' => [
                            ['item' => '• Inspção visual: a cada 3 meses.'],
                            ['item' => '• Ensaio hidrostático: obrigatório a cada 12 meses.'],
                            ['item' => '• Registros obrigatórios: histórico de inspeções e manutenções.'],
                            ['item' => '• Identificação prévia antes de enviar para testes externos.'],
                            ['item' => '• Solicitar fotos/vídeos em caso de falha.'],
                            ['item' => '• Apenas empresas certificadas devem executar ensaios.'],
                        ]
                    ]
                ],
                [
                    'order' => 10,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '⚠️ Cuidados Durante o Uso',
                        'list' => [
                            ['item' => '• Evitar contato com cantos vivos, cortes e brasas.'],
                            ['item' => '• Não fechar o esguicho bruscamente (golpe de aríete).'],
                            ['item' => '• Nunca arrastar a mangueira vazia.'],
                            ['item' => '• Usar mangueiras específicas para treinamentos.'],
                        ]
                    ]
                ],
                [
                    'order' => 11,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '🧽 Limpeza Correta',
                        'list' => [
                            ['item' => '• Escova de cerdas macias.'],
                            ['item' => '• Água potável e sabão neutro.'],
                            ['item' => '• Secagem à sombra.'],
                        ]
                    ]
                ],
                [
                    'order' => 12,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '📦 Armazenamento Adequado',
                        'list' => [
                            ['item' => '• Local seco, ventilado e protegido.'],
                            ['item' => '• Evitar contato com solventes e óleos.'],
                            ['item' => '• Guardar em abrigos próprios.'],
                        ]
                    ]
                ],
                [
                    'order' => 13,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '⚠️ Possíveis Falhas Comuns',
                        'list' => [
                            ['item' => '• Desgaste, cortes, abrasão.'],
                            ['item' => '• Ressecamento e desprendimento do revestimento.'],
                            ['item' => '• Vazamentos e falhas de vedação.'],
                        ]
                    ]
                ],
                [
                    'order' => 14,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '♻️ Descarte Responsável',
                        'list' => [
                            ['item' => '• Sempre em conformidade com órgãos ambientais locais.'],
                        ]
                    ]
                ],
                [
                    'order' => 15,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '🛠️ Garantia – Termos e Procedimentos',
                        'list' => [
                            ['item' => '• 12 meses contra defeitos de fabricação.'],
                            ['item' => '• Procedimento: NF + fotos.'],
                            ['item' => '• CFOP 5.949 (SP) ou 6.949 (outros estados).'],
                            ['item' => '• Frete por conta do cliente (ressarcimento se comprovado defeito).'],
                        ]
                    ]
                ]
            ]
        ],
        [
            'order' => 8,
            'title' => '❓ FAQ – Perguntas Frequentes',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '• Inspção? → Visual trimestral; hidrostático anual.'],
                        ['item' => '• Treinamento? → Usar mangueiras específicas.'],
                        ['item' => '• Vida útil? → Até 10 anos.'],
                        ['item' => '• Pode lavar pisos? → Não.'],
                        ['item' => '• Como armazenar? → Abrigo próprio.'],
                        ['item' => '• Comprimentos oficiais? → 15, 20, 25, 30 m.'],
                        ['item' => '• Limpeza? → Escova macia, sabão neutro, sombra.'],
                        ['item' => '• Garantia? → 12 meses.'],
                        ['item' => '• Quem pode manter? → Apenas empresas certificadas.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '📌 Conclusão',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'Seguindo estas dicas de cuidados com mangueiras de incêndio, respeitando as normas ABNT NBR 11861 e NBR 12779, suas mangueiras estarão sempre prontas para proteger vidas e patrimônios.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '🔗 Links Oficiais:',
                        'list' => [
                            ['item' => '• <a href="https://www.abntcatalogo.com.br/norma.aspx?ID=356331" target="_blank">ABNT NBR 11861</a>'],
                            ['item' => '• <a href="https://www.abntcatalogo.com.br/norma.aspx?ID=336608" target="_blank">ABNT NBR 12779</a>'],
                            ['item' => '• <a href="https://www.gov.br/inmetro/pt-br" target="_blank">Inmetro </a>'],
                            ['item' => '• <a href="https://www.corpodebombeiros.sp.gov.br" target="_blank">Corpo de Bombeiros SP</a>'],
                        ]
                    ]
                ]
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