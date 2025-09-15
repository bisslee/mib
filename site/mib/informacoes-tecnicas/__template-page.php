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
        [
            'order' => 1,
            'title' => '',
            'content-list' =>[
                [
                    'order' => 1,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/luz-emergência-led-18.webp',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '💡 A MIB é especialista em atender condomínios, indústrias, comércios, hospitais, galpões e transportadoras com equipamentos contra incêndio certificados. ⚠️ Não saia do site sem solicitar seu orçamento: iluminação de emergência é item obrigatório e salva vidas em evacuações.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
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
