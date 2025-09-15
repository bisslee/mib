<?php
/**
 * Check Simple - Versão Minimalista
 * Verificação rápida do PHP sem interface elaborada
 */

// Configurações básicas
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>🔍 PHP Check Simples</h2>";
echo "<p><strong>Data/Hora:</strong> " . date('d/m/Y H:i:s') . "</p>";

// Informações básicas
echo "<h3>📋 Informações Básicas</h3>";
echo "<ul>";
echo "<li><strong>Versão PHP:</strong> " . PHP_VERSION . "</li>";
echo "<li><strong>Sistema:</strong> " . PHP_OS . "</li>";
echo "<li><strong>Servidor:</strong> " . ($_SERVER['SERVER_SOFTWARE'] ?? 'Desconhecido') . "</li>";
echo "<li><strong>Memory Limit:</strong> " . ini_get('memory_limit') . "</li>";
echo "<li><strong>Max Execution Time:</strong> " . ini_get('max_execution_time') . "s</li>";
echo "</ul>";

// Extensões importantes
echo "<h3>🔧 Extensões Críticas</h3>";
$critical_extensions = ['curl', 'mysqli', 'pdo', 'gd', 'json', 'mbstring', 'openssl'];

echo "<ul>";
foreach ($critical_extensions as $ext) {
    $status = extension_loaded($ext) ? '✅' : '❌';
    echo "<li>{$status} {$ext}</li>";
}
echo "</ul>";

// Teste rápido de conectividade
echo "<h3>🌐 Conectividade</h3>";
$dns_test = gethostbyname('google.com');
$dns_status = ($dns_test !== 'google.com') ? '✅ DNS OK' : '❌ DNS Falhou';
echo "<p>{$dns_status}</p>";

// Verificação de escrita
echo "<h3>📁 Permissões</h3>";
$temp_file = sys_get_temp_dir() . '/php_check_test.txt';
$write_test = file_put_contents($temp_file, 'test');
if ($write_test !== false) {
    echo "<p>✅ Escrita no diretório temporário: OK</p>";
    unlink($temp_file);
} else {
    echo "<p>❌ Escrita no diretório temporário: FALHOU</p>";
}

echo "<hr>";
echo "<p><em>Para verificação completa, use o check.php principal</em></p>";
?>

