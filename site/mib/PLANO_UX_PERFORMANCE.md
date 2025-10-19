# 🚀 Plano de UX e Performance - MIB

**Data:** 6 de outubro de 2025  
**Objetivo:** Melhorar Experiência do Usuário e Velocidade do Site

---

## ❌ O QUE AINDA NÃO FIZEMOS

### SEO Técnico ✅ (JÁ FEITO)
- ✅ Dados estruturados
- ✅ Canonical tags
- ✅ Robots.txt
- ✅ Sitemap
- ✅ Meta tags

### UX e Performance ❌ (AINDA NÃO FEITO)
- ❌ Otimização de imagens
- ❌ Cache do navegador
- ❌ Minificação CSS/JS
- ❌ Lazy loading de imagens
- ❌ CDN
- ❌ Compressão GZIP
- ❌ Análise de velocidade
- ❌ Mobile optimization específica
- ❌ Formulários otimizados
- ❌ CTAs (Call-to-Actions) claras

---

## 📊 DIAGNÓSTICO ATUAL

### 1. Verificar Performance Atual

**Ferramentas para testar AGORA:**
1. **PageSpeed Insights:** https://pagespeed.web.dev/
2. **GTmetrix:** https://gtmetrix.com/
3. **WebPageTest:** https://www.webpagetest.org/

**Testar a URL:** https://mangueirasdeincendiobrasil.com.br/

**Métricas Importantes:**
- **LCP (Largest Contentful Paint):** Deve ser < 2.5s
- **FID (First Input Delay):** Deve ser < 100ms
- **CLS (Cumulative Layout Shift):** Deve ser < 0.1
- **FCP (First Contentful Paint):** Deve ser < 1.8s
- **TTI (Time to Interactive):** Deve ser < 3.8s

---

## 🎯 PLANO DE AÇÃO - UX E PERFORMANCE

### FASE 1: Otimizações Imediatas (1-2 dias)

#### 1. Otimização de Imagens (CRÍTICO!)

**Problema:**
- Imagens provavelmente estão pesadas (PNG/JPG sem compressão)
- Muitas imagens carregando ao mesmo tempo
- Formatos antigos (não usa WebP)

**Solução:**

**A) Converter para WebP:**
```bash
# Instalar ferramenta (Windows)
# Baixar: https://developers.google.com/speed/webp/download

# Converter todas as imagens
for %f in (*.jpg *.png) do cwebp -q 80 "%f" -o "%~nf.webp"
```

**B) Implementar Lazy Loading:**

Adicionar em todas as imagens (exceto as acima da dobra):
```html
<!-- ANTES -->
<img src="imagem.jpg" alt="Descrição">

<!-- DEPOIS -->
<img src="imagem.webp" alt="Descrição" loading="lazy" width="300" height="200">
```

**C) Usar Responsive Images:**
```html
<picture>
  <source srcset="imagem-mobile.webp" media="(max-width: 768px)">
  <source srcset="imagem-tablet.webp" media="(max-width: 1024px)">
  <source srcset="imagem-desktop.webp" media="(min-width: 1025px)">
  <img src="imagem-desktop.webp" alt="Descrição" loading="lazy">
</picture>
```

**Meta:** Reduzir tamanho de imagens em 60-80%

#### 2. Minificação de CSS e JavaScript

**Ferramentas:**
- **CSS:** https://cssminifier.com/
- **JS:** https://javascript-minifier.com/
- **Automatizado:** Webpack, Gulp, ou Parcel

**Ações:**
```bash
# Minificar CSS
- assets/css/style.css → assets/css/style.min.css

# Minificar JS
- assets/js/main.js → assets/js/main.min.js
```

**Atualizar includes/header.php:**
```php
<!-- ANTES -->
<link rel="stylesheet" href="/assets/css/style.css">
<script src="/assets/js/main.js"></script>

<!-- DEPOIS -->
<link rel="stylesheet" href="/assets/css/style.min.css">
<script src="/assets/js/main.min.js" defer></script>
```

**Meta:** Reduzir tamanho de CSS/JS em 30-50%

#### 3. Configurar Cache do Navegador

**Já temos no .htaccess, mas pode melhorar:**

```apache
<IfModule mod_expires.c>
    ExpiresActive On
    
    # Imagens
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
    ExpiresByType image/svg+xml "access plus 1 year"
    
    # CSS e JS
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType text/javascript "access plus 1 year"
    
    # Fontes
    ExpiresByType font/ttf "access plus 1 year"
    ExpiresByType font/woff "access plus 1 year"
    ExpiresByType font/woff2 "access plus 1 year"
    
    # HTML
    ExpiresByType text/html "access plus 0 seconds"
</IfModule>

# Cache-Control headers
<IfModule mod_headers.c>
    # Cache para 1 ano
    <FilesMatch "\.(jpg|jpeg|png|gif|webp|svg|css|js|woff|woff2|ttf)$">
        Header set Cache-Control "max-age=31536000, public"
    </FilesMatch>
    
    # Sem cache para HTML
    <FilesMatch "\.(html|php)$">
        Header set Cache-Control "max-age=0, no-cache, must-revalidate"
    </FilesMatch>
</IfModule>
```

#### 4. Compressão GZIP (Já temos, mas verificar)

**Testar se está ativo:**
- https://checkgzipcompression.com/

**Se não estiver, adicionar ao .htaccess:**
```apache
<IfModule mod_deflate.c>
    # Comprimir HTML, CSS, JavaScript, Text, XML e fontes
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/vnd.ms-fontobject
    AddOutputFilterByType DEFLATE application/x-font
    AddOutputFilterByType DEFLATE application/x-font-opentype
    AddOutputFilterByType DEFLATE application/x-font-otf
    AddOutputFilterByType DEFLATE application/x-font-truetype
    AddOutputFilterByType DEFLATE application/x-font-ttf
    AddOutputFilterByType DEFLATE application/x-javascript
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE font/opentype
    AddOutputFilterByType DEFLATE font/otf
    AddOutputFilterByType DEFLATE font/ttf
    AddOutputFilterByType DEFLATE image/svg+xml
    AddOutputFilterByType DEFLATE image/x-icon
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/javascript
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/xml
</IfModule>
```

### FASE 2: Otimizações de Código (2-3 dias)

#### 5. Remover Recursos Não Utilizados

**Analisar e remover:**
- CSS não usado (com Coverage tool do Chrome DevTools)
- JavaScript não usado
- Bibliotecas antigas
- Fontes não carregadas

**Como fazer:**
1. Abrir Chrome DevTools (F12)
2. Ir em "More Tools" → "Coverage"
3. Recarregar página
4. Ver CSS/JS não usado (vermelho)
5. Remover ou mover para um arquivo separado

#### 6. Otimizar Carregamento de Fontes

**Se usa Google Fonts:**
```html
<!-- ANTES -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<!-- DEPOIS (preload + display=swap) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<!-- OU hospedar localmente (melhor) -->
<link rel="stylesheet" href="/assets/fonts/fonts.css">
```

#### 7. Defer JavaScript Não Crítico

**Adicionar defer ou async:**
```html
<!-- JavaScript crítico: inline no head -->
<script>
// Código crítico aqui
</script>

<!-- JavaScript não crítico: defer -->
<script src="/assets/js/main.min.js" defer></script>

<!-- JavaScript de terceiros: async -->
<script src="https://analytics.google.com/..." async></script>
```

#### 8. Preload Recursos Críticos

**Adicionar no header.php:**
```html
<!-- Preload CSS crítico -->
<link rel="preload" href="/assets/css/style.min.css" as="style">

<!-- Preload fontes -->
<link rel="preload" href="/assets/fonts/font.woff2" as="font" type="font/woff2" crossorigin>

<!-- Preload imagem do hero -->
<link rel="preload" href="/assets/img/hero.webp" as="image">
```

### FASE 3: Melhorias de UX (3-5 dias)

#### 9. Otimizar Formulários

**Melhorias:**

**A) Validação em Tempo Real:**
```javascript
// Validar enquanto usuário digita
document.getElementById('email').addEventListener('blur', function() {
    if (!this.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        this.classList.add('is-invalid');
        showError('Por favor, insira um e-mail válido');
    } else {
        this.classList.remove('is-invalid');
        this.classList.add('is-valid');
    }
});
```

**B) Feedback Visual Imediato:**
```css
/* Estados do input */
.form-control {
    border: 2px solid #ddd;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #ff8000;
    box-shadow: 0 0 0 0.2rem rgba(255, 128, 0, 0.25);
}

.form-control.is-valid {
    border-color: #28a745;
}

.form-control.is-invalid {
    border-color: #dc3545;
}
```

**C) Loading State no Botão:**
```html
<button type="submit" id="submitBtn">
    <span class="btn-text">Enviar</span>
    <span class="btn-loading" style="display:none;">
        <i class="fas fa-spinner fa-spin"></i> Enviando...
    </span>
</button>
```

#### 10. Melhorar Call-to-Actions (CTAs)

**Botões Destacados:**
```html
<!-- CTA Principal -->
<a href="/contact.php" class="btn btn-primary btn-lg cta-pulse">
    <i class="fas fa-phone"></i> Solicite um Orçamento Grátis
</a>

<!-- CTA WhatsApp -->
<a href="https://wa.me/5511..." class="btn btn-success btn-lg">
    <i class="fab fa-whatsapp"></i> Fale no WhatsApp Agora
</a>
```

**CSS para CTAs:**
```css
.cta-pulse {
    animation: pulse 2s infinite;
    box-shadow: 0 4px 15px rgba(255, 128, 0, 0.4);
}

@keyframes pulse {
    0% {
        box-shadow: 0 4px 15px rgba(255, 128, 0, 0.4);
    }
    50% {
        box-shadow: 0 4px 25px rgba(255, 128, 0, 0.6);
    }
    100% {
        box-shadow: 0 4px 15px rgba(255, 128, 0, 0.4);
    }
}
```

#### 11. Adicionar Breadcrumbs Visuais Melhorados

**Já tem breadcrumb estruturado, melhorar visualmente:**
```css
.breadcrumb {
    background: linear-gradient(135deg, #ff8000 0%, #ff6600 100%);
    padding: 1rem 1.5rem;
    border-radius: 0.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.breadcrumb-item a {
    color: #fff;
    text-decoration: none;
    transition: opacity 0.3s;
}

.breadcrumb-item a:hover {
    opacity: 0.8;
}

.breadcrumb-item.active {
    color: rgba(255,255,255,0.8);
}
```

#### 12. Skeleton Screens (Carregamento)

**Mostrar skeleton enquanto carrega:**
```html
<div class="skeleton-card">
    <div class="skeleton-image"></div>
    <div class="skeleton-title"></div>
    <div class="skeleton-text"></div>
    <div class="skeleton-text"></div>
</div>
```

```css
.skeleton-card {
    animation: skeleton-loading 1s linear infinite alternate;
}

@keyframes skeleton-loading {
    0% {
        background-color: #f0f0f0;
    }
    100% {
        background-color: #e0e0e0;
    }
}
```

#### 13. Scroll to Top Button

**Botão para voltar ao topo:**
```html
<button id="scrollToTop" class="scroll-to-top">
    <i class="fas fa-arrow-up"></i>
</button>
```

```javascript
// Mostrar quando rolar para baixo
window.addEventListener('scroll', function() {
    const btn = document.getElementById('scrollToTop');
    if (window.scrollY > 300) {
        btn.classList.add('show');
    } else {
        btn.classList.remove('show');
    }
});

// Scroll suave ao clicar
document.getElementById('scrollToTop').addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
```

### FASE 4: Mobile Optimization (2-3 dias)

#### 14. Menu Mobile Otimizado

**Hamburguer menu suave:**
```html
<button class="navbar-toggler" type="button">
    <span></span>
    <span></span>
    <span></span>
</button>
```

```css
/* Animação do hamburguer */
.navbar-toggler span {
    display: block;
    width: 25px;
    height: 3px;
    background: #ff8000;
    margin: 5px 0;
    transition: 0.3s;
}

.navbar-toggler.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.navbar-toggler.active span:nth-child(2) {
    opacity: 0;
}

.navbar-toggler.active span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -6px);
}
```

#### 15. Botões Touch-Friendly

**Aumentar área de toque:**
```css
/* Mínimo 44x44px para mobile (Apple HIG) */
.btn-mobile {
    min-height: 44px;
    min-width: 44px;
    padding: 12px 20px;
    font-size: 16px; /* Evita zoom no iOS */
}

/* Espaçamento entre botões */
.btn + .btn {
    margin-left: 10px;
}

@media (max-width: 768px) {
    .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}
```

#### 16. Imagens Responsive

**Garantir que funcionem em mobile:**
```css
img {
    max-width: 100%;
    height: auto;
}

/* Evitar CLS (Cumulative Layout Shift) */
img[width][height] {
    aspect-ratio: attr(width) / attr(height);
}
```

### FASE 5: Acessibilidade (1-2 dias)

#### 17. Contraste de Cores

**Verificar contraste:**
- Ferramenta: https://webaim.org/resources/contrastchecker/
- Mínimo: 4.5:1 para texto normal
- Mínimo: 3:1 para texto grande

**Ajustar se necessário:**
```css
/* Garantir contraste adequado */
.text-muted {
    color: #6c757d; /* Verificar contraste com fundo */
}

.btn-primary {
    background: #ff8000;
    color: #fff; /* Contraste: OK */
}
```

#### 18. Labels e ARIA

**Adicionar em formulários:**
```html
<!-- ANTES -->
<input type="text" placeholder="Nome">

<!-- DEPOIS -->
<label for="nome">Nome *</label>
<input type="text" id="nome" name="nome" 
       placeholder="Digite seu nome completo"
       required
       aria-required="true"
       aria-describedby="nomeHelp">
<small id="nomeHelp" class="form-text text-muted">
    Usaremos apenas para contato
</small>
```

#### 19. Navegação por Teclado

**Testar e garantir:**
- Tab funciona em todos os elementos
- Enter ativa botões
- Esc fecha modais
- Foco visível

```css
/* Foco visível */
*:focus {
    outline: 2px solid #ff8000;
    outline-offset: 2px;
}

/* Remover outline apenas para mouse */
*:focus:not(:focus-visible) {
    outline: none;
}

*:focus-visible {
    outline: 2px solid #ff8000;
    outline-offset: 2px;
}
```

---

## 📊 CHECKLIST DE IMPLEMENTAÇÃO

### PRIORIDADE CRÍTICA (Fazer AGORA):

- [ ] **Otimizar imagens** (converter para WebP, comprimir)
- [ ] **Lazy loading** em todas as imagens
- [ ] **Minificar CSS e JS**
- [ ] **Configurar cache** (.htaccess)
- [ ] **Testar GZIP** (verificar se está ativo)

### PRIORIDADE ALTA (Esta semana):

- [ ] **Defer JavaScript** não crítico
- [ ] **Preload** recursos críticos
- [ ] **Otimizar fontes** (hospedar localmente ou preconnect)
- [ ] **Melhorar CTAs** (botões mais destacados)
- [ ] **Formulários** com validação em tempo real

### PRIORIDADE MÉDIA (Este mês):

- [ ] **Menu mobile** animado
- [ ] **Scroll to top** button
- [ ] **Skeleton screens**
- [ ] **Touch-friendly** buttons
- [ ] **Breadcrumbs** visuais melhorados

### PRIORIDADE BAIXA (Quando possível):

- [ ] **Acessibilidade** completa (ARIA, contraste)
- [ ] **Navegação por teclado** otimizada
- [ ] **CDN** para assets estáticos
- [ ] **Service Worker** para cache avançado

---

## 🛠️ FERRAMENTAS NECESSÁRIAS

### Para Otimização de Imagens:
- **WebP Converter:** https://developers.google.com/speed/webp/download
- **TinyPNG:** https://tinypng.com/ (online)
- **Squoosh:** https://squoosh.app/ (online, Google)

### Para Minificação:
- **CSS Minifier:** https://cssminifier.com/
- **JS Minifier:** https://javascript-minifier.com/
- **HTML Minifier:** https://www.willpeavy.com/tools/minifier/

### Para Testes:
- **PageSpeed Insights:** https://pagespeed.web.dev/
- **GTmetrix:** https://gtmetrix.com/
- **WebPageTest:** https://www.webpagetest.org/
- **Lighthouse:** Chrome DevTools (F12)

### Para Análise:
- **Chrome DevTools - Coverage:** Ver CSS/JS não usado
- **Chrome DevTools - Network:** Ver tamanho de arquivos
- **Chrome DevTools - Performance:** Analisar rendering

---

## 📈 METAS E RESULTADOS ESPERADOS

### Performance:

**Antes (estimado):**
- PageSpeed Score: ~60-70
- LCP: ~4-6 segundos
- Tamanho total da página: 3-5 MB

**Depois (meta):**
- PageSpeed Score: 90+
- LCP: < 2.5 segundos
- Tamanho total da página: < 1 MB

### UX:

**Antes:**
- Formulário sem validação em tempo real
- Botões pequenos em mobile
- Sem feedback de loading
- Imagens carregam todas de uma vez

**Depois:**
- Validação imediata com feedback visual
- Botões touch-friendly (44x44px)
- Loading states em todas as ações
- Lazy loading + skeleton screens

### SEO (Melhoria Indireta):

- ⬆️ Ranking (sites rápidos ranqueiam melhor)
- ⬇️ Taxa de rejeição (bounce rate)
- ⬆️ Tempo no site
- ⬆️ Conversões

---

## 💰 INVESTIMENTO DE TEMPO

### Fazer Você Mesmo:
- **Otimizar imagens:** 2-4 horas
- **Lazy loading:** 1-2 horas
- **Minificar CSS/JS:** 1 hora
- **Cache/GZIP:** 30 min
- **CTAs e formulários:** 3-4 horas
- **Mobile optimization:** 4-6 horas
- **Acessibilidade:** 2-3 horas

**Total:** 15-25 horas (2-3 dias de trabalho)

### Contratar Profissional:
- **Custo:** R$ 1.500 - 3.000
- **Prazo:** 1 semana
- **Resultado:** Profissional e completo

---

## 🎯 RESUMO EXECUTIVO

### O Que Falta:

1. **Performance** ❌
   - Imagens não otimizadas
   - CSS/JS não minificados
   - Sem lazy loading

2. **UX** ❌
   - Formulários básicos
   - CTAs não destacados
   - Mobile pode melhorar

3. **Acessibilidade** ⚠️
   - Pode ter problemas de contraste
   - Faltam ARIA labels
   - Navegação por teclado não testada

### Próximos Passos:

**HOJE:**
1. Testar PageSpeed Insights
2. Ver score atual
3. Identificar problemas principais

**ESTA SEMANA:**
1. Otimizar imagens (maior ganho!)
2. Adicionar lazy loading
3. Minificar CSS/JS
4. Configurar cache

**ESTE MÊS:**
1. Melhorar CTAs
2. Otimizar formulários
3. Mobile optimization
4. Testar novamente

---

**Desenvolvedor:** Biss Solutions  
**Data:** 6 de outubro de 2025  
**Versão:** 1.0

---

**AÇÃO IMEDIATA:**  
Testar o site em: https://pagespeed.web.dev/  
Ver o score e identificar o que mais impacta!

