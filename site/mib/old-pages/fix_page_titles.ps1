# Script para corrigir títulos das páginas baseado no nome do arquivo original
Get-ChildItem *.php | ForEach-Object {
    $filename = $_.BaseName  # Remove a extensão .php
    $title = $filename -replace '-', ' '  # Substitui hífens por espaços
    
    # Converte para título com primeira letra maiúscula
    $title = (Get-Culture).TextInfo.ToTitleCase($title.ToLower())
    
    # Tratamentos especiais para alguns casos
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
    
    # Corrige casos específicos
    $title = $title -replace 'Incendio', 'Incêndio'
    $title = $title -replace 'incendio', 'incêndio'
    $title = $title -replace 'Extintores', 'Extintores'
    $title = $title -replace 'extintores', 'extintores'
    $title = $title -replace 'Mangueiras', 'Mangueiras'
    $title = $title -replace 'mangueiras', 'mangueiras'
    $title = $title -replace 'Equipamentos', 'Equipamentos'
    $title = $title -replace 'equipamentos', 'equipamentos'
    $title = $title -replace 'Seguranca', 'Segurança'
    $title = $title -replace 'seguranca', 'segurança'
    $title = $title -replace 'Configuracao', 'Configuração'
    $title = $title -replace 'configuracao', 'configuração'
    $title = $title -replace 'Descricao', 'Descrição'
    $title = $title -replace 'descricao', 'descrição'
    
    Write-Host "Processando: $($_.Name)"
    Write-Host "Título gerado: $title"
    
    # Lê o conteúdo do arquivo
    $content = Get-Content $_.FullName -Raw -Encoding UTF8
    
    # Verifica se o arquivo contém "Título da Página"
    if ($content -match 'Título da Página') {
        Write-Host "  Encontrado 'Título da Página' - aplicando correções..."
        
        # Substitui todas as ocorrências de "Título da Página"
        $content = $content -replace 'Título da Página', $title
        
        # Salva o arquivo
        Set-Content $_.FullName $content -Encoding UTF8
        Write-Host "  Arquivo corrigido: $($_.Name)"
    } else {
        Write-Host "  Nenhuma ocorrência de 'Título da Página' encontrada"
    }
    
    Write-Host ""
}