<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Inspeção de Equipamentos de Combate a Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Inspeção de equipamentos de combate a incêndio – MIB. Extintores, mangueiras e hidrantes inspecionados por profissionais credenciados conforme ABNT e Corpo de Bombeiros. Solicite orçamento de equipamentos novos certificados.',
    'keywords' => 'Inspeção de equipamentos de combate a incêndio, extintores, mangueiras, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/inspecao-de-equipamentos-de-combate-a-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'Inspeção de Equipamentos de Combate a Incêndio'; // deve corresponder ao item do menu

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/informacoes-tecnicas/',
        'text' => 'Informações Técnicas',
    ),
    1 => array(
        'url' => '',
        'text' => 'Inspeção de Equipamentos de Combate a Incêndio',
    ),
);

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb (opcional)
if (isset($breadcrumbs)) {
    include __DIR__ . '/../includes/breadcrumb.php';
}

$HeroSection = [
    'title' => 'Inspeção de Equipamentos de Combate a Incêndio',
    'subtitle' => 'Extintores, mangueiras e hidrantes inspecionados por profissionais credenciados conforme ABNT e Corpo de Bombeiros.'
];

$PageContent = [
    'sections' => [
        [
            'order' => 1,
            'title' => '',
            'content-list' => [
                [
                    'order' => 1,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/inspecao-de-equipamento-contra-incendio-17.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'A inspeção de equipamentos de combate a incêndio é essencial para garantir que extintores, mangueiras e hidrantes estejam em perfeito funcionamento no momento em que forem solicitados. A <b>MIB – Mangueiras de Incêndio Brasil reforça que não realiza manutenção ou vistoria: nossa atuação é exclusivamente na comercialização de equipamentos contra incêndio novos, com preço justo, garantia e segurança, fornecendo produtos certificados que asseguram aprovação em vistorias e proteção real em emergências.</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '👉 Pela legislação e pelas normas técnicas vigentes, como a <b>ABNT NBR 12779</b> (Inspeção e Manutenção de Mangueiras de Incêndio), a <b>ABNT NBR 12962</b> (Serviço de Recarga de Extintores de Incêndio) e as instruções do <b>Corpo de Bombeiros</b>, somente profissionais capacitados devem realizar este tipo de serviço.<br>Após cada inspeção profissional, são emitidos laudos técnicos oficiais, que precisam ser guardados para apresentação em fiscalizações.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '⚠️ Importante – Nota da MIB',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'A <b>MIB Mangueiras de Incêndio Brasil</b> não presta serviços de vistoria, instalação ou manutenção.<br>
                                 📌 Nosso trabalho é o fornecimento de equipamentos novos e certificados (mangueiras, extintores e acessórios) conforme ABNT e INMETRO.<br>
                                 ➡️ Este conteúdo tem caráter explicativo e informativo.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 3,
            'title' => '🚨 Gatilho de Urgência e CTA para Orçamento',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '👉 Se durante a inspeção ou manutenção você identificar que algum equipamento precisa ser trocado, não espere um problema acontecer. Solicite agora mesmo um orçamento com a MIB e receba equipamentos novos, homologados pelo INMETRO (<a href="https://www.inmetro.gov.br" target="_blank">https://www.inmetro.gov.br</a>) e conformes às normas da ABNT (<a href="https://www.abnt.org.br" target="_blank">https://www.abnt.org.br</a>).<br>
                            🔒 Comprar direto da MIB significa garantir equipamentos rastreados, originais e aceitos pelo Corpo de Bombeiros (<a href="https://www.corpodebombeiros.sp.gov.br" target="_blank">https://www.corpodebombeiros.sp.gov.br</a>).<br>
                            💬 Entre em contato hoje mesmo e descubra nossas condições especiais para condomínios, indústrias e comércios.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
            ]
        ],
        [
            'order' => 4,
            'title' => '✅ Como é feita a inspeção de equipamentos de combate a incêndio?',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'A inspeção profissional difere da simples verificação visual. Nela, são realizados testes completos em todos os componentes dos equipamentos para avaliar:',
                        'list' => [
                            ['item' => '• Funcionamento real em situação de uso;'],
                            ['item' => '• Estado de conservação;'],
                            ['item' => '• Necessidade de reparos ou substituições;'],
                            ['item' => '• Conformidade com normas técnicas.'],
                        ]
                    ]
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '📌 Inspeções visuais regulares são importantes e podem ser feitas por síndicos, zeladores ou responsáveis pela brigada de incêndio. Porém, jamais substituem a inspeção realizada por profissionais credenciados, que emitem laudos válidos em vistorias.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 5,
            'title' => '🔧 Inspeções mais comuns em equipamentos contra incêndio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '<b>🔹 Inspeção de mangueiras de incêndio</b>',
                        'list' => [
                            ['item' => '• Deve incluir ensaio hidrostático anual, conforme ABNT NBR 12779.'],
                            ['item' => '• Avaliação dos engates, uniões tipo Storz (NBR 14349) e do tubo interno.'],
                            ['item' => '• Identificação correta antes de enviar para teste, garantindo devolução da mesma mangueira.'],
                            ['item' => '• Se houver rejeição, a empresa responsável deve apresentar fotos ou vídeos do defeito.'],
                            ['item' => '• As mangueiras devem estar sempre bem enroladas, sem vincos, e ter a posição alterada a cada 6 meses.'],
                            ['item' => '👉 Mangueiras defeituosas podem gerar queda de pressão, vazamentos e falhas críticas no combate ao fogo.'],
                        ]
                    ]
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '<h2>🔹 Inspeção de extintores de incêndio</h2>',
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
                        ['item' => '• Checagem de válvulas, lacres, manômetro e condições externas.'],
                        ['item' => '• Verificação do posicionamento: extintores não podem estar obstruídos.'],
                        ['item' => '• Garantia de que o modelo correto está instalado no local adequado (ex.: pó químico seco ABC, CO₂, espuma mecânica etc.).'],
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
                        'title' => '• Normas aplicáveis:',
                        'list' => [
                            ['item' => '○ ABNT NBR 12962 → define os procedimentos de recarga e manutenção;'],
                            ['item' => '○ ABNT NBR 15808 → requisitos para extintores portáteis;'],
                            ['item' => '○ ABNT NBR 15809 → requisitos para extintores sobre rodas.'],
                        ]
                    ]
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '📌 Essas normas asseguram que os extintores sejam recarregados, inspecionados e mantidos dentro da conformidade exigida.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '<h2>🔹 Inspeção de bombas e hidrantes</h2>',
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
                        ['item' => '• Avaliação dos conectores e engates, que devem estar íntegros para acoplamento das mangueiras.'],
                        ['item' => '• Testes de vedação: pancadas ou deformações podem comprometer o funcionamento.'],
                        ['item' => '• Inspeção obrigatória anualmente, com emissão de laudo.'],

                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]

            ]
        ],
        [
            'order' => 6,
            'title' => '⚠️ Importância de contratar empresas sérias',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'A MIB Mangueiras de Incêndio Brasil reforça: a inspeção anual com ensaio hidrostático é obrigatória e deve ser realizada somente por empresas sérias e credenciadas.',
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
                        'title' => '📌 Isso vale não apenas para mangueiras de incêndio, mas também para:',
                        'list' => [
                            ['item' => '• Testes e inspeções de extintores (incluindo recarga e manutenção segundo a <b>ABNT NBR 12962, NBR 15808 e NBR 15809</b>);'],
                            ['item' => '• Avaliação e manutenção de sistemas de alarme de incêndio;'],
                            ['item' => '• Verificação de tubulações hidráulicas do sistema de combate a incêndio;'],
                            ['item' => '• Reparos elétricos relacionados a sistemas de emergência;'],
                            ['item' => '• Troca preventiva de componentes que apresentem desgaste;'],
                            ['item' => '• Até mesmo a compra de equipamentos novos quando houver necessidade de substituição.'],
                        ]
                    ]
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => '👉 Antes de contratar qualquer empresa:',
                        'list' => [
                            ['item' => '• Pesquise a reputação da prestadora de serviços e confira se é credenciada;'],
                            ['item' => '• Desconfie de preços muito abaixo do mercado, pois podem indicar risco de serviços incompletos ou laudos irregulares;'],
                            ['item' => '• Sempre faça orçamento com pelo menos 3 empresas diferentes para comparar valores e condições;'],
                            ['item' => '• Identifique todos os equipamentos enviados para teste (mangueiras, extintores, hidrantes, etc.) com etiqueta ou marcação, garantindo que o mesmo produto seja devolvido;'],
                            ['item' => '• Solicite documentação oficial da inspeção;'],
                            ['item' => '• Exija laudo assinado e, em caso de falhas, fotos ou vídeos que comprovem o problema.'],
                        ]
                    ]
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '✅ Essa prática garante transparência, evita extravios e assegura que todos os equipamentos contra incêndio estejam em perfeito estado de funcionamento no momento em que forem necessários.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 7,
            'title' => '❓ FAQ – Inspeção de equipamentos contra incêndio',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>1. De quanto em quanto tempo devo inspecionar extintores e mangueiras?</b><br>→ Inspeção visual a cada 6 meses e ensaio hidrostático anual.'],
                        ['item' => '<b>2. O Corpo de Bombeiros exige laudos?</b><br>→ Sim, são obrigatórios para aprovação em vistorias e emissão de AVCB.'],
                        ['item' => '<b>3. Quais normas regem a manutenção de extintores?</b><br>→ ABNT NBR 12962, NBR 15808 e NBR 15809, que determinam recarga, manutenção e requisitos técnicos.'],
                        ['item' => '<b>4. Posso realizar a inspeção por conta própria?</b><br>→ Não. Apenas inspeções visuais podem ser feitas por leigos. Os testes devem ser executados por profissionais credenciados.'],
                        ['item' => '<b>5. O que acontece se a inspeção não for feita?</b><br>→ Em caso de incêndio, o seguro pode negar cobertura e o condomínio/empresa pode ser multado.'],
                        ['item' => '<b>6. A MIB fornece laudos e certificados?</b><br>→ Não. A MIB apenas fornece equipamentos novos. Os laudos devem ser emitidos pela empresa credenciada que realiza a manutenção.'],
                        ['item' => '<b>7. Posso orçar equipamentos novos com a MIB?</b><br>→ Sim. A MIB oferece preços especiais para condomínios, indústrias e comércios.'],
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