<?php

/**
 * Página de Extintores de Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Extintores de Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Conheça nossos extintores de incêndio para proteção contra incêndios em diversos ambientes.',
    'keywords' => 'Extintores de Incêndio, Equipamentos Contra Incêndio, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/equipamentos/extintores-de-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'equipamentos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Equipamentos', 'url' => '/equipamentos/'],
    ['text' => 'Extintores de Incêndio', 'active' => true]
];

$heroConfig = [
    'title' => 'Extintores de Incêndio',
    'subtitle' => 'O extintor de incêndio tem por finalidade, combater um foco de incêndio próximo ao seu local de instalação, emprega-se como o primeiro agente para o combate às chamas do foco de incêndio.'
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

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">

                                                <img class="img-responsive" src="/assets/img/old-site/extintores-de-incendio.jpg" class="img-responsive" alt="Extintores de incêndio" title="Extintores de incêndio" style="margin:0px auto;">

                                            </div>

                                            <p>O extintor de incêndio tem por finalidade, combater um foco de incêndio próximo ao seu local de instalação, emprega-se como o primeiro agente para o combate às chamas do foco de incêndio. </p>

                                            <p>O extintor de incêndio possui várias classificações no que se refere a tamanho, tipo e demais características, de acordo com as normas feitas pela ABNT. Dentre seus modelos podemos citar alguns como: Extintor de incêndio portátil e Extintor de Incêndio Sobre Rodas</p>

                                            <p><strong>Confira nossos extintores de incêndio:</strong> </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-portatil.php" style="color:#fff; margin:0px;">Extintor de Incêndio Portátil</a></h2>

                                                        <a href="extintor-de-incendio-portatil.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-portatil.jpg" alt="Extintor de Incêndio Portátil" title="Extintor de Incêndio Portátil" style="text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Contamos com Extintor de Incêndio Portátil de água, po químico, classe ABC... </p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-portatil.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-sobre-rodas.php" style="color:#fff; margin:0px;">Extintor de Incêndio Sobre Rodas</a></h2>

                                                        <a href="extintor-de-incendio-sobre-rodas.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-sobre-rodas.jpg" alt="Extintor de Incêndio Sobre Rodas" title="Extintor de Incêndio Sobre Rodas" style="text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Contamos com Extintor de Incêndio Sobre Rodas de água, po químico, classe ABC...</p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-sobre-rodas.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-co2.php" style="color:#fff; margin:0px;">Extintor de Incêndio CO2</a></h2>

                                                        <a href="extintor-de-incendio-co2.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-co2.jpg" alt="Extintor de Incêndio CO2" title="Extintor de Incêndio CO2" style="text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Como um dos extintores mais utilizados no mercado o extintor de incêndio CO2 posssui...</p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-co2.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-a-base-de-agua.php" style="color:#fff; margin:0px;">Extintor de Incêndio a base de água</a></h2>

                                                        <a href="extintor-de-incendio-a-base-de-agua.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-a-base-de-agua.jpg" alt="Extintor de Incêndio a base de água" title="Extintor de Incêndio a base de água" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">O extintor de incêndio a base de água possui água pressurizada para o combate de fogo...</p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-a-base-de-agua.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-po-quimico.php" style="color:#fff; margin:0px;">Extintor de Incêndio Pó Químico</a></h2>

                                                        <a href="extintor-de-incendio-po-quimico.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-po-quimico.jpg" alt="Extintor de Incêndio Pó Químico" title="Extintor de Incêndio Pó Químico" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Este tipo de extintor caracteriza-se por combater incêndio de combustão como líquidos...</p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-po-quimico.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-po-quimico-seco.php" style="color:#fff; margin:0px;">Extintor de Incêndio Pó Químico Seco</a></h2>

                                                        <a href="extintor-de-incendio-po-quimico-seco.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-po-quimico-seco.jpg" alt="Extintor de Incêndio Pó Químico Seco" title="Extintor de Incêndio Pó Químico Seco" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">O extintor de pó químico seco é utilizado para combate a focos de incêndio de origem...</p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-po-quimico-seco.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-para-condominio.php" style="color:#fff; margin:0px;">Extintor de Incêndio para Condomínio</a></h2>

                                                        <a href="extintor-de-incendio-para-condominio.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-para-condominio.jpg" alt="Extintor de Incêndio para Condomínio" title="Extintor de Incêndio para Condomínio" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Com o avanço das construções verticais nas áreas metropolitanas do Brasil é cada vez maior a preocupação...</p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-para-condominio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="extintor-de-incendio-para-predio.php" style="color:#fff; margin:0px;">Extintor de Incêndio para Prédio</a></h2>

                                                        <a href="extintor-de-incendio-para-predio.php"><img class="img-responsive" src="/assets/img/old-site/extintor-de-incendio-para-predio.jpg" alt="Extintor de Incêndio para Prédio" title="Extintor de Incêndio para Prédio" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Para se obter maior segurança de combate a incêndio dentro dos prédios residenciais e comerciais, é necessário...</p>

                                                            <p style="text-align:center;"><a href="extintor-de-incendio-para-predio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <p>Qual é o primeiro item de segurança que se pensa quando o assunto é incêndio? Extintores não é mesmo, eles são extremamente importantes para conter pequenos focos de incêndios e prevenir grandes percas e danos. Mas, para isso é necessário procurar um produto fabricado com qualidade, pois quando o assunto é incêndio o barato pode sair muito mais caro no final das contas. Então, na hora da <strong>compra de extintores de incêndio</strong> é bom se atentar a alguns detalhes, como por exemplo, qual tipo de extintor você deve comprar?</p>

                                            <p>A resposta para essa pergunta vai depender de outros fatores, no mercado brasileiro existem vários tipos de extintores que contém dentro de seus cilindros, agentes antichamas que servem para apagar focos incendiários provenientes de combustões diferentes.</p>

                                            <p>Por exemplo, se o incêndio for proveniente da combustão de madeira o mais indicado é usar o extintor que contenha água, pois ele apagará rapidamente o fogo, mas no caso de um curto elétrico, o extintor de água pode piorar a situação. Por isso, na hora da <strong>compra de extintores de incêndio</strong> é preciso se atentar para saber qual tipo de fogo ele é mais indicado. A embalagem dos extintores contém impressas as letras A, B e C elas servem como referência para cada tipo de foco incendiário.</p>

                                            <h2>Como realizar a compra de extintores de incêndio</h2>

                                            <p>Antes de iniciar a <strong>compra de extintores de incêndio</strong> é importante levantar quais os tipos de extintores que precisam ser adquiridos e a quantidade. Essas informações constam provavelmente no projeto elaborado.</p>

                                            <p>Ao chegar o momento da <strong>compra de extintores de incêndio</strong> é necessário se atentar as letras que estão no rótulo do seu extintor, pois existe um extintor especifico para cada situação. Por isso, na <strong>compra de extintores de incêndio</strong>, se houver dúvidas pergunte para o vendedor se o produto pode ser usado para apagar terminado foco de incêndio.</p>

                                            <p>A escolha da empresa fornecedora para realizar a <strong>compra de extintores de incêndio</strong> é também uma tarefa importante, afinal é ela que irá garantir a qualidade e eficiência dos equipamentos e produto, pois não se brinca com fogo, isso é assunto sério que deve ser tratado com importância. Portanto, entre em contato com a para realizar a <strong>compra de extintores de incêndio</strong>, uma empresa seria e que comercializa produtos da maior qualidade.</p>

                                            <p>A <strong> atende todo o Brasil</strong>, a empresa é uma das líderes quando o assunto é <strong>equipamento contra incêndio</strong>. Na hora da <strong>compra de extintores de incêndio</strong> escolha a e leve um produto de qualidade e garantia, pois a empresa só comercializa equipamentos de primeira para satisfazer e garantir maior segurança para seu clientes. </p>

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