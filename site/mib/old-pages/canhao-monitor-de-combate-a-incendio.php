<?php
/**
 * Página migrada do old-site
 * Arquivo original: canhao-monitor-de-combate-a-incendio.php
 */

// Configuração da página
$page_config = array(
    'title' => 'Canhão Monitor para Combate a Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Solicite um orçamento!',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/canhao-monitor-de-combate-a-incendio.php',
);

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/',
        'text' => 'Home',
    ),
    1 => array(
        'url' => '',
        'text' => 'Canhão Monitor para Combate a Incêndio',
    ),
);

$heroConfig = array(
    'title' => 'Canhão Monitor para Combate a Incêndio',
    'description' => 'Solicite um orçamento!',
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
                    <?php echo $heroConfig['description']; ?>
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

 <!-- Google Tag Manager (noscript) -->

 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZKDXGP"

 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

 <!-- End Google Tag Manager (noscript) -->

 <?php  ?> 

<div class="row" style="margin: 0px auto; ">

 <div class="col-lg-12 hgroupinternas" style="padding-top:20px; padding-bottom:10px;">

 <div class="container ">

 <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="padding:20px 0px 20px 0px;">

 <h1>Canhão Monitor para Combate a Incêndio</h1>

 </div>

 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12" style="padding:20px 0px 20px 0px;">

 <p style="text-align:right;"><a href="contato.php" class="btn btn-info" role="button">Solicite um orçamento!</a></p>

 </div>

 </div>

 </div>

 </div>

 <div class="row" style="margin: 0px auto; ">

 <div class="col-lg-12">

 <div class="container ">

 <ol class="breadcrumb"><li><a href="index.php">Home</a></li><li><a href="equipamentos-contra-incendio.php">Equipamentos Contra Incêndio</a></li><li class="active">Canhão Monitor para Combate a Incêndio</li></ol>

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 <h2>Canhão Monitor para Combate a Incêndio</h2>

 </div>

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

 <p> O canhão monitor é um equipamento de combate a incêndio a longa distância, para combater incêndio de grandes riscos onde a vazão e a distância são primordiais. Este equipamento é feito em vários materiais tais como: bronze, cobre, alumíno e é muito empregado no combate a incêndio quando não se pode entrar no local. </p>

 <br><br>

 </div>

 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 corpolateral" style="background:#ff8000; color:#fff; padding:0px; margin-bottom:25px;">

 <?php  ?> 

 </div>

 </div>

 </div>

 </div>

 </div>

 <?php  ?> 

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