<?php
/**
 * Configurações de Email - MIB
 * Centraliza as configurações de envio de email
 */

// Configurações de email
define('EMAIL_TO', 'contato@mangueirasdeincendiobrasil.com.br');
define('EMAIL_FROM', 'noreply@mangueirasdeincendiobrasil.com.br');
define('EMAIL_REPLY_TO', 'contato@mangueirasdeincendiobrasil.com.br');

// Função para enviar email de contato
function send_contact_email($nome, $email, $telefone, $tipo_cliente, $mensagem) {
    $subject = 'Novo contato do site MIB - ' . $nome;
    
    // Corpo do email em HTML para melhor apresentação
    $html_message = "
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>Novo Contato - MIB</title>
    </head>
    <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
        <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
            <h2 style='color: #1e3c72; border-bottom: 2px solid #1e3c72; padding-bottom: 10px;'>
                Nova mensagem de contato recebida
            </h2>
            
            <div style='background: #f8f9fa; padding: 15px; border-radius: 5px; margin: 20px 0;'>
                <p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                <p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>
                <p><strong>Tipo de Cliente:</strong> " . htmlspecialchars($tipo_cliente) . "</p>
            </div>
            
            <div style='margin: 20px 0;'>
                <h3 style='color: #1e3c72;'>Mensagem:</h3>
                <div style='background: #fff; padding: 15px; border-left: 4px solid #1e3c72;'>
                    " . nl2br(htmlspecialchars($mensagem)) . "
                </div>
            </div>
            
            <div style='margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; font-size: 12px; color: #666;'>
                <p><strong>Enviado em:</strong> " . date('d/m/Y H:i:s') . "</p>
                <p><strong>IP:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>
                <p><strong>User Agent:</strong> " . substr($_SERVER['HTTP_USER_AGENT'], 0, 100) . "...</p>
            </div>
        </div>
    </body>
    </html>";
    
    // Versão texto para compatibilidade
    $text_message = "Nova mensagem de contato recebida:\n\n";
    $text_message .= "Nome: " . $nome . "\n";
    $text_message .= "Email: " . $email . "\n";
    $text_message .= "Telefone: " . $telefone . "\n";
    $text_message .= "Tipo de Cliente: " . $tipo_cliente . "\n\n";
    $text_message .= "Mensagem:\n" . $mensagem . "\n\n";
    $text_message .= "---\n";
    $text_message .= "Enviado em: " . date('d/m/Y H:i:s') . "\n";
    $text_message .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    // Headers melhorados para evitar spam
    $headers = "From: MIB Site <" . EMAIL_FROM . ">\r\n";
    $headers .= "Reply-To: " . $nome . " <" . $email . ">\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: MIB-Contact-System\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-MSMail-Priority: Normal\r\n";
    $headers .= "Importance: Normal\r\n";
    $headers .= "X-Spam-Status: No\r\n";
    
    // Tentar enviar o email
    return mail(EMAIL_TO, $subject, $html_message, $headers);
}

// Função para enviar email de confirmação para o cliente
function send_confirmation_email($nome, $email) {
    $subject = 'Confirmação de contato - MIB Mangueiras de Incêndio Brasil';
    
    $message = "Olá " . $nome . ",\n\n";
    $message .= "Recebemos sua mensagem e agradecemos pelo contato!\n\n";
    $message .= "Nossa equipe entrará em contato em breve para esclarecer suas dúvidas.\n\n";
    $message .= "Horário de atendimento:\n";
    $message .= "Segunda a Sexta: 08:00 às 17:30\n";
    $message .= "Sábado: 08:00 às 12:00\n\n";
    $message .= "Para atendimento imediato, entre em contato pelo WhatsApp:\n";
    $message .= "(11) 94025-8669\n\n";
    $message .= "Atenciosamente,\n";
    $message .= "Equipe MIB - Mangueiras de Incêndio Brasil\n";
    $message .= "contato@mangueirasdeincendiobrasil.com.br\n";
    $message .= "www.mangueirasdeincendiobrasil.com.br\n";
    
    $headers = "From: " . EMAIL_FROM . "\r\n";
    $headers .= "Reply-To: " . EMAIL_REPLY_TO . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    
    return mail($email, $subject, $message, $headers);
}
?>
