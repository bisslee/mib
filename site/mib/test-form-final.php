<?php
/**
 * Teste Final do Formulário
 * REMOVER EM PRODUÇÃO
 */

echo "<h1>Teste Final do Formulário de Contato</h1>";

// Incluir sistema de email
require_once 'includes/email-simple.php';

echo "<h2>1. Verificação de Sistema:</h2>";
if (function_exists('send_simple_email')) {
    echo "✅ Função send_simple_email existe<br>";
} else {
    echo "❌ Função send_simple_email não existe<br>";
}

if (function_exists('create_log')) {
    echo "✅ Função create_log existe<br>";
} else {
    echo "❌ Função create_log não existe<br>";
}

echo "<h2>2. Teste de Email Direto:</h2>";
$result = send_simple_email(
    'Teste Formulário Final',
    'teste@exemplo.com',
    '(11) 99999-9999',
    'Teste',
    'Este é um teste final do sistema de formulário.'
);

if ($result) {
    echo "✅ Email enviado com sucesso!<br>";
    create_log("Email de teste final enviado com sucesso");
} else {
    echo "❌ Erro ao enviar email<br>";
    create_log("ERRO: Email de teste final falhou");
}

echo "<h2>3. Teste do Formulário (Simulando POST):</h2>";
echo "<form method='POST' action='contact.php'>";
echo "<input type='hidden' name='contact_form' value='1'>";
echo "<p>Nome: <input type='text' name='nome' value='Teste Formulário Final' required></p>";
echo "<p>Email: <input type='email' name='email' value='teste@exemplo.com' required></p>";
echo "<p>Telefone: <input type='tel' name='telefone' value='(11) 99999-9999'></p>";
echo "<p>Mensagem: <textarea name='mensagem' required>Teste final do formulário de contato</textarea></p>";
echo "<p><button type='submit'>Testar Formulário Real</button></p>";
echo "</form>";

echo "<h2>4. Instruções:</h2>";
echo "<ol>";
echo "<li>Clique no botão acima</li>";
echo "<li>Verifique se aparece mensagem de sucesso</li>";
echo "<li>Verifique se o email chega</li>";
echo "<li>Verifique se não vai para spam</li>";
echo "</ol>";

echo "<h2>5. Verificar Log:</h2>";
if (file_exists('contact_log.txt')) {
    echo "✅ Arquivo contact_log.txt existe<br>";
    $log_content = file_get_contents('contact_log.txt');
    echo "<pre>" . htmlspecialchars($log_content) . "</pre>";
} else {
    echo "❌ Arquivo contact_log.txt não existe<br>";
}

echo "<p><a href='contact.php'>← Ir para página de contato</a></p>";
echo "<p><a href='debug-form.php'>← Debug do formulário</a></p>";
echo "<p><strong>LEMBRE-SE:</strong> Remover este arquivo em produção!</p>";
?>
