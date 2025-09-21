<?php

/**
 * Página migrada do old-site
 * Arquivo original: esguichos-para-equipamentos-contra-incendio.php
 */

// Configuração da página
$page_config = array(
    'title' => 'Esguichos para Equipamentos contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Solicite um orçamento!',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/esguichos-para-equipamentos-contra-incendio.php',
);

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/',
        'text' => 'Home',
    ),
    1 => array(
        'url' => '',
        'text' => 'Esguichos para Equipamentos contra Incêndio',
    ),
);

$heroConfig = array(
    'title' => 'Esguichos para Equipamentos contra Incêndio',
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

                        <div class="row" style="margin: 0px auto; ">

                            <div class="col-lg-12 hgroupinternas" style="padding-top:20px; padding-bottom:10px;">

                                <div class="container ">

                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="padding:20px 0px 20px 0px;">

                                        <h1>Esguichos para Equipamentos contra Incêndio</h1>

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

                                    <ol class="breadcrumb">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="equipamentos-contra-incendio.php">Equipamentos Contra Incêndio</a></li>
                                        <li class="active">Esguichos</li>
                                    </ol>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <h2>Esguichos para Equipamentos contra Incêndio</h2>

                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding:0px; text-align:center;">

                                                <table class="table">

                                                    <tr>

                                                        <th>Item</th>

                                                        <th>Código</th>

                                                        <th>Unid</th>

                                                        <th>Imagem</th>

                                                        <th>Discriminação do Material</th>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">1</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p> BS 014</p>
                                                        </td>

                                                        <td class="center"> PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho1.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center" width="30%;">
                                                            <p>Esguicho tipo mangotinho ajuste regulavel tres posições modelo CAC 1" fechamento por pino central.</p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">2</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 001 1 1/2</p>
                                                            <p>BS 010 2 1/2</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho2.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Esguicho de combate a incendio tipo regulavel tres posições modelo Elkart 1 1/2(38mm) ou 2 1/2 (65mm) em latão polido.</p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">3</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 007 AL</p>
                                                            <p>BS 023 LT</p>
                                                            <p>BS 034 AL </p>
                                                            <p> BS 036 LT</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho3.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Esguicho de combate a incendio tipo jato sólido 1 1/2 (38mm) 2 1/2(65mm) base em latão com tubo em aluminio ou latão disponiveis para requinte de 13 e 16 mm para 1 1/2 e 19 e 25 mm 2 1/2. </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">4</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 005</p>
                                                            <p>BS 016</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho4.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Esguicho de combate a incendio tipo jato regulavel tres posições modelo CAC AKRON LONGO 11/2 (38mm) ou 2 1/2 em latão polido fechamento por pino central, disponiveis em acabamento cromado. </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">5</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 531</p>
                                                            <p> BS 533 </p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho5.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Esguicho de combate a incendio tipo jato regulavel modelo CAC AKRON com alavanca e empunhadura 11/2 (38mm) ou 2 1/2 em latão polido fechamento por pino central e válvula esférica, disponiveis em acabamento cromado. </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">6</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 300</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho6.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Esguicho de combate a incendio tipo jato regulavel modelo FOG HOG 2 1/2 (65mm) em latão polido fechamento por pino central rosca de entrada 7,5 fpp para uso em canhão monitor. </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">7</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 203 1 1/2 200LPM</p>
                                                            <p> BS 204 21/2 400 LPM</p>
                                                            <p> BS 205 2 1/2 800 LPM</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho7.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Proporcionador de espuma de LGE liquido gerador de espuma disponiveis nas dimenões de 1 1/2 e 2 1/2 storz com vazões de 200,400 ou 800 lpm fabricado em latão escovado </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">8</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 206 1 1/2 200LPM</p>
                                                            <p>BS 207 21/2 400 LPM </p>
                                                            <p> BS 208 2 1/2 800 LPM</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho8.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Esguicho lançador de espuma LGE liquido gerador de espuma nas dimensões de 1 1/2 ou 2 1/2 com vazões de 200,400 ou 800 lpm </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">9</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>3% AFFF</p>
                                                            <p> 3-3% AFFF-ARC</p>
                                                            <p> 6% AFFF </p>
                                                            <p>3% AFFF AV </p>
                                                            <p> 6% AFFF AV</p>
                                                            <p>3-6% AFFF - ARC</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho9.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>LGE liquido gerador de espuma bombona 20 litros </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">10</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 020 2 1/2 X 1 1/2 </p>
                                                            <p> BS 021 2 1/2 X 2 1/2</p>
                                                        </td>

                                                        <td class="center">PÇ </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho10.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Derivante para mangueiras de incêndio com opções com uma entrada de 2 1/2 storz por duas saidas de 1 1/2 storz ou por uma entrada de 21/2 storzx duas saidas de 21/2 storz em latão escovado. </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">11</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 305</p>
                                                        </td>

                                                        <td class="center"> </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho11.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Derivante para mangueiras de incêndio com opções com uma entrada de 2 1/2 storz por tres saidas de 1 1/2 storz em latão escovado. </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">12</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 22</p>
                                                        </td>

                                                        <td class="center"> </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho12.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Valvula globo 2 1/2 45º 155 libras PN10 uso predial roscas 11x5 em latão escovado. </p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">13</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 127 45º</p>
                                                            <p>BS 015 90º</p>
                                                        </td>

                                                        <td class="center">BS</td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho13.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Valvula globo 2 1/2 45º ou 90º 210 libras uso industrial roscas 11x5 ou 8x7,5 em latão escovado volante robusto em aluminio diametro 100 mm .</p>
                                                            <p> -Pressão de trabalho: 210 lbs (14,76 Kgf./cm2)</p>
                                                            <p> -Pressão de teste: 315 lbs (22,15 Kgf./cm2)</p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">14</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 131 45º 11X5</p>
                                                            <p> BS 134 45º 8X7,5 </p>
                                                            <p>BS 135 90º 11X5</p>
                                                            <p> BS 138 90º 8X7,5 </p>
                                                        </td>

                                                        <td class="center">BS </td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho14.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Valvula globo 2 1/2 45º ou 90º 300 libras uso industrial roscas 11x5 ou 8x7,5 em latão escovado haste 16 mm, volante robusto em aluminio diametro 100 mm . </p>
                                                            <p>-Pressão de trabalho: 300 lbs (21,09 Kgf./cm2)</p>
                                                            <p> -Pressão de teste: 450 lbs (31,64 Kgf./cm2)</p>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">15</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 139 45º 11x5</p>
                                                            <p> BS 142 45º 8X7,5</p>
                                                            <p> BS 147 90º 11X5 </p>
                                                            <p> BS 150 90º 8X7,55</p>
                                                        </td>

                                                        <td class="center">BS</td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho15.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Valvula globo 2 1/2 45º ou 90º 300 libras tipo crane industrial roscas 11x5 ou 8x7,5 em latão escovado HASTE 19 mm, volante robusto em aluminio diametro 150 mm .</p>
                                                            <p>-Pressão de trabalho: 300 lbs (21,09 Kgf./cm2)</p>
                                                            <p> -Pressão de teste: 450 lbs (31,64 Kgf./cm2)</p>

                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="center" style="padding:0px;">16</td>

                                                        <td class="center" style="font-size:12px; padding:2px;">
                                                            <p>BS 600 FLANGE 3"</p>
                                                            <p> BS 601 FLANGE 4" </p>
                                                        </td>

                                                        <td class="center">BS</td>

                                                        <td class="center" style="padding:0px;"><img class="img-responsive" src="/assets/img/old-site/esguicho16.jpg" alt="Esguicho para Equipamentos contra Incêndio" title="Esguicho para Equipamentos contra Incêndio" style="text-align:center;"></td>

                                                        <td class="center">
                                                            <p>Canhão monitor fixo de 2 1/2 x rosca 7,5 fios por polega para acoplamento do esguicho tipo fog hog para uso fixo disponivel com flanges de 3" e 4" polegadas em latão pintado em vermelho.</p>
                                                        </td>

                                                    </tr>

                                                </table>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="esguicho-agulheta.php" style="color:#fff; margin:0px;">Esguicho Agulheta</a></h2>

                                                        <a href="esguicho-agulheta.php"><img class="img-responsive" src="/assets/img/old-site/esguicho-agulheta.jpg" alt="Esguicho Agulheta" title="Esguicho Agulheta" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">O esguicho agulheta ou cônico é um acessório da mangueira de incêndio seu uso é indispensável no conjunto...</p>

                                                            <p style="text-align:center;"><a href="esguicho-agulheta.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="esguicho-de-bombeiro.php" style="color:#fff; margin:0px;">Esguicho de Bombeiro</a></h2>

                                                        <a href="esguicho-de-bombeiro.php"><img class="img-responsive" src="/assets/img/old-site/esguicho-de-bombeiro.jpg" alt="Esguicho de Bombeiro" title="Esguicho de Bombeiro" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">O esguicho de bombeiro controla a vazão da água, sendo o esguicho mais usado no combate a incêndio.</p>

                                                            <p style="text-align:center;"><a href="esguicho-de-bombeiro.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="esguicho-de-combate-a-incendio.php" style="color:#fff; margin:0px;">Esguicho de Combate a Incêndio</a></h2>

                                                        <a href="esguicho-de-combate-a-incendio.php"><img class="img-responsive" src="/assets/img/old-site/esguicho-de-combate-a-incendio.jpg" alt="Esguicho de Combate a Incêndio" title="Esguicho de Combate a Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Confira os modelos de esguichos de combate a incêndio.</p>

                                                            <p style="text-align:center;"><a href="esguicho-de-combate-a-incendio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="esguicho-jato-solido.php" style="color:#fff; margin:0px;">Esguicho Jato Sólido</a></h2>

                                                        <a href="esguicho-jato-solido.php"><img class="img-responsive" src="/assets/img/old-site/esguicho-jato-solido.jpg" alt="Esguicho Jato Sólido" title="Esguicho Jato Sólido" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Confira os modelos de esguichos jato sólido. </p>

                                                            <p style="text-align:center;"><a href="esguicho-jato-solido.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="esguicho-para-mangueira-de-incendio.php" style="color:#fff; margin:0px;">Esguicho para Mangueira de Incêndio</a></h2>

                                                        <a href="esguicho-para-mangueira-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/esguicho-para-mangueira-de-incendio.jpg" alt="Esguicho para Mangueira de Incêndio" title="Esguicho para Mangueira de Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Trabalhamos com diversos tipos de esguicho para mangueira de incêndio. </p>

                                                            <p style="text-align:center;"><a href="esguicho-para-mangueira-de-incendio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="esguicho-proporcionador-de-espuma.php" style="color:#fff; margin:0px;">Esguicho Proporcionador de Espuma</a></h2>

                                                        <a href="esguicho-proporcionador-de-espuma.php"><img class="img-responsive" src="/assets/img/old-site/esguicho-proporcionador-de-espuma.jpg" alt="Esguicho Proporcionador de Espuma" title="Esguicho Proporcionador de Espuma" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Confira os modelos de Esguicho Proporcionador de Espuma. </p>

                                                            <p style="text-align:center;"><a href="esguicho-proporcionador-de-espuma.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="esguicho-regulavel-para-mangueira.php" style="color:#fff; margin:0px;">Esguicho Regulável para Mangueira</a></h2>

                                                        <a href="esguicho-regulavel-para-mangueira.php"><img class="img-responsive" src="/assets/img/old-site/esguicho-regulavel-para-mangueira.jpg" alt="Esguicho Regulável para Mangueira de Incêndio" title="Esguicho Regulável para Mangueira de Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Confira os modelos de Esguicho Regulável para Mangueira</p>

                                                            <p style="text-align:center;"><a href="esguicho-regulavel-para-mangueira.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

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

                                                                <a href="canhao-monitor-de-combate-a-incendio.php"><img class="img-responsive" src="/assets/img/old-site/canhao-monitor-de-combate-a-incendio.jpg" alt="Canhão Monitor para Combate a Incêndio" title="Canhão Monitor para Combate a Incêndio" style="border:solid 5px #fff; text-align:center;"></a>

                                                                <div class="caption">

                                                                    <h2 style="margin-top:0px; font-size:14px; font-weight:bold;"><a href="canhao-monitor-de-combate-a-incendio.php" style="color:#fff;">Canhão Monitor</a></h2>

                                                                    <p style="text-align:center;"><a href="canhao-monitor-de-combate-a-incendio.php" style="font-size:10px;" class="btn btn-default" role="button">SAIBA MAIS</a></p>

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