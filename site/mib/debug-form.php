<?php
/**
 * Debug do Formulário
 * REMOVER EM PRODUÇÃO
 */

echo "<h1>Debug do Formulário de Contato</h1>";

// Incluir sistema de email
require_once 'includes/email-simple.php';

echo "<h2>1. Verificação de POST:</h2>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "✅ Método POST detectado<br>";
    echo "Dados recebidos:<br>";
    echo "<pre>" . print_r($_POST, true) . "</pre>";
    
    if (isset($_POST['contact_form'])) {
        echo "✅ Campo contact_form encontrado<br>";
        
        // Processar formulário
        $nome = sanitize_input(isset($_POST['nome']) ? $_POST['nome'] : '');
        $email = sanitize_input(isset($_POST['email']) ? $_POST['email'] : '');
        $telefone = sanitize_input(isset($_POST['telefone']) ? $_POST['telefone'] : '');
        $mensagem = sanitize_input(isset($_POST['mensagem']) ? $_POST['mensagem'] : '');
        $tipo_cliente = sanitize_input(isset($_POST['tipo']) ? $_POST['tipo'] : 'Não informado');
        
        echo "<h3>Dados processados:</h3>";
        echo "Nome: " . $nome . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Telefone: " . $telefone . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
        echo "Tipo: " . $tipo_cliente . "<br>";
        
        if (!empty($nome) && !empty($email) && !empty($mensagem)) {
            echo "<h3>Validação:</h3>";
            echo "✅ Campos obrigatórios preenchidos<br>";
            
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "✅ Email válido<br>";
                
                echo "<h3>Enviando email...</h3>";
                $result = send_simple_email($nome, $email, $telefone, $tipo_cliente, $mensagem);
                
                if ($result) {
                    echo "✅ Email enviado com sucesso!<br>";
                    create_log("Email de debug enviado com sucesso");
                } else {
                    echo "❌ Erro ao enviar email<br>";
                    create_log("ERRO: Email de debug falhou");
                }
            } else {
                echo "❌ Email inválido<br>";
            }
        } else {
            echo "❌ Campos obrigatórios não preenchidos<br>";
        }
    } else {
        echo "❌ Campo contact_form não encontrado<br>";
    }
} else {
    echo "❌ Método não é POST<br>";
}

echo "<h2>2. Teste do Formulário:</h2>";
echo "<form method='POST' action='debug-form.php'>";
echo "<input type='hidden' name='contact_form' value='1'>";
echo "<p>Nome: <input type='text' name='nome' value='Debug Test' required></p>";
echo "<p>Email: <input type='email' name='email' value='debug@exemplo.com' required></p>";
echo "<p>Telefone: <input type='tel' name='telefone' value='(11) 99999-9999'></p>";
echo "<p>Mensagem: <textarea name='mensagem' required>Teste de debug do formulário</textarea></p>";
echo "<p><button type='submit'>Testar Formulário Debug</button></p>";
echo "</form>";

echo "<h2>3. Verificar Log:</h2>";
if (file_exists('contact_log.txt')) {
    echo "✅ Arquivo contact_log.txt existe<br>";
    $log_content = file_get_contents('contact_log.txt');
    echo "<pre>" . htmlspecialchars($log_content) . "</pre>";
} else {
    echo "❌ Arquivo contact_log.txt não existe<br>";
}

echo "<p><a href='contact.php'>← Ir para página de contato</a></p>";
echo "<p><strong>LEMBRE-SE:</strong> Remover este arquivo em produção!</p>";
?>
