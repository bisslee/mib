<?php
/**
 * Página migrada do old-site
 * Arquivo original: fabricante-extintor.php
 */

// Configuração da página
$page_config = array(
    'title' => 'Título da Página - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Fabricante de extintor de incêndio: garantindo a segurança com qualidade',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/fabricante-extintor.php',
);

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/',
        'text' => 'Home',
    ),
    1 => array(
        'url' => '',
        'text' => 'Título da Página',
    ),
);

$heroConfig = array(
    'title' => 'Título da Página',
    'description' => 'Fabricante de extintor de incêndio: garantindo a segurança com qualidade',
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

 <section class="container">

 <div class="row"> 

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 <div>

 <img src="/assets/img/old-site/planilha-102.png" class="img-responsive" alt="">

 </div>

 <p> <strong>Fabricante de extintor de incêndio: garantindo a segurança com qualidade</strong></p>

 <p>A escolha de um fabricante de extintor de incêndio confiável é crucial para garantir a

segurança de ambientes comerciais, industriais e residenciais.</p>

 <p>A HSA Segurança, como uma empresa comprometida com a proteção contra incêndios,

oferece uma ampla gama de extintores fabricados com os mais altos padrões de qualidade e

segurança.</p>

 <p>Neste texto, abordaremos a importância de escolher um fabricante de extintor de incêndio

confiável e como a HSA Segurança se destaca nesse mercado.</p>

<p><strong>Por que escolher um fabricante de extintor de incêndio confiável?</strong></p>

<p>Optar por um fabricante de extintor de incêndio confiável é essencial pelos seguintes motivos:</p>

<ul><li>Conformidade com normas técnicas</li></ul>

<p>Fabricantes de extintores confiáveis garantem que seus extintores estejam em conformidade

com as normas técnicas estabelecidas pelos órgãos reguladores, como a NBR 12693. Isso

assegura a eficácia do equipamento no combate a incêndios e a proteção das pessoas e do

patrimônio.</p>

<ul><li>Qualidade dos materiais e processos de fabricação</li></ul>

<p>Empresas comprometidas com a segurança investem em materiais de alta qualidade e

processos de fabricação rigorosos para garantir a durabilidade e o desempenho dos extintores.

Isso inclui a seleção adequada de agentes extintores, construção robusta e testes de

qualidade.</p>

<ul><li>Suporte técnico e assistência pós-venda</li></ul>

<p>Fabricantes confiáveis oferecem suporte técnico especializado e assistência pós-venda para

seus clientes. Isso inclui orientações sobre a escolha do extintor adequado para cada

ambiente, treinamentos para o uso correto do equipamento e manutenção preventiva.</p>

<p><strong>BS HSA - Excelência como fabricante de extintor de incêndio</strong></p>

<p>A Brasil segurança HSA se destaca como um fabricante de extintor de incêndio confiável por

diversos fatores. Em primeiro lugar, podemos citar seu compromisso inabalável com a

qualidade de seus produtos.</p>

<p>Todos os extintores são fabricados de acordo com as normas técnicas mais recentes e passam

por rigorosos testes de qualidade para garantir sua eficácia.</p>

<p>A BS HSA oferece uma ampla variedade de extintores para atender às

necessidades específicas de cada cliente e ambiente. Isso inclui extintores de pó químico, CO2

e água, entre outros, adequados para diferentes classes de incêndio.</p>

<p>Com anos de experiência no mercado de segurança contra incêndios, a BS 

conquistou a confiança de seus clientes e parceiros. Sua reputação é baseada na excelência de

seus produtos e serviços, tornando-a uma escolha confiável para a proteção contra incêndios.</p>

<p>Conte conosco para fornecer os melhores extintores e soluções em segurança contra

incêndios. Fabricante de extintor de incêndio – BS HSA, sua proteção em

primeiro lugar.</p>

 </article>

 <br><br>

 </div>

 <div class="fixa2">

 <a href="placas-de-sinalizacao.php" class="btn btn-primary">Veja o Produto</a>

 </div>

 </div>

 </section>


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