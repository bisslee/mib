<?php

/**
 * Página migrada do old-site
 * Arquivo original: sistema-aerossol-de-supressao-a-incendio.php
 */

// Configuração da página
$page_config = array(
    'title' => 'Sistema aerossol de supressão a incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Solicite um orçamento!',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/sistema-aerossol-de-supressao-a-incendio.php',
);

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Equipamentos', 'url' => '/equipamentos/'],
    ['text' => 'Sistema Aerossol de Supressão a Incêndio', 'active' => true]
];

$heroConfig = array(
    'title' => 'Sistema aerossol de supressão a incêndio',
    'subtitle' => 'Dentro muitos sistemas de supressão de incêndio, o sistema de supressão aerossol é o mais moderno e mais efetivo dos sistemas de supressão de incêndio. Não afeta a cama de ozônio e é de fácil instalação.',
    'image' => '/assets/img/old-site/default-image.jpg',
);

// Incluir template
require_once '../includes/config.php';
include '../includes/header.php';
if (isset($breadcrumbs)) {
    include '../includes/breadcrumb.php';
}
?>

<!-- Hero Section da Página -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">
                    <?php echo $heroConfig['title']; ?>
                </h1>
                <p class="page-subtitle">
                    <?php echo $heroConfig['subtitle']; ?>
                </p>
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
                    <h2 class="section-title"><?php echo $heroConfig['title']; ?></h2>
                    <article class="text-justify">

                        <div class="row" style="margin: 0px auto; ">

                            <div class="col-lg-12">

                                <div class="container ">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">

                                                <img class="img-responsive" src="/assets/img/old-site/sistema-aerossol-de-supressao-a-incendio.jpg" class="img-responsive" alt="Sistema aerossol de supressão a incêndio" title="Sistema aerossol de supressão a incêndio" style="margin:0px auto;">

                                            </div>

                                            <p> Dentro muitos sistemas de supressão de incêndio, o sistema de supressão aerossol é o mais moderno e mais efetivo dos sistemas de supressão de incêndio.

                                                Não afeta a cama de ozônio e é de fácil instalação. <br>

                                            </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px; margin-bottom:5px; background:#ff8000; padding:5px; color:#fff;">

                                                    <p style="margin:0px;">Veja também:</p>

                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px;">

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:4px; text-align:center; ">

                                                            <div class="thumbnail" style="background:#333; border-bottom:solid 3px #000; min-height:230px; min-height:230px; ">

                                                                <a href="mangueiras-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/mangueiras-de-incendio.jpg" alt="Mangueiras de Incêndio" title="Mangueiras de Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                                                <div class="caption">

                                                                    <h2 style="margin-top:0px; font-size:14px; font-weight:bold;"><a href="mangueiras-de-incendio.php" style="color:#fff;">Mangueiras de Incêndio</a></h2>

                                                                    <p style="text-align:center;"><a href="mangueiras-de-incendio.php" style="font-size:10px;" class="btn btn-default" role="button">SAIBA MAIS</a></p>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:4px; text-align:center; ">

                                                            <div class="thumbnail" style="background:#333; border-bottom:solid 3px #000; min-height:230px; min-height:230px; ">

                                                                <a href="extintores-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/extintores-de-incendio.jpg" alt="Extintores de Incêndio" title="Extintores de Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                                                <div class="caption">

                                                                    <h2 style="margin-top:0px; font-size:14px; font-weight:bold;"><a href="extintores-de-incendio.php" style="color:#fff;">Extintores de Incêndio</a></h2>

                                                                    <p style="text-align:center;"><a href="extintores-de-incendio.php" style="font-size:10px;" class="btn btn-default" role="button">SAIBA MAIS</a></p>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding:0px;">

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:4px; text-align:center;">

                                                            <div class="thumbnail" style="background:#333; border-bottom:solid 3px #000; min-height:230px; ">

                                                                <a href="esguichos-para-equipamentos-contra-incendio.php"><img class="img-responsive" src="/assets/img/old-site/esguichos-para-equipamentos-contra-incendio.jpg" alt="Esguichos" title="Esguichos" style="border:solid 5px #fff; text-align:center;"></a>

                                                                <div class="caption">

                                                                    <h2 style="margin-top:0px; font-size:14px; font-weight:bold;"><a href="esguichos-para-equipamentos-contra-incendio.php" style="color:#fff;">Esguichos</a></h2>

                                                                    <p style="text-align:center;"><a href="esguichos-para-equipamentos-contra-incendio.php" style="font-size:10px;" class="btn btn-default" role="button">SAIBA MAIS</a></p>

                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding:4px; text-align:center;">

                                                            <div class="thumbnail" style="background:#333; border-bottom:solid 3px #000; min-height:230px; ">

                                                                <a href="derivante-para-mangueira-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/derivante-para-mangueira-de-incendio.jpg" alt="Derivante para Mangueira de Incêndio" title="Derivante para Mangueira de Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                                                <div class="caption">

                                                                    <h2 style="margin-top:0px; font-size:14px; font-weight:bold;"><a href="derivante-para-mangueira-de-incendio.php" style="color:#fff;">Derivante</a></h2>

                                                                    <p style="text-align:center;"><a href="derivante-para-mangueira-de-incendio.php" style="font-size:10px;" class="btn btn-default" role="button">SAIBA MAIS</a></p>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Incluir footer
include '../includes/footer.php';
?>