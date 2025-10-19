<?php
/**
 * Debug do Formulário Real
 * Simula exatamente o que acontece no contact.php
 */

echo "<h1>Debug do Formulário Real</h1>";

// Simular exatamente o que o contact.php faz
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Contato - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Entre em contato com a MIB. Especialistas em mangueiras de incêndio e equipamentos de segurança. Atendimento em São Paulo.',
    'keywords' => 'contato, mangueira de incêndio, equipamento contra incêndio, São Paulo, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/contato'
];

// Identificar página atual para menu ativo
$current_page = 'contact';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Contato', 'active' => true]
];

echo "<h2>1. Configurações carregadas:</h2>";
echo "✅ config.php incluído<br>";
echo "✅ page_config definido<br>";
echo "✅ current_page: $current_page<br>";

// Simular o include do contact-section.php
echo "<h2>2. Simulando contact-section.php:</h2>";

// Incluir sistema de email
require_once 'includes/email-simple.php';

// Processar formulário de contato
$contact_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    echo "✅ POST detectado e contact_form encontrado<br>";
    
    // Verificar se já foi processado (evitar duplicação)
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    $form_hash = md5($_POST['nome'] . $_POST['email'] . $_POST['mensagem'] . date('Y-m-d H:i'));
    
    if (isset($_SESSION['last_form_hash']) && $_SESSION['last_form_hash'] === $form_hash) {
        echo "❌ Formulário já foi processado (duplicação)<br>";
        $contact_message = 'Mensagem já foi enviada. Entraremos em contato em breve.';
    } else {
        echo "✅ Formulário não foi processado ainda<br>";
        
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
                
                // Criar log manual (mais confiável)
                $log_file = 'contact_log.txt';
                $log_message = date('Y-m-d H:i:s') . " - Tentativa de envio: $nome ($email)\n";
                file_put_contents($log_file, $log_message, FILE_APPEND | LOCK_EX);
                
                // Debug: Verificar se a função existe
                if (!function_exists('send_simple_email')) {
                    echo "❌ Função send_simple_email não encontrada<br>";
                    create_log("ERRO: Função send_simple_email não encontrada");
                    $contact_message = 'Erro interno. Por favor, tente novamente ou entre em contato pelo WhatsApp (11) 94025-8669.';
                } else {
                    echo "✅ Função send_simple_email existe<br>";
                    
                    // Enviar email usando sistema simples
                    create_log("Tentando enviar email para: $email");
                    $email_sent = send_simple_email($nome, $email, $telefone, $tipo_cliente, $mensagem);
                    
                    if ($email_sent) {
                        echo "✅ Email enviado com sucesso!<br>";
                        create_log("Email enviado com sucesso para: $email");
                        $contact_message = 'Mensagem enviada com sucesso! Entraremos em contato em breve.';
                        
                        // Marcar como processado
                        $_SESSION['last_form_hash'] = $form_hash;
                    } else {
                        echo "❌ Erro ao enviar email<br>";
                        create_log("ERRO ao enviar email para: $email");
                        $contact_message = 'Erro ao enviar mensagem. Por favor, tente novamente ou entre em contato pelo WhatsApp (11) 94025-8669.';
                    }
                }
            } else {
                echo "❌ Email inválido<br>";
                $contact_message = 'Por favor, insira um email válido.';
            }
        } else {
            echo "❌ Campos obrigatórios não preenchidos<br>";
            $contact_message = 'Por favor, preencha todos os campos obrigatórios.';
        }
    }
} else {
    echo "❌ Método não é POST ou contact_form não encontrado<br>";
}

echo "<h2>3. Resultado:</h2>";
if ($contact_message) {
    echo "<div class='alert alert-success'>" . htmlspecialchars($contact_message) . "</div>";
} else {
    echo "Nenhuma mensagem<br>";
}

echo "<h2>4. Teste do Formulário:</h2>";
echo "<form method='POST' action='debug-contact-real.php'>";
echo "<input type='hidden' name='contact_form' value='1'>";
echo "<p>Nome: <input type='text' name='nome' value='Debug Contact Real' required></p>";
echo "<p>Email: <input type='email' name='email' value='debug@exemplo.com' required></p>";
echo "<p>Telefone: <input type='tel' name='telefone' value='(11) 99999-9999'></p>";
echo "<p>Mensagem: <textarea name='mensagem' required>Teste do debug contact real</textarea></p>";
echo "<p><button type='submit'>Testar Formulário Real</button></p>";
echo "</form>";

echo "<h2>5. Verificar Log:</h2>";
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
