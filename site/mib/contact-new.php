<?php
/**
 * MIB - Nova Página de Contato
 * Baseada no debug que funcionou
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Incluir sistema de email
require_once 'includes/email-simple.php';

// Processar formulário de contato
$contact_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    // Verificar se já foi processado (evitar duplicação)
    // Sessão já foi iniciada no config.php
    $form_hash = md5($_POST['nome'] . $_POST['email'] . $_POST['mensagem'] . date('Y-m-d H:i'));
    
    if (isset($_SESSION['last_form_hash']) && $_SESSION['last_form_hash'] === $form_hash) {
        // Formulário já foi processado
        $contact_message = 'Mensagem já foi enviada. Entraremos em contato em breve.';
    } else {
        $nome = sanitize_input(isset($_POST['nome']) ? $_POST['nome'] : '');
        $email = sanitize_input(isset($_POST['email']) ? $_POST['email'] : '');
        $telefone = sanitize_input(isset($_POST['telefone']) ? $_POST['telefone'] : '');
        $mensagem = sanitize_input(isset($_POST['mensagem']) ? $_POST['mensagem'] : '');
        $tipo_cliente = sanitize_input(isset($_POST['tipo']) ? $_POST['tipo'] : 'Não informado');
        
        if (!empty($nome) && !empty($email) && !empty($mensagem)) {
            // Validar email
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Criar log manual (mais confiável)
                $log_file = 'contact_log.txt';
                $log_message = date('Y-m-d H:i:s') . " - Tentativa de envio: $nome ($email)\n";
                file_put_contents($log_file, $log_message, FILE_APPEND | LOCK_EX);
                
                // Debug: Verificar se a função existe
                if (!function_exists('send_simple_email')) {
                    create_log("ERRO: Função send_simple_email não encontrada");
                    $contact_message = 'Erro interno. Por favor, tente novamente ou entre em contato pelo WhatsApp (11) 94025-8669.';
                } else {
                    // Enviar email usando sistema simples
                    create_log("Tentando enviar email para: $email");
                    $email_sent = send_simple_email($nome, $email, $telefone, $tipo_cliente, $mensagem);
                    
                    if ($email_sent) {
                        // Log de sucesso
                        create_log("Email enviado com sucesso para: $email");
                        $contact_message = 'Mensagem enviada com sucesso! Entraremos em contato em breve.';
                        
                        // Marcar como processado
                        $_SESSION['last_form_hash'] = $form_hash;
                    } else {
                        // Log de erro
                        create_log("ERRO ao enviar email para: $email");
                        $contact_message = 'Erro ao enviar mensagem. Por favor, tente novamente ou entre em contato pelo WhatsApp (11) 94025-8669.';
                    }
                }
            } else {
                $contact_message = 'Por favor, insira um email válido.';
            }
        } else {
            $contact_message = 'Por favor, preencha todos os campos obrigatórios.';
        }
    }
}

// Configurações específicas da página
$page_config = [
    'title' => 'Contato - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Entre em contato com a MIB. Especialistas em mangueiras de incêndio e equipamentos de segurança. Atendimento em São Paulo.',
    'keywords' => 'contato, mangueira de incêndio, equipamento contra incêndio, São Paulo, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/contact-new'
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
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Informações de Contato -->
            <div class="col-lg-4 mb-4">
                <div class="contact-info">
                    <h2 class="section-title">Informações de Contato</h2>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Telefone</h4>
                            <p>(11) 4442-3565</p>
                            <p>(11) 94025-8669</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>contato@mangueirasdeincendiobrasil.com.br</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Horário de Atendimento</h4>
                            <p>Segunda a Sexta: 08:00 às 17:30</p>
                            <p>Sábado: 08:00 às 12:00</p>
                            <p>Domingo e feriados: Fechado</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Formulário de Contato -->
            <div class="col-lg-8">
                <div class="contact-form-wrapper">
                    <h2 class="section-title">Solicite um Orçamento</h2>
                    <p class="mb-4">Preencha o formulário abaixo e entraremos em contato</p>
                    
                    <?php if ($contact_message): ?>
                        <div class="alert alert-success text-center mb-4">
                            <i class="fas fa-check-circle me-2"></i>
                            <?php echo htmlspecialchars($contact_message); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="" class="contact-form">
                        <input type="hidden" name="contact_form" value="1">
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nome" class="form-label">Nome *</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="tipo" class="form-label">Tipo de Cliente</label>
                                <select class="form-select" id="tipo" name="tipo">
                                    <option value="">Selecione...</option>
                                    <option value="condominio">Condomínio</option>
                                    <option value="industria">Indústria</option>
                                    <option value="residencial">Residencial</option>
                                    <option value="comercial">Comercial</option>
                                </select>
                            </div>
                            
                            <div class="col-12">
                                <label for="mensagem" class="form-label">Mensagem *</label>
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                            </div>
                            
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Mensagem
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa e Localização -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-4">Nossa Localização</h2>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.1975!2d-46.6931!3d-23.5505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDMzJzAxLjgiUyA0NsKwNDEnMzUuMiJX!5e0!3m2!1spt-BR!2sbr!4v1234567890" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Incluir footer
include 'includes/footer.php';
?>
