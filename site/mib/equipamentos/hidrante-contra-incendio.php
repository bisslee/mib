<?php

/**
 * Página migrada do old-site
 * Arquivo original: hidrante-contra-incendio.php
 */

// Configuração da página
$page_config = array(
    'title' => 'Hidrante contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Solicite um orçamento!',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/hidrante-contra-incendio.php',
);

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Equipamentos', 'url' => '/equipamentos/'],
    ['text' => 'Hidrantes Contra Incêndio', 'active' => true]
];

$heroConfig = array(
    'title' => 'Hidrante contra Incêndio',
    'subtitle' => 'Os hidrantes são basicamente terminais, onde ficam alojados em determinados locais estratégicos para o combate ao incêndio. Os hidrantes são compostos por mangueira e esguicho, normalmente encontrados dentro de abrigos na cor vermelha onde a mangueira e os outros componentes são armazenados.',
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

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding:0px;">

                                                <img class="img-responsive" src="/assets/img/old-site/hidrante-contra-incendio.jpg" alt="Hidrante de Combate a Incêndio" title="Hidrante de Combate a Incêndio" style="margin:0px auto;">

                                            </div>

                                            <p> Os hidrantes são basicamente terminais, onde ficam alojados em determinados locais estratégicos para o combate ao incêndio. Os hidrantes são compostos por mangueira e esguicho, normalmente encontrados dentro de abrigos na cor vermelha onde a mangueira e os outros componentes são armazenados.

                                            </p>

                                            <p> O hidrante só pode ser utilizado por pessoal treinado no combate a incêndio tais como: bombeiro e pessoas treinados pela brigada de incêndio. </p>
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