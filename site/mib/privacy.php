<?php
/**
 * MIB - Política de Privacidade
 * Política de privacidade e proteção de dados
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Política de Privacidade - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Política de Privacidade da MIB. Conheça como protegemos seus dados pessoais e informações de contato em nosso site.',
    'keywords' => 'política de privacidade, proteção de dados, LGPD, cookies, MIB, mangueiras de incêndio',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/privacy.php'
];

// Identificar página atual para menu ativo
$current_page = 'privacy';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Política de Privacidade', 'active' => true]
];

// Incluir header
include 'includes/header.php';

// Incluir breadcrumb
include 'includes/breadcrumb.php';
?>

    <!-- Hero Section da Página -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Política de Privacidade</h1>
                    <p class="page-subtitle">Proteção e transparência no tratamento de seus dados</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Conteúdo Principal -->
    <main id="main-content">
        <!-- Introdução -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="privacy-content">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Última atualização:</strong> Janeiro de 2025
                            </div>
                            
                            <p class="lead">
                                A MIB - Mangueiras de Incêndio Brasil está comprometida em proteger sua privacidade e garantir a segurança de seus dados pessoais. 
                                Esta política descreve como coletamos, usamos e protegemos suas informações.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Informações Coletadas -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-database text-primary me-2"></i>
                            Informações que Coletamos
                        </h2>
                        
                        <div class="privacy-section">
                            <h3>Dados de Contato</h3>
                            <ul>
                                <li><strong>Nome completo</strong> - Para identificação e comunicação</li>
                                <li><strong>Endereço de e-mail</strong> - Para envio de informações e respostas</li>
                                <li><strong>Número de telefone</strong> - Para contato direto quando necessário</li>
                                <li><strong>Tipo de cliente</strong> - Para personalização do atendimento</li>
                            </ul>
                            
                            <h3>Dados de Navegação</h3>
                            <ul>
                                <li><strong>Endereço IP</strong> - Para segurança e análise de tráfego</li>
                                <li><strong>Cookies</strong> - Para melhorar sua experiência no site</li>
                                <li><strong>Páginas visitadas</strong> - Para análise de comportamento</li>
                                <li><strong>Dispositivo e navegador</strong> - Para otimização técnica</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Como Usamos as Informações -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-cogs text-primary me-2"></i>
                            Como Utilizamos suas Informações
                        </h2>
                        
                        <div class="privacy-section">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="usage-card">
                                        <div class="usage-icon">
                                            <i class="fas fa-comments text-primary"></i>
                                        </div>
                                        <h4>Atendimento ao Cliente</h4>
                                        <p>Responder suas solicitações e fornecer suporte técnico</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="usage-card">
                                        <div class="usage-icon">
                                            <i class="fas fa-envelope text-primary"></i>
                                        </div>
                                        <h4>Comunicação</h4>
                                        <p>Enviar informações sobre produtos e serviços</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="usage-card">
                                        <div class="usage-icon">
                                            <i class="fas fa-chart-line text-primary"></i>
                                        </div>
                                        <h4>Melhorias do Site</h4>
                                        <p>Analisar uso e otimizar a experiência do usuário</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="usage-card">
                                        <div class="usage-icon">
                                            <i class="fas fa-shield-alt text-primary"></i>
                                        </div>
                                        <h4>Segurança</h4>
                                        <p>Proteger contra fraudes e atividades maliciosas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Compartilhamento de Dados -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-share-alt text-primary me-2"></i>
                            Compartilhamento de Dados
                        </h2>
                        
                        <div class="privacy-section">
                            <div class="alert alert-warning">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <strong>Importante:</strong> Não vendemos, alugamos ou compartilhamos seus dados pessoais com terceiros para fins comerciais.
                            </div>
                            
                            <p>Seus dados podem ser compartilhados apenas nas seguintes situações:</p>
                            
                            <ul>
                                <li><strong>Prestadores de serviços</strong> - Empresas que nos auxiliam na operação do site (hospedagem, análise)</li>
                                <li><strong>Obrigação legal</strong> - Quando exigido por lei ou processo judicial</li>
                                <li><strong>Proteção de direitos</strong> - Para proteger nossos direitos, propriedade ou segurança</li>
                                <li><strong>Consentimento explícito</strong> - Quando você autorizar especificamente</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cookies -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-cookie-bite text-primary me-2"></i>
                            Política de Cookies
                        </h2>
                        
                        <div class="privacy-section">
                            <p>Utilizamos cookies para melhorar sua experiência em nosso site:</p>
                            
                            <div class="cookie-types">
                                <div class="cookie-type">
                                    <h4><i class="fas fa-cog text-primary me-2"></i>Cookies Essenciais</h4>
                                    <p>Necessários para o funcionamento básico do site</p>
                                </div>
                                
                                <div class="cookie-type">
                                    <h4><i class="fas fa-chart-bar text-primary me-2"></i>Cookies de Análise</h4>
                                    <p>Nos ajudam a entender como o site é utilizado</p>
                                </div>
                                
                                <div class="cookie-type">
                                    <h4><i class="fas fa-user-cog text-primary me-2"></i>Cookies de Preferências</h4>
                                    <p>Lembram suas escolhas e personalizações</p>
                                </div>
                            </div>
                            
                            <div class="alert alert-info mt-4">
                                <i class="fas fa-info-circle me-2"></i>
                                Você pode gerenciar suas preferências de cookies através do banner que aparece no site.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Segurança dos Dados -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-lock text-primary me-2"></i>
                            Segurança e Proteção
                        </h2>
                        
                        <div class="privacy-section">
                            <p>Implementamos medidas rigorosas de segurança para proteger seus dados:</p>
                            
                            <div class="security-features">
                                <div class="security-item">
                                    <i class="fas fa-shield-alt text-success"></i>
                                    <span>Criptografia SSL/TLS para transmissão segura</span>
                                </div>
                                
                                <div class="security-item">
                                    <i class="fas fa-firewall text-success"></i>
                                    <span>Firewalls e sistemas de proteção</span>
                                </div>
                                
                                <div class="security-item">
                                    <i class="fas fa-user-shield text-success"></i>
                                    <span>Acesso restrito aos dados pessoais</span>
                                </div>
                                
                                <div class="security-item">
                                    <i class="fas fa-sync-alt text-success"></i>
                                    <span>Backups regulares e seguros</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seus Direitos -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-gavel text-primary me-2"></i>
                            Seus Direitos (LGPD)
                        </h2>
                        
                        <div class="privacy-section">
                            <p>Conforme a Lei Geral de Proteção de Dados (LGPD), você tem os seguintes direitos:</p>
                            
                            <div class="rights-grid">
                                <div class="right-item">
                                    <h5><i class="fas fa-eye text-primary me-2"></i>Acesso</h5>
                                    <p>Solicitar informações sobre seus dados</p>
                                </div>
                                
                                <div class="right-item">
                                    <h5><i class="fas fa-edit text-primary me-2"></i>Correção</h5>
                                    <p>Corrigir dados incompletos ou incorretos</p>
                                </div>
                                
                                <div class="right-item">
                                    <h5><i class="fas fa-trash text-primary me-2"></i>Exclusão</h5>
                                    <p>Solicitar a remoção de seus dados</p>
                                </div>
                                
                                <div class="right-item">
                                    <h5><i class="fas fa-ban text-primary me-2"></i>Oposição</h5>
                                    <p>Opor-se ao tratamento de dados</p>
                                </div>
                                
                                <div class="right-item">
                                    <h5><i class="fas fa-download text-primary me-2"></i>Portabilidade</h5>
                                    <p>Receber seus dados em formato estruturado</p>
                                </div>
                                
                                <div class="right-item">
                                    <h5><i class="fas fa-info-circle text-primary me-2"></i>Informação</h5>
                                    <p>Ser informado sobre o uso dos dados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Retenção de Dados -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-clock text-primary me-2"></i>
                            Retenção de Dados
                        </h2>
                        
                        <div class="privacy-section">
                            <p>Mantemos seus dados pessoais apenas pelo tempo necessário:</p>
                            
                            <ul>
                                <li><strong>Dados de contato</strong> - Até 5 anos após o último contato</li>
                                <li><strong>Dados de navegação</strong> - Até 2 anos para análise</li>
                                <li><strong>Cookies</strong> - Conforme configurações do navegador</li>
                                <li><strong>Dados de transação</strong> - Conforme exigências legais</li>
                            </ul>
                            
                            <div class="alert alert-warning mt-3">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                Após o período de retenção, seus dados são excluídos de forma segura e irreversível.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contato e Dúvidas -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-question-circle text-primary me-2"></i>
                            Dúvidas e Contato
                        </h2>
                        
                        <div class="privacy-section text-center">
                            <p class="lead mb-4">
                                Se você tiver dúvidas sobre esta política de privacidade ou quiser exercer seus direitos, 
                                entre em contato conosco:
                            </p>
                            
                            <div class="contact-methods">
                                <div class="contact-method">
                                    <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                    <h5>Email</h5>
                                    <p>privacidade@mib.com.br</p>
                                </div>
                                
                                <div class="contact-method">
                                    <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                                    <h5>Telefone</h5>
                                    <p>(11) 94025-8669</p>
                                </div>
                                
                                <div class="contact-method">
                                    <i class="fab fa-whatsapp fa-2x text-success mb-2"></i>
                                    <h5>WhatsApp</h5>
                                    <p>(11) 94025-8669</p>
                                </div>
                            </div>
                            
                            <div class="alert alert-info mt-4">
                                <i class="fas fa-clock me-2"></i>
                                <strong>Prazo de resposta:</strong> Respondemos todas as solicitações em até 15 dias úteis.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alterações na Política -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <i class="fas fa-edit text-primary me-2"></i>
                            Alterações na Política
                        </h2>
                        
                        <div class="privacy-section">
                            <p>
                                Esta política de privacidade pode ser atualizada periodicamente para refletir mudanças em nossas práticas 
                                ou por motivos legais. Quando fizermos alterações significativas:
                            </p>
                            
                            <ul>
                                <li>Atualizaremos a data de "última modificação"</li>
                                <li>Notificaremos os usuários através do site</li>
                                <li>Enviaremos e-mail para contatos cadastrados (quando aplicável)</li>
                                <li>Manteremos versões anteriores disponíveis</li>
                            </ul>
                            
                            <div class="alert alert-info mt-3">
                                <i class="fas fa-info-circle me-2"></i>
                                Recomendamos revisar esta política regularmente para se manter informado sobre como protegemos suas informações.
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
