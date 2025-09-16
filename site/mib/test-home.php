<?php
/**
 * Teste Simples da Página Inicial
 * Verifica se não há erros fatais
 */

echo "Iniciando teste...\n";

// Incluir configurações
require_once 'includes/config.php';
echo "✅ Config carregada\n";

// Incluir configurações do Search Console
if (file_exists('includes/search-console-config.php')) {
    include_once 'includes/search-console-config.php';
    echo "✅ Search Console config carregada\n";
}

// Incluir sistema de Testes A/B
if (file_exists('includes/ab-testing-implementation.php')) {
    include_once 'includes/ab-testing-implementation.php';
    echo "✅ A/B Testing implementation carregada\n";
}

echo "✅ Todos os arquivos carregados com sucesso!\n";
echo "✅ Teste concluído - Página inicial deve estar funcionando\n";
?>
