# Explicação: Canonical Tags - Google Search Console

## Data: 6 de outubro de 2025

---

## Sobre a Mensagem do Google

### "Página alternativa com tag canônica adequada"

**Esta NÃO é uma mensagem de erro!** ✅

Esta é uma **mensagem informativa** do Google indicando que:

1. ✅ O Google encontrou páginas alternativas no seu site
2. ✅ Essas páginas **CORRETAMENTE** apontam para a versão canônica
3. ✅ O Google está indexando a versão canônica (como desejado)
4. ✅ As páginas alternativas **NÃO** estão sendo indexadas (correto!)

### O que isso significa?

Quando você tem várias URLs que apontam para o mesmo conteúdo, você deve usar canonical tags para indicar qual é a versão "principal" que deve ser indexada. 

**Exemplo:**
- URL alternativa: `http://mangueirasdeincendiobrasil.com.br/produtos/abrigos.php`
- URL canônica: `https://mangueirasdeincendiobrasil.com.br/produtos/abrigos-para-equipamentos-contra-incendio.php`

A URL alternativa tem uma tag `<link rel="canonical">` apontando para a URL canônica, então o Google indexa apenas a canônica.

---

## Implementação Atual

### 1. Canonical Tags no Header (`includes/header.php`)

```php
<link rel="canonical" href="<?php echo htmlspecialchars(
    isset($page_config['canonical']) ? 
    $page_config['canonical'] : 
    (isset($site_config['canonical']) ? $site_config['canonical'] : '')
); ?>">
```

Cada página define sua própria URL canônica:

```php
$page_config = [
    'title' => 'Nome da Página',
    'description' => 'Descrição',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/pagina.php'
];
```

### 2. Redirecionamentos (.htaccess)

O arquivo `.htaccess` possui:
- ✅ Mod_rewrite ativado
- ✅ Redirecionamento de páginas antigas para handler
- ✅ Página 404 personalizada
- ✅ Cache e compressão configurados

---

## Situações Comuns de Páginas Alternativas

### 1. Variações de Protocolo
- `http://mangueirasdeincendiobrasil.com.br/` (sem SSL)
- `https://mangueirasdeincendiobrasil.com.br/` (com SSL) ✅ CANÔNICA

### 2. Variações de Subdomínio
- `http://www.mangueirasdeincendiobrasil.com.br/`
- `https://mangueirasdeincendiobrasil.com.br/` ✅ CANÔNICA

### 3. Páginas Antigas Redirecionadas
- `old-pages/mangueira-para-hidrante.php` → redirecionada
- `equipamentos/mangueiras-de-incendio.php` ✅ CANÔNICA

### 4. Parâmetros de URL
- `/produtos/?utm_source=google`
- `/produtos/` ✅ CANÔNICA

---

## Ações Recomendadas

### ✅ O que está correto (NÃO mexer):
1. Canonical tags estão implementadas corretamente
2. Google está indexando as páginas corretas
3. Páginas alternativas não estão competindo

### ⚠️ Monitoramento (verificar periodicamente):

1. **No Google Search Console:**
   - Vá em "Indexação" → "Páginas"
   - Verifique a seção "Por que as páginas não foram indexadas"
   - "Página alternativa com tag canônica adequada" deve aparecer
   - **Isso é esperado e correto!**

2. **Páginas que devem aparecer:**
   - Número de páginas alternativas: baixo (apenas redirecionamentos)
   - Número de páginas indexadas: todas as páginas principais

### 🔧 Melhorias Opcionais:

#### 1. Forçar HTTPS (se ainda não implementado)

Adicionar ao `.htaccess`:
```apache
# Forçar HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

#### 2. Forçar WWW ou Sem WWW

**Opção A: Forçar SEM www (recomendado para MIB):**
```apache
# Redirecionar www para não-www
RewriteCond %{HTTP_HOST} ^www\.(.+)$ [NC]
RewriteRule ^(.*)$ https://%1/$1 [R=301,L]
```

**Opção B: Forçar COM www:**
```apache
# Redirecionar não-www para www
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule ^(.*)$ https://www.%{HTTP_HOST}/$1 [R=301,L]
```

#### 3. Remover Trailing Slash (opcional)
```apache
# Remover barra final
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)/$ /$1 [R=301,L]
```

---

## Verificação de Canonical Tags

### Ferramenta de Teste

Use a [Ferramenta de Inspeção de URL do Google](https://search.google.com/search-console/inspect):

1. Cole a URL que deseja verificar
2. Clique em "Testar URL"
3. Veja a seção "Canonical"
4. Verifique se aponta para a URL correta

### Teste Manual

Em cada página, verifique o código-fonte:
```html
<!-- Procure por esta linha no <head> -->
<link rel="canonical" href="https://mangueirasdeincendiobrasil.com.br/pagina-correta.php">
```

---

## Páginas com Canonical Tag Implementada

### Equipamentos:
- ✅ `/equipamentos/mangueiras-de-incendio.php`
- ✅ `/equipamentos/extintores-de-incendio.php`
- ✅ `/equipamentos/hidrante-contra-incendio.php`
- ✅ `/equipamentos/esguichos-para-equipamentos-contra-incendio.php`

### Produtos:
- ✅ `/produtos/abrigos.php`
- ✅ `/produtos/abrigos-para-equipamentos-contra-incendio.php`
- ✅ `/produtos/caixas-para-equipamentos-contra-incendio.php`

### Páginas Institucionais:
- ✅ `/` (home)
- ✅ `/empresa.php`
- ✅ `/contact.php`

---

## Possíveis Páginas Duplicadas a Verificar

⚠️ **Atenção:** Verifique se estas páginas existem duplicadas:

### 1. Abrigos
- `/produtos/abrigos.php`
- `/produtos/abrigos-para-equipamentos-contra-incendio.php`

**Recomendação:** Se o conteúdo é idêntico, redirecionar uma para a outra:
```apache
Redirect 301 /produtos/abrigos.php /produtos/abrigos-para-equipamentos-contra-incendio.php
```

### 2. Old Pages
Verificar se as páginas em `/old-pages/` estão:
- ✅ Redirecionadas para as novas versões
- ✅ Com robots noindex (para não serem indexadas)
- ✅ Com canonical apontando para as novas versões

---

## Monitoramento Contínuo

### Semanalmente:
- [ ] Verificar relatório de "Páginas" no Search Console
- [ ] Confirmar que páginas importantes estão indexadas
- [ ] Verificar se não há aumento de "páginas alternativas"

### Mensalmente:
- [ ] Revisar canonical tags de páginas novas
- [ ] Testar URLs com a ferramenta de inspeção do Google
- [ ] Verificar se redirecionamentos estão funcionando

### Após Mudanças no Site:
- [ ] Atualizar canonical tags se URLs mudarem
- [ ] Adicionar redirecionamentos 301 para URLs antigas
- [ ] Solicitar reindexação no Search Console

---

## Resumo

### ✅ Está Tudo Certo!

A mensagem "Página alternativa com tag canônica adequada" do Google **não é um erro**. 

É uma confirmação de que:
1. Suas canonical tags estão configuradas corretamente
2. O Google está respeitando suas indicações
3. Apenas as páginas certas estão sendo indexadas

### Nenhuma ação imediata é necessária!

Continue monitorando o Search Console periodicamente para garantir que tudo continue funcionando corretamente.

---

## Referências

- [Google: Usar URLs canônicos](https://developers.google.com/search/docs/crawling-indexing/consolidate-duplicate-urls)
- [Google Search Console: Relatório de Indexação](https://support.google.com/webmasters/answer/7440203)
- [Schema.org: Canonical URL](https://schema.org/url)

---

**Desenvolvedor:** Biss Solutions  
**Data:** 6 de outubro de 2025  
**Versão:** 1.0

