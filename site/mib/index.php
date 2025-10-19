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
                    
                    <!-- CTA Principal para Teste A/B -->
                    <div class="mt-4">
                        <button id="cta-primary" class="btn btn-primary btn-lg">
                            Solicitar Orçamento
                        </button>
                    </div>
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
                            <img src="assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png" alt="Mangueiras de Incêndio Certificadas" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Mangueiras de Incêndio Certificadas</h3>
                            <p>Ideal para condomínios e residências</p>
                            <a href="informacoes-tecnicas/mangueiras-de-incendio-certificada.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/informacoes-tecnicas/luz-emergencia-led-18.webp" alt="Luz de Emergência LED" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Luz de Emergência LED</h3>
                            <p>Para múltiplas aplicações</p>
                            <a href="informacoes-tecnicas/luzes-de-emergencia-led.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/informacoes-tecnicas/mangueira-tipo-2-mib.png" alt="Mangueira de Incêndio para Condomínio" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Mangueira de Incêndio para Condomínio</h3>
                            <p>Segurança para moradores, aprovação no Corpo de Bombeiros e economia garantida em São Paulo</p>
                            <a href="informacoes-tecnicas/mangueira-de-incendio-para-condominio.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/old-site/adaptador-para-mangueira-de-incendio.jpg" alt="Adaptador para Mangueira" class="img-fluid">
                        </div>
                        <div class="product-content">
                            <h3>Adaptador para Mangueira</h3>
                            <p>Adaptadores para mangueiras de incêndio com diferentes conexões e especificações técnicas.</p>
                            <a href="old-pages/adaptador-para-mangueira-de-incendio.php" class="btn btn-outline-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Informações Técnicas - SEO Internal Linking -->
    <section class="technical-info-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Informações Técnicas Especializadas</h2>
                    <p class="section-subtitle">Conteúdo técnico certificado para ajudar na escolha correta</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="info-card text-center h-100">
                        <div class="info-icon mb-3">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h3 class="h5">Mangueiras Certificadas ABNT</h3>
                        <p class="small">Entenda a importância da certificação ABNT NBR 11861</p>
                        <a href="informacoes-tecnicas/mangueiras-de-incendio-certificada.php" class="btn btn-outline-primary btn-sm">Saiba Mais</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="info-card text-center h-100">
                        <div class="info-icon mb-3">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="h5">Mangueiras para Condomínio</h3>
                        <p class="small">Guia completo para síndicos e administradores</p>
                        <a href="informacoes-tecnicas/mangueira-de-incendio-para-condominio.php" class="btn btn-outline-primary btn-sm">Saiba Mais</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="info-card text-center h-100">
                        <div class="info-icon mb-3">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="h5">Dicas de Cuidados</h3>
                        <p class="small">Como manter suas mangueiras em perfeito estado</p>
                        <a href="informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php" class="btn btn-outline-primary btn-sm">Saiba Mais</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="info-card text-center h-100">
                        <div class="info-icon mb-3">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="h5">Luzes de Emergência LED</h3>
                        <p class="small">Iluminação de emergência certificada</p>
                        <a href="informacoes-tecnicas/luzes-de-emergencia-led.php" class="btn btn-outline-primary btn-sm">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="informacoes-tecnicas/" class="btn btn-primary">Ver Todas as Informações Técnicas</a>
                </div>
            </div>
        </div>
    </section>

<?php
// Incluir footer
include 'includes/footer.php';
?>
