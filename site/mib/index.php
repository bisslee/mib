<?php
/**
 * MIB - Mangueiras de Incêndio Brasil
 * Página Principal - Site Modernizado
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'MIB - Mangueiras de Incêndio Brasil | Equipamentos Contra Incêndio',
    'description' => 'Especialistas em mangueiras de incêndio, extintores e equipamentos de segurança. Qualidade certificada ABNT para condomínios, indústrias e residências.',
    'keywords' => 'mangueira de incêndio, extintor, equipamento contra incêndio, segurança, ABNT, São Paulo',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/'
];

// Identificar página atual para menu ativo
$current_page = 'home';



// Incluir header
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-carousel">
            <!-- Slide 1: MIB Principal -->
            <div class="hero-slide active" data-slide="1">
                <div class="container">
                    <div class="row align-items-center min-vh-75">
                        <div class="col-lg-6">
                            <span class="hero-subtitle"><i><b>MIB</b> - Mangueiras de Incêndio Brasil</i></span>
                            <h1 class="hero-title">Segurança e Qualidade em Equipamentos Contra Incêndio</h1>
                            <p class="hero-subtitle">A Brasil Segurança atua na comercialização de equipamentos contra incêndio, somos especialistas em mangueiras de incêndio. Nossa empresa tem como foco principal a comercialização de produtos através da interação entre a indústria e o mercado. Equipamentos contra incêndio com preço de fabrica!</p>
                            <div class="hero-buttons">
                                <a href="produtos.php" class="btn btn-primary btn-lg me-3">
                                    <i class="fas fa-fire-extinguisher me-2"></i>Ver Produtos
                                </a>
                                <a href="contato.php" class="btn btn-outline-primary btn-lg">
                                    <i class="fas fa-phone me-2"></i>Solicitar Orçamento
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="assets/img/slides/Equipamentos01.jpg" alt="Equipamentos de Combate a Incêndio MIB - Segurança e Qualidade" class="hero-logo img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Extintores -->
            <div class="hero-slide" data-slide="2">
                <div class="container">
                    <div class="row align-items-center min-vh-75">
                        <div class="col-lg-6">
                            <span class="hero-subtitle"><i><b>MIB</b> - Mangueiras de Incêndio Brasil</i></span>
                            <h1 class="hero-title">Adquira os melhores extintores de incêndio certificados ABNT + INMETRO!</h1>
                            <p class="hero-subtitle">Somos especialistas em atender condomínios, indústrias e comércios.<br>
                            💰 Garanta economia, durabilidade e máxima segurança para o seu patrimônio 🚒</p>
                            <div class="hero-buttons">
                                <a href="produtos.php" class="btn btn-primary btn-lg me-3">
                                    <i class="fas fa-fire-extinguisher me-2"></i>Ver Produtos
                                </a>
                                <button class="btn btn-outline-primary btn-lg" onclick="openContactModal()">
                                    🔥 Faça já seu orçamento
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="assets/img/slides/Extintores03.jpg" alt="Extintores MIB - Certificados ABNT e INMETRO" class="hero-logo img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Equipamentos -->
            <div class="hero-slide" data-slide="3">
                <div class="container">
                    <div class="row align-items-center min-vh-75">
                        <div class="col-lg-6">
                            <span class="hero-subtitle"><i><b>MIB</b> - Mangueiras de Incêndio Brasil</i></span>
                            <h1 class="hero-title">MIB – Possui uma vasta linha de equipamentos de combate a incêndio</h1>
                            <p class="hero-subtitle">Confira os equipamentos de ponta no mercado conosco.</p>
                            <div class="hero-buttons">
                                <a href="produtos.php" class="btn btn-primary btn-lg me-3">
                                    <i class="fas fa-fire-extinguisher me-2"></i>Ver Produtos
                                </a>
                                <button class="btn btn-outline-primary btn-lg" onclick="openContactModal()">
                                    🔥 Faça já seu orçamento
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="assets/img/slides/Equipamentos.jpg" alt="Equipamentos de Combate a Incêndio MIB" class="hero-logo img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Acessórios para Hidrantes -->
            <div class="hero-slide" data-slide="4">
                <div class="container">
                    <div class="row align-items-center min-vh-75">
                        <div class="col-lg-6">
                            <span class="hero-subtitle"><i><b>MIB</b> - Mangueiras de Incêndio Brasil</i></span>
                            <h1 class="hero-title">MIB – linha completa acessórios para hidrantes</h1>
                            <p class="hero-subtitle">Oferecemos uma ampla variedade de acessórios para hidrantes, garantindo eficiência e segurança em sistemas de combate a incêndio.</p>
                            <div class="hero-buttons">
                                <a href="produtos.php" class="btn btn-primary btn-lg me-3">
                                    <i class="fas fa-fire-extinguisher me-2"></i>Ver Produtos
                                </a>
                                <button class="btn btn-outline-primary btn-lg" onclick="openContactModal()">
                                    🔥 Faça já seu orçamento
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="assets/img/slides/Equipamento04.png" alt="Acessórios para Hidrantes MIB - Linha Completa" class="hero-logo img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controles do Carrossel -->
            <div class="carousel-controls">
                <button class="carousel-control prev" onclick="changeSlide(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-control next" onclick="changeSlide(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Indicadores do Carrossel -->
            <div class="carousel-indicators">
                <button class="indicator active" onclick="goToSlide(1)"></button>
                <button class="indicator" onclick="goToSlide(2)"></button>
                <button class="indicator" onclick="goToSlide(3)"></button>
                <button class="indicator" onclick="goToSlide(4)"></button>
            </div>
        </div>
    </section>

    <!-- Destaques -->
    <section class="features-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Por que escolher a MIB?</h2>
                    <p class="section-subtitle">Qualidade certificada e atendimento especializado</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3>Certificação ABNT</h3>
                        <p>Todos os nossos produtos seguem rigorosos padrões de qualidade e segurança.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h3>Entrega Rápida</h3>
                        <p>Atendemos todo o território Nacional com entrega ágil e pontual.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>Suporte Técnico</h3>
                        <p>Equipe especializada para orientar na escolha dos melhores equipamentos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produtos em Destaque -->
    <section class="products-section py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Produtos em Destaque</h2>
                    <p class="section-subtitle">Soluções completas para sua segurança</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/logo-quad-branco.png" alt="Mangueira Tipo 1" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Mangueira Tipo 1</h3>
                            <p>Ideal para condomínios e residências</p>
                            <a href="mangueiras-de-incendio.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/logo-quad-branco.png" alt="Extintor ABC" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Extintor ABC</h3>
                            <p>Para múltiplas classes de incêndio</p>
                            <a href="extintores.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/logo-quad-branco.png" alt="Esguicho Regulável" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Esguicho Regulável</h3>
                            <p>Controle preciso do jato de água</p>
                            <a href="esguichos.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/logo-quad-branco.png" alt="Hidrante" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Hidrantes</h3>
                            <p>Sistemas completos de combate</p>
                            <a href="hidrantes.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Contato -->
    <?php include 'includes/contact-section.php'; ?>

<?php
// Incluir footer
include 'includes/footer.php';
?>
