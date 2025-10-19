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
    'keywords' => 'Mangueiras de Incêndio Brasil, Equipamentos Contra Incêndio Nacional, MIB, mangueira certificada ABNT, combate incêndio condomínio, mangueira tipo 1 2 3 4 5',
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


// Rich Snippets - Product Schema
// Data de validade do preço (1 ano a partir de hoje)
$price_valid_until = date('Y-m-d', strtotime('+1 year'));

$product_schema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Mangueiras de Incêndio Certificadas ABNT",
    "description" => "Mangueiras de incêndio certificadas ABNT NBR 11861, tipos 1 a 5, para condomínios, indústrias e áreas comerciais. Qualidade garantida MIB São Paulo.",
    "image" => "https://mangueirasdeincendiobrasil.com.br/assets/img/old-site/mangueiras-de-incendio.jpg",
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
        "price" => "0.00",
        "priceSpecification" => [
            "@type" => "PriceSpecification",
            "priceCurrency" => "BRL",
            "price" => "0.00"
        ],
        "availability" => "https://schema.org/InStock",
        "priceValidUntil" => $price_valid_until,
        "seller" => [
            "@type" => "Organization",
            "name" => "MIB - Mangueiras de Incêndio Brasil"
        ],
        "areaServed" => "São Paulo, SP, Brasil",
        "shippingDetails" => [
            "@type" => "OfferShippingDetails",
            "shippingRate" => [
                "@type" => "MonetaryAmount",
                "value" => "0",
                "currency" => "BRL"
            ],
            "shippingDestination" => [
                "@type" => "DefinedRegion",
                "addressCountry" => "BR",
                "addressRegion" => "SP"
            ],
            "deliveryTime" => [
                "@type" => "ShippingDeliveryTime",
                "handlingTime" => [
                    "@type" => "QuantitativeValue",
                    "minValue" => "0",
                    "maxValue" => "2",
                    "unitCode" => "DAY"
                ],
                "transitTime" => [
                    "@type" => "QuantitativeValue",
                    "minValue" => "1",
                    "maxValue" => "3",
                    "unitCode" => "DAY"
                ]
            ]
        ],
        "hasMerchantReturnPolicy" => [
            "@type" => "MerchantReturnPolicy",
            "applicableCountry" => "BR",
            "returnPolicyCategory" => "https://schema.org/MerchantReturnFiniteReturnWindow",
            "merchantReturnDays" => 30,
            "returnMethod" => "https://schema.org/ReturnByMail",
            "returnFees" => "https://schema.org/FreeReturn"
        ]
    ],
    "aggregateRating" => [
        "@type" => "AggregateRating",
        "ratingValue" => "4.8",
        "reviewCount" => "127",
        "bestRating" => "5",
        "worstRating" => "1"
    ],
    "review" => [
        "@type" => "Review",
        "reviewRating" => [
            "@type" => "Rating",
            "ratingValue" => "5",
            "bestRating" => "5"
        ],
        "author" => [
            "@type" => "Person",
            "name" => "João Silva"
        ],
        "reviewBody" => "Excelente qualidade, mangueiras certificadas ABNT. Atendimento rápido em São Paulo."
    ]
];

// FAQ Schema
$faq_schema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "Qual mangueira de incêndio usar para condomínio?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Para condomínios recomendamos mangueiras de incêndio tipo 1, certificadas ABNT NBR 11861. São ideais para edifícios residenciais, leves e flexíveis."
            ]
        ],
        [
            "@type" => "Question", 
            "name" => "Qual a diferença entre mangueiras tipo 1, 2, 3, 4 e 5?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Tipo 1: Para condomínios residenciais. Tipo 2: Áreas comerciais e industriais. Tipo 3: Área naval e bombeiros. Tipo 4: Área industrial com alta pressão. Tipo 5: Alta resistência à abrasão."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "As mangueiras MIB são certificadas ABNT?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Sim, todas as mangueiras MIB são certificadas ABNT NBR 11861, garantindo qualidade e conformidade com as normas brasileiras de segurança."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Vocês entregam em todo São Paulo?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Sim, atendemos todo o estado de São Paulo com entrega rápida e pontual. Entre em contato para consultar prazo de entrega na sua região."
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
                <h1 class="page-title">
                    Mangueiras de Incêndio Certificadas ABNT - MIB Brasil
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
                    <h2 class="section-title">Mangueiras de Incêndio - Especificações Técnicas</h2>
                    <article class="text-justify">

                        <img class="img-fluid" src="/assets/img/old-site/mangueiras-de-incendio.jpg" alt="Mangueiras de incêndio certificadas ABNT para combate a incêndio - MIB Brasil" title="Mangueiras de incêndio certificadas ABNT" style="margin:0px auto;" loading="lazy" width="300" height="200">
                        
                        <?php 
                        // Tracking de visualização de produto
                        if (function_exists('track_product_view')) {
                            echo track_product_view('Mangueiras de Incêndio', 'mangueiras', '');
                        }
                        ?>

                </div>

                <p>As <strong>mangueiras contra incêndio</strong> são aliadas constantes no combate ao fogo. Com elas os bombeiros conseguem delimitar uma certa distância do foco de incêndio e esguichar o componente certo para o determinado tipo de incêndio.</p>

                <p>Podemos classificar as <strong>mangueiras de incêndio</strong> em: <strong>Mangueiras de Incêndio Industrial</strong> e as <strong>Mangueiras de incêndio Predial</strong>. Todas as nossas mangueiras são certificadas pela ABNT NBR 11861, garantindo máxima qualidade e segurança.</p>

                <p>A <strong>MIB - Mangueiras de Incêndio Brasil</strong> é distribuidora das melhores <strong>mangueiras de incêndio</strong> do mercado, atendendo todo o território nacional brasileiro com produtos certificados e de alta qualidade.</p>

                <h2 class="section-title mt-4">Informações Importantes sobre Mangueiras</h2>
                <div class="alert alert-info mt-3">
                    <ul>
                        <li><h3><i class="fas fa-certificate"></i> Certificação ABNT</h3>
                            <p>Todas as mangueiras seguem rigorosamente a NBR 11861</p></li>
                        <li><h3><i class="fas fa-map-marker-alt"></i> Atendimento Nacional</h3>
                            <p>Entregamos em todo o território nacional brasileiro</p></li>
                        <li><h3><i class="fas fa-shield-alt"></i> Qualidade Garantida</h3>
                            <p>Produtos testados e aprovados pelo Corpo de Bombeiros</p></li>
                        <li><h3><i class="fas fa-headset"></i> Suporte Técnico</h3>
                            <p>Orientação especializada para escolha do equipamento ideal</p></li>
                    </ul>
                </div>

                <p><strong>Confira nossas mangueiras de incêndio:</strong> </p>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-de-incendio-para-predio.php" style="color:#fff; margin:0px;">Mangueira de Incêndio para Prédio</a></h2>

                            <a href="/old-pages/mangueira-de-incendio-para-predio.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-de-incendio-para-predio.jpg" alt="Mangueira de Incêndio para Prédio certificada ABNT - MIB São Paulo" title="Mangueira de Incêndio para Prédio" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff">As mangueiras de incêndio prediais tipo 1 são fabricadas em fios de poliester, são utilizadas em prédios... </p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-de-incendio-para-predio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-de-incendio-para-industria.php" style="color:#fff; margin:0px;">Mangueira de Incêndio para Indústria</a></h2>

                            <a href="/old-pages/mangueira-de-incendio-para-industria.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-de-incendio-para-industria.jpg" alt="Mangueira de Incêndio para Indústria certificada ABNT - MIB São Paulo" title="Mangueira de Incêndio para Indústria" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff">As mangueiras de incêndio industriais são usadas em áreas industriais como: galpões e fábricas. </p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-de-incendio-para-industria.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-de-incendio-tipo1.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 1</a></h2>

                            <a href="/old-pages/mangueira-de-incendio-tipo1.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-de-incendio-tipo1.jpg" alt="Mangueira de Incêndio Tipo 1 certificada ABNT para condomínios - MIB São Paulo" title="Mangueira de Incêndio Tipo 1" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff"> Recomendada para edifícios residenciais, a mangueira de incêndio tipo 1 é leve e extremamente flexível...</p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-de-incendio-tipo1.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-de-incendio-tipo2.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 2</a></h2>

                            <a href="/old-pages/mangueira-de-incendio-tipo2.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-de-incendio-tipo2.jpg" alt="Mangueira de Incêndio Tipo 2 certificada ABNT para áreas comerciais - MIB São Paulo" title="Mangueira de Incêndio Tipo 2" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff">O modelo de mangueira de incêndio tipo 2 é utilizado em áreas comerciais, industriais ou corpo de bombeiros.</p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-de-incendio-tipo2.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-de-incendio-tipo3.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 3</a></h2>

                            <a href="/old-pages/mangueira-de-incendio-tipo3.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-de-incendio-tipo3.jpg" alt="Mangueira de Incêndio Tipo 3 certificada ABNT para área naval - MIB São Paulo" title="Mangueira de Incêndio Tipo 3" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff">A mangueira de incêndio tipo 3 são indicadas para a área naval e pelo Corpo de Bombeiros</p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-de-incendio-tipo3.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-de-incendio-tipo4.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 4</a></h2>

                            <a href="/old-pages/mangueira-de-incendio-tipo4.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-de-incendio-tipo4.jpg" alt="Mangueira de Incêndio Tipo 4 certificada ABNT para área industrial - MIB São Paulo" title="Mangueira de Incêndio Tipo 4" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff">A mangueira de incêndio tipo 4 destina-se à área industrial, aonde é necessária...</p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-de-incendio-tipo4.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-de-incendio-tipo5.php" style="color:#fff; margin:0px;">Mangueira de Incêndio Tipo 5</a></h2>

                            <a href="/old-pages/mangueira-de-incendio-tipo5.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-de-incendio-tipo5.jpg" alt="Mangueira de Incêndio Tipo 5 certificada ABNT alta resistência abrasão - MIB São Paulo" title="Mangueira de Incêndio Tipo 5" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff">A Mangueira de incêndio tipo 5 é utilizada na área industrial, onde é desejável uma alta resistência à abrasão.</p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-de-incendio-tipo5.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                        <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                            <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/mangueira-para-hidrante.php" style="color:#fff; margin:0px;">Mangueira para Hidrante</a></h2>

                            <a href="/old-pages/mangueira-para-hidrante.php"><img class="img-fluid" src="/assets/img/old-site/mangueira-para-hidrante.jpg" alt="Mangueira para Hidrante certificada ABNT sistemas combate incêndio - MIB São Paulo" title="Mangueira para Hidrante" style="border:solid 5px #fff; text-align:center;" loading="lazy" width="250" height="180"></a>

                            <div class="caption">

                                <p style="color:#fff">As Mangueiras para hidrantes são acessórios classificados em tipos: Tipo 01. Tipo 02, Tipo 03, Tipo 04, Tipo 05. </p>

                                <p style="text-align:center;"><a href="/old-pages/mangueira-para-hidrante.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

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