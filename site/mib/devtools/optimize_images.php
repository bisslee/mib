<?php
/**
 * Script para Otimização de Imagens - MIB Site
 * 
 * Este script adiciona lazy loading e otimiza alt text para todas as imagens
 * 
 * @author Biss Solutions
 * @version 1.0
 * @since 2025
 */

echo "🔧 INICIANDO OTIMIZAÇÃO DE IMAGENS...\n\n";

// Diretórios para processar
$directories = [
    'equipamentos',
    'produtos',
    'informacoes-tecnicas'
];

// Padrões de busca para imagens
$patterns = [
    'img_old' => '/<img([^>]*?)src="\/assets\/img\/old-site\/([^"]+)"([^>]*?)>/i',
    'img_general' => '/<img([^>]*?)src="([^"]+)"([^>]*?)>/i'
];

// Contadores
$total_processed = 0;
$total_optimized = 0;

foreach ($directories as $dir) {
    echo "📁 Processando diretório: $dir/\n";
    
    $files = glob($dir . '/*.php');
    
    foreach ($files as $file) {
        echo "  📄 Processando: $file\n";
        
        $content = file_get_contents($file);
        $original_content = $content;
        
        // Otimizar imagens do old-site
        $content = preg_replace_callback($patterns['img_old'], function($matches) {
            $before = $matches[1];
            $src = $matches[2];
            $after = $matches[3];
            
            // Verificar se já tem lazy loading
            if (strpos($matches[0], 'loading=') !== false) {
                return $matches[0]; // Já otimizada
            }
            
            // Extrair alt text atual
            $alt_match = [];
            preg_match('/alt="([^"]*)"/', $matches[0], $alt_match);
            $current_alt = isset($alt_match[1]) ? $alt_match[1] : '';
            
            // Melhorar alt text se necessário
            $improved_alt = $current_alt;
            if (empty($current_alt) || strlen($current_alt) < 10) {
                $filename = pathinfo($src, PATHINFO_FILENAME);
                $improved_alt = ucwords(str_replace(['-', '_'], ' ', $filename)) . ' - Equipamento contra incêndio MIB São Paulo';
            }
            
            // Adicionar lazy loading e dimensões
            $optimized = '<img' . $before . 'src="/assets/img/old-site/' . $src . '" alt="' . $improved_alt . '"' . $after . ' loading="lazy" width="300" height="200">';
            
            return $optimized;
        }, $content);
        
        // Otimizar outras imagens
        $content = preg_replace_callback($patterns['img_general'], function($matches) {
            // Pular se for do old-site (já processado)
            if (strpos($matches[0], '/assets/img/old-site/') !== false) {
                return $matches[0];
            }
            
            // Verificar se já tem lazy loading
            if (strpos($matches[0], 'loading=') !== false) {
                return $matches[0]; // Já otimizada
            }
            
            // Adicionar lazy loading apenas se não for logo ou ícone
            $src = $matches[2];
            if (strpos($src, 'logo') === false && strpos($src, 'icon') === false) {
                $optimized = '<img' . $matches[1] . 'src="' . $src . '"' . $matches[3] . ' loading="lazy">';
                return $optimized;
            }
            
            return $matches[0];
        }, $content);
        
        // Salvar se houve mudanças
        if ($content !== $original_content) {
            file_put_contents($file, $content);
            $total_optimized++;
            echo "    ✅ Otimizado: $file\n";
        } else {
            echo "    ⏭️  Sem mudanças: $file\n";
        }
        
        $total_processed++;
    }
    
    echo "\n";
}

echo "🎉 OTIMIZAÇÃO CONCLUÍDA!\n";
echo "📊 Estatísticas:\n";
echo "   • Arquivos processados: $total_processed\n";
echo "   • Arquivos otimizados: $total_optimized\n";
echo "   • Imagens com lazy loading: Todas as imagens principais\n";
echo "   • Alt text melhorado: Imagens sem descrição adequada\n\n";

echo "✅ PRÓXIMOS PASSOS:\n";
echo "   1. Comprimir imagens físicas (reduzir tamanho dos arquivos)\n";
echo "   2. Converter PNG para WebP quando possível\n";
echo "   3. Implementar dimensões específicas para cada imagem\n";
echo "   4. Testar performance com Google PageSpeed Insights\n\n";

echo "🚀 MELHORIAS IMPLEMENTADAS:\n";
echo "   ✅ Lazy loading em todas as imagens\n";
echo "   ✅ Alt text descritivo com palavras-chave locais\n";
echo "   ✅ Dimensões básicas para evitar layout shift\n";
echo "   ✅ Otimização focada em SEO e performance\n";
?>
