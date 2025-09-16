<?php

/**
 * Página de Canhão Monitor para Combate a Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Canhão Monitor de Combate a Incêndio Certificado ABNT - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Canhão monitor de combate a incêndio certificado ABNT. Equipamento para combate a incêndio de grandes riscos com alta vazão e longa distância. MIB São Paulo.',
    'keywords' => 'Canhão Monitor São Paulo, Combate Incêndio SP, Equipamentos Contra Incêndio, MIB, canhão certificado ABNT, alta vazão, longa distância, grandes riscos',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/equipamentos/canhao-monitor-de-combate-a-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'equipamentos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Equipamentos', 'url' => '/equipamentos/'],
    ['text' => 'Canhão Monitor para Combate a Incêndio', 'active' => true]
];

$heroConfig = [
    'title' => 'Canhão Monitor para Combate a Incêndio',
    'subtitle' => 'O canhão monitor é um equipamento de combate a incêndio a longa distância, para combater incêndio de grandes riscos onde a vazão e a distância são primordiais.'
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
                        <div class="row" style="margin: 0px auto; ">

                            <div class="col-lg-12">

                                <div class="container ">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                            <p> O canhão monitor é um equipamento de combate a incêndio a longa distância, para combater incêndio de grandes riscos onde a vazão e a distância são primordiais. Este equipamento é feito em vários materiais tais como: bronze, cobre, alumíno e é muito empregado no combate a incêndio quando não se pode entrar no local. </p>

                                            <br><br>

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