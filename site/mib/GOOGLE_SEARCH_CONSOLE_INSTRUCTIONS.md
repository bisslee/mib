# 🔍 Google Search Console - Instruções Rápidas

## 🚀 Configuração em 5 Passos

### **Passo 1: Acessar Google Search Console**
- Acesse: https://search.google.com/search-console
- Faça login com sua conta Google

### **Passo 2: Adicionar Propriedade**
- Clique em "Adicionar propriedade"
- Selecione "Prefixo de URL"
- Digite: `https://mangueirasdeincendiobrasil.com.br/`
- Clique em "Continuar"

### **Passo 3: Verificação**
- Escolha "Tag HTML"
- Copie o código de verificação
- **NÃO clique em "Verificar" ainda!**

### **Passo 4: Configurar Código**
- Edite o arquivo: `includes/search-console-config.php`
- Substitua `'verification_code' => '',` por:
- `'verification_code' => 'SEU_CODIGO_AQUI',`

### **Passo 5: Verificar e Enviar Sitemap**
- Volte ao Search Console
- Clique em "Verificar"
- Vá para "Sitemaps"
- Digite: `sitemap.xml`
- Clique em "Enviar"

## 🛠️ Ferramentas Disponíveis

### **Guia Interativo**
- **Arquivo**: `devtools/google-search-console-setup.php`
- **Função**: Guia passo a passo com instruções detalhadas

### **Teste de Configuração**
- **Arquivo**: `devtools/test-search-console-config.php`
- **Função**: Verifica se a configuração está correta

### **Monitoramento**
- **Arquivo**: `devtools/search-console-monitor.php`
- **Função**: Painel de monitoramento do site

## 📋 Checklist Rápido

- [ ] Conta Google Search Console criada
- [ ] Propriedade adicionada: `https://mangueirasdeincendiobrasil.com.br/`
- [ ] Código de verificação copiado
- [ ] Arquivo `search-console-config.php` editado
- [ ] Código colado na configuração
- [ ] Propriedade verificada no Search Console
- [ ] Sitemap enviado: `sitemap.xml`

## ⚡ URLs Importantes

- **Search Console**: https://search.google.com/search-console
- **Sitemap**: https://mangueirasdeincendiobrasil.com.br/sitemap.xml
- **Robots.txt**: https://mangueirasdeincendiobrasil.com.br/robots.txt

## 🎯 Após Configuração

1. **Aguarde 24-48h** para indexação
2. **Monitore relatórios** de performance
3. **Verifique erros** de rastreamento
4. **Analise Core Web Vitals**
5. **Acompanhe palavras-chave**

## 📞 Suporte

- **Documentação**: `docs/SEARCH_CONSOLE_SETUP.md`
- **Guia Visual**: `devtools/google-search-console-setup.php`
- **Teste**: `devtools/test-search-console-config.php`

---

**⏱️ Tempo estimado**: 10-15 minutos
** Dificuldade**: Fácil
**✅ Resultado**: Site monitorado pelo Google
