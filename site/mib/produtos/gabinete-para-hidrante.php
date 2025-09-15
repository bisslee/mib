<?php
/**
 * Página de Gabinete para Hidrante - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Gabinete para Hidrante - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Gabinetes para proteção e armazenamento de hidrantes contra incêndio.',
    'keywords' => 'Gabinete, Hidrante, Proteção, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/gabinete-para-hidrante.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Gabinete para Hidrante', 'active' => true]
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
                    <h1 class="page-title">Gabinete para Hidrante</h1>
                    <p class="page-subtitle">Gabinetes para proteção e armazenamento de hidrantes contra incêndio</p>
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
                        <h2 class="section-title">Gabinete para Hidrante</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Gabinetes para proteção e armazenamento de hidrantes contra incêndio.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                            <img class="img-responsive" src="/assets/img/old-site/gabinete-para-hidrante.jpg" alt="Gabinete para Hidrante" title="Gabinete para Hidrante" style="margin:0px auto;">
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
