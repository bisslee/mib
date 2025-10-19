<?php
/**
 * MIB - Mangueiras de Incêndio Brasil
 * Página 404 Personalizada
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página 404
$page_config = [
    'title' => 'Página não encontrada - 404 | MIB Mangueiras de Incêndio Brasil',
    'description' => 'A página que você procura não foi encontrada. Entre em contato conosco para encontrar o que precisa.',
    'keywords' => '404, página não encontrada, mangueira de incêndio, equipamento contra incêndio',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/404.php',
    'robots' => 'noindex, nofollow'
];

// Identificar página atual para menu ativo
$current_page = '404';

// Incluir header
include 'includes/header.php';
?>

<!-- Hero Section 404 -->
<section class="hero-section-404">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="error-content">
                    <div class="error-number">
                        <span class="error-4">4</span>
                        <span class="error-0">0</span>
                        <span class="error-4">4</span>
                    </div>
                    <h1 class="error-title">Página não encontrada</h1>
                    <p class="error-description">
                        A página que você procura não existe ou foi movida. 
                        Mas não se preocupe, nossa equipe está aqui para ajudar!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção de Ajuda -->
<section class="help-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Como podemos ajudar?</h2>
                <p class="section-subtitle">Encontre o que você procura ou entre em contato conosco</p>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="help-card text-center">
                    <div class="help-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Buscar Produtos</h3>
                    <p>Encontre mangueiras de incêndio, extintores e equipamentos de segurança</p>
                    <a href="/" class="btn btn-outline-primary">Ver Produtos</a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="help-card text-center">
                    <div class="help-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <h3>Informações Técnicas</h3>
                    <p>Consulte especificações técnicas e normas ABNT</p>
                    <a href="/informacoes-tecnicas/" class="btn btn-outline-primary">Ver Informações</a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="help-card text-center">
                    <div class="help-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Fale Conosco</h3>
                    <p>Nossa equipe está pronta para esclarecer suas dúvidas</p>
                    <a href="/contact.php" class="btn btn-outline-primary">Contato</a>
                </div>
            </div>
        </div>
        
        <!-- Produtos em Destaque -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h3 class="section-title">Produtos em Destaque</h3>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png" alt="Mangueiras de Incêndio Tipo 1" class="img-fluid">
                    </div>
                    <div class="product-content">
                        <h4>Mangueiras Tipo 1</h4>
                        <p>Para condomínios e residências</p>
                        <a href="/informacoes-tecnicas/mangueiras-de-incendio-certificada.php" class="btn btn-sm btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/img/informacoes-tecnicas/mangueira-tipo-2-mib.png" alt="Mangueiras de Incêndio Tipo 2" class="img-fluid">
                    </div>
                    <div class="product-content">
                        <h4>Mangueiras Tipo 2</h4>
                        <p>Para indústrias e comércios</p>
                        <a href="/informacoes-tecnicas/mangueira-de-incendio-para-condominio.php" class="btn btn-sm btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/img/old-site/extintor-de-incendio.jpg" alt="Extintores de Incêndio" class="img-fluid">
                    </div>
                    <div class="product-content">
                        <h4>Extintores</h4>
                        <p>Diferentes tipos e capacidades</p>
                        <a href="/produtos/" class="btn btn-sm btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/img/old-site/abrigo-para-hidrante.jpg" alt="Abrigos para Hidrantes" class="img-fluid">
                    </div>
                    <div class="product-content">
                        <h4>Abrigos</h4>
                        <p>Para hidrantes e equipamentos</p>
                        <a href="/produtos/" class="btn btn-sm btn-outline-primary">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Seção de Contato -->
<section class="contact-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title">Precisa de Ajuda?</h2>
                <p class="section-subtitle">Nossa equipe está pronta para esclarecer suas dúvidas</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4>Telefone</h4>
                    <p><a href="tel:+5511999999999">(11) 99999-9999</a></p>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>E-mail</h4>
                    <p><a href="mailto:contato@mangueirasdeincendiobrasil.com.br">contato@mangueirasdeincendiobrasil.com.br</a></p>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Horário</h4>
                    <p>Segunda a Sexta: 8h às 18h</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="/contact.php" class="btn btn-primary btn-lg">
                    <i class="fas fa-comments"></i> Fale Conosco
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Estilos específicos para página 404 */
.hero-section-404 {
    background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
    color: white;
    padding: 80px 0;
    min-height: 60vh;
    display: flex;
    align-items: center;
}

.error-content {
    max-width: 600px;
    margin: 0 auto;
}

.error-number {
    font-size: 8rem;
    font-weight: bold;
    margin-bottom: 2rem;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.error-4 {
    color: #ff6b35;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.error-0 {
    color: #4ecdc4;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.error-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 300;
}

.error-description {
    font-size: 1.2rem;
    opacity: 0.9;
    line-height: 1.6;
}

.help-section {
    padding: 80px 0;
}

.help-card {
    background: white;
    border-radius: 10px;
    padding: 2rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
}

.help-card:hover {
    transform: translateY(-5px);
}

.help-icon {
    font-size: 3rem;
    color: #1e3c72;
    margin-bottom: 1rem;
}

.help-card h3 {
    color: #1e3c72;
    margin-bottom: 1rem;
}

.contact-section {
    background: #f8f9fa;
}

.contact-info {
    padding: 1.5rem;
}

.contact-icon {
    font-size: 2.5rem;
    color: #1e3c72;
    margin-bottom: 1rem;
}

.contact-info h4 {
    color: #1e3c72;
    margin-bottom: 0.5rem;
}

.contact-info a {
    color: #2a5298;
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

.product-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
}

.product-card:hover {
    transform: translateY(-5px);
}

.product-image {
    height: 200px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-content {
    padding: 1.5rem;
}

.product-content h4 {
    color: #1e3c72;
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    .error-number {
        font-size: 6rem;
    }
    
    .error-title {
        font-size: 2rem;
    }
    
    .error-description {
        font-size: 1rem;
    }
}
</style>

<?php
// Incluir footer
include 'includes/footer.php';
?>
