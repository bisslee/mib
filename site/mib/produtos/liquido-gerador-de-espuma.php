<?php
/**
 * Página de Líquido Gerador de Espuma - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Líquido Gerador de Espuma - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Líquidos geradores de espuma para sistemas de combate a incêndio.',
    'keywords' => 'Líquido, Espuma, Combate a Incêndio, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/liquido-gerador-de-espuma.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Líquido Gerador de Espuma', 'active' => true]
];

// Incluir header
include '../includes/header.php';

// Incluir breadcrumb
include '../includes/breadcrumb.php';
?>

    <!-- Hero Section da Página -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Líquido Gerador de Espuma</h1>
                    <p class="page-subtitle">Líquidos geradores de espuma para sistemas de combate a incêndio</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Conteúdo Principal -->
    <main id="main-content">
        <!-- Seção de Conteúdo -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title">Líquido Gerador de Espuma</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Líquidos geradores de espuma para sistemas de combate a incêndio.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                            <img class="img-responsive" src="/assets/img/old-site/liquido-gerador-de-espuma.jpg" alt="Líquido Gerador de Espuma" title="Líquido Gerador de Espuma" style="margin:0px auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
// Incluir footer
include '../includes/footer.php';
?>
