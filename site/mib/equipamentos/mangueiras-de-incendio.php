<?php

/**
 * Página de Mangueiras de Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Mangueiras de Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'As mangueiras contra incêndio são aliadas constantes no combate ao fogo. Com elas os bombeiros conseguem delimitar uma certa distância do foco de incêndio.',
    'keywords' => 'Mangueiras de Incêndio, Equipamentos Contra Incêndio, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/equipamentos/mangueiras-de-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'equipamentos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Equipamentos', 'url' => '/equipamentos/'],
    ['text' => 'Mangueiras de Incêndio', 'active' => true]
];

$heroConfig = [
    'title' => 'Mangueiras de Incêndio',
    'subtitle' => 'As mangueiras contra incêndio são aliadas constantes no combate ao fogo. Com elas os bombeiros conseguem delimitar uma certa distância do foco de incêndio.'
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

                        <img class="img-responsive" src="/assets/img/old-site/mangueiras-de-incendio.jpg" class="img-responsive" alt="Mangueiras de incêndio" title="Mangueiras de incêndio" style="margin:0px auto;">

                </div>

                <p> As <strong>mangueiras contra Incêndio</strong> são aliadas constante no combate ao fogo. Com elas os bombeiros conseguem delimitar uma certa distancia do foco de incêndio e esguichar o componente certo para o determinado tipo de incêndio.

                    Podemos Classificar as <strong>mangueiras de incêndio</strong> em: <strong>Mangueiras de Incêndio Industrial</strong> e as <strong>Mangueiras de incêndio Predial</strong>.</p>

                <p>A <strong></strong> é distribuidora das melhores <strong>mangueiras de incêndio</strong> do mercado. </p>

                <p><strong>Confira nossas mangueiras de incêndio:</strong> </p>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-de-incendio-para-predio.php" style="color:#fff; margin:0px;">Mangueira de Incêndio para Prédio</a></h2>

                            <a href="mangueira-de-incendio-para-predio.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-de-incendio-para-predio.jpg" alt="Mangueira de Incêndio para Prédio" title="Mangueira de Incêndio para Prédio" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff">As mangueiras de incêndio prediais tipo 1 são fabricadas em fios de poliester, são utilizadas em prédios... </p>

                                <p style="text-align:center;"><a href="mangueira-de-incendio-para-predio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-de-incendio-para-industria.php" style="color:#fff; margin:0px;">Mangueira de Incêndio para Indústria</a></h2>

                            <a href="mangueira-de-incendio-para-industria.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-de-incendio-para-industria.jpg" alt="Mangueira de Incêndio para Indústria" title="Mangueira de Incêndio para Indústria" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff">As mangueiras de incêndio industriais são usadas em áreas industriais como: galpões e fábricas. </p>

                                <p style="text-align:center;"><a href="mangueira-de-incendio-para-industria.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-de-incendio-tipo1.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 1</a></h2>

                            <a href="mangueira-de-incendio-tipo1.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-de-incendio-tipo1.jpg" alt="Mangueira de Incêndio Tipo 1" title="Mangueira de Incêndio Tipo 1" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff"> Recomendada para edifícios residenciais, a mangueira de incêndio tipo 1 é leve e extremamente flexível...</p>

                                <p style="text-align:center;"><a href="mangueira-de-incendio-tipo1.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-de-incendio-tipo2.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 2</a></h2>

                            <a href="mangueira-de-incendio-tipo2.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-de-incendio-tipo2.jpg" alt="Mangueira de Incêndio Tipo 2" title="Mangueira de Incêndio Tipo 2" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff">O modelo de mangueira de incêndio tipo 2 é utilizado em áreas comerciais, industriais ou corpo de bombeiros.</p>

                                <p style="text-align:center;"><a href="mangueira-de-incendio-tipo2.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-de-incendio-tipo3.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 3</a></h2>

                            <a href="mangueira-de-incendio-tipo3.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-de-incendio-tipo3.jpg" alt="Mangueira de Incêndio Tipo 3" title="Mangueira de Incêndio Tipo 3" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff">A mangueira de incêndio tipo 3 são indicadas para a área naval e pelo Corpo de Bombeiros</p>

                                <p style="text-align:center;"><a href="mangueira-de-incendio-tipo3.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-de-incendio-tipo4.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 4</a></h2>

                            <a href="mangueira-de-incendio-tipo4.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-de-incendio-tipo4.jpg" alt="Mangueira de Incêndio Tipo 4" title="Mangueira de Incêndio Tipo 4" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff">A mangueira de incêndio tipo 4 destina-se à área industrial, aonde é necessária...</p>

                                <p style="text-align:center;"><a href="mangueira-de-incendio-tipo4.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-de-incendio-tipo5.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 5</a></h2>

                            <a href="mangueira-de-incendio-tipo5.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-de-incendio-tipo5.jpg" alt="Mangueira de Incêndio Tipo 5" title="Mangueira de Incêndio Tipo 5" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff">A Mangueira de incêndio tipo 5 é utilizada na área industrial, onde é desejável uma alta resistência à abrasão.</p>

                                <p style="text-align:center;"><a href="mangueira-de-incendio-tipo5.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="mangueira-para-hidrante.php" style="color:#fff; margin:0px;">Mangueira para Hidrante</a></h2>

                            <a href="mangueira-para-hidrante.php"><img class="img-responsive" src="/assets/img/old-site/mangueira-para-hidrante.jpg" alt="Mangueira para Hidrante" title="Mangueira para Hidrante" style="border:solid 5px #fff; text-align:center;"></a>

                            <div class="caption">

                                <p style="color:#fff">As Mangueiras para hidrantes são acessórios classificados em tipos: Tipo 01. Tipo 02, Tipo 03, Tipo 04, Tipo 05. </p>

                                <p style="text-align:center;"><a href="mangueira-para-hidrante.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </article>

    </section>
</main>

<?php
// Incluir footer
include '../includes/footer.php';
?>