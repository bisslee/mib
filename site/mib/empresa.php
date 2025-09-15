<?php
/**
 * MIB - Mangueiras de Incêndio Brasil
 * Página da Empresa - Site Modernizado
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Empresa - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Conheça a MIB - Mangueiras de Incêndio Brasil. Mais de 20 anos de experiência em equipamentos contra incêndio certificados ABNT.',
    'keywords' => 'empresa MIB, mangueiras de incêndio, equipamentos contra incêndio, certificação ABNT, São Paulo',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/empresa.php'
];

// Identificar página atual para menu ativo
$current_page = 'empresa';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Empresa', 'active' => true]
];

// Incluir header
include 'includes/header.php';

// Incluir breadcrumb
include 'includes/breadcrumb.php';
?>

    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Nossa Empresa</h1>
                    <p class="page-subtitle">Conheça a MIB - Mangueiras de Incêndio Brasil</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Conteúdo Principal -->
    <main id="main-content">
        <!-- Sobre Nós -->
        <section class="about-section py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="section-title">Quem Somos</h2>
                        <p class="lead">A MIB - Mangueiras de Incêndio Brasil é uma empresa especializada em equipamentos contra incêndio, com mais de 20 anos de experiência no mercado de segurança.</p>
                        <p>Nossa missão é fornecer produtos de alta qualidade, certificados pela ABNT, garantindo a segurança de condomínios, indústrias, comércios e residências em todo o Brasil.</p>
                        <p>Atuamos principalmente na Grande São Paulo, oferecendo soluções completas em equipamentos de combate a incêndio, com atendimento personalizado e suporte técnico especializado.</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="assets/img/logo-tagline-transp.png" alt="MIB Logo" class="img-fluid about-image">
                    </div>
                </div>
            </div>
        </section>

        <!-- Valores -->
        <section class="values-section py-5 bg-light">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2 class="section-title">Nossos Valores</h2>
                        <p class="section-subtitle">Princípios que guiam nosso trabalho</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="value-card text-center">
                            <div class="value-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Segurança</h3>
                            <p>Priorizamos a segurança acima de tudo, fornecendo equipamentos que protegem vidas e patrimônios.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="value-card text-center">
                            <div class="value-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3>Qualidade</h3>
                            <p>Comprometimento com a excelência em todos os produtos e serviços oferecidos.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="value-card text-center">
                            <div class="value-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3>Confiança</h3>
                            <p>Construímos relacionamentos duradouros baseados na transparência e confiabilidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- História -->
        <section class="history-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title text-center mb-5">Nossa História</h2>
                    </div>
                </div>
                
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2000</div>
                            <h3>Fundação</h3>
                            <p>Nascimento da MIB com foco inicial em mangueiras de incêndio para condomínios residenciais.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2005</div>
                            <h3>Expansão</h3>
                            <p>Ampliação do portfólio para incluir extintores e equipamentos complementares.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2010</div>
                            <h3>Certificação</h3>
                            <p>Obtivemos certificações ABNT para todos os produtos, garantindo qualidade e conformidade.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2015</div>
                            <h3>Atendimento Industrial</h3>
                            <p>Início do atendimento especializado para indústrias e grandes empreendimentos.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2020</div>
                            <h3>Digitalização</h3>
                            <p>Modernização dos processos e implementação de soluções digitais para melhor atendimento.</p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="timeline-year">2025</div>
                            <h3>Futuro</h3>
                            <p>Continuamos crescendo e inovando, sempre focados na segurança e satisfação dos clientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Equipe -->
        <section class="team-section py-5 bg-light">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2 class="section-title">Nossa Equipe</h2>
                        <p class="section-subtitle">Profissionais qualificados e experientes</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card text-center">
                            <div class="team-avatar">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3>Flávio Jesus</h3>
                            <p class="team-role">Diretor Executivo</p>
                            <p class="team-description">Responsável pela estratégia empresarial e relacionamento com clientes.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card text-center">
                            <div class="team-avatar">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <h3>Equipe Técnica</h3>
                            <p class="team-role">Especialistas em Segurança</p>
                            <p class="team-description">Profissionais certificados para orientação técnica e instalação.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card text-center">
                            <div class="team-avatar">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h3>Atendimento</h3>
                            <p class="team-role">Suporte ao Cliente</p>
                            <p class="team-description">Equipe dedicada para atendimento personalizado e suporte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Certificações -->
        <section class="certifications-section py-5">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-12">
                        <h2 class="section-title">Certificações e Qualidade</h2>
                        <p class="section-subtitle">Compromisso com a excelência</p>
                    </div>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="certification-card">
                            <div class="certification-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="certification-content">
                                <h3>Certificação ABNT</h3>
                                <p>Todos os nossos produtos seguem rigorosos padrões de qualidade estabelecidos pela Associação Brasileira de Normas Técnicas.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="certification-card">
                            <div class="certification-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="certification-content">
                                <h3>Controle de Qualidade</h3>
                                <p>Sistema rigoroso de controle de qualidade em todas as etapas, desde a seleção de fornecedores até a entrega.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="certification-card">
                            <div class="certification-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="certification-content">
                                <h3>Manutenção Preventiva</h3>
                                <p>Serviços de manutenção preventiva e corretiva para garantir o funcionamento adequado dos equipamentos.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="certification-card">
                            <div class="certification-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="certification-content">
                                <h3>Treinamento Contínuo</h3>
                                <p>Nossa equipe participa regularmente de treinamentos e atualizações técnicas para manter a excelência.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section py-5 bg-primary text-white">
            <div class="container text-center">
                <h2 class="mb-3">Precisa de Equipamentos Contra Incêndio?</h2>
                <p class="lead mb-4">Entre em contato conosco e solicite um orçamento personalizado</p>
                <a href="contato.php" class="btn btn-light btn-lg">
                    <i class="fas fa-phone me-2"></i>Solicitar Orçamento
                </a>
            </div>
        </section>
    </main>

<?php
// Incluir footer
include 'includes/footer.php';
?>
