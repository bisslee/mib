# Script simples para corrigir títulos
$files = Get-ChildItem *.php

foreach ($file in $files) {
    $filename = $file.BaseName
    $title = $filename -replace '-', ' '
    $title = (Get-Culture).TextInfo.ToTitleCase($title.ToLower())
    
    # Correções específicas
    $title = $title -replace 'De ', 'de '
    $title = $title -replace 'Da ', 'da '
    $title = $title -replace 'Do ', 'do '
    $title = $title -replace 'Para ', 'para '
    $title = $title -replace 'Com ', 'com '
    $title = $title -replace 'Em ', 'em '
    $title = $title -replace 'Na ', 'na '
    $title = $title -replace 'No ', 'no '
    $title = $title -replace 'A ', 'a '
    $title = $title -replace 'O ', 'o '
    $title = $title -replace 'E ', 'e '
    $title = $title -replace 'Incendio', 'Incêndio'
    $title = $title -replace 'incendio', 'incêndio'
    
    Write-Host "Arquivo: $($file.Name)"
    Write-Host "Título: $title"
    
    $content = Get-Content $file.FullName -Raw -Encoding UTF8
    
    if ($content -match 'Título da Página') {
        $content = $content -replace 'Título da Página', $title
        Set-Content $file.FullName $content -Encoding UTF8
        Write-Host "Corrigido!"
    } else {
        Write-Host "Sem 'Título da Página'"
    }
    Write-Host ""
}
