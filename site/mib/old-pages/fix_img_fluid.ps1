# Script para adicionar class="img-fluid" em imagens que não têm
Get-ChildItem *.php | ForEach-Object {
    $filePath = $_.FullName
    $content = Get-Content $filePath -Raw -Encoding UTF8
    
    # Padrão para encontrar imagens sem class="img-fluid"
    # Procura por <img src="..." alt="..."> que não contenha img-fluid
    $pattern = '<img src="([^"]*)" alt="([^"]*)"(?!.*class="[^"]*img-fluid[^"]*")>'
    
    if ($content -match $pattern) {
        # Substitui todas as ocorrências
        $newContent = $content -replace '<img src="([^"]*)" alt="([^"]*)"(?!.*class="[^"]*img-fluid[^"]*")>', '<img src="$1" class="img-fluid" alt="$2">'
        
        Set-Content $filePath $newContent -Encoding UTF8
        Write-Host "Corrigido: $($_.Name)"
    }
}

Write-Host "Processo concluído!"
