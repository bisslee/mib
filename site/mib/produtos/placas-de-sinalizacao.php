<?php

/**
 * Página de Placas de Sinalização - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Placas de Sinalização - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Placas de sinalização para equipamentos contra incêndio e emergência.',
    'keywords' => 'Placas, Sinalização, Emergência, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/placas-de-sinalizacao.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Placas de Sinalização', 'active' => true]
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
                <h1 class="page-title">Placas de Sinalização</h1>
                <p class="page-subtitle">Placas de sinalização para equipamentos contra incêndio e emergência</p>
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
                    <h2 class="section-title">Placas de Sinalização</h2>

                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="lead">
                                Placas de sinalização para equipamentos contra incêndio e emergência.
                            </p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <img class="img-responsive" src="/assets/img/old-site/placas-de-sinalizacao.jpg" alt="Placas de Sinalização" title="Placas de Sinalização" style="margin:0px auto;">
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