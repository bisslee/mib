<?php
/**
 * Página migrada do old-site
 * Arquivo original: encontre-tudo-aqui.php
 */

// Configuração da página
$page_config = array(
    'title' => 'Título da Página - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'BS : Sua loja de mangueira de incêndio de confiança',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/encontre-tudo-aqui.php',
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
    'description' => 'BS : Sua loja de mangueira de incêndio de confiança',
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

 <img src="/assets/img/old-site/planilha-101.png" class="img-responsive" alt="">

 </div>

 <h3><strong>Encontre tudo o que precisa para a proteção de sua empresa ou comércio em nossa

loja de mangueira de incêndio</strong></h3>

<p>Quando se trata de segurança contra incêndios para empresas, indústrias ou comércios,

encontrar uma loja de mangueira de incêndio confiável é fundamental.</p>

<p>A BS HSA atua como loja de mangueira de incêndio para oferecer uma ampla

variedade de produtos de qualidade para atender às necessidades de proteção de seu

ambiente comercial e empresarial.</p>

<p>Neste texto, vamos destacar os benefícios de escolher uma loja de mangueira de incêndio de

confiança e como a BS HSA pode atender a todas as suas necessidades de

segurança contra incêndios.</p>

<p><strong>Por que escolher uma loja de mangueira de incêndio especializada para equipar sua

empresa?</strong></p>

<p>Empresas possuem particularidades e especificações que exigem que a proteção contra

incêndio seja feita de maneira regulamentada. Isso inclui inserir um sistema de proteção de

incêndio com os equipamentos adequados, que podem ser encontrados na loja de mangueira

de incêndio da BS .</p>

<p>Entre as razões para adquirir os equipamentos de proteção de incêndio em uma loja de

mangueira de incêndio estão:</p>

<ul>

 <li><strong>Produtos variados direcionados à proteção e combate a incêndios:</strong>uma loja de

mangueira de incêndio especializada oferece uma ampla variedade de produtos para

atender às diferentes necessidades de seus clientes.

Isso inclui mangueiras de diferentes tamanhos, materiais e especificações, garantindo

que você encontre o produto ideal para a proteção de sua empresa.</li>

 <li><strong>Mangueiras de incêndio certificadas:</strong>a loja especializada em mangueiras de incêndio

trabalha com produtos certificados, garantindo a qualidade e a eficácia dos produtos

oferecidos.

Dessa forma há maior tranquilidade ao cliente, sabendo que está adquirindo uma

mangueira confiável e segura.</li>

 <li><strong>Atendimento profissional especializado:</strong>Na loja de mangueira de incêndio da BS

 HSA, você conta com o atendimento de profissionais especializados e

capacitados para orientá-lo na escolha da mangueira mais adequada para suas

necessidades.

Nossos profissionais podem oferecer informações técnicas, dicas de segurança e

auxílio na instalação e manutenção dos equipamentos.</li>

</ul>

<p><strong>BS : Sua loja de mangueira de incêndio de confiança</strong></p>

<p>Em nossa loja de mangueira de incêndio, você encontrará uma ampla variedade de produtos,

incluindo mangueiras de incêndio de diferentes materiais, como PVC e borracha, e com

diferentes especificações, como diâmetro e comprimento. Temos opções para todos os tipos

de ambiente e necessidades específicas de proteção contra incêndios.</p>

<p>Não deixe a segurança de seu ambiente para depois. Invista em mangueira de incêndio da BS

 e garanta a proteção de vidas e patrimônios contra incêndios. Conte conosco

para fornecer produtos de qualidade e soluções confiáveis em segurança contra incêndios.</p>

 </article>

 <br><br>

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