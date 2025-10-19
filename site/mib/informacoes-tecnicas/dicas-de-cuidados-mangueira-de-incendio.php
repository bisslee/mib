<?php
/**
 * Template de Página - MIB Site
 * Página: Dicas de Cuidados com Mangueiras de Incêndio
 * AGORA USA DADOS DO ARQUIVO DATA
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
            'title' => 'Dicas de Cuidados com Mangueiras de Incêndio – MIB | Mangueiras de Incêndio Brasil',
            'description' => 'Dicas de cuidados com mangueiras de incêndio MIB',
            'keywords' => 'mangueiras de incêndio, cuidados, manutenção',
            'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php'
        ];
        $current_page = 'Dicas de Cuidados com Mangueiras de Incêndio';
        $breadcrumbs = [
            ['text' => 'Home', 'url' => '/'],
            ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
            ['text' => 'Dicas de Cuidados com Mangueiras de Incêndio', 'active' => true]
        ];
        $HeroSection = [
            'title' => 'Dicas de Cuidados com Mangueiras de Incêndio',
            'subtitle' => 'Normas ABNT NBR 11861 e 12779'
        ];
        $PageContent = ['sections' => []];
    }
    
} else {
    // Fallback para dados padrão (caso o arquivo data não exista)
    $page_config = [
        'title' => 'Dicas de Cuidados com Mangueiras de Incêndio – MIB | Mangueiras de Incêndio Brasil',
        'description' => 'Dicas de cuidados com mangueiras de incêndio MIB. Normas ABNT NBR 11861 e 12779, inspeções, testes hidrostáticos, tolerância de comprimento, limpeza, armazenamento e garantia de 12 meses',
        'keywords' => 'Luz de emergência, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
        'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas//dicas-de-cuidados-mangueira-de-incendio.php'
    ];
    $current_page = 'Dicas de Cuidados com Mangueiras de Incêndio';
    $breadcrumbs = [
        ['text' => 'Home', 'url' => '/'],
        ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
        ['text' => 'Dicas de Cuidados com Mangueiras de Incêndio', 'active' => true]
    ];
    $HeroSection = [
        'title' => 'Dicas de Cuidados com Mangueiras de Incêndio',
        'subtitle' => 'Normas ABNT NBR 11861 e 12779, inspeções, testes hidrostáticos, tolerância de comprimento, limpeza, armazenamento e garantia de 12 meses'
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
// Incluir links relacionados para SEO
include __DIR__ . '/../includes/related-links.php';

// Incluir footer
include __DIR__ . '/../includes/footer.php';
?>
