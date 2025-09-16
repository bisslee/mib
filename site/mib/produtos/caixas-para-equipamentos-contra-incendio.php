<?php

/**
 * Página de Caixas para Equipamentos Contra Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Caixas e Gabinetes para Equipamentos Contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Caixas e gabinetes certificados ABNT para armazenamento e proteção de equipamentos contra incêndio. MIB Brasil.',
    'keywords' => 'Caixas Brasil, Gabinetes Nacional, Equipamentos Contra Incêndio, MIB, caixa certificada ABNT, armazenamento extintores, gabinete hidrante',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/caixas-para-equipamentos-contra-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Caixas para Equipamentos Contra Incêndio', 'active' => true]
];

// Rich Snippets - Product Schema
$product_schema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Caixas e Gabinetes para Equipamentos Contra Incêndio",
    "description" => "Caixas e gabinetes certificados ABNT para armazenamento e proteção de equipamentos contra incêndio. Fabricados em aço carbono para máxima durabilidade. MIB São Paulo.",
    "brand" => [
        "@type" => "Brand",
        "name" => "MIB - Mangueiras de Incêndio Brasil"
    ],
    "manufacturer" => [
        "@type" => "Organization",
        "name" => "MIB - Mangueiras de Incêndio Brasil",
        "url" => "https://mangueirasdeincendiobrasil.com.br"
    ],
    "category" => "Equipamentos Contra Incêndio",
    "offers" => [
        "@type" => "Offer",
        "priceCurrency" => "BRL",
        "availability" => "https://schema.org/InStock",
        "seller" => [
            "@type" => "Organization",
            "name" => "MIB - Mangueiras de Incêndio Brasil"
        ],
        "areaServed" => "São Paulo, SP, Brasil"
    ],
    "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "4.8",
        "reviewCount" => "76",
        "bestRating" => "5",
        "worstRating" => "1"
    ]
];

// FAQ Schema
$faq_schema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "Para que servem as caixas para equipamentos contra incêndio?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "As caixas protegem e organizam equipamentos contra incêndio como extintores e mangueiras, mantendo-os seguros e acessíveis em caso de emergência."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Quais materiais são usados nas caixas MIB?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Nossas caixas são fabricadas em aço carbono de alta qualidade, com acabamento anticorrosivo para máxima durabilidade e proteção dos equipamentos."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "As caixas são certificadas ABNT?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Sim, todas as caixas e gabinetes MIB são certificados ABNT e atendem às normas de segurança contra incêndio vigentes no Brasil."
            ]
        ]
    ]
];

// Incluir header
include '../includes/header.php';

// Adicionar Rich Snippets ao head
echo '<script type="application/ld+json">' . json_encode($product_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';

// Incluir breadcrumb
include '../includes/breadcrumb.php';
?>

<!-- Hero Section da Página -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Caixas para Equipamentos Contra Incêndio Certificadas ABNT - MIB Brasil</h1>
                <p class="page-subtitle">Caixas e gabinetes certificados ABNT para armazenamento e proteção de equipamentos contra incêndio</p>
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
                    <h2 class="section-title">Caixas para Equipamentos - Especificações Técnicas</h2>
                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="lead">
                                Caixas e gabinetes para armazenamento de equipamentos contra incêndio.
                            </p>
                            
                            <p>A <strong>MIB - Mangueiras de Incêndio Brasil</strong> oferece caixas e gabinetes de alta qualidade para proteger e organizar seus equipamentos contra incêndio. Fabricados em aço carbono com acabamento anticorrosivo, garantem máxima durabilidade e segurança em todo o Brasil.</p>
                            
                            <h2 class="section-title mt-4">Informações Importantes sobre Caixas</h2>
                            <div class="alert alert-info mt-3">
                                <ul>
                                    <li><h3><i class="fas fa-cog"></i> Material</h3>
                                        <p>Fabricadas em aço carbono de alta qualidade</p></li>
                                    <li><h3><i class="fas fa-certificate"></i> Certificação ABNT</h3>
                                        <p>Atendem às normas de segurança vigentes</p></li>
                                    <li><h3><i class="fas fa-shield-alt"></i> Proteção</h3>
                                        <p>Acabamento anticorrosivo para máxima durabilidade</p></li>
                                    <li><h3><i class="fas fa-map-marker-alt"></i> Atendimento Nacional</h3>
                                        <p>Entrega e instalação em todo o Brasil</p></li>
                                    <li><h3><i class="fas fa-list"></i> Variedade</h3>
                                        <p>Caixas para extintores, hidrantes e mangueiras</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">





                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:300px; ">

                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/caixa-para-extintor-de-incendio.php" style="color:#fff; margin:0px;">Caixa para Extintor de Incêndio</a></h2>

                                        <a href="/old-pages/caixa-para-extintor-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/caixa-para-extintor-de-incendio.jpg" alt="Caixa para Extintor de Incêndio certificada ABNT - MIB São Paulo" title="Caixa para Extintor de Incêndio" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="200"></a>

                                        <div class="caption">



                                            <p style="text-align:center;"><a href="/old-pages/caixa-para-extintor-de-incendio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                        </div>

                                    </div>

                                </div>



                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:300px; ">

                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/caixa-para-hidrante.php" style="color:#fff; margin:0px;">Caixa para Hidrante</a></h2>

                                        <a href="/old-pages/caixa-para-hidrante.php"><img class="img-responsive" src="/assets/img/old-site/caixa-para-hidrante.jpg" alt="Caixa para Hidrante certificada ABNT - MIB São Paulo" title="Caixa para Hidrante" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="200"></a>

                                        <div class="caption">



                                            <p style="text-align:center;"><a href="/old-pages/caixa-para-hidrante.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                        </div>

                                    </div>

                                </div>



                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:300px; ">

                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/caixa-para-mangueira-de-incendio.php" style="color:#fff; margin:0px;">Caixa para Mangueira de Incêndio</a></h2>

                                        <a href="/old-pages/caixa-para-mangueira-de-incendio.php"><img class="img-responsive" src="/assets/img/old-site/caixa-para-mangueira-de-incendio.jpg" alt="Caixa para Mangueira de Incêndio certificada ABNT - MIB São Paulo" title="Caixa para Mangueira de Incêndio" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="200"></a>

                                        <div class="caption">



                                            <p style="text-align:center;"><a href="/old-pages/caixa-para-mangueira-de-incendio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                        </div>

                                    </div>

                                </div>



                            </div>


                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <a href="../contact.php" class="btn btn-primary btn-lg">Solicite um Orçamento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Incluir footer
include '../includes/footer.php';
?>