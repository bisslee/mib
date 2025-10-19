<?php
/**
 * Teste Anti-Duplicação
 * REMOVER EM PRODUÇÃO
 */

echo "<h1>Teste Anti-Duplicação</h1>";

// Incluir sistema simples
require_once 'includes/email-simple.php';

echo "<h2>1. Verificação de Sessão:</h2>";
session_start();
echo "Session ID: " . session_id() . "<br>";
echo "Last form hash: " . (isset($_SESSION['last_form_hash']) ? $_SESSION['last_form_hash'] : 'Nenhum') . "<br>";

echo "<h2>2. Teste de Log:</h2>";
if (create_log("Teste anti-duplicação - " . date('H:i:s'))) {
    echo "✅ Log criado com sucesso<br>";
} else {
    echo "❌ Erro ao criar log<br>";
}

echo "<h2>3. Teste de Email:</h2>";
if (function_exists('send_simple_email')) {
    echo "Enviando email de teste...<br>";
    
    $result = send_simple_email(
        'Teste Anti-Duplicação',
        'teste@exemplo.com',
        '(11) 99999-9999',
        'Teste',
        'Esta é uma mensagem de teste anti-duplicação.'
    );
    
    if ($result) {
        echo "✅ Email enviado com sucesso!<br>";
        create_log("Email de teste anti-duplicação enviado com sucesso");
    } else {
        echo "❌ Erro ao enviar email<br>";
        create_log("ERRO: Email de teste anti-duplicação falhou");
    }
}

echo "<h2>4. Verificar Log:</h2>";
if (file_exists('contact_log.txt')) {
    echo "✅ Arquivo contact_log.txt existe<br>";
    $log_content = file_get_contents('contact_log.txt');
    echo "<pre>" . htmlspecialchars($log_content) . "</pre>";
} else {
    echo "❌ Arquivo contact_log.txt não existe<br>";
}

echo "<h2>5. Teste do Formulário:</h2>";
echo "<form method='POST' action='contact.php'>";
echo "<input type='hidden' name='contact_form' value='1'>";
echo "<p>Nome: <input type='text' name='nome' value='Teste Anti-Duplicação' required></p>";
echo "<p>Email: <input type='email' name='email' value='teste@exemplo.com' required></p>";
echo "<p>Telefone: <input type='tel' name='telefone' value='(11) 99999-9999'></p>";
echo "<p>Mensagem: <textarea name='mensagem' required>Teste anti-duplicação do formulário de contato</textarea></p>";
echo "<p><button type='submit'>Testar Formulário (Sem Duplicação)</button></p>";
echo "</form>";

echo "<h2>6. Instruções:</h2>";
echo "<ol>";
echo "<li>Clique no botão acima</li>";
echo "<li>Verifique se aparece apenas 1 email</li>";
echo "<li>Verifique se não vai para spam</li>";
echo "<li>Verifique se o log mostra apenas 1 entrada</li>";
echo "</ol>";

echo "<p><a href='contact.php'>← Ir para página de contato</a></p>";
echo "<p><strong>LEMBRE-SE:</strong> Remover este arquivo em produção!</p>";
?>
