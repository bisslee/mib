<?php
/**
 * Script para migrar todas as páginas do old-site para old-pages
 * Acesse esta página via navegador para executar a migração
 */

// Incluir configurações
require_once 'includes/config.php';

// Função para extrair título da página
function extractTitle($content) {
    if (preg_match('/<title>(.*?)<\/title>/i', $content, $matches)) {
        return trim($matches[1]);
    }
    return 'Página MIB';
}

// Função para extrair descrição da página
function extractDescription($content) {
    if (preg_match('/<meta name="description" content="(.*?)"/i', $content, $matches)) {
        return trim($matches[1]);
    }
    return 'Equipamentos contra incêndio - MIB';
}

// Função para extrair keywords da página
function extractKeywords($content) {
    if (preg_match('/<meta name="keywords" content="(.*?)"/i', $content, $matches)) {
        return trim($matches[1]);
    }
    return 'mangueira de incêndio, extintor, equipamento contra incêndio';
}

// Função para extrair conteúdo principal
function extractMainContent($content) {
    // Remover head completo
    $content = preg_replace('/<head>.*?<\/head>/is', '', $content);
    
    // Remover scripts do Google Tag Manager
    $content = preg_replace('/<!-- Google Tag Manager -->.*?<!-- End Google Tag Manager -->/is', '', $content);
    
    // Remover scripts no final
    $content = preg_replace('/<script.*?<\/script>/is', '', $content);
    
    // Remover footer antigo se existir
    $content = preg_replace('/<footer.*?<\/footer>/is', '', $content);
    
    // Remover header antigo se existir
    $content = preg_replace('/<header.*?<\/header>/is', '', $content);
    
    // Remover nav antigo se existir
    $content = preg_replace('/<nav.*?<\/nav>/is', '', $content);
    
    // Procurar por div com classe container ou main
    if (preg_match('/<div[^>]*class="[^"]*container[^"]*"[^>]*>(.*?)<\/div>/is', $content, $matches)) {
        $mainContent = $matches[1];
    } else if (preg_match('/<div[^>]*class="[^"]*main[^"]*"[^>]*>(.*?)<\/div>/is', $content, $matches)) {
        $mainContent = $matches[1];
    } else {
        // Se não encontrar container, pegar o body inteiro
        if (preg_match('/<body[^>]*>(.*?)<\/body>/is', $content, $matches)) {
            $mainContent = $matches[1];
        } else {
            $mainContent = $content;
        }
    }
    
    // Limpar conteúdo
    $mainContent = preg_replace('/^\s*<html[^>]*>/i', '', $mainContent);
    $mainContent = preg_replace('/<\/html>\s*$/i', '', $mainContent);
    $mainContent = preg_replace('/^\s*<body[^>]*>/i', '', $mainContent);
    $mainContent = preg_replace('/<\/body>\s*$/i', '', $mainContent);
    
    // Corrigir caminhos de imagens
    $mainContent = preg_replace('/src="images\//', 'src="' . $GLOBALS['site_config']['base_url'] . '/assets/img/old-site/', $mainContent);
    
    return trim($mainContent);
}

// Função para gerar breadcrumbs
function generateBreadcrumbs($filename) {
    $name = str_replace('.php', '', $filename);
    $name = str_replace('-', ' ', $name);
    $name = ucwords($name);
    
    return [
        ['url' => $GLOBALS['site_config']['base_url'] . '/', 'text' => 'Home'],
        ['url' => '', 'text' => $name]
    ];
}

// Verificar se é uma execução via POST (para evitar execução acidental)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Migração de Páginas - MIB</title>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; margin: 40px; }
            .container { max-width: 800px; margin: 0 auto; }
            .warning { background: #fff3cd; border: 1px solid #ffeaa7; padding: 15px; border-radius: 5px; margin: 20px 0; }
            .btn { background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; }
            .btn:hover { background: #0056b3; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Migração de Páginas - MIB</h1>
            <div class="warning">
                <strong>⚠️ Atenção:</strong> Este script irá migrar todas as páginas do diretório <code>old-site/</code> para <code>old-pages/</code>.
                Certifique-se de que você quer continuar.
            </div>
            <form method="POST">
                <button type="submit" class="btn">Iniciar Migração</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Executar migração
$oldSiteDir = 'old-site/';
$newPagesDir = 'old-pages/';

// Verificar se diretório old-pages existe
if (!is_dir($newPagesDir)) {
    mkdir($newPagesDir, 0755, true);
}

// Listar todos os arquivos PHP do old-site
$phpFiles = glob($oldSiteDir . '*.php');

echo "<h1>Migração de Páginas - MIB</h1>";
echo "<p>Iniciando migração de " . count($phpFiles) . " páginas...</p>";
echo "<hr>";

$migrated = 0;
$errors = 0;

foreach ($phpFiles as $file) {
    $filename = basename($file);
    echo "<p>Migrando: <strong>$filename</strong>... ";
    
    try {
        // Ler conteúdo do arquivo original
        $originalContent = file_get_contents($file);
        
        if ($originalContent === false) {
            throw new Exception("Não foi possível ler o arquivo");
        }
        
        // Extrair informações da página
        $title = extractTitle($originalContent);
        $description = extractDescription($originalContent);
        $keywords = extractKeywords($originalContent);
        $mainContent = extractMainContent($originalContent);
        $breadcrumbs = generateBreadcrumbs($filename);
        
        // Configuração da página
        $page_config = [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'canonical' => $site_config['base_url'] . '/' . $newPagesDir . $filename
        ];
        
        // Gerar conteúdo da nova página
        $newPageContent = "<?php
/**
 * Página migrada do old-site
 * Arquivo original: $filename
 */

// Configuração da página
\$page_config = " . var_export($page_config, true) . ";

// Breadcrumbs
\$breadcrumbs = " . var_export($breadcrumbs, true) . ";

// Incluir template
require_once '../includes/config.php';
include '../includes/header.php';
if (isset(\$breadcrumbs)) { include '../includes/breadcrumb.php'; }
?>

<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            $mainContent
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>";

        // Salvar nova página
        $newFilePath = $newPagesDir . $filename;
        if (file_put_contents($newFilePath, $newPageContent) === false) {
            throw new Exception("Não foi possível salvar o arquivo");
        }
        
        echo "<span style='color: green;'>✓ Sucesso</span></p>";
        $migrated++;
        
    } catch (Exception $e) {
        echo "<span style='color: red;'>✗ Erro: " . $e->getMessage() . "</span></p>";
        $errors++;
    }
}

echo "<hr>";
echo "<h2>Resumo da Migração</h2>";
echo "<ul>";
echo "<li><strong>Páginas migradas com sucesso:</strong> $migrated</li>";
echo "<li><strong>Erros:</strong> $errors</li>";
echo "<li><strong>Total processado:</strong> " . count($phpFiles) . "</li>";
echo "</ul>";

if ($errors > 0) {
    echo "<p style='color: orange;'>⚠️ Algumas páginas tiveram problemas. Verifique os erros acima.</p>";
} else {
    echo "<p style='color: green;'>🎉 Todas as páginas foram migradas com sucesso!</p>";
}

echo "<p><strong>As páginas migradas estão disponíveis em:</strong> <code>$newPagesDir</code></p>";
?>
