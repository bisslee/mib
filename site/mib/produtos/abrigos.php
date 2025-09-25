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
$product_schema = [
    "@context" => "https://schema.org",
    "@type" => "Product",
    "name" => "Abrigos para Equipamentos Contra Incêndio",
    "description" => "Abrigos para equipamentos contra incêndio certificados ABNT. Conservam e protegem extintores, hidrantes e mangueiras das intempéries do tempo. MIB São Paulo.",
    "brand" => [
        "@type" => "Brand",
        "name" => "MIB - Mangueiras de Incêndio Brasil"
    ],
    "manufacturer" => [
        "@type" => "Organization",
        "name" => "MIB - Mangueiras de Incêndio Brasil"
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
        "ratingValue" => "4.9",
        "reviewCount" => "89",
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

                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: #2D5A4A; border-color: #2D5A4A;">
                                    <h2 class="mb-0 fw-bold text-white" style="font-size: 2rem;">
                                        <i class="fas fa-shield"></i>
                                        Modelos Disponíveis
                                    </h2>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Modelo Industrial -->
                        <div class="row mb-5">
                            <div class="col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-transparent border-0 pb-0">
                                        <h4 class="model-title mb-0">Modelo Industrial</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <p>Fabricado em aço carbono, 1010 - 1020 com acabamento em pintura epóxi, na cor vermelha padrão bombeiro. Porta dotada de trinco, visor para vidro e veneziana de ventilação.</p>
                                                
                                                <h5>Especificações:</h5>
                                                <ul>
                                                    <li><strong>Modelo:</strong> 2 Portas</li>
                                                    <li><strong>Mangueira:</strong> Ø: 1.1/2" ou 2.1/2"</li>
                                                    <li><strong>Comprimento:</strong> 30m</li>
                                                    <li><strong>Quantidade:</strong> 4</li>
                                                    <li><strong>Suporte Tipo:</strong> 1/2 Lua ou Basculante</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <img src="../assets/img/old-site/abrigo-industrial.jpg" 
                                                     alt="Abrigo Modelo Industrial para equipamentos contra incêndio certificado ABNT - MIB São Paulo" 
                                                     title="Abrigo Modelo Industrial"
                                                     class="img-fluid rounded" 
                                                     loading="lazy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="../contact.php" class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-info-circle me-2"></i>Saiba Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Abrigo para Extintor -->
                        <div class="row mb-5">
                            <div class="col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-transparent border-0 pb-0">
                                        <h4 class="model-title mb-0">Abrigo para Extintor</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <p>Modelo para extintores pó químico 4, 6, 8, 12 Kg e água 10 litros. Fabricado em aço carbono com acabamento em pintura epóxi na cor vermelha padrão bombeiro.</p>
                                                
                                                <h5>Especificações:</h5>
                                                <ul>
                                                    <li><strong>Medidas:</strong> 75 altura x 30 largura x 25 profundidade cm</li>
                                                    <li><strong>Material:</strong> Aço carbono</li>
                                                    <li><strong>Acabamento:</strong> Pintura epóxi vermelha</li>
                                                    <li><strong>Aplicável:</strong> Extintores pó químico e água</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <img src="../assets/img/old-site/abrigo-para-extintor-de-incendio.jpg" 
                                                     alt="Abrigo para Extintor de Incêndio certificado ABNT proteção equipamentos - MIB São Paulo" 
                                                     title="Abrigo para Extintor"
                                                     class="img-fluid rounded" 
                                                     loading="lazy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="../contact.php" class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-info-circle me-2"></i>Saiba Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Abrigo para Hidrante -->
                        <div class="row mb-5">
                            <div class="col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-transparent border-0 pb-0">
                                        <h4 class="model-title mb-0">Abrigo para Hidrante</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <p>Abrigo específico para hidrantes contra incêndio. Fabricado em aço carbono com acabamento em pintura epóxi na cor vermelha padrão bombeiro.</p>
                                                
                                                <h5>Especificações:</h5>
                                                <ul>
                                                    <li><strong>Material:</strong> Aço carbono</li>
                                                    <li><strong>Acabamento:</strong> Pintura epóxi vermelha</li>
                                                    <li><strong>Aplicação:</strong> Hidrantes contra incêndio</li>
                                                    <li><strong>Proteção:</strong> Contra intempéries do tempo</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <img src="../assets/img/old-site/abrigo-para-hidrante.jpg" 
                                                     alt="Abrigo para Hidrante certificado ABNT proteção sistemas combate incêndio - MIB São Paulo" 
                                                     title="Abrigo para Hidrante"
                                                     class="img-fluid rounded" 
                                                     loading="lazy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="../contact.php" class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-info-circle me-2"></i>Saiba Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Abrigo para Mangueira -->
                        <div class="row mb-5">
                            <div class="col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-transparent border-0 pb-0">
                                        <h4 class="model-title mb-0">Abrigo para Mangueira</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <p>Abrigo para mangueiras de incêndio. Fabricado em aço carbono com acabamento em pintura epóxi na cor vermelha padrão bombeiro.</p>
                                                
                                                <h5>Especificações:</h5>
                                                <ul>
                                                    <li><strong>Material:</strong> Aço carbono</li>
                                                    <li><strong>Acabamento:</strong> Pintura epóxi vermelha</li>
                                                    <li><strong>Aplicação:</strong> Mangueiras de incêndio</li>
                                                    <li><strong>Proteção:</strong> Contra intempéries do tempo</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <img src="../assets/img/old-site/abrigo-para-mangueira-de-incendio.jpg" 
                                                     alt="Abrigo para Mangueira de Incêndio certificada ABNT proteção mangueiras - MIB São Paulo" 
                                                     title="Abrigo para Mangueira"
                                                     class="img-fluid rounded" 
                                                     loading="lazy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="../contact.php" class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-info-circle me-2"></i>Saiba Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modelo para Extintor de CO2 6Kg -->
                        <div class="row mb-5">
                            <div class="col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header bg-transparent border-0 pb-0">
                                        <h4 class="model-title mb-0">Modelo para Extintor de CO2 6Kg</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <p>Abrigo específico para extintores de CO2 de 6Kg. Fabricado em aço carbono com acabamento em pintura epóxi na cor vermelha padrão bombeiro.</p>
                                                
                                                <h5>Especificações:</h5>
                                                <ul>
                                                    <li><strong>Medidas:</strong> 85 altura x 40 largura x 30 profundidade cm</li>
                                                    <li><strong>Material:</strong> Aço carbono</li>
                                                    <li><strong>Acabamento:</strong> Pintura epóxi vermelha</li>
                                                    <li><strong>Aplicação:</strong> Extintores CO2 6Kg</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="placeholder-image d-flex align-items-center justify-content-center bg-light rounded" style="height: 300px;">
                                                    <div class="text-center text-muted">
                                                        <i class="fas fa-image fa-3x mb-3"></i>
                                                        <p>Imagem será adicionada em breve</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="../contact.php" class="btn btn-primary btn-sm w-100">
                                            <i class="fas fa-info-circle me-2"></i>Saiba Mais
                                        </a>
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
