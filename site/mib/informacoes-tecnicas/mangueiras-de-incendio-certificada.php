<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Mangueiras de Incêndio Certificadas ABNT - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Compre mangueiras de incêndio certificadas ABNT NBR 11861 na MIB – Mangueiras de Incêndio Brasil. Modelos Tipo 1 a 5, comprimentos de 15 a 30 m, selo ABNT + INMETRO, resistência, durabilidade e segurança para condomínios, indústrias, hospitais, galpões e comércios. Solicite já seu orçamento exclusivo.',
    'keywords' => 'Mangueiras de incêndio certificadas ABNT, mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/mangueiras-de-incendio-certificada.php'
];

// Identificar página atual para menu ativo
$current_page = 'Mangueiras de Incêndio Certificadas ABNT'; // deve corresponder ao item do menu

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
    ['text' => 'Mangueiras de Incêndio Certificadas ABNT', 'active' => true]
];

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb
include __DIR__ . '/../includes/breadcrumb.php';

$HeroSection = [
    'title' => 'Mangueiras de Incêndio Certificadas ABNT',
    'subtitle' => 'Modelos Tipo 1 a 5, comprimentos de 15 a 30 m, selo ABNT + INMETRO, <br>resistência, durabilidade e segurança para condomínios, indústrias, hospitais, galpões e comércios.</br>'
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
                    'content' => '<b>💡 Solicite já seu orçamento exclusivo com a MIB e aproveite condições especiais para condomínios residenciais, prédios comerciais, indústrias, galpões, hospitais e comércios em todo o Brasil</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '⚠️ <b>Atenção:</b> adquirir <b>mangueiras de incêndio sem certificação</b> compromete a segurança e reprova em vistorias. As <b>mangueiras de combate a incêndio certificadas ABNT</b> são a única opção que garante desempenho técnico, conformidade legal e proteção do patrimônio.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '🔥 O que são Mangueiras de Incêndio Certificadas ABNT?',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/abnt-14.jpg',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'As <b>mangueiras de incêndio certificadas ABNT NBR 11861</b> são fabricadas com materiais de alta qualidade, passando por ensaios obrigatórios de desempenho.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => 'Disponíveis em comprimentos de <b>15, 20, 25 e 30 metros</b>, abrangem os <b>Tipos 1, 2, 3, 4 e 5</b>, desenvolvidas para diferentes aplicações — <b>de condomínios e edifícios residenciais até indústrias petroquímicas e áreas de risco extremo.</b>',
                    'list' => [],
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
                        'title' => '⚙️ O processo de fabricação é rigoroso:',
                        'list' => [
                            ['item' => '•	Cada lote é rastreado desde a produção.'],
                            ['item' => '•	Ensaios realizados em laboratórios credenciados pelo INMETRO e reconhecidos pela ABNT.'],
                            ['item' => '•	Auditorias asseguram conformidade com a NBR 11861 e normas complementares como a ISO 9001.'],
                        ]
                    ]
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '👉 Assim, você garante um produto <b>seguro, confiável e aceito em vistorias do Corpo de Bombeiros.</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '✅ Vantagens das mangueiras MIB certificadas:',
                        'list' => [
                            ['item' => '•	<b>Confiabilidade técnica</b> e aprovação em inspeções.'],
                            ['item' => '•	<b>Resistência contra abrasão, cortes, superfícies quentes e bolor</b>.'],
                            ['item' => '•	<b>Eficiência real</b> no combate ao fogo.'],
                            ['item' => '•	<b>Conformidade legal</b> em projetos de prevenção de incêndios.'],
                        ]
                    ]
                ]
            ]
        ],
        [
            'order' => 3,
            'title' => '🚒 Modelos de Mangueiras de Incêndio Certificadas – Especificações Técnicas',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '<h2>🔹 Predyflex – Tipo 1 (Residenciais)</h2>',
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
                        ['item' => '•	Cor: Branca ⚪'],
                        ['item' => '•	Comprimentos: 15, 20, 25 e 30 metros'],
                        ['item' => '•	Diâmetro interno: 1 ½” (38 mm)'],
                        ['item' => '<b>• Pressão de trabalho:</b> 10 kgf/cm²'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 21 kgf/cm²'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> +45 kgf/cm²'],
                        ['item' => '<b>• Revestimento interno:</b> borracha sintética de alta resistência'],
                        ['item' => '<b>• Revestimento externo:</b> tecido de poliéster trançado'],
                        ['item' => '✔️ Aplicações: edifícios residenciais, condomínios e prédios habitacionais.'],
                        ['item' => '❌ Não indicada: áreas industriais, galpões ou indústrias químicas'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '<h2>🔹 Superflex – Tipo 2 (Comerciais e Bombeiros)</h2>',
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
                        ['item' => '•	Cor: Branca ⚪'],
                        ['item' => '•	Comprimentos: 15, 20, 25 e 30 metros'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½” (38 mm) e 2 ½” (65 mm)'],
                        ['item' => '<b>• Pressão de trabalho:</b> 14 kgf/cm²'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 28 kgf/cm²'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> +45 kgf/cm²'],
                        ['item' => '<b>• Revestimento interno:</b> borracha sintética vulcanizada'],
                        ['item' => '<b>• Revestimento externo:</b> tecido de poliéster de alta tenacidade'],
                        ['item' => '✔️ Aplicações: prédios comerciais, escolas, depósitos, shoppings, indústrias leves e uso por Corpos de Bombeiros.'],
                        ['item' => '❌ Não indicada: ambientes químicos severos ou indústrias de alto risco.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '<h2>🔹 Plastflex – Tipo 4 (Indústrias Severas)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 8,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-4-mib.png',
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
                        ['item' => '•	Cor: Vermelha 🔴'],
                        ['item' => '•	Comprimentos: 15, 20, 25 e 30 metros'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½” (38 mm) e 2 ½” (65 mm)'],
                        ['item' => '<b>• Pressão de trabalho:</b> 14 kgf/cm²'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 28 kgf/cm²'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> +45 kgf/cm²'],
                        ['item' => '<b>• Revestimento interno:</b> borracha sintética especial resistente a agentes químicos'],
                        ['item' => '<b>• Revestimento externo:</b> tecido de poliéster trançado com proteção contra abrasão'],
                        ['item' => '✔️ Aplicações: indústrias químicas, petroquímicas, fábricas de solventes, laboratórios e ambientes abrasivos.'],
                        ['item' => '❌ Não indicada: residências, prédios comerciais ou pequenas lojas.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 10,
                    'image' => '',
                    'content' => '<h2>🔹 Ruberflex – Tipo 5 (Indústrias Extremas e Bombeiros)</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 11,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-5-mib.png',
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
                        ['item' => '•	Cor: Vermelha 🔴'],
                        ['item' => '•	Comprimentos: 15, 20, 25 e 30 metros'],
                        ['item' => '<b>• Diâmetros internos:</b> 1 ½” (38 mm) e 2 ½” (65 mm)'],
                        ['item' => '<b>• Pressão de trabalho:</b> 14 kgf/cm²'],
                        ['item' => '<b>• Pressão de ensaio hidrostático:</b> 42 kgf/cm²'],
                        ['item' => '<b>• Pressão mínima de ruptura:</b> +45 kgf/cm²'],
                        ['item' => '<b>• Revestimento interno:</b> borracha nitrílica de alta durabilidade'],
                        ['item' => '<b>• Revestimento externo:</b> borracha vulcanizada com reforço têxtil de poliéster'],
                        ['item' => '✔️ Aplicações: refinarias, portos, aeroportos, indústrias petroquímicas, Corpo de Bombeiros e combate em áreas de risco extremo.'],
                        ['item' => '❌ Não indicada: residências, condomínios e pequenos estabelecimentos comerciais.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 4,
            'title' => '📊 Tabela Comparativa – Mangueiras de Incêndio MIB',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [
                        'headers' => ['Modelo', 'Cor', 'Comp.', 'Trabalho', 'Ensaio Hidrostático', 'Ruptura', 'Aplicações', 'Norma'],
                        'rows' => [
                            ['item' => ['Modelo', 'Cor', 'Comp.', 'Trabalho', 'Ensaio Hidrostático', 'Ruptura', 'Aplicações', 'Norma']],
                            ['item' => ['Predyflex – 1', 'Branca', '15–30 m', '10 kgf/cm²', '20 kgf/cm²', '+35 kgf/cm²', 'Residenciais', 'ABNT NBR 11861']],
                            ['item' => ['Superflex – 2', 'Branca', '15–30 m', '14 kgf/cm²', '28 kgf/cm²', '+45 kgf/cm²', 'Comerciais / Bombeiros', 'ABNT NBR 11861']],
                            ['item' => ['Superflex CD – 3', 'Branca', '15–30 m', '15 kgf/cm²', '30 kgf/cm²', '+60 kgf/cm²', 'Navais / Industriais', 'ABNT NBR 11861']],
                            ['item' => ['Plastflex – 4', 'Vermelha', '15–30 m', '14 kgf/cm²', '28 kgf/cm²', '+55 kgf/cm²', 'Indústrias Severas', 'ABNT NBR 11861']],
                            ['item' => ['Ruberflex – 5', 'Vermelha', '15–30 m', '14 kgf/cm²', '28 kgf/cm²', '+45 kgf/cm²', 'Bombeiros / Indústrias Extremas', 'ABNT NBR 11861']],
                        ]
                    ],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '⚠️ <b>Reforço:</b> mangueiras de incêndio não podem ser vendidas por metro, apenas nos comprimentos normatizados pela ABNT.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 5,
            'title' => '🔍 Ensaios e Testes das Mangueiras de Incêndio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'A <b>ABNT NBR 11861</b> exige <b>19 ensaios obrigatórios</b> para liberação das <b>mangueiras de combate a incêndio certificadas</b>.',
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
                        'title' => 'Principais testes:',
                        'list' => [
                            ['item' => '•	Ensaios hidrostáticos, perda de carga e ruptura.'],
                            ['item' => '•	Abrasão, flexão, aderência, impacto e rasgo.'],
                            ['item' => '•	Envelhecimento acelerado e resistência a temperaturas extremas.'],
                        ]
                    ]
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '👉 Apenas <b>mangueiras certificadas ABNT + INMETRO</b> passam em todos os testes.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '⚠️ <b>Revisão obrigatória:</b> conforme <b>ABNT NBR 12779</b>, as mangueiras devem passar em ensaios hidrostáticos a cada 12 meses.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 6,
            'title' => '❓ Perguntas Frequentes – FAQ',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '1.	Todas as mangueiras MIB são certificadas? ✔️ Sim, seguem a NBR 11861 e têm selo Inmetro.'],
                        ['item' => '2.	Quais comprimentos existem? 👉 15, 20, 25 e 30 metros.'],
                        ['item' => '3.	Posso comprar por metro? 🚫 Não, apenas nos tamanhos oficiais da ABNT.'],
                        ['item' => '4.	Qual modelo é indicado para condomínios residenciais? 👉 Predyflex – Tipo 1.'],
                        ['item' => '5.	Qual é a mais resistente? 👉 Ruberflex – Tipo 5.'],
                        ['item' => '6.	Vocês entregam para todo o Brasil? ✔️ Sim, inclusive São Paulo e regiões metropolitanas.'],
                        ['item' => '7.	Qual a garantia? ✔️ 12 meses contra defeitos de fabricação.'],
                        ['item' => '8.	O que acontece se usar o modelo errado? ❌ Pode reprovar em vistoria e falhar no combate.'],
                        ['item' => '9.	Como saber se é certificada? ✔️ Verifique selo ABNT, Inmetro e nº do certificado.'],
                        ['item' => '10.	Quem pode instalar? ✔️ Apenas empresas com projeto aprovado pelo Corpo de Bombeiros .'],

                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 7,
            'title' => '🔗 Links Oficiais – Referência Técnica',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '•	ABNT NBR 11861 – Catálogo Oficial: <a href="https://www.abntcatalogo.com.br/norma.aspx?ID=356331" target="_blank">https://www.abntcatalogo.com.br/norma.aspx?ID=356331</a>'],
                        ['item' => '•	INMETRO – Produtos Regulamentados: <a href="https://www.gov.br/inmetro/pt-br" target="_blank">https://www.gov.br/inmetro/pt-br</a>'],
                        ['item' => '•	Corpo de Bombeiros – Projetos de Prevenção: <a href="https://www.corpodebombeiros.sp.gov.br" target="_blank">https://www.corpodebombeiros.sp.gov.br</a>'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
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