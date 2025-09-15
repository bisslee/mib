<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Validade da Mangueira de Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Validade da mangueira de incêndio — entenda vida útil, ensaios obrigatórios ABNT NBR 12779, selo Inmetro e quando realizar a troca preventiva. Evite riscos com mangueiras antigas sem certificação.',
    'keywords' => 'Validade da mangueira de incêndio, vida útil, ensaios obrigatórios ABNT NBR 12779, selo Inmetro, troca preventiva, riscos com mangueiras antigas sem certificação',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/validade-da-mangueira-de-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'Validade da Mangueira de Incêndio'; // deve corresponder ao item do menu

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
    ['text' => 'Validade da Mangueira de Incêndio', 'active' => true]
];

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb
include __DIR__ . '/../includes/breadcrumb.php';

$HeroSection = [
    'title' => 'Validade da Mangueira de Incêndio: Prazo, Troca e Certificação',
    'subtitle' => 'Vida útil, ensaios obrigatórios ABNT NBR 12779, selo Inmetro e quando realizar a troca preventiva. Evite riscos com mangueiras antigas sem certificação.Subtítulo ou descrição da página'
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
                    'content' => '💡 A <b>MIB Mangueiras de Incêndio Brasil atende condomínios, indústrias, hospitais, galpões e comércios</b> em todo o Brasil com soluções completas e certificadas.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => 'Saber qual é a <b>validade da mangueira de incêndio</b> é essencial para proteger vidas, evitar reprovações em vistorias e reduzir riscos de falhas em emergências.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '<b>📲 Se estiver em dúvida se deve ou não trocar sua mangueira de combate a incêndio, fale conosco no WhatsApp.</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => 'As normas da <b>ABNT NBR 11861 (fabricação)</b> e da <b>ABNT NBR 12779 (manutenção e ensaio hidrostático anual)</b> determinam que a <b>vida útil da mangueira de incêndio</b> depende não apenas do tempo de uso, mas também das condições de armazenamento, manuseio e aprovações periódicas em ensaios obrigatórios.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '🔥 Alerta de segurança',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '👉 Se o seu condomínio ou empresa ainda utiliza <b>mangueiras de incêndio muito antigas ou sem certificação ABNT + Inmetro</b>, é hora de agir:',
                        'list' => [
                            ['item' => '⚠️ O prazo de validade da mangueira de incêndio é indefinido, mas modelos sem certificação apresentam menor resistência aos intemperismos. A borracha pode estar ressecada, com vincos ou fissuras.'],
                            ['item' => '🚫 O fato de a mangueira nunca ter sido utilizada não significa que ela está em boas condições. O material envelhece naturalmente com o tempo.'],
                            ['item' => '🔴 Mangueiras não certificadas representam alto risco de rompimento em caso de sinistro.'],
                            ['item' => '💰 Seguradoras podem negar indenizações se o equipamento não atender às normas vigentes.'],
                        ]
                    ]
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '✅ <b>Recomendação MIB:</b> substitua imediatamente por <b>mangueiras de incêndio certificadas ABNT + Inmetro</b>, garantindo segurança, conformidade legal e aprovação em vistorias.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '<h2>🚨 Mangueiras de Incêndio Certificadas – MIB - Mangueiras de Incêndio Brasil 🚨</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => 'Na <b>MIB - Mangueiras de Incêndio Brasil</b> você encontra apenas <b>mangueiras novas</b>, todas certificadas pela <b>ABNT NBR 11861</b> e <b>INMETRO 547/2022</b>, aprovadas em projetos do Corpo de Bombeiros.',
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
                        'title' => '👉 Modelos disponíveis:',
                        'list' => [
                            ['item' => '<b>Tipo 2 – Superflex:</b> para prédios comerciais, escolas e hospitais.'],
                            ['item' => '<b>Tipo 3 – Superflex Capa Dupla:</b> uso industrial, shoppings e áreas navais.'],
                            ['item' => '<b>Tipo 4 – Plastflex:</b> indicada para refinarias, químicos e ambientes agressivos.'],
                            ['item' => '<b>Tipo 5 – Ruberflex:</b> máxima resistência para petroquímicas, navios e mineração.'],
                        ]
                    ]
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '<b>✅ Somente mangueiras novas, com garantia e documentação oficial.</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 3,
            'title' => '📌 você sabia? — O que a NBR 12779 diz sobre testes em mangueiras não certificadas',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'A <b>ABNT NBR 12779 – Inspeção, manutenção e cuidados em mangueiras de incêndio</b> foi elaborada para tratar exclusivamente de <b>mangueiras fabricadas conforme a ABNT NBR 11861</b>, ou seja, modelos <b>certificados ABNT + Inmetro</b>.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'Isso significa que a norma <b>não reconhece nem valida testes em mangueiras sem certificação oficial</b>. Quando uma empresa tenta aplicar o ensaio hidrostático em uma mangueira não certificada, o resultado <b>não tem valor técnico nem legal</b>, já que esse equipamento não foi produzido dentro dos padrões exigidos pelas normas brasileiras.',
                    'list' => [],
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

                        'title' => '<b>⚠️ Atenção:</b>',
                        'list' => [
                            ['item' => 'Mangueiras sem selo ABNT + Inmetro <b>não podem ser utilizadas</b> em sistemas de combate a incêndio.'],
                            ['item' => '<b>O Corpo de Bombeiros não aceita laudos de ensaio</b> emitidos para esse tipo de mangueira.'],
                            ['item' => 'O uso irregular pode resultar em <b>reprovação no AVCB (Auto de Vistoria do Corpo de Bombeiros)</b> e até em <b>negação de cobertura por seguradoras</b> em caso de sinistro.'],
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
                        'title' => '<b>✅ Recomendação MIB:</b> se no seu condomínio, empresa ou indústria ainda existem <b>mangueiras de incêndio não certificadas</b>, não perca tempo tentando recuperá-las. O procedimento correto é a <b>substituição imediata por mangueiras novas, certificadas ABNT + Inmetro</b>, garantindo:',
                        'list' => [
                            ['item' => 'Conformidade com a <b>NBR 11861 (fabricação)</b>'],
                            ['item' => 'Ensaios válidos conforme a <b>NBR 12779 (manutenção e testes anuais)</b>'],
                            ['item' => 'Segurança real em caso de emergência'],
                            ['item' => 'Aprovação em vistorias do Corpo de Bombeiros'],
                            ['item' => 'Proteção patrimonial e aceitação em apólices de seguro'],
                        ]
                    ]
                ]
            ]
        ],
        [
            'order' => 4,
            'title' => '📌 Observação importante',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [

                        'title' => 'A <b>durabilidade de uma mangueira</b> de incêndio também pode variar conforme a região onde é utilizada:',
                        'list' => [
                            ['item' => '<b>🌊 Áreas marítimas:</b> a salinidade acelera o desgaste da borracha e dos acoplamentos.'],
                            ['item' => '<b>☀️ Locais muito quentes:</b> altas temperaturas podem ressecar a mangueira mais rapidamente.'],
                            ['item' => '<b>💨 Ambientes com muito vento e poeira:</b> aumentam a abrasão e reduzem a vida útil.'],
                        ]
                    ]
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '💡 Por isso, a avaliação da <b>validade da mangueira de incêndio deve sempre considerar o clima, o ambiente de instalação e os ensaios anuais previstos na <b>NBR 12779</b>.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]

        ],
        [
            'order' => 5,
            'title' => 'Vida útil e validade da mangueira de incêndio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '• <b>O tempo de uso recomendado</b> varia de acordo com o projeto aprovado pelo Corpo de Bombeiros, mas em média, após <b>5 anos de fabricação</b>, as mangueiras devem ser submetidas a ensaios mais criteriosos.'],
                        ['item' => '• <b>O ensaio hidrostático anual (NBR 12779)</b> é obrigatório para verificar se a mangueira ainda pode ser usada ou se deve ser descartada.'],
                        ['item' => '• <b>O prazo de validade das mangueiras de incêndio não é apenas temporal:</b> se houver falhas nos testes, a troca deve ser imediata, mesmo antes do período limite.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 6,
            'title' => '📌 Destaque Importante — A Mangueira de Incêndio Não Tem “Data de Validade” Fixa',
            'content-list' => [
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'Diferente de produtos com prazo de vencimento impresso, a mangueira de incêndio não possui uma data de validade definida em norma.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => 'O que determina sua vida útil real é a forma como foi armazenada, cuidada, utilizada e testada ao longo dos anos.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => 'Quando a ABNT NBR 12779 estabelece ensaios anuais obrigatórios (hidrostáticos), o objetivo é justamente garantir que cada mangueira seja avaliada de acordo com sua condição individual de uso, e não apenas pelo tempo de fabricação.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '⚠️ Alerta MIB: infelizmente, muitas empresas realizam testes de forma incorreta, diferente do procedimento oficial previsto na NBR 12779. Isso pode levar à redução da durabilidade da mangueira, gerando reprovações indevidas ou, pior, aprovando equipamentos que não têm mais condições seguras de uso.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '💡 Por isso, ao tratar da validade da mangueira de incêndio, sempre escolha empresas idôneas, que sigam a norma técnica integralmente, garantindo segurança, confiabilidade e conformidade com o Corpo de Bombeiros.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 7,
            'title' => 'Critérios para decidir a troca preventiva',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '• <b>Idade da mangueira:</b> acima de 5 anos, reforçar a inspeção.'],
                        ['item' => '• <b>Reprovação em ensaio hidrostático:</b> troca imediata.'],
                        ['item' => '• <b>Danos visuais:</b> cortes, desgaste, abrasão, bolor, uniões danificadas.'],
                        ['item' => '• <b>Ausência de selo ABNT + Inmetro:</b> não pode ser utilizada em vistoria.'],
                        ['item' => '• <b>Projeto de incêndio atualizado:</b> pode exigir substituição de modelos antigos por versões mais resistentes.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '⚠️ <b>Alerta MIB:</b> quanto mais antiga a mangueira, maior a probabilidade de falhas. A <b>troca preventiva</b> é sempre mais barata e segura do que uma reprovação em vistoria ou um acidente real.
',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 8,
            'title' => '📊 Tabela comparativa — Validade e Ensaios',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [
                        'headers' => ['Critério', 'Exigência normativa (ABNT NBR 12779)'],
                        'rows' => [
                            ['item' => ['Inspeção visual', 'Trimestral (síndico / brigada)']],
                            ['item' => ['Ensaio hidrostático', '1 vez por ano']],
                            ['item' => ['Vida útil média', 'Até 5 anos, condicionada a aprovação nos ensaios']],
                            ['item' => ['Troca obrigatória', 'Quando reprovada ou fora do prazo']],
                            ['item' => ['Certificação exigida', 'Selo ABNT + Inmetro válido']],
                            ['item' => ['Consequências da não conformidade', 'Reprovação em vistoria e risco de negativa de seguro']],
                        ]
                    ],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
            ]
        ],
        [
            'order' => 9,
            'title' => '🔗 Links oficiais de referência',
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
        ],
        [
            'order' => 10,
            'title' => '❓ FAQ – Validade e Troca de Mangueiras de Incêndio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>1. Qual é a validade da mangueira de incêndio segundo a ABNT?</b><br>Não há prazo fixo universal; a vida útil é condicionada aos ensaios anuais (NBR 12779) e ao estado físico. Em média, 5 anos exigem análise mais criteriosa.'],
                        ['item' => '<b>2. Como sei se a mangueira está fora da validade?</b><br>Verifique o ano de fabricação gravado na mangueira, o histórico de ensaios e o selo ABNT + Inmetro.'],
                        ['item' => '<b>3. Posso usar mangueiras de incêndio sem selo ABNT + Inmetro?</b><br>Não. São consideradas irregulares, não passam em vistorias e podem inviabilizar indenizações de seguro.'],
                        ['item' => '<b>4. A validade da mangueira de incêndio pode ser prorrogada?</b><br>Apenas se aprovada em ensaio hidrostático anual. Caso seja reprovada, deve ser descartada.'],
                        ['item' => '<b>5. O que acontece se a mangueira vencer e continuar sendo usada?</b><br>Além do risco de falha durante um incêndio, pode haver reprovação no AVCB e multas.'],
                        ['item' => '<b>6. Qual o impacto de uma mangueira antiga no seguro do prédio?</b><br>Seguradoras podem negar cobertura se ficar comprovado que a mangueira não tinha validade ou certificação vigente.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 11,
            'title' => '📖 Micro-storytelling real',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'Em 2023, um condomínio em <b>Campinas/SP</b> teve sua vistoria do Corpo de Bombeiros reprovada porque as <b>mangueiras de incêndio tinham mais de 10 anos e não possuíam selo ABNT + Inmetro atualizado</b>.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'O seguro condominial também sinalizou que, em caso de sinistro, a indenização seria recusada.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => 'Após a orientação da <b>MIB Mangueiras de Incêndio Brasil</b>, todas as mangueiras antigas foram substituídas por <b>modelos certificados e dentro da validade</b>.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => 'O condomínio regularizou a situação, obteve o <b>AVCB aprovado</b> e ainda garantiu a tranquilidade dos moradores.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => 'Esse caso real comprova que <b>ignorar a validade da mangueira de incêndio pode gerar multas, reprovação e riscos de vida — enquanto a troca preventiva garante conformidade e segurança imediata</b>.',
                    'list' => [],
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