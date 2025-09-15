<?php

/**
 * Página de Caixas para Equipamentos Contra Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Caixas para Equipamentos Contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Caixas e gabinetes para armazenamento de equipamentos contra incêndio.',
    'keywords' => 'Caixas, Gabinetes, Equipamentos Contra Incêndio, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/caixas-para-equipamentos-contra-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Caixas para Equipamentos Contra Incêndio', 'active' => true]
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
                <h1 class="page-title">Caixas para Equipamentos Contra Incêndio</h1>
                <p class="page-subtitle">Caixas e gabinetes para armazenamento de equipamentos contra incêndio</p>
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
                    <h2 class="section-title">Caixas para Equipamentos Contra Incêndio</h2>
                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="lead">
                                Caixas e gabinetes para armazenamento de equipamentos contra incêndio.
                            </p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">





                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:300px; ">

                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/caixa-para-extintor-de-incendio.php" style="color:#fff; margin:0px;">Caixa para Extintor de Incêndio</a></h2>

                                        <a href="/old-pages/caixa-para-extintor-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/caixa-para-extintor-de-incendio.jpg" alt="Caixa para Extintor de Incêndio" title="Caixa para Extintor de Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                        <div class="caption">



                                            <p style="text-align:center;"><a href="/old-pages/caixa-para-extintor-de-incendio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                        </div>

                                    </div>

                                </div>



                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:300px; ">

                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="caixa-para-hidrante.php" style="color:#fff; margin:0px;">Caixa para Hidrante</a></h2>

                                        <a href="/old-pages/caixa-para-hidrante.php"><img class="img-responsive" src="/assets/img/old-site/caixa-para-hidrante.jpg" alt="Caixa para Hidrante" title="Caixa para Hidrante" style="border:solid 5px #fff; text-align:center;"></a>

                                        <div class="caption">



                                            <p style="text-align:center;"><a href="/old-pages/caixa-para-hidrante.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                        </div>

                                    </div>

                                </div>



                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:300px; ">

                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/caixa-para-mangueira-de-incendio.php" style="color:#fff; margin:0px;">Caixa para Mangueira de Incêndio</a></h2>

                                        <a href="/old-pages/caixa-para-mangueira-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/caixa-para-mangueira-de-incendio.jpg" alt="Caixa para Mangueira de Incêndio" title="Caixa para Mangueira de Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                        <div class="caption">



                                            <p style="text-align:center;"><a href="/old-pages/caixa-para-mangueira-de-incendio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                        </div>

                                    </div>

                                </div>



                            </div>


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