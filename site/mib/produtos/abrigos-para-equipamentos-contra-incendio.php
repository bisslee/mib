<?php
/**
 * Página de Abrigos para Equipamentos Contra Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Abrigos para Equipamentos Contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Abrigos para equipamentos contra incêndio são importantes pois conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo.',
    'keywords' => 'Abrigos Brasil, Equipamentos Contra Incêndio Nacional, Extintores, Hidrantes, Mangueiras, MIB, abrigo certificado ABNT, proteção equipamentos incêndio',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/abrigos-para-equipamentos-contra-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Abrigos para Equipamentos Contra Incêndio', 'active' => true]
];

// Rich Snippets - Product Schema
// Data de validade do preço (1 ano a partir de hoje)
$price_valid_until = date('Y-m-d', strtotime('+1 year'));

$product_schema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Abrigos para Equipamentos Contra Incêndio",
    "description" => "Abrigos para equipamentos contra incêndio certificados ABNT. Conservam e protegem extintores, hidrantes e mangueiras das intempéries do tempo. MIB São Paulo.",
    "image" => "https://mangueirasdeincendiobrasil.com.br/assets/img/mib_logo_final_com_tagline.png",
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
        "ratingValue" => "4.9",
        "reviewCount" => "89",
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
            "name" => "Cliente MIB"
        ],
        "reviewBody" => "Excelente qualidade, produtos certificados ABNT. Atendimento rápido em São Paulo."
    ]
];

// FAQ Schema
$faq_schema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "Para que servem os abrigos para equipamentos contra incêndio?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Os abrigos conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo como chuva, sol e poeira, garantindo maior durabilidade."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Quais tipos de abrigos vocês oferecem?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Oferecemos abrigos para extintores, hidrantes, mangueiras de incêndio e modelos industriais. Todos certificados ABNT e fabricados em aço carbono."
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
                    <h1 class="page-title">Abrigos para Equipamentos Contra Incêndio Certificados ABNT - MIB Brasil</h1>
                    <p class="page-subtitle">Conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo</p>
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
                        <h2 class="section-title">Abrigos para Equipamentos - Especificações Técnicas</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Os Abrigos para equipamentos contra incêndio são importantes pois, conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo. Temos vários tipos de abrigos tais como: abrigos para extintores de incêndio, abrigos para hidrantes e abrigos para mangueiras de incêndio.
                                </p>
                                
                                <h2 class="section-title mt-4">Informações Importantes sobre Abrigos</h2>
                                <div class="alert alert-info mt-3">
                                    <ul>
                                        <li><h3><i class="fas fa-certificate"></i> Certificação ABNT</h3>
                                            <p>Todos os abrigos seguem rigorosamente as normas técnicas</p></li>
                                        <li><h3><i class="fas fa-list"></i> Variedade de Modelos</h3>
                                            <p>Abrigos para extintores, hidrantes e mangueiras</p></li>
                                        <li><h3><i class="fas fa-map-marker-alt"></i> Atendimento Nacional</h3>
                                            <p>Entrega e instalação em todo o Brasil</p></li>
                                        <li><h3><i class="fas fa-shield-alt"></i> Proteção</h3>
                                            <p>Protegem equipamentos das intempéries</p></li>
                                        <li><h3><i class="fas fa-cog"></i> Material</h3>
                                            <p>Fabricados em aço carbono de alta qualidade</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
                                <h3 class="section-subtitle">Modelo Industrial</h3>
                                <p>Fabricado em aço carbono, 1010 - 1020 com acabamento em pintura epóxi, na cor vermelha padrão bombeiro. Porta dotada de trinco, visor para vidro e veneziana de ventilação.</p>
                                
                                <h4>Especificações:</h4>
                                <ul>
                                    <li><strong>Modelo:</strong> 2 Portas</li>
                                    <li><strong>Mangueira:</strong> Ø: 1.1/2" ou 2.1/2"</li>
                                    <li><strong>Comprimento:</strong> 30m</li>
                                    <li><strong>Quantidade:</strong> 4</li>
                                    <li><strong>Suporte Tipo:</strong> 1/2 Lua ou Basculante</li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
                                <div class="product-image">
                                    <img src="../assets/img/old-site/abrigo-industrial.jpg" 
                                         alt="Abrigo Modelo Industrial para equipamentos contra incêndio certificado ABNT - MIB São Paulo" 
                                         title="Abrigo Modelo Industrial"
                                         class="img-fluid rounded shadow" 
                                         loading="lazy" 
                                         width="400" 
                                         height="300" />
                                </div>
                            </div>
                        </div>

                        <h3 class="section-subtitle">Modelos Disponíveis</h3>
                        
                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Abrigo para Extintor</h5>
                                        <img src="../assets/img/old-site/abrigo-para-extintor-de-incendio.jpg" 
                                             alt="Abrigo para Extintor de Incêndio certificado ABNT proteção equipamentos - MIB São Paulo" 
                                             class="img-fluid mb-3 rounded"
                                             loading="lazy"
                                             width="200"
                                             height="150">
                                        <p class="card-text">Modelo para extintores pó químico 4,6,8, 12 Kg e água 10 litros</p>
                                        <p><strong>Medidas:</strong> 75 altura x 30 largura x 25 de profundidade cm</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Abrigo para Hidrante</h5>
                                        <img src="../assets/img/old-site/abrigo-para-hidrante.jpg" 
                                             alt="Abrigo para Hidrante certificado ABNT proteção sistemas combate incêndio - MIB São Paulo" 
                                             class="img-fluid mb-3 rounded"
                                             loading="lazy"
                                             width="200"
                                             height="150">
                                        <p class="card-text">Abrigo específico para hidrantes contra incêndio</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Abrigo para Mangueira</h5>
                                        <img src="../assets/img/old-site/abrigo-para-mangueira-de-incendio.jpg" 
                                             alt="Abrigo para Mangueira de Incêndio certificada ABNT proteção mangueiras - MIB São Paulo" 
                                             class="img-fluid mb-3 rounded"
                                             loading="lazy"
                                             width="200"
                                             height="150">
                                        <p class="card-text">Abrigo para mangueiras de incêndio</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12">
                                <h4>Modelo para Extintor de CO2 6Kg</h4>
                                <p><strong>Medidas:</strong> 85 altura x 40 largura x 30 profundidade cm</p>
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
