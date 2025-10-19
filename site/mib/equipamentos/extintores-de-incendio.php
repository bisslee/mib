<?php

/**
 * Página de Extintores de Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Extintores de Incêndio Certificados ABNT - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Extintores de incêndio certificados ABNT para condomínios, indústrias e residências. Primeiro agente de combate às chamas. MIB Brasil.',
    'keywords' => 'Extintores de Incêndio Brasil, Equipamentos Contra Incêndio Nacional, MIB, extintor certificado ABNT, combate incêndio condomínio, extintor ABC PQS',
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

// Rich Snippets - Product Schema
// Data de validade do preço (1 ano a partir de hoje)
$price_valid_until = date('Y-m-d', strtotime('+1 year'));

$product_schema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Extintores de Incêndio Certificados ABNT",
    "description" => "Extintores de incêndio certificados ABNT para condomínios, indústrias e residências. Primeiro agente de combate às chamas com máxima eficiência. MIB São Paulo.",
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
        "reviewCount" => "98",
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
            "name" => "Maria Santos"
        ],
        "reviewBody" => "Extintores de excelente qualidade, certificados ABNT. Instalação rápida e atendimento eficiente em São Paulo."
    ]
];

// FAQ Schema
$faq_schema = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "Qual extintor usar para cada tipo de incêndio?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Extintor ABC: Para incêndios classe A (sólidos), B (líquidos) e C (gases). Extintor PQS: Para incêndios classe A e B. Extintor CO2: Para incêndios classe B e C, ideal para equipamentos elétricos."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Com que frequência devo recarregar os extintores?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Extintores devem ser recarregados anualmente ou após uso. A MIB oferece serviço de manutenção e recarga certificada ABNT em São Paulo."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "Quantos extintores preciso no meu condomínio?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "A quantidade depende do tipo de edificação e área. Consulte nosso suporte técnico especializado para dimensionamento correto conforme ABNT NBR 12693."
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
                    Extintores de Incêndio Certificados ABNT - MIB Brasil
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
                    <h2 class="section-title">Extintores de Incêndio - Especificações Técnicas</h2>
                    <article class="text-justify">


                        <div class="row" style="margin: 0px auto; ">

                            <div class="col-lg-12">

                                <div class="container ">

                                    

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">

                                                <img class="img-fluid" src="/assets/img/old-site/extintores-de-incendio.jpg" alt="Extintores de incêndio certificados ABNT para combate a incêndio - MIB São Paulo" title="Extintores de incêndio certificados ABNT" style="margin:0px auto;" loading="lazy" width="300" height="200">

                                            </div>

                                            <p>O <strong>extintor de incêndio</strong> tem por finalidade, combater um foco de incêndio próximo ao seu local de instalação, emprega-se como o primeiro agente para o combate às chamas do foco de incêndio.</p>
                                            
                                            <p>A <strong>MIB - Mangueiras de Incêndio Brasil</strong> oferece extintores certificados ABNT para condomínios, indústrias e residências em todo o Brasil. Nossos extintores atendem às normas NBR 12693 e garantem máxima segurança.</p>
                                            
                                            <h2 class="section-title mt-4">Informações Importantes sobre Extintores</h2>
                                            <div class="alert alert-info mt-3">
                                                <ul>
                                                    <li><h3><i class="fas fa-certificate"></i> Certificação ABNT</h3>
                                                        <p>Todos os extintores seguem rigorosamente a NBR 12693</p></li>
                                                    <li><h3><i class="fas fa-tools"></i> Manutenção Anual</h3>
                                                        <p>Serviço de recarga e manutenção certificada</p></li>
                                                    <li><h3><i class="fas fa-map-marker-alt"></i> Atendimento Nacional</h3>
                                                        <p>Instalação e suporte técnico em todo o Brasil</p></li>
                                                    <li><h3><i class="fas fa-list"></i> Tipos Disponíveis</h3>
                                                        <p>ABC, PQS, CO2, Água e Pó Químico Seco</p></li>
                                                    <li><h3><i class="fas fa-calculator"></i> Dimensionamento</h3>
                                                        <p>Consultoria técnica para quantidade adequada</p></li>
                                                </ul>
                                            </div>

                                            <p>O extintor de incêndio possui várias classificações no que se refere a tamanho, tipo e demais características, de acordo com as normas feitas pela ABNT. Dentre seus modelos podemos citar alguns como: Extintor de incêndio portátil e Extintor de Incêndio Sobre Rodas</p>

                                            <p><strong>Confira nossos extintores de incêndio:</strong> </p>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-portatil.php" style="color:#fff; margin:0px;">Extintor de Incêndio Portátil</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-portatil.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-portatil.jpg" alt="Extintor de Incêndio Portátil certificado ABNT - MIB São Paulo" title="Extintor de Incêndio Portátil" style="text-align:center;" loading="lazy" width="250" height="200"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Contamos com Extintor de Incêndio Portátil de água, po químico, classe ABC... </p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-portatil.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-sobre-rodas.php" style="color:#fff; margin:0px;">Extintor de Incêndio Sobre Rodas</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-sobre-rodas.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-sobre-rodas.jpg" alt="Extintor de Incêndio Sobre Rodas para indústrias - MIB São Paulo" title="Extintor de Incêndio Sobre Rodas" style="text-align:center;" loading="lazy" width="250" height="200"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Contamos com Extintor de Incêndio Sobre Rodas de água, po químico, classe ABC...</p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-sobre-rodas.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-co2.php" style="color:#fff; margin:0px;">Extintor de Incêndio CO2</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-co2.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-co2.jpg" alt="Extintor de Incêndio CO2 para equipamentos elétricos - MIB São Paulo" title="Extintor de Incêndio CO2" style="text-align:center;" loading="lazy" width="250" height="200"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Como um dos extintores mais utilizados no mercado o extintor de incêndio CO2 posssui...</p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-co2.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-a-base-de-agua.php" style="color:#fff; margin:0px;">Extintor de Incêndio a base de água</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-a-base-de-agua.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-a-base-de-agua.jpg" alt="Extintor de Incêndio a base de água" title="Extintor de Incêndio a base de água" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">O extintor de incêndio a base de água possui água pressurizada para o combate de fogo...</p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-a-base-de-agua.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-po-quimico.php" style="color:#fff; margin:0px;">Extintor de Incêndio Pó Químico</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-po-quimico.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-po-quimico.jpg" alt="Extintor de Incêndio Pó Químico" title="Extintor de Incêndio Pó Químico" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Este tipo de extintor caracteriza-se por combater incêndio de combustão como líquidos...</p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-po-quimico.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-po-quimico-seco.php" style="color:#fff; margin:0px;">Extintor de Incêndio Pó Químico Seco</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-po-quimico-seco.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-po-quimico-seco.jpg" alt="Extintor de Incêndio Pó Químico Seco" title="Extintor de Incêndio Pó Químico Seco" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">O extintor de pó químico seco é utilizado para combate a focos de incêndio de origem...</p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-po-quimico-seco.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-para-condominio.php" style="color:#fff; margin:0px;">Extintor de Incêndio para Condomínio</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-para-condominio.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-para-condominio.jpg" alt="Extintor de Incêndio para Condomínio" title="Extintor de Incêndio para Condomínio" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Com o avanço das construções verticais nas áreas metropolitanas do Brasil é cada vez maior a preocupação...</p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-para-condominio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding:4px; text-align:center;">

                                                    <div class="thumbnail" style="background:#ff8000; border-bottom:solid 3px #000; min-height:400px; ">

                                                        <h2 style="margin:10px; font-size:17px; padding-bottom:10px; font-weight:bold;"><a href="/old-pages/extintor-de-incendio-para-predio.php" style="color:#fff; margin:0px;">Extintor de Incêndio para Prédio</a></h2>

                                                        <a href="/old-pages/extintor-de-incendio-para-predio.php"><img class="img-fluid" src="/assets/img/old-site/extintor-de-incendio-para-predio.jpg" alt="Extintor de Incêndio para Prédio" title="Extintor de Incêndio para Prédio" style="border:solid 5px #fff; text-align:center;"></a>

                                                        <div class="caption">

                                                            <p style="color:#fff">Para se obter maior segurança de combate a incêndio dentro dos prédios residenciais e comerciais, é necessário...</p>

                                                            <p style="text-align:center;"><a href="/old-pages/extintor-de-incendio-para-predio.php" class="btn btn-primary" role="button">SAIBA MAIS</a></p>

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