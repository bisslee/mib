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
    'description' => 'Especialistas em mangueiras de incêndio, extintores e equipamentos de segurança. Qualidade certificada ABNT para condomínios, indústrias e residências em todo o Brasil.',
    'keywords' => 'mangueira de incêndio, extintor, equipamento contra incêndio, segurança, ABNT, Brasil, nacional',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/'
];

// Identificar página atual para menu ativo
$current_page = 'home';



// Incluir header
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero-section">
        <?php include 'includes/carousel.php'; ?>
    </section>

    <!-- Destaques -->
    <section class="features-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h1 class="section-title">Por que escolher a MIB?</h1>
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
