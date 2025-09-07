<?php
// Arquivo para verificar informações do PHP
echo "<h2>Informações do PHP</h2>";
echo "<p><strong>Versão do PHP:</strong> " . phpversion() . "</p>";
echo "<p><strong>Versão do PHP (constante):</strong> " . PHP_VERSION . "</p>";
echo "<p><strong>Versão do PHP (major.minor):</strong> " . PHP_MAJOR_VERSION . "." . PHP_MINOR_VERSION . "</p>";

echo "<h3>Configurações de Email</h3>";
echo "<p><strong>Função mail() habilitada:</strong> " . (function_exists('mail') ? 'Sim' : 'Não') . "</p>";
echo "<p><strong>Sendmail path:</strong> " . ini_get('sendmail_path') . "</p>";
echo "<p><strong>SMTP:</strong> " . ini_get('SMTP') . "</p>";
echo "<p><strong>SMTP Port:</strong> " . ini_get('smtp_port') . "</p>";

echo "<h3>Informações do Servidor</h3>";
echo "<p><strong>Servidor:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p><strong>Document Root:</strong> " . $_SERVER['DOCUMENT_ROOT'] . "</p>";

echo "<h3>Extensões PHP</h3>";
$extensions = get_loaded_extensions();
echo "<p><strong>Extensões carregadas:</strong> " . count($extensions) . "</p>";
echo "<p><strong>Extensões relacionadas a email:</strong></p>";
$email_extensions = array_filter($extensions, function($ext) {
    return stripos($ext, 'mail') !== false || stripos($ext, 'smtp') !== false || stripos($ext, 'imap') !== false;
});
foreach ($email_extensions as $ext) {
    echo "- $ext<br>";
}
?>
