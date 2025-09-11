<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Mangueira de Incêndio para Condomínio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Mangueira de incêndio para condomínio Tipo 1 ABNT NBR 11861 com selo ABNT+Inmetro. Segurança para moradores, aprovação no Corpo de Bombeiros e economia garantida em São Paulo.',
    'keywords' => 'mangueira de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/mangueira-de-incendio-para-condominio.php'
];

// Identificar página atual para menu ativo
$current_page = 'Mangueira de Incêndio para Condomínio'; // deve corresponder ao item do menu

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/informacoes-tecnicas/',
        'text' => 'Informações Técnicas',
    ),
    1 => array(
        'url' => '',
        'text' => 'Mangueira de Incêndio para Condomínio',
    ),
);

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb (opcional)
if (isset($breadcrumbs)) {
    include __DIR__ . '/../includes/breadcrumb.php';
}

$HeroSection = [
    'title' => 'Mangueira de Incêndio para Condomínio (Tipo 1 ABNT NBR 11861)',
    'subtitle' => 'Segurança para moradores, aprovação no Corpo de Bombeiros e economia garantida em São Paulo'
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
                    'content' => 'As <b>mangueiras de incêndio para área residencial</b> são obrigatórias por lei e vitais para proteger moradores, visitantes e o patrimônio do condomínio. Na <b>MIB Mangueiras de Incêndio Brasil</b>, você encontra <b>mangueira de incêndio para condomínio</b> com certificação <b>ABNT NBR 11861</b> e selo <b>ABNT + INMETRO</b>, pronta para atender projetos aprovados pelo <b>Corpo de Bombeiros.</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '<b>👉 Para programador: botão de contato “Solicite seu orçamento agora”</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => 'A escolha correta garante <b>conformidade, desempenho e longevidade</b> do sistema de hidrantes.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '⚠️ Destaque normativo (importante)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '• Condomínio destinado a comércio: a mangueira deverá ser do <b>Tipo 2</b>, conforme aplicações previstas na <b>NBR 11861</b> para uso comercial.'],
                        ['item' => '• Condomínio misto (residencial + comercial): a escolha entre Tipo 1 ou Tipo 2 deve seguir <b>estritamente o projeto de incêndio aprovado</b> (Instruções Técnicas do Corpo de Bombeiros + normas ABNT/INMETRO).'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 3,
            'title' => 'Conversa direta com você, síndico ou responsável',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'Na prática, sabemos que escolher a mangueira contra incêndio residencial pode gerar dúvidas: “qual tipo usar?”, “o Corpo de Bombeiros vai aprovar?”, “meu seguro pode negar cobertura?”.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '👉 Aqui na MIB, queremos mais do que vender. Queremos ajudar você a garantir que o condomínio esteja seguro, economize e evite multas. Dê uma chance para a nossa equipe mostrar como podemos orientar e entregar os equipamentos certos, novos e certificados.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '👉 Para programador: botão de contato “Fale agora pelo WhatsApp”',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 4,
            'title' => 'Por que faz diferença no seu condomínio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'Optar por mangueiras de incêndio residenciais certificadas é mais do que cumprir uma exigência legal: é investir em segurança coletiva. A mangueira de incêndio para condomínio deve atender ao projeto, à pressão do hidrante e às condições de uso do edifício.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'A MIB fornece equipamentos novos, com rastreabilidade por lote, fabricados sob auditorias ISO 9001 e ensaios em laboratórios credenciados.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '👉 Com a MIB, você garante também acesso a equipamentos de combate a incêndio para condomínios, sempre certificados e prontos para aprovação nas vistorias.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 5,
            'title' => 'Qual mangueira usar em áreas residenciais e comerciais',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'A ABNT NBR 11861 classifica as mangueiras em cinco tipos, porém apenas a Tipo 1 é permitida para uso residencial em condomínios. Para empreendimentos comerciais, aplica-se a Tipo 2; e, em condomínios mistos, prevalece o que determina o projeto de incêndio aprovado.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'Em qualquer caso, é indispensável contar com a mangueira para hidrante de prédio que esteja de acordo com as normas e certificações exigidas.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 6,
            'title' => 'Especificações técnicas enriquecidas',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '<h2>Mangueira Tipo 1 – Residencial (condomínios residenciais)</h2>',
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
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Normas e certificações',
                        'list' => [
                            ['item' => '• ABNT NBR 11861 – Tipo 1, com selo ABNT + INMETRO.'],
                            ['item' => '• Conexões União Storz conforme ABNT NBR 14349.'],
                            ['item' => '• Manutenção/ensaio: ABNT NBR 12779 (hidrostático anual).'],
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
                        'title' => 'Dimensões e comprimentos',
                        'list' => [
                            ['item' => '• Diâmetro nominal: 1½″ (38 mm).'],
                            ['item' => '• Comprimentos: 15, 20, 25 e 30 m (proibida a venda por metro).'],
                            ['item' => '• Tolerância de comprimento: ≥ 95% do nominal.'],
                            ['item' => '• Compatível com hidrantes DN 40 (1½″) e abrigos padrão residencial.'],
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
                        'title' => 'Pressões (referência normativa)',
                        'list' => [
                            ['item' => '• Trabalho: 10 kgf/cm².'],
                            ['item' => '• Ensaio hidrostático: 21 kgf/cm².'],
                            ['item' => '• Ruptura mínima: ≥ 35 kgf/cm².'],
                        ]
                    ]
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Construção e materiais',
                        'list' => [
                            ['item' => '• Tubo interno: borracha sintética vulcanizada (EPDM).'],
                            ['item' => '• Reforço têxtil: fios de poliéster de alta tenacidade.'],
                            ['item' => '• Capa externa: poliéster com tratamento antiabrasão.'],
                            ['item' => '• Acoplamentos: Storz em latão.'],
                            ['item' => '• Identificação permanente: fabricante, lote, Tipo 1, NBR 11861 e mês/ano.'],
                        ]
                    ]
                ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Desempenho e aplicação',
                        'list' => [
                            ['item' => '• Flexível e leve, ideal para brigadas de condomínio.'],
                            ['item' => '• Resistência a dobras, abrasão e bolor.'],
                            ['item' => '• Indicada para hidrantes internos residenciais; inspeção trimestral e teste hidrostático anual.'],
                        ]
                    ]
                ],
                [
                    'order' => 8,
                    'image' => '',
                    'content' => '<h2>Mangueira Tipo 2 – Comercial e Bombeiros</h2>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 9,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-2-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 10,
                    'image' => '',
                    'content' => '<b>(apenas para prédios comerciais e conforme projeto aprovado)</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 11,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Normas e certificações',
                        'list' => [
                            ['item' => '• ABNT NBR 11861 – Tipo 2, com selo ABNT + INMETRO.'],
                            ['item' => '• Conexões União Storz conforme ABNT NBR 14349.'],
                            ['item' => '• Manutenção/ensaio: ABNT NBR 12779 (hidrostático anual).'],
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
                        'title' => 'Dimensões e comprimentos',
                        'list' => [
                            ['item' => '• Diâmetros nominais: 1½″ (38 mm) e 2½″ (65 mm).'],
                            ['item' => '• Comprimentos normatizados: 15, 20, 25 e 30 m.'],
                            ['item' => '• Compatível com hidrantes DN 40 (1½″) e DN 65 (2½″).'],
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
                        'title' => 'Pressões (referência normativa)',
                        'list' => [
                            ['item' => '• Trabalho: 14 kgf/cm².'],
                            ['item' => '• Ensaio hidrostático: 28 kgf/cm².'],
                            ['item' => '• Ruptura mínima: ≥ 45 kgf/cm².'],
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
                        'title' => 'Construção e materiais',
                        'list' => [
                            ['item' => '• Tubo interno: borracha sintética vulcanizada.'],
                            ['item' => '• Reforço têxtil: poliéster de alta tenacidade.'],
                            ['item' => '• Capa externa: poliéster com resistência mecânica.'],
                            ['item' => '• Acoplamentos: Storz em latão.'],
                            ['item' => '• Marcação permanente: fabricante, lote, Tipo 2, NBR 11861, mês/ano.'],
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
                        'title' => 'Desempenho e aplicação',
                        'list' => [
                            ['item' => '• Robustez superior ao Tipo 1.'],
                            ['item' => '• Indicada para prédios comerciais, depósitos, escolas, indústrias leves e uso por Corpos de Bombeiros.'],
                        ]
                    ]
                ],
            ]
        ],
        [
            'order' => 7,
            'title' => 'Projeto de incêndio e aprovação do Corpo de Bombeiros',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'Toda aquisição ou instalação deve seguir projeto técnico aprovado e as normas vigentes (ABNT, Inmetro e Instruções Técnicas do Corpo de Bombeiros).',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 8,
            'title' => 'Conclusão',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Ao escolher a <b>MIB Mangueiras de Incêndio Brasil</b>, você garante:',
                        'list' => [
                            ['item' => '✅ <b>Conformidade legal</b> (ABNT + Inmetro + Corpo de Bombeiros).'],
                            ['item' => '✅ <b>Economia</b> (evita retrabalho, multas e compras duplicadas).'],
                            ['item' => '✅ <b>Segurança real</b> para moradores, visitantes e patrimônio.'],
                        ]
                    ]
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '🔴 <b>Atenção:</b> usar a mangueira errada pode reprovar a vistoria do Corpo de Bombeiros e até <b>fazer o seguro do condomínio negar cobertura</b> em caso de incêndio.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '💡 Não arrisque. Fale agora com a <b>MIB</b> e tenha o equipamento certo, certificado e pronto para aprovação.',
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