<?php
/**
 * Sistema de Email Simples - MIB
 * Versão mais robusta e simples
 */

// Configurações de email
$EMAIL_TO = 'contato@mangueirasdeincendiobrasil.com.br';
$EMAIL_FROM = 'noreply@mangueirasdeincendiobrasil.com.br';

// Função simples para enviar email
function send_simple_email($nome, $email, $telefone, $tipo_cliente, $mensagem) {
    global $EMAIL_TO, $EMAIL_FROM;
    
    $subject = 'Contato Site MIB - ' . $nome;
    
    // Corpo do email em HTML (melhor para evitar spam)
    $html_message = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>Novo Contato - MIB</title>
    </head>
    <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto;'>
        <div style='background: #1e3c72; color: white; padding: 20px; text-align: center;'>
            <h1 style='margin: 0;'>MIB - Mangueiras de Incêndio Brasil</h1>
            <p style='margin: 5px 0 0 0;'>Novo contato recebido</p>
        </div>
        
        <div style='padding: 20px; background: #f8f9fa;'>
            <h2 style='color: #1e3c72; margin-top: 0;'>Dados do Cliente</h2>
            <table style='width: 100%; border-collapse: collapse;'>
                <tr>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;'>Nome:</td>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($nome) . "</td>
                </tr>
                <tr>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;'>Email:</td>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($email) . "</td>
                </tr>
                <tr>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;'>Telefone:</td>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($telefone) . "</td>
                </tr>
                <tr>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;'>Tipo:</td>
                    <td style='padding: 8px; border-bottom: 1px solid #ddd;'>" . htmlspecialchars($tipo_cliente) . "</td>
                </tr>
            </table>
        </div>
        
        <div style='padding: 20px;'>
            <h2 style='color: #1e3c72;'>Mensagem</h2>
            <div style='background: white; padding: 15px; border-left: 4px solid #1e3c72; border-radius: 5px;'>
                " . nl2br(htmlspecialchars($mensagem)) . "
            </div>
        </div>
        
        <div style='background: #e9ecef; padding: 15px; font-size: 12px; color: #666;'>
            <p><strong>Enviado em:</strong> " . date('d/m/Y H:i:s') . "</p>
            <p><strong>IP:</strong> " . $_SERVER['REMOTE_ADDR'] . "</p>
            <p><strong>Site:</strong> mangueirasdeincendiobrasil.com.br</p>
        </div>
    </body>
    </html>";
    
    // Versão texto para compatibilidade
    $text_message = "MIB - Mangueiras de Incêndio Brasil\n";
    $text_message .= "Novo contato recebido\n\n";
    $text_message .= "Dados do Cliente:\n";
    $text_message .= "Nome: " . $nome . "\n";
    $text_message .= "Email: " . $email . "\n";
    $text_message .= "Telefone: " . $telefone . "\n";
    $text_message .= "Tipo: " . $tipo_cliente . "\n\n";
    $text_message .= "Mensagem:\n" . $mensagem . "\n\n";
    $text_message .= "---\n";
    $text_message .= "Enviado em: " . date('d/m/Y H:i:s') . "\n";
    $text_message .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    $text_message .= "Site: mangueirasdeincendiobrasil.com.br\n";
    
    // Headers profissionais para evitar spam
    $boundary = md5(uniqid(time()));
    
    $headers = "From: MIB Mangueiras <" . $EMAIL_FROM . ">\r\n";
    $headers .= "Reply-To: " . $nome . " <" . $email . ">\r\n";
    $headers .= "Return-Path: " . $EMAIL_FROM . "\r\n";
    $headers .= "Message-ID: <" . time() . "." . md5($email) . "@mangueirasdeincendiobrasil.com.br>\r\n";
    $headers .= "X-Mailer: MIB-Contact-System v2.0\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-MSMail-Priority: Normal\r\n";
    $headers .= "Importance: Normal\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"" . $boundary . "\"\r\n";
    
    // Corpo multipart
    $body = "--" . $boundary . "\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $body .= $text_message . "\r\n\r\n";
    
    $body .= "--" . $boundary . "\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
    $body .= $html_message . "\r\n\r\n";
    
    $body .= "--" . $boundary . "--\r\n";
    
    // Tentar enviar
    return mail($EMAIL_TO, $subject, $body, $headers);
}

// Função para criar log
function create_log($message) {
    $log_file = 'contact_log.txt';
    $log_entry = date('Y-m-d H:i:s') . " - " . $message . "\n";
    return file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
}
?>
