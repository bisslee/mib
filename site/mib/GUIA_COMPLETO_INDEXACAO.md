# Guia Completo de Correção - Problemas de Indexação

**Data:** 6 de outubro de 2025  
**Site:** mangueirasdeincendiobrasil.com.br

---

## 📋 Problemas Reportados pelo Google Search Console

### 1. Dados Estruturados (CRÍTICO)
- ❌ Especifique "offers", "review" ou "aggregateRating"
- ⚠️ Campo "priceValidUntil" não encontrado
- ⚠️ Campo "price" ou "priceSpecification.price" não especificado

**Status:** ✅ **CORRIGIDO** (aguardando deploy)

### 2. Problemas de Indexação

#### a) Cópia sem página canônica selecionada pelo usuário
**O que é:** Páginas duplicadas sem indicação de qual é a principal.

#### b) Bloqueada pelo robots.txt
**O que é:** Páginas impedidas de serem rastreadas.

#### c) Página com redirecionamento
**O que é:** URLs que redirecionam para outras URLs.

#### d) Não encontrado (404)
**O que é:** Páginas que não existem mais.

#### e) Indexada, mas bloqueada pelo robots.txt
**O que é:** Página foi indexada antes, mas agora está bloqueada.

---

## 🔍 Diagnóstico Completo

### Problema 1: Arquivos Duplicados na Raiz

#### ⚠️ CRÍTICO: index.html vs index.php
```
site/mib/
  ├── index.html  ❌ DUPLICADO
  └── index.php   ✅ CORRETO
```

**Solução:** Deletar `index.html`

**Por quê:** 
- Servidor Apache prioriza index.html sobre index.php
- Isso pode causar que a página errada seja servida
- Google pode indexar a versão HTML ao invés da PHP

### Problema 2: Páginas Bloqueadas em old-pages/

#### Bloqueio no robots.txt:
```
Disallow: /old-pages/
```

**Páginas afetadas:** Todas em `/old-pages/`

**Soluções possíveis:**

**Opção A: Se as páginas antigas NÃO devem ser indexadas (RECOMENDADO)**
1. Manter bloqueio no robots.txt ✅
2. Adicionar redirecionamentos 301 para novas versões
3. Adicionar noindex nas páginas antigas

**Opção B: Se as páginas antigas DEVEM ser indexadas**
1. Remover bloqueio do robots.txt
2. Adicionar canonical tags apontando para versões novas
3. Adicionar redirecionamentos 301

### Problema 3: Páginas Sem Canonical Tag

**Verificar se todas as páginas têm canonical tag:**

Páginas que DEVEM ter canonical:
- ✅ index.php
- ✅ empresa.php
- ✅ contact.php
- ✅ produtos/*.php
- ✅ equipamentos/*.php
- ❓ old-pages/*.php (se não redirecionadas)
- ❓ Outras páginas PHP na raiz

### Problema 4: Links Quebrados (404)

**Possíveis causas:**
- Links internos apontando para páginas que não existem
- URLs antigas que mudaram
- Erros de digitação em links

---

## ✅ Plano de Correção Passo a Passo

### PASSO 1: Resolver Duplicatas na Raiz

#### Ação 1.1: Verificar e Deletar index.html
```bash
# No servidor, verificar qual arquivo está sendo servido
ls -la /caminho/site/mib/index.*

# Se index.html existe e não é necessário, deletar
rm /caminho/site/mib/index.html
```

**OU usando FTP/Painel:**
1. Acesse o diretório raiz do site
2. Verifique se `index.html` existe
3. Se sim, renomeie para `index.html.backup` ou delete

#### Ação 1.2: Criar .htaccess com prioridade
```apache
# Forçar index.php como padrão
DirectoryIndex index.php index.html
```

### PASSO 2: Corrigir Páginas em old-pages/

#### Ação 2.1: Adicionar Meta Noindex nas Páginas Antigas

Editar TODAS as páginas em `/old-pages/`:
```php
<?php
// No topo de cada arquivo em old-pages/
header("X-Robots-Tag: noindex, nofollow");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="robots" content="noindex, nofollow">
    <!-- resto do código -->
</head>
```

#### Ação 2.2: Criar Redirecionamentos para Páginas Antigas

Adicionar ao `.htaccess`:
```apache
# Redirecionamentos para páginas antigas
Redirect 301 /old-pages/mangueira-para-hidrante.php /equipamentos/mangueiras-de-incendio.php
Redirect 301 /old-pages/adaptador-para-mangueira-de-incendio.php /equipamentos/mangueiras-de-incendio.php
# ... adicionar todos os redirecionamentos necessários
```

### PASSO 3: Adicionar Canonical Tags em Páginas Faltantes

#### Ação 3.1: Verificar Todas as Páginas PHP na Raiz

Páginas que precisam de canonical tag:
```php
$page_config = [
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/nome-da-pagina.php'
];
```

#### Ação 3.2: Template para Adicionar Canonical

```php
<?php
// No início do arquivo
$page_config = [
    'title' => 'Título da Página',
    'description' => 'Descrição',
    'keywords' => 'palavras-chave',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/pagina.php' // ← ADICIONAR
];
?>
```

### PASSO 4: Criar Sitemap.xml Atualizado

#### Ação 4.1: Criar/Atualizar sitemap.xml

```xml
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    
    <!-- Página Principal -->
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    
    <!-- Equipamentos -->
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/equipamentos/mangueiras-de-incendio.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/equipamentos/extintores-de-incendio.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/equipamentos/hidrante-contra-incendio.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/equipamentos/esguichos-para-equipamentos-contra-incendio.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    
    <!-- Produtos -->
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/produtos/abrigos-para-equipamentos-contra-incendio.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/produtos/caixas-para-equipamentos-contra-incendio.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    
    <!-- Institucional -->
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/empresa.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    
    <url>
        <loc>https://mangueirasdeincendiobrasil.com.br/contact.php</loc>
        <lastmod>2025-10-06</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>
    
</urlset>
```

### PASSO 5: Atualizar robots.txt

#### Ação 5.1: Robots.txt Otimizado

```txt
User-agent: *
Allow: /

# Bloquear páginas antigas (redirecionadas)
Disallow: /old-pages/

# Bloquear ferramentas de desenvolvimento
Disallow: /devtools/
Disallow: /temp_*

# Bloquear arquivos de teste/debug
Disallow: /test-*.php
Disallow: /debug-*.php
Disallow: /*-test.php
Disallow: /*-debug.php

# Bloquear includes e configurações
Disallow: /includes/
Disallow: /assets/

# Permitir CSS e JS para renderização
Allow: /assets/css/
Allow: /assets/js/

# Sitemap
Sitemap: https://mangueirasdeincendiobrasil.com.br/sitemap.xml
```

### PASSO 6: Limpar Páginas Indexadas Incorretamente

#### Ação 6.1: No Google Search Console

1. Acesse: https://search.google.com/search-console
2. Vá em "Indexação" → "Remoções"
3. Clique em "Nova solicitação"
4. Para cada URL que NÃO deve ser indexada:
   - Digite a URL completa
   - Selecione "Remover temporariamente URL"
   - Clique em "Próxima"
   - Confirme

**URLs para considerar remoção:**
- `https://mangueirasdeincendiobrasil.com.br/old-pages/*`
- `https://mangueirasdeincendiobrasil.com.br/index.html` (se existir)
- Qualquer URL com `/test-` ou `/debug-`

---

## 📝 Checklist de Deploy

### ANTES do Deploy:
- [ ] Fazer backup completo do site
- [ ] Testar alterações em ambiente local
- [ ] Verificar que todos os arquivos foram modificados corretamente

### DURANTE o Deploy:
- [ ] Upload dos arquivos PHP modificados
- [ ] Upload do robots.txt atualizado
- [ ] Upload do sitemap.xml
- [ ] Upload do .htaccess atualizado
- [ ] Deletar/renomear index.html (se existir)

### APÓS o Deploy:
- [ ] Testar homepage (deve carregar index.php)
- [ ] Testar páginas de produtos (verificar dados estruturados)
- [ ] Testar redirecionamentos de old-pages
- [ ] Verificar robots.txt no navegador
- [ ] Verificar sitemap.xml no navegador

### No Google Search Console:
- [ ] Enviar sitemap.xml atualizado
- [ ] Solicitar reindexação das páginas principais
- [ ] Solicitar remoção de URLs indesejadas
- [ ] Verificar dados estruturados com a ferramenta de teste

---

## 🛠️ Ferramentas de Validação

### 1. Teste de Dados Estruturados
```
URL: https://search.google.com/test/rich-results
Testar: Todas as páginas de produtos
```

### 2. Teste de Robots.txt
```
URL: https://www.google.com/webmasters/tools/robots-testing-tool
Testar: URLs bloqueadas e permitidas
```

### 3. Inspeção de URL
```
No Search Console → Inspeção de URL
Testar cada página modificada
```

### 4. Validador de Sitemap
```
URL: https://www.xml-sitemaps.com/validate-xml-sitemap.html
Validar: sitemap.xml
```

---

## 📊 Monitoramento Pós-Deploy

### Diário (primeiros 7 dias):
- [ ] Verificar Search Console para novos erros
- [ ] Monitorar relatório de cobertura
- [ ] Verificar se páginas antigas foram desindexadas

### Semanal (primeiras 4 semanas):
- [ ] Revisar dados estruturados no Search Console
- [ ] Verificar posicionamento das páginas principais
- [ ] Monitorar tráfego orgânico no Google Analytics

### Mensal:
- [ ] Análise completa de indexação
- [ ] Revisar e atualizar sitemap se necessário
- [ ] Otimizar páginas com baixo desempenho

---

## ⚠️ Avisos Importantes

### 1. Sobre os Dados Estruturados
❗ **As correções já foram implementadas localmente**  
❗ **Mas o Google AINDA VÊ A VERSÃO ANTIGA no servidor**  
❗ **É NECESSÁRIO fazer DEPLOY das alterações**

### 2. Sobre Pages Bloqueadas
✅ Páginas em `/old-pages/` **DEVEM** estar bloqueadas  
✅ Isso é **INTENCIONAL** e **CORRETO**  
✅ Google reporta isso apenas como informação

### 3. Sobre Redirecionamentos
✅ Redirecionamentos 301 são **NORMAIS** e **CORRETOS**  
✅ Google reporta apenas para informação  
✅ Não precisa corrigir se for intencional

### 4. Sobre 404s
⚠️ Verifique se são páginas que existiam e foram removidas  
⚠️ Se sim, adicione redirecionamentos 301  
⚠️ Se não, ignore (podem ser tentativas de acesso inválido)

---

## 🎯 Resumo de Prioridades

### PRIORIDADE CRÍTICA (Fazer AGORA):
1. ✅ **Deploy das correções de dados estruturados** (já implementadas)
2. ❌ **Deletar index.html** (se existir)
3. ❌ **Adicionar redirecionamentos para old-pages**

### PRIORIDADE ALTA (Fazer esta semana):
4. ❌ **Criar/atualizar sitemap.xml**
5. ❌ **Adicionar canonical tags em páginas faltantes**
6. ❌ **Atualizar robots.txt**

### PRIORIDADE MÉDIA (Fazer este mês):
7. ❌ **Solicitar remoção de URLs indesejadas**
8. ❌ **Monitorar e corrigir 404s**
9. ❌ **Adicionar noindex em páginas de teste/debug**

---

## 📞 Próximos Passos Imediatos

### 1. HOJE:
```bash
# Fazer deploy das alterações de dados estruturados
# Verificar se index.html existe e deletar
# Testar homepage
```

### 2. AMANHÃ:
```bash
# Criar sitemap.xml
# Atualizar robots.txt
# Adicionar redirecionamentos
```

### 3. ESTA SEMANA:
```bash
# Solicitar reindexação no Search Console
# Monitorar resultados
# Corrigir problemas adicionais
```

---

**Desenvolvedor:** Biss Solutions  
**Última Atualização:** 6 de outubro de 2025  
**Status:** 📋 Aguardando Deploy

