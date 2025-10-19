<?php
/**
 * Debug do Sistema de Contato - MIB
 * Arquivo para diagnosticar problemas de email
 * REMOVER EM PRODUÇÃO
 */

// Incluir configurações de email
require_once 'includes/email-config.php';

echo "<h1>Debug do Sistema de Contato - MIB</h1>";

// Verificar logs
echo "<h2>1. Logs de Contato:</h2>";
if (file_exists('contact_log.txt')) {
    $logs = file_get_contents('contact_log.txt');
    echo "<pre>" . htmlspecialchars($logs) . "</pre>";
} else {
    echo "❌ Arquivo de log não encontrado<br>";
}

// Verificar configurações do servidor
echo "<h2>2. Configurações do Servidor:</h2>";
echo "Servidor: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'N/A') . "<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Função mail(): " . (function_exists('mail') ? '✅ Disponível' : '❌ Não disponível') . "<br>";

// Verificar configurações de email
echo "<h2>3. Configurações de Email:</h2>";
echo "Email destino: " . EMAIL_TO . "<br>";
echo "Email origem: " . EMAIL_FROM . "<br>";
echo "Email resposta: " . EMAIL_REPLY_TO . "<br>";

// Teste de envio com debug
echo "<h2>4. Teste de Envio com Debug:</h2>";
echo "<form method='POST'>";
echo "<input type='hidden' name='test_debug' value='1'>";
echo "<button type='submit' class='btn btn-primary'>Testar Envio com Debug</button>";
echo "</form>";

if (isset($_POST['test_debug'])) {
    echo "<h3>Resultado do Teste:</h3>";
    
    // Teste básico
    $test_email = 'debug@teste.com';
    $test_subject = 'Teste Debug - ' . date('H:i:s');
    $test_message = 'Teste de debug do sistema de email';
    $test_headers = "From: " . EMAIL_FROM . "\r\n";
    
    echo "Tentando enviar email...<br>";
    echo "Para: " . EMAIL_TO . "<br>";
    echo "Assunto: " . $test_subject . "<br>";
    echo "Headers: " . htmlspecialchars($test_headers) . "<br><br>";
    
    $result = mail(EMAIL_TO, $test_subject, $test_message, $test_headers);
    
    if ($result) {
        echo "✅ Email enviado com sucesso!<br>";
        echo "Verifique a caixa de entrada e spam.<br>";
    } else {
        echo "❌ Erro ao enviar email.<br>";
        echo "Possíveis causas:<br>";
        echo "- Servidor não configurado para SMTP<br>";
        echo "- Função mail() desabilitada<br>";
        echo "- Problemas de DNS<br>";
    }
}

// Verificar erros do PHP
echo "<h2>5. Últimos Erros do PHP:</h2>";
$error_log = ini_get('error_log');
if ($error_log && file_exists($error_log)) {
    $errors = file_get_contents($error_log);
    $recent_errors = array_slice(explode("\n", $errors), -20);
    echo "<pre>" . htmlspecialchars(implode("\n", $recent_errors)) . "</pre>";
} else {
    echo "Log de erros não encontrado ou não configurado.<br>";
}

// Verificar configurações de email do PHP
echo "<h2>6. Configurações de Email do PHP:</h2>";
echo "sendmail_path: " . ini_get('sendmail_path') . "<br>";
echo "SMTP: " . ini_get('SMTP') . "<br>";
echo "smtp_port: " . ini_get('smtp_port') . "<br>";
echo "sendmail_from: " . ini_get('sendmail_from') . "<br>";

// Sugestões de solução
echo "<h2>7. Sugestões de Solução:</h2>";
echo "<ol>";
echo "<li><strong>Emails no spam:</strong> Configure SPF, DKIM e DMARC no DNS</li>";
echo "<li><strong>Emails não chegam:</strong> Verifique se o servidor tem SMTP configurado</li>";
echo "<li><strong>Função mail() não funciona:</strong> Use PHPMailer ou SendGrid</li>";
echo "<li><strong>Para produção:</strong> Configure um serviço de email profissional</li>";
echo "</ol>";

echo "<h2>8. Próximos Passos:</h2>";
echo "<ol>";
echo "<li>Verifique o arquivo contact_log.txt para ver tentativas de envio</li>";
echo "<li>Teste o formulário real de contato</li>";
echo "<li>Configure SPF no DNS: v=spf1 include:_spf.google.com ~all</li>";
echo "<li>Considere usar SendGrid ou Mailgun para produção</li>";
echo "</ol>";

echo "<p><a href='contact.php'>← Voltar para página de contato</a></p>";
echo "<p><a href='test-email.php'>← Teste de email</a></p>";
echo "<p><strong>LEMBRE-SE:</strong> Remover este arquivo em produção!</p>";
?>
