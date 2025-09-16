# 🔍 Google Search Console - Configuração Completa

## 📋 Visão Geral
Este documento explica como configurar e usar o Google Search Console para monitorar a indexação e performance do site MIB.

## 🚀 Passos para Configuração

### 1. Acessar o Google Search Console
- Acesse: https://search.google.com/search-console
- Faça login com sua conta Google

### 2. Adicionar Propriedade
- Clique em "Adicionar propriedade"
- Selecione "Prefixo de URL"
- Digite: `https://mangueirasdeincendiobrasil.com.br/`

### 3. Verificação do Site
**Método Recomendado: Tag HTML**

1. Escolha "Tag HTML" na lista de métodos de verificação
2. Copie o código de verificação (exemplo: `abc123def456ghi789`)
3. Edite o arquivo: `includes/search-console-config.php`
4. Cole o código na variável `verification_code`:

```php
$search_console_config = [
    'site_id' => 'https://mangueirasdeincendiobrasil.com.br/',
    'verification_code' => 'abc123def456ghi789', // ← Cole aqui
    // ... resto da configuração
];
```

### 4. Enviar Sitemap
1. No Search Console, vá para "Sitemaps"
2. Adicione: `https://mangueirasdeincendiobrasil.com.br/sitemap.xml`
3. Clique em "Enviar"

## 📊 Monitoramento Disponível

### ✅ Status de Indexação
- **Páginas indexadas**: Quantas páginas estão no Google
- **Páginas não indexadas**: Páginas com problemas
- **Erros de rastreamento**: Problemas técnicos

### 🔍 Palavras-chave Monitoradas
- mangueira de incêndio
- extintor de incêndio
- equipamentos contra incêndio
- hidrante contra incêndio
- mangueiras de incêndio brasil
- mib equipamentos
- sistema de combate a incêndio
- equipamentos de segurança
- abnt certificado

### 📱 Usabilidade Mobile
- **Compatibilidade mobile**: Verifica se o site funciona bem em dispositivos móveis
- **Velocidade de carregamento**: Performance em mobile
- **Interação com toque**: Elementos clicáveis

### ⚡ Core Web Vitals
- **LCP (Largest Contentful Paint)**: Velocidade de carregamento
- **FID (First Input Delay)**: Responsividade
- **CLS (Cumulative Layout Shift)**: Estabilidade visual

## 🛠️ Ferramentas de Monitoramento

### Painel de Monitoramento
- **Arquivo**: `devtools/search-console-monitor.php`
- **Funcionalidades**:
  - Verificação de sitemap
  - Status de robots.txt
  - Teste de URLs importantes
  - Relatório de SEO

### URLs Importantes Monitoradas
- `/` - Página inicial
- `/contact.php` - Contato
- `/equipamentos/` - Lista de equipamentos
- `/equipamentos/mangueiras-de-incendio.php`
- `/equipamentos/extintores-de-incendio.php`
- `/equipamentos/hidrante-contra-incendio.php`
- `/equipamentos/esguichos-para-equipamentos-contra-incendio.php`

## 🔧 Configurações Técnicas

### Meta Tags Adicionadas
```html
<!-- Verificação do Search Console -->
<meta name="google-site-verification" content="abc123def456ghi789">

<!-- Schema.org WebSite -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "MIB - Mangueiras de Incêndio Brasil",
  "url": "https://mangueirasdeincendiobrasil.com.br",
  "description": "Especialistas em mangueiras de incêndio...",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://mangueirasdeincendiobrasil.com.br/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
```

### Arquivos de Configuração
- `includes/search-console-config.php` - Configurações principais
- `devtools/search-console-monitor.php` - Painel de monitoramento
- `includes/header.php` - Meta tags e Schema.org

## 📈 Métricas Importantes

### Indexação
- **Páginas válidas**: Páginas indexadas corretamente
- **Páginas excluídas**: Páginas bloqueadas ou com problemas
- **Erros**: Páginas com problemas técnicos

### Performance
- **CTR (Click-Through Rate)**: Taxa de cliques nos resultados
- **Posição média**: Posição média nas buscas
- **Impressões**: Quantas vezes apareceu nos resultados

### Experiência
- **Usabilidade mobile**: Compatibilidade com dispositivos móveis
- **Core Web Vitals**: Métricas de experiência do usuário

## 🚨 Alertas e Notificações

### Tipos de Alertas
- **Erros de rastreamento**: Problemas técnicos
- **Problemas de usabilidade**: Mobile, velocidade
- **Violações de diretrizes**: Conteúdo ou técnica
- **Problemas de segurança**: Malware, phishing

### Configuração de Alertas
1. No Search Console, vá para "Configurações"
2. Configure notificações por email
3. Escolha os tipos de alertas desejados

## 🔄 Manutenção Regular

### Verificações Semanais
- [ ] Status de indexação
- [ ] Erros de rastreamento
- [ ] Performance das páginas principais
- [ ] Core Web Vitals

### Verificações Mensais
- [ ] Relatório de palavras-chave
- [ ] Análise de CTR e posições
- [ ] Revisão de sitemap
- [ ] Atualização de configurações

## 📞 Suporte e Recursos

### Documentação Oficial
- [Google Search Console Help](https://support.google.com/webmasters/)
- [Search Console Academy](https://developers.google.com/search/docs/)

### Ferramentas Relacionadas
- **Google Analytics**: Métricas de tráfego
- **Google Tag Manager**: Gerenciamento de tags
- **PageSpeed Insights**: Análise de velocidade

## ✅ Checklist de Configuração

- [ ] Conta Google Search Console criada
- [ ] Propriedade adicionada
- [ ] Site verificado com tag HTML
- [ ] Código de verificação adicionado ao arquivo de configuração
- [ ] Sitemap enviado
- [ ] Painel de monitoramento testado
- [ ] URLs importantes verificadas
- [ ] Alertas configurados
- [ ] Monitoramento ativo

## 🎯 Próximos Passos

1. **Configurar verificação** do site
2. **Enviar sitemap** para indexação
3. **Monitorar métricas** regularmente
4. **Otimizar** baseado nos dados
5. **Acompanhar** melhorias de posicionamento

---

**📝 Nota**: Este sistema está preparado para monitoramento completo do Google Search Console. Após a configuração inicial, o monitoramento será automático e os dados estarão disponíveis no painel criado.
