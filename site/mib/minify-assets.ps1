# Script de Minificação Automática - MIB
# 
# Este script minifica automaticamente CSS e JavaScript
# Reduz o tamanho dos arquivos em 30-50%
# 
# Uso: .\minify-assets.ps1
# 
# Desenvolvedor: Biss Solutions
# Data: 2025-10-06

Write-Host "====================================" -ForegroundColor Cyan
Write-Host "Script de Minificação - MIB" -ForegroundColor Cyan
Write-Host "====================================" -ForegroundColor Cyan
Write-Host ""

# Função para minificar CSS
function Minify-CSS {
    param(
        [string]$InputFile,
        [string]$OutputFile
    )
    
    Write-Host "Minificando CSS: $InputFile" -ForegroundColor Yellow
    
    $content = Get-Content $InputFile -Raw
    
    # Remover comentários CSS
    $content = $content -replace '/\*[\s\S]*?\*/', ''
    
    # Remover espaços em branco desnecessários
    $content = $content -replace '\s+', ' '
    $content = $content -replace '\s*{\s*', '{'
    $content = $content -replace '\s*}\s*', '}'
    $content = $content -replace '\s*:\s*', ':'
    $content = $content -replace '\s*;\s*', ';'
    $content = $content -replace '\s*,\s*', ','
    
    # Remover último ponto-e-vírgula antes de }
    $content = $content -replace ';}', '}'
    
    # Salvar arquivo minificado
    $content | Out-File -FilePath $OutputFile -Encoding UTF8 -NoNewline
    
    $originalSize = (Get-Item $InputFile).Length
    $minifiedSize = (Get-Item $OutputFile).Length
    $savedBytes = $originalSize - $minifiedSize
    $savedPercent = [math]::Round(($savedBytes / $originalSize) * 100, 2)
    
    Write-Host "✓ Minificado: $OutputFile" -ForegroundColor Green
    Write-Host "  Original: $originalSize bytes" -ForegroundColor Gray
    Write-Host "  Minificado: $minifiedSize bytes" -ForegroundColor Gray
    Write-Host "  Economia: $savedBytes bytes ($savedPercent%)" -ForegroundColor Green
    Write-Host ""
}

# Função para minificar JavaScript
function Minify-JS {
    param(
        [string]$InputFile,
        [string]$OutputFile
    )
    
    Write-Host "Minificando JS: $InputFile" -ForegroundColor Yellow
    
    $content = Get-Content $InputFile -Raw
    
    # Remover comentários de linha única
    $content = $content -replace '//.*$', ''
    
    # Remover comentários de múltiplas linhas
    $content = $content -replace '/\*[\s\S]*?\*/', ''
    
    # Remover espaços em branco desnecessários
    $content = $content -replace '\s+', ' '
    $content = $content -replace '\s*{\s*', '{'
    $content = $content -replace '\s*}\s*', '}'
    $content = $content -replace '\s*\(\s*', '('
    $content = $content -replace '\s*\)\s*', ')'
    $content = $content -replace '\s*;\s*', ';'
    $content = $content -replace '\s*,\s*', ','
    $content = $content -replace '\s*=\s*', '='
    
    # Salvar arquivo minificado
    $content | Out-File -FilePath $OutputFile -Encoding UTF8 -NoNewline
    
    $originalSize = (Get-Item $InputFile).Length
    $minifiedSize = (Get-Item $OutputFile).Length
    $savedBytes = $originalSize - $minifiedSize
    $savedPercent = [math]::Round(($savedBytes / $originalSize) * 100, 2)
    
    Write-Host "✓ Minificado: $OutputFile" -ForegroundColor Green
    Write-Host "  Original: $originalSize bytes" -ForegroundColor Gray
    Write-Host "  Minificado: $minifiedSize bytes" -ForegroundColor Gray
    Write-Host "  Economia: $savedBytes bytes ($savedPercent%)" -ForegroundColor Green
    Write-Host ""
}

# Diretórios
$cssDir = "assets/css"
$jsDir = "assets/js"

# Verificar se os diretórios existem
if (-not (Test-Path $cssDir)) {
    Write-Host "✗ Diretório não encontrado: $cssDir" -ForegroundColor Red
    exit 1
}

if (-not (Test-Path $jsDir)) {
    Write-Host "✗ Diretório não encontrado: $jsDir" -ForegroundColor Red
    exit 1
}

Write-Host "Minificando arquivos CSS..." -ForegroundColor Cyan
Write-Host ""

# Minificar todos os arquivos CSS (exceto os já minificados)
Get-ChildItem -Path $cssDir -Filter "*.css" -Exclude "*.min.css" | ForEach-Object {
    $inputFile = $_.FullName
    $outputFile = $inputFile -replace '\.css$', '.min.css'
    Minify-CSS -InputFile $inputFile -OutputFile $outputFile
}

Write-Host "Minificando arquivos JavaScript..." -ForegroundColor Cyan
Write-Host ""

# Minificar todos os arquivos JS (exceto os já minificados)
Get-ChildItem -Path $jsDir -Filter "*.js" -Exclude "*.min.js" | ForEach-Object {
    $inputFile = $_.FullName
    $outputFile = $inputFile -replace '\.js$', '.min.js'
    Minify-JS -InputFile $inputFile -OutputFile $outputFile
}

Write-Host "====================================" -ForegroundColor Cyan
Write-Host "✓ Minificação Concluída!" -ForegroundColor Green
Write-Host "====================================" -ForegroundColor Cyan
Write-Host ""
Write-Host "Próximos passos:" -ForegroundColor Yellow
Write-Host "1. Atualizar header.php para usar arquivos .min.css e .min.js" -ForegroundColor White
Write-Host "2. Testar o site" -ForegroundColor White
Write-Host "3. Fazer deploy" -ForegroundColor White
Write-Host ""
Write-Host "Exemplo de uso no header:" -ForegroundColor Yellow
Write-Host '<link href="/assets/css/style.min.css" rel="stylesheet">' -ForegroundColor Gray
Write-Host '<script src="/assets/js/main.min.js" defer></script>' -ForegroundColor Gray
Write-Host ""

