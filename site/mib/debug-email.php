<?php
/**
 * Debug do Email
 * REMOVER EM PRODUÇÃO
 */

echo "<h1>Debug do Sistema de Email</h1>";

// Incluir sistema de email
require_once 'includes/email-simple.php';

echo "<h2>1. Verificação de Funções:</h2>";
if (function_exists('send_simple_email')) {
    echo "✅ Função send_simple_email existe<br>";
} else {
    echo "❌ Função send_simple_email não existe<br>";
}

echo "<h2>2. Teste de Email Simples:</h2>";
$result = send_simple_email(
    'Debug Email',
    'teste@exemplo.com',
    '(11) 99999-9999',
    'Teste',
    'Este é um teste de debug do sistema de email.'
);

if ($result) {
    echo "✅ Email enviado com sucesso!<br>";
    create_log("Email de debug enviado com sucesso");
} else {
    echo "❌ Erro ao enviar email<br>";
    create_log("ERRO: Email de debug falhou");
}

echo "<h2>3. Verificar Log:</h2>";
if (file_exists('contact_log.txt')) {
    echo "✅ Arquivo contact_log.txt existe<br>";
    $log_content = file_get_contents('contact_log.txt');
    echo "<pre>" . htmlspecialchars($log_content) . "</pre>";
} else {
    echo "❌ Arquivo contact_log.txt não existe<br>";
}

echo "<h2>4. Teste do Formulário:</h2>";
echo "<form method='POST' action='contact.php'>";
echo "<input type='hidden' name='contact_form' value='1'>";
echo "<p>Nome: <input type='text' name='nome' value='Debug Email' required></p>";
echo "<p>Email: <input type='email' name='email' value='teste@exemplo.com' required></p>";
echo "<p>Telefone: <input type='tel' name='telefone' value='(11) 99999-9999'></p>";
echo "<p>Mensagem: <textarea name='mensagem' required>Teste de debug do email</textarea></p>";
echo "<p><button type='submit'>Testar Formulário</button></p>";
echo "</form>";

echo "<h2>5. Próximos Passos:</h2>";
echo "<ol>";
echo "<li>Teste o formulário acima</li>";
echo "<li>Verifique se aparece mensagem verde</li>";
echo "<li>Verifique se o email chega</li>";
echo "<li>Verifique o log para erros</li>";
echo "</ol>";

echo "<p><a href='contact.php'>← Ir para página de contato</a></p>";
echo "<p><strong>LEMBRE-SE:</strong> Remover este arquivo em produção!</p>";
?>
