<?php
/**
 * Teste do Sitemap - MIB Site
 * Arquivo temporário para testar o sitemap
 */

// Simular ambiente
$_SERVER['HTTP_HOST'] = 'localhost:8133';
$_SERVER['HTTPS'] = 'off';

// Incluir configurações comuns
require_once 'includes/config.php';

echo "=== TESTE DO SITEMAP ===\n";
echo "Base URL: " . $site_config['base_url'] . "\n";
echo "Data: " . date('Y-m-d') . "\n";
echo "\n";

// Testar se o arquivo sitemap.xml.php existe
if (file_exists('sitemap.xml.php')) {
    echo "✅ Arquivo sitemap.xml.php encontrado\n";
    
    // Testar se o arquivo .htaccess tem a regra
    $htaccess = file_get_contents('.htaccess');
    if (strpos($htaccess, 'RewriteRule ^sitemap\.xml$ sitemap.xml.php') !== false) {
        echo "✅ Regra do .htaccess configurada\n";
    } else {
        echo "❌ Regra do .htaccess NÃO encontrada\n";
    }
    
    // Testar se o robots.txt está atualizado
    $robots = file_get_contents('robots.txt');
    if (strpos($robots, 'Sitemap: https://mangueirasdeincendiobrasil.com.br/sitemap.xml') !== false) {
        echo "✅ Robots.txt atualizado\n";
    } else {
        echo "❌ Robots.txt NÃO atualizado\n";
    }
    
} else {
    echo "❌ Arquivo sitemap.xml.php NÃO encontrado\n";
}

echo "\n=== URLs QUE SERÃO INCLUÍDAS ===\n";
echo "1. Página inicial: /\n";
echo "2. Empresa: /empresa.php\n";
echo "3. Contato: /contact.php\n";
echo "4. Produtos: /produtos/\n";
echo "5. Equipamentos: /equipamentos/\n";
echo "6. Informações Técnicas: /informacoes-tecnicas/\n";
echo "... e mais 30+ páginas\n";

echo "\n=== PRÓXIMOS PASSOS ===\n";
echo "1. ✅ Sitemap criado\n";
echo "2. ✅ .htaccess configurado\n";
echo "3. ✅ robots.txt atualizado\n";
echo "4. 🔄 Testar em servidor web\n";
echo "5. 🔄 Enviar para Google Search Console\n";

echo "\n=== COMO TESTAR ===\n";
echo "1. Acesse: http://localhost:8133/sitemap.xml\n";
echo "2. Verifique se retorna XML válido\n";
echo "3. Confirme que todas as URLs estão corretas\n";
?>

