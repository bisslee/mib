<?php
/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Luz de Emergência LED - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Luzes de Emergência LED - MIB de 30 LEDs a 3.000 lúmens. Certificação ABNT NBR 10898, autonomia até 5h e preços especiais para condomínios, indústrias, comércios e hospitais.',
    'keywords' => 'Luz de emergência, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/nome-da-pagina.php'
];

// Identificar página atual para menu ativo
$current_page = 'Luz de Emergência LED'; // deve corresponder ao item do menu

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/informacoes-tecnicas/',
        'text' => 'Informações Técnicas',
    ),
    1 => array(
        'url' => '',
        'text' => 'Luz de Emergência LED',
    ),
);

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb (opcional)
if (isset($breadcrumbs)) {
    include __DIR__ . '/../includes/breadcrumb.php';
}

$HeroSection = [
    'title' => 'Luz de Emergência LED',
    'subtitle' => 'Luzes de Emergência LED - MIB de 30 LEDs a 3.000 lúmens. Certificação ABNT NBR 10898, autonomia até 5h e preços especiais para condomínios, indústrias, comércios e hospitais.Subtítulo ou descrição da página'
];

$PageContent = [
    'sections' => [
        'section' => [
            'order' => 1,
            'title' => '',
            'content-list' =>[
                'item' => [
                    'order' => 1,
                    'image' => '/assets/img/informacoes-tecnicas/luz-emergência-led-18.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 2,
                    'image' => '',
                    'content' => '💡 A MIB é especialista em atender condomínios, indústrias, comércios, hospitais, galpões e transportadoras com equipamentos contra incêndio certificados. ⚠️ Não saia do site sem solicitar seu orçamento: iluminação de emergência é item obrigatório e salva vidas em evacuações.',
                    'list' => [],
                    'table' => []
                ]
            ]
        ],
        'section' => [
            'order' => 2,
            'title' => 'A importância da iluminação de emergência',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '',
                    'content' => 'A iluminação de emergência é parte obrigatória em qualquer projeto de incêndio aprovado pelo Corpo de Bombeiros. Sua ausência pode causar acidentes graves durante apagões ou evacuações. Segundo a SENASP – Secretaria Nacional de Segurança Pública, até 40% dos incidentes em evacuações estão relacionados a falhas na iluminação. Isso reforça a necessidade de adotar luminárias certificadas pela ABNT e Inmetro, como as da linha MIB.',
                    'list' => [],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 3,
            'title' => 'Linha completa de modelos MIB',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['30 LEDs Super Slim → até 25 m² | Autonomia 5h | IP20 | bateria íon de lítio'],
                        'item' => ['400 lúmens 2 Faróis → até 100 m² | Autonomia 3h | IP20 | corpo em ABS'],
                        'item' => ['1200 lúmens Compact → até 250 m² | Autonomia 2h | IP20 | bateria 3.7 V 4800 mAh'],
                        'item' => ['2200 lúmens Compact → até 450 m² | Autonomia 2h | IP20 | bivolt automático'],
                        'item' => ['3000 lúmens Compact → até 600 m² | Autonomia 2h | IP20 | faróis direcionáveis'],
                        'item' => ['Luminária IP65 1200 lúmens → até 250 m² | Autonomia 3h | IP65 | uso em áreas úmidas'],
                    ],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 4,
            'title' => '🔦 1. Luz de Emergência Autônoma 30 LEDs Super Slim – MIB',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '/assets/img/informacoes-tecnicas/luz-emergência-led-14.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 2,
                    'image' => '',
                    'content' => 'Especificações Técnicas: ABNT NBR 10898 – https://www.abntcatalogo.com.br/norma.aspx?ID=412 | Fluxo: 300 lm | Autonomia: 5h | Cobertura: até 25 m² | Bateria: íon de lítio recarregável | Tensão: bivolt automático 110/220V | IP20 | Certificação: Inmetro – Consultar certificado.',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['📌 Aplicações: corredores de condomínios, escritórios, salas de aula.'],
                        'item' => ['✔️ Autonomia até 5h | ✔️ Economia de energia 70% | ✔️ Portátil e discreta.'],
                        'item' => ['💡 Caso real: em um condomínio em SP, este modelo permitiu evacuação segura durante um apagão de 40 min.'],
                    ], 
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 5,
            'title' => '🔦 2. Luz de Emergência Autônoma 400 Lúmens 2 Faróis – MIB',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '/assets/img/informacoes-tecnicas/luz-emergência-led-15.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 2,
                    'image' => '',
                    'content' => '<b>Especificações Técnicas:</b> ABNT NBR 10898 – link oficial | Fluxo: 400 lm | Autonomia: 3h | Cobertura: até 100 m² | Corpo em ABS de alta resistência | Tensão: bivolt automático | IP20 | Certificação: Inmetro – Consultar certificado',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['📌 Aplicações: lojas, restaurantes, escritórios.'],
                        'item' => ['✔️ Faróis direcionáveis | ✔️ Estrutura em ABS | ✔️ Autonomia até 3h.'],
                    ],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 6,
            'title' => '🔦 3. Luz de Emergência Autônoma 1200 Lúmens Compact – MIB',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '/assets/img/informacoes-tecnicas/luz-emergência-led-16.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 2,
                    'image' => '',
                    'content' => '<b>Especificações Técnicas:</b> ABNT NBR 10898 – link oficial | Fluxo: 1200 lm | Autonomia: 2h | Cobertura: até 250 m² | Bateria: 3.7 V 4800 mAh | Tensão: bivolt automático | IP20 | Certificação: Inmetro – Consultar certificado',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['📌 Aplicações: hotéis, escolas, empresas.'],
                        'item' => ['✔️ Acionamento automático | ✔️ Fluxo 1200 lm | ✔️ Bateria longa duração.'],
                        'item' => ['💡 Caso real: em uma escola de MG, iluminou a evacuação de 300 alunos durante um apagão.'],
                    ],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 7,
            'title' => '🔦 4. Luz de Emergência Autônoma 2200 Lúmens Compact – MIB',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '/assets/img/informacoes-tecnicas/luz-emergência-led-17.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 2,
                    'image' => '',
                    'content' => '<b>Especificações Técnicas:</b> ABNT NBR 10898 – link oficial | Fluxo: 2200 lm | Autonomia: 2h | Cobertura: até 450 m² | Bateria: 3.7 V 4800 mAh | Tensão: bivolt automático | IP20 | Certificação: Inmetro – Consultar certificado',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['📌 Aplicações: hospitais, supermercados, indústrias médias.'],
                        'item' => ['✔️ Dispensa sistema centralizado | ✔️ Cobertura até 450 m² | ✔️ 2h de autonomia.'],
                        'item' => ['✔️ Acionamento automático | ✔️ Fluxo 1200 lm | ✔️ Bateria longa duração.'],
                    ],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 8,
            'title' => '🔦 5. Luz de Emergência Autônoma 3000 Lúmens Compact – MIB',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '/assets/img/informacoes-tecnicas/luz-emergência-led-18.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 2,
                    'image' => '',
                    'content' => '<b>Especificações Técnicas:</b> ABNT NBR 10898 – link oficial | Fluxo: 3000 lm | Autonomia: 2h | Cobertura: até 600 m² | Faróis: direcionáveis | Tensão: bivolt automático | IP20 | Certificação: Inmetro – Consultar certificado.',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['📌 Aplicações: galpões logísticos, centros comerciais, estacionamentos.'],
                        'item' => ['✔️ Potência 3000 lm | ✔️ Ativação imediata | ✔️ Ideal para áreas amplas.'],
                    ],
                    'table' => [],
                ],
                'item' => [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [
                        'title' => '📊 Tabela Comparativa dos Modelos',
                        'table' => [
                            'headers' => ['Modelo', 'Fluxo', 'Cobertura', 'Autonomia', 'Tensão', 'Proteção (IP)'],
                            'rows' => [
                                'item' => ['30 LEDs Super Slim', '300 lm', 'até 25 m²', '5h', 'bivolt', 'IP20'],
                                'item' => ['400 Lúmens 2 Faróis', '400 lm', 'até 100 m²', '3h', 'bivolt', 'IP20'],
                                'item' => ['Compact 1200 Lúmens', '1200 lm', 'até 250 m²', '2h', 'bivolt', 'IP20'],
                                'item' => ['Compact 2200 Lúmens', '2200 lm', 'até 450 m²', '2h', 'bivolt', 'IP20'],
                                'item' => ['Compact 3000 Lúmens', '3000 lm', 'até 600 m²', '2h', 'bivolt', 'IP20'],
                                'item' => ['Luminária IP65 1200 Lúmens', '1200 lm', 'até 250 m²', '3h', 'bivolt', 'IP65'],
                            ],
                        ],
                    ],
                ],
                'item' => [
                    'order' => 5,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [0,
                    'list-with-title' => [
                        'title' => '📌 Grau de Proteção (IP):',
                        'list' => [
                            'item' => ['IP20 → contra objetos sólidos >12 mm, sem proteção contra água. Uso interno'],
                            'item' => ['IP65 → vedado contra poeira e jatos de água. Uso externo e úmido'],
                        ],
                    ],
                ],
              ],
            ],
        ],
        'section' => [
            'order' => 9,
            'title' => '✅ Conformidade e Segurança',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['ABNT NBR 10898 – Iluminação de Emergência'],
                        'item' => ['Portarias Inmetro sobre luminárias e sistemas elétricos'],
                        'item' => ['Normas estaduais dos Corpos de Bombeiros'],
                        'item' => ['⚠️ Instalação apenas conforme projeto aprovado pelo Corpo de Bombeiros.'],
                    ],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 10,
            'title' => '📋 Checklist de Instalação e Manutenção',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['1. Verificar compatibilidade com o projeto.'],
                        'item' => ['2. Instalar em rotas de fuga e saídas.'],
                        'item' => ['3. Testar mensalmente as baterias.'],
                        'item' => ['4. Manter conectada à rede elétrica.'],
                        'item' => ['5. Substituir baterias apenas originais.'],
                        'item' => ['6. Registrar manutenções no livro de segurança.']
                    ],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 11,
            'title' => '❓ Perguntas Frequentes (FAQ)',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        'item' => ['1. As luzes têm certificação? ✔ Sim, ABNT NBR 10898 + Inmetro.'],
                        'item' => ['2. Qual a autonomia? ✔ 2 a 5h, conforme modelo.'],
                        'item' => ['3. Podem ser usadas em áreas externas? ✔ Apenas o modelo IP65.'],
                        'item' => ['4. Vida útil das baterias? ✔ Longa duração, se mantida corretamente.'],
                        'item' => ['5. São bivolt? ✔ Sim, automáticas 110/220V.'],
                        'item' => ['6. São obrigatórias em todos os prédios? ✔ Sim, conforme ABNT e Corpo de Bombeiros.'],
                        'item' => ['7. Quem deve instalar? ✔ Profissional habilitado.'],
                        'item' => ['8. Precisa manutenção? ✔ Sim, inspeção mensal obrigatória.'],
                        'item' => ['9. Qual a garantia? ✔ Garantia de fábrica contra defeitos.'],
                        'item' => ['10. Como escolher o modelo certo? ✔ Pela área, fluxo de pessoas e projeto aprovado.'],
                    ],
                    'table' => [],
                ],
            ],
        ],
        'section' => [
            'order' => 12,
            'title' => '',
            'content-list' => [
                'item' => [
                    'order' => 1,
                    'image' => '',
                    'content' => '⚡ Não perca a oportunidade de conhecer os produtos MIB: qualidade comprovada, certificação oficial e preço justo para sua segurança. Solicite seu orçamento agora mesmo!',
                    'list' => [],
                ],
            ],
        ],
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
