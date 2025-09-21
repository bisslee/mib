<?php
/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Informações Técnicas Mangueiras de Incêndio – ABNT NBR 11861 - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Informações Técnicas Mangueiras de Incêndio conforme ABNT NBR 11861. Tipos 1 a 5 em 15, 20, 25 e 30 m, certificados ABNT + Inmetr',
    'keywords' => 'Luz de emergência, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes, ABNT NBR, Inmetro',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/informacoes-tecnicas-mangueiras-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'Informações Técnicas Mangueiras de Incêndio'; // deve corresponder ao item do menu

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
    ['text' => 'Informações Técnicas Mangueiras de Incêndio', 'active' => true]
];

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb
include __DIR__ . '/../includes/breadcrumb.php';

$HeroSection = [
    'title' => 'Informações Técnicas Mangueiras de Incêndio – ABNT NBR 11861',
    'subtitle' => 'Informações Técnicas Mangueiras de Incêndio conforme ABNT NBR 11861. Tipos 1 a 5 em 15, 20, 25 e 30 m, certificados ABNT + Inmetro'
];

$PageContent = [
    'sections' => [
        [
            'order' => 1,
            'title' => '',
            'content-list' =>[
                [
                    'order' => 2,
                    'image' => '/assets/img/informacoes-tecnicas/logo.jpg',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '💡 A MIB é especialista em atender condomínios, indústrias, comércios, hospitais, galpões e transportadoras com equipamentos contra incêndio certificados. ⚠️ Não saia do site sem solicitar seu orçamento: iluminação de emergência é item obrigatório e salva vidas em evacuações.',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '⚠️ A escolha correta garante aprovação em vistorias, segurança de pessoas e preservação do patrimônio.'],
                        ['item' => '✅ Ao adquirir sua mangueira de incêndio com a MIB, você tem a certeza de receber produtos certificados ABNT + Inmetro, com qualidade superior e suporte especializado do início ao pós-venda'] 
                    ],
                    'table' => [],
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'list-with-title' => [
                        'title' => '🔥 O que a NBR 11861 determina',
                        'list' => [
                            ['item' => '• Diâmetros: Tipo 1 → 40 mm (1½"); Tipos 2 a 5 → 40 mm (1½") e 65 mm (2½").'],
                            ['item' => '• Comprimentos oficiais: 15, 20, 25 e 30 m (⚠️ proibida a venda por metro).'],
                            ['item' => '• Pressões mínimas: trabalho, ensaio e ruptura definidas por tipo.'],
                            ['item' => '• Revestimentos: interno em borracha sintética; externo em poliéster, borracha nitrílica ou PVC reforçado.'],
                            ['item' => '• Identificação obrigatória: tipo, fabricante, lote, ano e certificação.'],
                            ['item' => '• Tolerância: comprimento efetivo ≥ 95% do nominal (ex.: 30 m → mínimo 28,5 m).'],
                            ['item' => '• Massa linear: limites estabelecidos pela norma.'],
                            ['item' => '• Alongamento sob pressão: ≤ 10% do comprimento.'],
                            ['item' => '• Torque de acoplamento: engates devem suportar esforço sem deformações ou vazamentos.']
                        ]
                    ]
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'list-with-title' => [
                        'title' => '📋 Ensaios obrigatórios – NBR 11861 (19 testes)',
                        'list' => [
                            ['item' => '1.	Hidrostático'],
                            ['item' => '2.	Ruptura'],
                            ['item' => '3.	Perda de carga'],
                            ['item' => '4.	Abrasão'],
                            ['item' => '5.	Flexão repetida'],
                            ['item' => '6.	Aderência entre camadas'],
                            ['item' => '7.	Estanqueidade'],
                            ['item' => '8.	Envelhecimento acelerado'],
                            ['item' => '9.	Ozônio'],
                            ['item' => '10.	Superfície quente'],
                            ['item' => '11.	Impacto'],
                            ['item' => '12.	Tração'],
                            ['item' => '13.	Rasgo'],
                            ['item' => '14.	Frio'],
                            ['item' => '15.	Dimensional'],
                            ['item' => '16.	Acoplamento'],
                            ['item' => '17.	Massa linear'],
                            ['item' => '18.	Alongamento sob pressão'],
                            ['item' => '19.	Torque de acoplamento']
                        ]
                    ]
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '🔹 Modelos e Especificações Técnicas (ABNT NBR 11861)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '<h2>🏠 Predyflex – Tipo 1 (Residencial)</h2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 2,
                    'image' => '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                            ['item' => '• Uso: edifícios residenciais e hidrantes de uso restrito a moradores'],
                            ['item' => '• Diâmetro interno: 40 mm (1½")'],
                            ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                            ['item' => '• Pressão de trabalho (máx.): 10 kgf/cm²'],
                            ['item' => '• Pressão de ensaio hidrostático: 20 kgf/cm²'],
                            ['item' => '• Pressão mínima de ruptura: 30 kgf/cm²'],
                            ['item' => '• Revestimento interno: borracha sintética vulcanizada, resistente à água potável'],
                            ['item' => '• Revestimento externo: tecido de poliéster de alta tenacidade'],
                            ['item' => '• Observação: uso restrito, não indicado para Corpo de Bombeiros'],
                    ],
                    'table' => []
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '<h2>🏢 Superflex – Tipo 2 (Comercial e Bombeiros)</h2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 5,
                    'image' => '/assets/img/informacoes-tecnicas/mangueira-tipo-2-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '•Uso: prédios comerciais, depósitos, indústrias leves, brigadas particulares e Corpo de Bombeiros'],
                        ['item' => '•Diâmetros internos disponíveis: 40 mm (1½") e 65 mm (2½")'],
                        ['item' => '•Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                        ['item' => '•Pressão de trabalho (máx.): 14 kgf/cm²'],
                        ['item' => '•Pressão de ensaio hidrostático: 28 kgf/cm²'],
                        ['item' => '•Pressão mínima de ruptura: 45 kgf/cm²'],
                        ['item' => '•Revestimento interno: borracha sintética preta aderente à trama'],
                        ['item' => '•Revestimento externo: poliéster de alta tenacidade, com resistência à abrasão'],
                        ['item' => '•Observação: homologado para uso em emergências profissionais'],
                    ],
                    'table' => []
                ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '<h2>⚓ Superflex Capa Dupla – Tipo 3 (Naval/Industrial)</h2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 8,
                    'image' => '/assets/img/informacoes-tecnicas/mangueira-tipo-3-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 9,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '• Uso: setor naval, estaleiros, plataformas marítimas, refinarias e indústrias pesadas'],
                        ['item' => '• Diâmetros internos disponíveis: 40 mm (1½") e 65 mm (2½")'],
                        ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                        ['item' => '• Pressão de trabalho (máx.): 15 kgf/cm²'],
                        ['item' => '• Pressão de ensaio hidrostático: 30 kgf/cm²'],
                        ['item' => '• Pressão mínima de ruptura: 60 kgf/cm²'],
                        ['item' => '• Revestimento interno: borracha sintética especial aderente à camada têxtil'],
                        ['item' => '• Revestimento externo: dupla capa de poliéster de alta tenacidade, reforçada para abrasão'],
                        ['item' => '• Diferencial: maior durabilidade em ambientes úmidos, salinos e de alto impacto'],
                    ],
                    'table' => []
                ],
                [
                    'order' => 10,
                    'image' => '',
                    'content' => '<h2>🏭 Plastflex – Tipo 4 (Industrial Severo)</h2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 11,
                    'image' => '/assets/img/informacoes-tecnicas/mangueira-tipo-4-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 12,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '• Uso: indústrias químicas, petroquímicas, siderúrgicas e locais com agentes agressivos'],
                        ['item' => '• Diâmetros internos disponíveis: 40 mm (1½") e 65 mm (2½")'],
                        ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                        ['item' => '• Pressão de trabalho (máx.): 14 kgf/cm²'],
                        ['item' => '• Pressão de ensaio hidrostático: 28 kgf/cm²'],
                        ['item' => '• Pressão mínima de ruptura: 45 kgf/cm²'],
                        ['item' => '• Revestimento interno: borracha sintética vulcanizada aderente'],
                        ['item' => '• Revestimento externo: PVC reforçado com borracha nitrílica de alta resistência'],
                        ['item' => '• Resistência adicional: contato com derivados de petróleo e solventes químicos'],
                    ],
                    'table' => []
                ],
                [
                    'order' => 13,
                    'image' => '',
                    'content' => '<h2>🔥 Ruberflex – Tipo 5 (Industrial Extremo e Bombeiros)</h2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 14,
                    'image' => '/assets/img/informacoes-tecnicas/mangueira-tipo-5-mib.png',
                    'content' => '',
                    'list' => [
                        ['item' => '• Uso: refinarias, petroquímicas, portos, aeroportos e Corpo de Bombeiros em operações críticas'],
                        ['item' => '• Diâmetros internos disponíveis: 40 mm (1½") e 65 mm (2½")'],
                        ['item' => '• Comprimentos disponíveis: 15, 20, 25 e 30 metros'],
                        ['item' => '• Pressão de trabalho (máx.): 14 kgf/cm²'],
                        ['item' => '• Pressão de ensaio hidrostático: 45 kgf/cm²'],
                        ['item' => '• Pressão mínima de ruptura: 55 kgf/cm² (ajuste conforme NBR 11861 para este tipo)'],
                        ['item' => '• Revestimento interno: borracha sintética especial resistente a altas temperaturas'],
                        ['item' => '• Revestimento externo: borracha nitrílica de alta performance, resistente a óleos e combustíveis'],
                        ['item' => '• Reforço: fios têxteis sintéticos de alta tenacidade'],
                        ['item' => '• Diferencial: máxima robustez para cenários de risco elevado, inclusive em contato com derivados inflamáveis'],
                    ],
                    'table' => []
                ],
                [
                    'order' => 15,
                    'image' => '',
                    'content' => '<h2>📊 Tabela Comparativa – Pressões NBR 11861 (compacta)</h2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 16,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [
                        'headers' => ['Tipo', 'Ø (mm/pol.)', 'Trabalho', 'Ensaio', 'Ruptura', 'Aplicação'],
                        'rows' => [
                            ['item' => ['1 – Predyflex', '40 (1½")', '10', '20', '30', 'Residencial']],
                            ['item' => ['2 – Superflex', '40 / 65 (1½" / 2½")', '14', '28', '45', 'Comercial/Bombeiros']],
                            ['item' => ['3 – Superflex CD', '40 / 65 (1½" / 2½")', '15', '30', '60', 'Naval / Industrial']],
                            ['item' => ['4 – Plastflex', '40 / 65 (1½" / 2½")', '14', '28', '45', 'Químico / Petroquímico']],
                            ['item' => ['5 – Ruberflex', '40 / 65 (1½" / 2½")', '14', '42', '45', 'Bombeiros / Extremo']]
                        ]
                    ]
                ],
                [
                    'order' => 17,
                    'image' => '',
                    'content' => '⚠️ Comprimentos normatizados: 15, 20, 25 e 30 m',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 18,
                    'image' => '',
                    'content' => '<h2>📊 Tabela Técnica + Visual (Catálogo MIB – versão compacta)</h2>',
                    'list' => [],
                    'table' => []
                ],
                [
                    'order' => 19,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [
                        'headers' => ['Tipo', 'Ø (mm/pol.)', 'Trab.', 'Ensaio', 'Rupt.', 'Along.', 'Massa', 'Torque', 'Abr.', 'Aplicação'],
                        'rows' => [
                            ['item' => ['1 – Predyflex', '40 (1½")', '10', '20', '30', '≤10%', 'NBR', 'NBR', '≥ ciclos', 'Residencial']],
                            ['item' => ['2 – Superflex', '40 / 65 (1½" / 2½")', '14', '28', '42', '≤10%', 'NBR', 'NBR', '≥ ciclos', 'Comercial / Bombeiros']],
                            ['item' => ['3 – Superflex CD', '40 / 65 (1½" / 2½")', '15', '30', '45', '≤10%', 'NBR', 'NBR', 'Alta', 'Naval / Industrial']],
                            ['item' => ['4 – Plastflex', '40 / 65 (1½" / 2½")', '14', '28', '42', '≤10%', 'NBR', 'NBR', 'Quím./Abr.', 'Químico / Petroquímico']],
                            ['item' => ['5 – Ruberflex', '40 / 65 (1½" / 2½")', '14', '42', '63', '≤10%', 'NBR', 'NBR', 'Máx.', 'Bombeiros / Extremo']]
                        ]
                    ]
                ]
            ]
        ],
        [
            'order' => 3,
            'title' => '❓ FAQ – Informações Técnicas Mangueiras de Incêndio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '1. Quais comprimentos existem? → 15, 20, 25 e 30 m'],
                        ['item' => '2. Posso comprar por metro? → Não, proibido pela NBR 11861'],
                        ['item' => '3. Todas têm certificação? → Sim, ABNT + Inmetro'],
                        ['item' => '4. Qual modelo residencial? → Tipo 1 (Predyflex)'],
                        ['item' => '5. Qual a mais robusta? → Tipo 5 (Ruberflex)'],
                    ],
                    'table' => []
                ]
            ],
        ],
        [
            'order' => 4,
            'title' => '📌 Conclusão',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'As <b>Informações Técnicas Mangueiras de Incêndio</b> da MIB seguem integralmente a <b>ABNT NBR 11861</b>. Cada modelo é submetido a 19 ensaios obrigatórios e atende pressões, comprimentos e revestimentos normatizados. Do uso residencial ao industrial extremo, as mangueiras MIB oferecem segurança, desempenho e conformidade legal.',
                    'list' => [],
                    'table' => []
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
        usort($sections, function($a, $b) {
            return $a['order'] - $b['order'];
        });

        // Loop para renderizar cada seção
        foreach ($sections as $section):
            // Ordenar itens de conteúdo por ordem
            $content_items = $section['content-list'];
            usort($content_items, function($a, $b) {
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
                                        <div class="table-responsive">
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
