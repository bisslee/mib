<?php
/**
 * Página de Bico para Mangueira de Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Bico para Mangueira de Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Bicos e esguichos para mangueiras de incêndio com diferentes tipos e aplicações.',
    'keywords' => 'Bico, Esguicho, Mangueira de Incêndio, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/bico-para-mangueira-de-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Bico para Mangueira de Incêndio', 'active' => true]
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
                    <h1 class="page-title">Bico para Mangueira de Incêndio</h1>
                    <p class="page-subtitle">Bicos e esguichos para mangueiras de incêndio com diferentes tipos e aplicações</p>
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
                        <h2 class="section-title">Bico para Mangueira de Incêndio</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Bicos e esguichos para mangueiras de incêndio com diferentes tipos e aplicações.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-center">
                            <img class="img-responsive" src="/assets/img/old-site/bico-para-mangueira-de-incendio.jpg" alt="Bico para Mangueira de Incêndio" title="Bico para Mangueira de Incêndio" style="margin:0px auto;">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <a href="../contact.php" class="btn btn-primary btn-lg">Solicite um Orçamento</a>
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
