<?php
/**
 * Template de Página - MIB Site
 * TEMPLATE PADRÃO COM SISTEMA DE DADOS
 * Use este arquivo como base para converter páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// ============================================
// CARREGAMENTO DE DADOS DO ARQUIVO DATA
// ============================================
$current_file = basename(__FILE__);
$data_file = str_replace('.php', '-data.php', $current_file);

if (file_exists(__DIR__ . '/' . $data_file)) {
    require_once __DIR__ . '/' . $data_file;
    
    // Verificar se as funções existem antes de usar
    if (function_exists('getPageConfig')) {
        $page_config = getPageConfig();
        $current_page = getCurrentPageName();
        $breadcrumbs = getBreadcrumbs();
        $HeroSection = getHeroSection();
        $PageContent = getPageContent();
    } else {
        // Se as funções não existem, usar dados padrão
        $page_config = [
            'title' => 'Fabricante de Mangueiras de Incêndio em São Paulo – MIB',
            'description' => 'Fabricante de mangueiras de incêndio em São Paulo',
            'keywords' => 'fabricante mangueira incêndio são paulo',
            'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php'
        ];
        $current_page = 'Fabricante de Mangueiras de Incêndio em São Paulo';
        $breadcrumbs = [
            ['text' => 'Home', 'url' => '/'],
            ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
            ['text' => 'Fabricante de Mangueiras de Incêndio em São Paulo', 'active' => true]
        ];
        $HeroSection = [
            'title' => 'Fabricante de Mangueiras de Incêndio em São Paulo',
            'subtitle' => 'Produtos certificados ABNT NBR 11861'
        ];
        $PageContent = ['sections' => []];
    }
    
} else {
    // Fallback para dados padrão (caso o arquivo data não exista)
    $page_config = [
        'title' => 'Página - MIB | Mangueiras de Incêndio Brasil',
        'description' => 'Descrição da página',
        'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio',
        'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/' . $current_file
    ];
    $current_page = 'Página';
    $breadcrumbs = [
        ['text' => 'Home', 'url' => '/'],
        ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
        ['text' => 'Página', 'active' => true]
    ];
    $HeroSection = [
        'title' => 'Título da Página',
        'subtitle' => 'Subtítulo da página'
    ];
    $PageContent = ['sections' => []];
}

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb
include __DIR__ . '/../includes/breadcrumb.php';

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
    // Verificar se temos seções para renderizar
    if (isset($PageContent['sections']) && !empty($PageContent['sections'])):
        
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
    
    <?php else: ?>
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Nenhum conteúdo encontrado.</p>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php
// Incluir footer
include __DIR__ . '/../includes/footer.php';
?>
