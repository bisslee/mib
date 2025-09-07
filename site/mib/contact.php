<?php
/**
 * MIB - Página de Contato
 * Formulário de contato e informações da empresa
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Contato - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Entre em contato com a MIB. Especialistas em mangueiras de incêndio e equipamentos de segurança. Atendimento em São Paulo.',
    'keywords' => 'contato, mangueira de incêndio, equipamento contra incêndio, São Paulo, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/contato'
];

// Identificar página atual para menu ativo
$current_page = 'contact';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Contato', 'active' => true]
];

// Incluir header
include 'includes/header.php';

// Incluir breadcrumb
include 'includes/breadcrumb.php';
?>

    <!-- Hero Section da Página -->
    <section class="page-hero contact-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Entre em Contato</h1>
                    <p class="page-subtitle">Estamos aqui para ajudar com suas necessidades de segurança</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Conteúdo Principal -->
    <main id="main-content">
        <!-- Informações de Contato -->
        <section class="py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="contact-card text-center h-100">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-phone fa-3x text-primary"></i>
                            </div>
                            <h3>Telefone</h3>
                            <p class="mb-2">(11) 94025-8669</p>
                            <p class="text-muted">Segunda a Sexta, 8h às 17h30</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="contact-card text-center h-100">
                            <div class="contact-icon mb-3">
                                <i class="fab fa-whatsapp fa-3x text-success"></i>
                            </div>
                            <h3>WhatsApp</h3>
                            <p class="mb-2">(11) 94025-8669</p>
                            <p class="text-muted">Atendimento rápido e eficiente</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="contact-card text-center h-100">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-envelope fa-3x text-primary"></i>
                            </div>
                            <h3>Email</h3>
                            <p class="mb-2">contato@mangueirasdeincendiobrasil.com.br</p>
                            <p class="text-muted">Resposta em até 24 horas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Formulário de Contato -->
        <?php include 'includes/contact-section.php'; ?>

        <!-- Mapa e Localização -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2 class="section-title">Nossa Localização</h2>
                        <p class="section-subtitle">Atendemos todo o Brasil</p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1975844550977!2d-46.6388!3d-23.5505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDMzJzAxLjgiUyA0NsKwMzgnMTkuNyJX!5e0!3m2!1spt-BR!2sbr!4v1234567890"
                                width="100%" 
                                height="450" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="location-info">
                            <h4><i class="fas fa-map-marker-alt text-primary me-2"></i>São Paulo, SP</h4>
                            <p class="text-muted">Atendemos toda a região metropolitana de São Paulo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Redes Sociais -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2 class="section-title">Siga-nos nas Redes Sociais</h2>
                        <p class="section-subtitle">Fique por dentro das novidades e promoções</p>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="social-icons text-center">
                            <a href="#" class="social-icon me-4" title="Facebook">
                                <i class="fab fa-facebook fa-3x text-primary"></i>
                            </a>
                            <a href="#" class="social-icon me-4" title="Instagram">
                                <i class="fab fa-instagram fa-3x text-danger"></i>
                            </a>
                            <a href="#" class="social-icon me-4" title="LinkedIn">
                                <i class="fab fa-linkedin fa-3x text-primary"></i>
                            </a>
                            <a href="#" class="social-icon me-4" title="YouTube">
                                <i class="fab fa-youtube fa-3x text-danger"></i>
                            </a>
                            <a href="https://wa.me/5511940258669?text=Olá! Gostaria de informações sobre equipamentos contra incêndio." target="_blank" class="social-icon" title="WhatsApp">
                                <i class="fab fa-whatsapp fa-3x text-success"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="social-info">
                            <p class="text-muted">Receba dicas de segurança e novidades sobre equipamentos contra incêndio</p>
                            <div class="social-links mt-3">
                                <a href="#" class="btn btn-outline-primary me-2">
                                    <i class="fab fa-facebook me-2"></i>Curta nossa página
                                </a>
                                <a href="#" class="btn btn-outline-danger me-2">
                                    <i class="fab fa-instagram me-2"></i>Siga no Instagram
                                </a>
                                <a href="https://wa.me/5511940258669?text=Olá! Gostaria de informações sobre equipamentos contra incêndio." target="_blank" class="btn btn-outline-success">
                                    <i class="fab fa-whatsapp me-2"></i>Entre no grupo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Horário de Atendimento -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="hours-card">
                            <h3><i class="fas fa-clock text-primary me-2"></i>Horário de Atendimento</h3>
                            <div class="hours-info mt-3">
                                <p class="mb-2"><strong>Segunda a Sexta:</strong> 08:00 às 17:30</p>
                                <p class="mb-2"><strong>Sábado:</strong> 08:00 às 12:00</p>
                                <p class="text-muted">Domingo e feriados: Fechado</p>
                            </div>
                            <div class="emergency-contact mt-4">
                                <p class="text-danger fw-bold">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    Para emergências, entre em contato via WhatsApp
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
// Incluir footer
include 'includes/footer.php';
?>




