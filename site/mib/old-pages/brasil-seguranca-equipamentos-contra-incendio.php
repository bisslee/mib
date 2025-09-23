<?php
/**
 * Página migrada do old-site
 * Arquivo original: brasil-seguranca-equipamentos-contra-incendio.php
 */

// Configuração da página
$page_config = array(
    'title' => ' - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Solicite um orçamento!',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/brasil-seguranca-equipamentos-contra-incendio.php',
);

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/',
        'text' => 'Home',
    ),
    1 => array(
        'url' => '',
        'text' => '',
    ),
);

$heroConfig = array(
    'title' => '',
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

 <?php include ('includes/header.php'); ?> 

<div class="row" style="margin: 0px auto; ">

 <div class="col-lg-12 hgroupinternas" style="padding-top:20px; padding-bottom:10px;">

 <div class="container ">

 <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="padding:20px 0px 20px 0px;">

 <h1></h1>

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

 <ol class="breadcrumb"><li><a href="index.php">Home</a></li><li class="active"></li></ol>

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 <h2> - Equipamentos Contra Incêndio</h2>

 </div>

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

 <p>Nossa empresa tem como foco principal a comercialização de produtos, através da interação entre a indústria e o mercado.</p>

<p>Contamos com uma equipe altamente capacitada para a realidade atual de mercado, que busca sempre ajustar e identificar as melhores oportunidades diante das necessidades e realidades mutuas que juntas fortalecem os vínculos comerciais e das marcas.</p>

<p>Nossas instalações com equipamentos modernos que nos permite oferecer agilidade nas transações realizadas e ao mesmo tempo compartilhá-las com nossos parceiros.</p>

<p>Mais, acompanhamos todas as variações de mercado e novidades que possam contribuir para o beneficio comercial e estratégico.</p>

<p>Buscamos selecionar as melhores indústrias de cada segmento, cujos produtos atendam os anseios dos consumidores, que como nosso país, começam a mudar seus hábitos.</p>

<p>Finalmente, queremos nos colocar a sua disposição para esclarecer eventuais dúvidas.</p>

<p>Brasil segurança.</p>

 <img class="img-fluid" src="/assets/img/old-site/brasil-seguranca-equipamentos-contra-incendio.jpg" style="margin:0px auto;" alt=" - Equipamentos Contra Incêndio" title=" - Equipamentos Contra Incêndio" >

 <br><br>

 </div>

 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 corpolateral" style="background:#ff8000; color:#fff; padding:0px; margin-bottom:25px;">

 <?php include ('includes/corpolateral.php'); ?> 

 </div>

 </div>

 </div>

 </div>

 </div>

 <?php include ('includes/footer.php'); ?> 


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