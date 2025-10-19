<?php
/**
 * Teste do Sistema de Email - MIB
 * Arquivo temporário para testar o envio de emails
 * REMOVER EM PRODUÇÃO
 */

// Incluir configurações de email
require_once 'includes/email-config.php';

echo "<h1>Teste do Sistema de Email - MIB</h1>";

// Teste 1: Verificar se as funções existem
echo "<h2>1. Verificação das Funções:</h2>";
if (function_exists('send_contact_email')) {
    echo "✅ Função send_contact_email existe<br>";
} else {
    echo "❌ Função send_contact_email não existe<br>";
}

if (function_exists('send_confirmation_email')) {
    echo "✅ Função send_confirmation_email existe<br>";
} else {
    echo "❌ Função send_confirmation_email não existe<br>";
}

// Teste 2: Verificar configurações
echo "<h2>2. Configurações de Email:</h2>";
echo "Email de destino: " . EMAIL_TO . "<br>";
echo "Email de origem: " . EMAIL_FROM . "<br>";
echo "Email de resposta: " . EMAIL_REPLY_TO . "<br>";

// Teste 3: Verificar função mail()
echo "<h2>3. Função mail() do PHP:</h2>";
if (function_exists('mail')) {
    echo "✅ Função mail() está disponível<br>";
} else {
    echo "❌ Função mail() não está disponível<br>";
}

// Teste 4: Teste real de envio (descomente para testar)
echo "<h2>4. Teste de Envio:</h2>";
echo "<p><strong>ATENÇÃO:</strong> Descomente o código abaixo para fazer um teste real de envio.</p>";


// Descomente estas linhas para testar o envio real
$test_result = send_contact_email(
    'Teste Automático',
    'teste@exemplo.com',
    '(11) 99999-9999',
    'Teste',
    'Esta é uma mensagem de teste do sistema de email da MIB.'
);

if ($test_result) {
    echo "✅ Email de teste enviado com sucesso!<br>";
} else {
    echo "❌ Erro ao enviar email de teste<br>";
}


echo "<h2>5. Informações do Servidor:</h2>";
echo "Servidor: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Sistema Operacional: " . php_uname() . "<br>";

echo "<h2>6. Próximos Passos:</h2>";
echo "<ol>";
echo "<li>Verifique se o servidor tem configuração SMTP</li>";
echo "<li>Teste o formulário de contato real</li>";
echo "<li>Verifique a caixa de spam</li>";
echo "<li>Configure SPF/DKIM se necessário</li>";
echo "</ol>";

echo "<p><a href='contact.php'>← Voltar para página de contato</a></p>";
echo "<p><strong>LEMBRE-SE:</strong> Remover este arquivo em produção!</p>";
?>
