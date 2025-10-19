<?php
/**
 * Teste Final do Email Melhorado
 * REMOVER EM PRODUÇÃO
 */

echo "<h1>Teste Final do Email Melhorado</h1>";

// Incluir sistema melhorado
require_once 'includes/email-simple.php';

echo "<h2>1. Verificação de Funções:</h2>";
if (function_exists('send_simple_email')) {
    echo "✅ Função send_simple_email existe<br>";
} else {
    echo "❌ Função send_simple_email não existe<br>";
}

echo "<h2>2. Teste de Email Melhorado:</h2>";
if (function_exists('send_simple_email')) {
    echo "Enviando email com headers profissionais...<br>";
    
    $result = send_simple_email(
        'Teste Final Melhorado',
        'teste@exemplo.com',
        '(11) 99999-9999',
        'Teste',
        'Este é um teste do sistema de email melhorado com headers profissionais e HTML.'
    );
    
    if ($result) {
        echo "✅ Email enviado com sucesso!<br>";
        create_log("Email melhorado enviado com sucesso");
    } else {
        echo "❌ Erro ao enviar email<br>";
        create_log("ERRO: Email melhorado falhou");
    }
} else {
    echo "❌ Não é possível testar - função não existe<br>";
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
echo "<p>Nome: <input type='text' name='nome' value='Teste Final Melhorado' required></p>";
echo "<p>Email: <input type='email' name='email' value='teste@exemplo.com' required></p>";
echo "<p>Telefone: <input type='tel' name='telefone' value='(11) 99999-9999'></p>";
echo "<p>Mensagem: <textarea name='mensagem' required>Teste do sistema melhorado com headers profissionais</textarea></p>";
echo "<p><button type='submit'>Testar Formulário Melhorado</button></p>";
echo "</form>";

echo "<h2>5. Melhorias Implementadas:</h2>";
echo "<ul>";
echo "<li>✅ Email em HTML com design profissional</li>";
echo "<li>✅ Headers multipart (texto + HTML)</li>";
echo "<li>✅ Message-ID único</li>";
echo "<li>✅ Return-Path configurado</li>";
echo "<li>✅ X-Mailer identificado</li>";
echo "<li>✅ Prioridade normal</li>";
echo "<li>✅ MIME-Version 1.0</li>";
echo "</ul>";

echo "<h2>6. Próximos Passos:</h2>";
echo "<ol>";
echo "<li>Configure o SPF no DNS (veja SPF_CONFIGURATION.md)</li>";
echo "<li>Teste o formulário</li>";
echo "<li>Verifique se não vai para spam</li>";
echo "<li>Remova este arquivo em produção</li>";
echo "</ol>";

echo "<p><a href='contact.php'>← Ir para página de contato</a></p>";
echo "<p><a href='SPF_CONFIGURATION.md'>← Ver instruções SPF</a></p>";
echo "<p><strong>LEMBRE-SE:</strong> Remover este arquivo em produção!</p>";
?>
