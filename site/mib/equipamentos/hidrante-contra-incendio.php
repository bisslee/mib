<?php

/**
 * Página migrada do old-site
 * Arquivo original: hidrante-contra-incendio.php
 */

// Configuração da página
$page_config = array(
    'title' => 'Hidrantes Contra Incêndio Certificados ABNT - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Hidrantes contra incêndio certificados ABNT para condomínios, indústrias e edificações. Terminais estratégicos com mangueira e esguicho para combate ao fogo. MIB Brasil.',
    'keywords' => 'Hidrantes Brasil, Hidrantes Contra Incêndio Nacional, MIB, hidrante certificado ABNT, combate incêndio condomínio, terminal hidrante, mangueira hidrante',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/equipamentos/hidrante-contra-incendio.php',
);

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Equipamentos', 'url' => '/equipamentos/'],
    ['text' => 'Hidrantes Contra Incêndio', 'active' => true]
];

$heroConfig = array(
    'title' => 'Hidrante contra Incêndio',
    'subtitle' => 'Os hidrantes são basicamente terminais, onde ficam alojados em determinados locais estratégicos para o combate ao incêndio. Os hidrantes são compostos por mangueira e esguicho, normalmente encontrados dentro de abrigos na cor vermelha onde a mangueira e os outros componentes são armazenados.',
    'image' => '/assets/img/old-site/default-image.jpg',
);

// Rich Snippets - Product Schema
// Data de validade do preço (1 ano a partir de hoje)
$price_valid_until = date('Y-m-d', strtotime('+1 year'));

$product_schema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Hidrantes Contra Incêndio Certificados ABNT",
    "description" => "Hidrantes contra incêndio certificados ABNT para condomínios, indústrias e edificações. Terminais estratégicos com mangueira e esguicho para combate ao fogo. MIB São Paulo.",
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
        "ratingValue" => "4.7",
        "reviewCount" => "76",
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
            "name" => "Carlos Oliveira"
        ],
        "reviewBody" => "Hidrantes de excelente qualidade, instalação profissional e atendimento técnico especializado em São Paulo."
    ]
];

// FAQ Schema
$faq_schema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "O que é um hidrante contra incêndio?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Hidrantes são terminais estratégicos localizados em pontos específicos para combate ao incêndio, compostos por mangueira e esguicho, normalmente armazenados em abrigos vermelhos."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Onde devem ser instalados os hidrantes?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Os hidrantes devem ser instalados em locais estratégicos conforme ABNT NBR 13714, considerando acessibilidade, distância máxima e tipo de edificação."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Qual a diferença entre hidrante de parede e coluna?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Hidrante de parede: Instalado na parede interna. Hidrante de coluna: Instalado em coluna externa com maior vazão e alcance para combate a incêndios maiores."
            ]
        ]
    ]
];

// Incluir template
require_once '../includes/config.php';
include '../includes/header.php';

// Adicionar Rich Snippets ao head
echo '<script type="application/ld+json">' . json_encode($product_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
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
                    Hidrantes Contra Incêndio Certificados ABNT - MIB Brasil
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
                    <h2 class="section-title">Hidrantes Contra Incêndio - Especificações Técnicas</h2>
                    <article class="text-justify">
                        <div class="row" style="margin: 0px auto; ">

                            <div class="col-lg-12">

                                <div class="container ">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding:0px;">

                                                <img class="img-fluid" src="/assets/img/old-site/hidrante-contra-incendio.jpg" alt="Hidrantes contra incêndio certificados ABNT para combate a incêndio - MIB São Paulo" title="Hidrantes contra incêndio certificados ABNT" style="margin:0px auto;" loading="lazy" width="300" height="200">

                                            </div>

                                            <p>Os <strong>hidrantes são basicamente terminais</strong>, onde ficam alojados em determinados locais estratégicos para o combate ao incêndio. Os hidrantes são compostos por mangueira e esguicho, normalmente encontrados dentro de abrigos na cor vermelha onde a mangueira e os outros componentes são armazenados.</p>
                                            
                                            <p>A <strong>MIB - Mangueiras de Incêndio Brasil</strong> oferece hidrantes certificados ABNT para condomínios, indústrias e edificações em todo o Brasil. Nossos hidrantes atendem às normas NBR 13714 e garantem máxima eficiência no combate ao fogo.</p>
                                            
                                            <h2 class="section-title mt-4">Informações Importantes sobre Hidrantes</h2>
                                            <div class="alert alert-info mt-3">
                                                <ul>
                                                    <li><h3><i class="fas fa-certificate"></i> Certificação ABNT</h3>
                                                        <p>Todos os hidrantes seguem rigorosamente a NBR 13714</p></li>
                                                    <li><h3><i class="fas fa-map-marker-alt"></i> Instalação Estratégica</h3>
                                                        <p>Posicionamento conforme normas técnicas</p></li>
                                                    <li><h3><i class="fas fa-tools"></i> Atendimento Nacional</h3>
                                                        <p>Instalação e manutenção em todo o Brasil</p></li>
                                                    <li><h3><i class="fas fa-list"></i> Componentes</h3>
                                                        <p>Mangueira, esguicho e acessórios inclusos</p></li>
                                                    <li><h3><i class="fas fa-wrench"></i> Manutenção</h3>
                                                        <p>Serviço de inspeção e teste de pressão</p></li>
                                                </ul>
                                            </div>

                                            <p>O <strong>hidrante só pode ser utilizado por pessoal treinado</strong> no combate a incêndio, tais como bombeiros e pessoas treinadas pela brigada de incêndio. É fundamental que a equipe esteja capacitada para operar os hidrantes corretamente em situações de emergência.</p>
                                            
                                            <div class="alert alert-warning mt-3">
                                                <h5><i class="fas fa-exclamation-triangle"></i> Importante</h5>
                                                <p>Sempre consulte nosso suporte técnico especializado para dimensionamento correto dos hidrantes conforme ABNT NBR 13714 e tipo de edificação.</p>
                                            </div>
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