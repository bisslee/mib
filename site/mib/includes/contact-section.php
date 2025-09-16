<?php
/**
 * Seção de Contato - MIB
 * Formulário de contato com processamento PHP
 */

// Processar formulário de contato
$contact_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $nome = sanitize_input(isset($_POST['nome']) ? $_POST['nome'] : '');
    $email = sanitize_input(isset($_POST['email']) ? $_POST['email'] : '');
    $telefone = sanitize_input(isset($_POST['telefone']) ? $_POST['telefone'] : '');
    $mensagem = sanitize_input(isset($_POST['mensagem']) ? $_POST['mensagem'] : '');
    
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        // Aqui você implementaria o envio real do email
        $contact_message = 'Mensagem enviada com sucesso! Entraremos em contato em breve.';
    } else {
        $contact_message = 'Por favor, preencha todos os campos obrigatórios.';
    }
}

// Verificar se estamos na página de contato para ajustar o título
$is_contact_page = basename($_SERVER['PHP_SELF']) === 'contact.php';
?>

<!-- Formulário de Contato -->
<section id="contact" class="contact-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="contact-form-wrapper">
                    <?php if (!$is_contact_page): ?>
                        <h2 class="text-center mb-4">Entre em Contato</h2>
                        <p class="text-center mb-4">Solicite um orçamento ou tire suas dúvidas</p>
                    <?php else: ?>
                        <h2 class="text-center mb-4">Solicite um Orçamento</h2>
                        <p class="text-center mb-4">Preencha o formulário abaixo e entraremos em contato</p>
                    <?php endif; ?>
                    
                    <?php if ($contact_message): ?>
                        <div class="alert alert-info text-center">
                            <?php echo htmlspecialchars($contact_message); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form id="contact-form" method="POST" action="" class="contact-form">
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
