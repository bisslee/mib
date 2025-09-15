<?php
/**
 * Página de Válvulas - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Válvulas - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Válvulas para sistemas de combate a incêndio e hidrantes.',
    'keywords' => 'Válvulas, Hidrantes, Combate a Incêndio, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/valvulas.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Válvulas', 'active' => true]
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
                    <h1 class="page-title">Válvulas</h1>
                    <p class="page-subtitle">Válvulas para sistemas de combate a incêndio e hidrantes</p>
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
                        <h2 class="section-title">Válvulas</h2>
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Válvulas para sistemas de combate a incêndio e hidrantes.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                            <img class="img-responsive" src="/assets/img/old-site/valvulas.jpg" alt="Válvulas" title="Válvulas" style="margin:0px auto;">
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
