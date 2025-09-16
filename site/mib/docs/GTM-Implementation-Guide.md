# 📊 Google Tag Manager - Guia de Implementação MIB

## 🎯 **VISÃO GERAL**

O Google Tag Manager (GTM) foi implementado no site MIB para monitoramento completo de métricas, conversões e comportamento dos usuários.

## 🔧 **CONFIGURAÇÃO IMPLEMENTADA**

### **Container ID:** `GTM-WZKDXGP`

### **Localização dos Códigos:**
- **Header:** `includes/header.php` (linha 13-18)
- **Footer:** `includes/footer.php` (linha 1-4)
- **Configuração:** `includes/gtm-config.php`

## 📈 **EVENTOS TRACKING IMPLEMENTADOS**

### **1. 📞 Contato**
- **Telefone:** Cliques em números de telefone
- **Email:** Cliques em endereços de email
- **WhatsApp:** Cliques no botão WhatsApp

### **2. 🛍️ Produtos**
- **Visualização:** Tracking de visualização de produtos
- **Categorias:** Mangueiras, Extintores, Hidrantes, etc.

### **3. 📄 Navegação**
- **Page Views:** Visualizações de páginas
- **Links Internos:** Cliques em links de navegação

## 🎯 **MÉTRICAS MONITORADAS**

### **SEO:**
- ✅ Page Views por página
- ✅ Tempo na página
- ✅ Taxa de rejeição
- ✅ Páginas mais visitadas

### **Conversão:**
- ✅ Cliques em telefone
- ✅ Cliques em WhatsApp
- ✅ Cliques em email
- ✅ Visualizações de produtos

### **Comportamento:**
- ✅ Fluxo de navegação
- ✅ Páginas de entrada/saída
- ✅ Dispositivos utilizados
- ✅ Localização geográfica

## 📊 **CONFIGURAÇÕES RECOMENDADAS NO GTM**

### **1. Google Analytics 4**
```javascript
// Configurar GA4 no GTM
- Container: GTM-WZKDXGP
- Measurement ID: G-XXXXXXXXXX
- Enhanced Ecommerce: Ativado
```

### **2. Facebook Pixel**
```javascript
// Para campanhas no Facebook/Instagram
- Pixel ID: XXXXXXXXXXXXXXXX
- Eventos: ViewContent, Contact, etc.
```

### **3. Google Ads Conversion Tracking**
```javascript
// Para campanhas no Google Ads
- Conversion ID: AW-XXXXXXXXX
- Conversion Labels: Definir por objetivo
```

## 🎯 **EVENTOS PERSONALIZADOS**

### **Código de Exemplo:**
```javascript
dataLayer.push({
    'event': 'whatsapp_click',
    'event_category': 'contact',
    'event_action': 'whatsapp_click',
    'event_label': 'footer_whatsapp',
    'value': '1'
});
```

### **Eventos Disponíveis:**
- `whatsapp_click` - Clique no WhatsApp
- `phone_click` - Clique em telefone
- `email_click` - Clique em email
- `product_view` - Visualização de produto
- `contact_form_submit` - Envio de formulário

## 📈 **DASHBOARDS RECOMENDADOS**

### **1. Google Analytics 4**
- **Audience:** Demografia e comportamento
- **Acquisition:** Tráfego e fontes
- **Behavior:** Conteúdo e navegação
- **Conversions:** Objetivos e conversões

### **2. Google Data Studio**
- **Dashboard SEO:** Rankings e tráfego orgânico
- **Dashboard Conversão:** Leads e vendas
- **Dashboard Performance:** Velocidade e UX

## 🔍 **VERIFICAÇÃO DE IMPLEMENTAÇÃO**

### **1. Google Tag Assistant**
- Instalar extensão no Chrome
- Verificar se GTM está carregando
- Confirmar eventos sendo disparados

### **2. Google Analytics Real-Time**
- Verificar tráfego em tempo real
- Confirmar eventos personalizados
- Testar conversões

### **3. GTM Preview Mode**
- Ativar modo de visualização
- Navegar pelo site
- Verificar eventos no console

## 📊 **RELATÓRIOS IMPORTANTES**

### **Semanal:**
- ✅ Tráfego total e orgânico
- ✅ Páginas mais visitadas
- ✅ Conversões por fonte
- ✅ Dispositivos e localização

### **Mensal:**
- ✅ Crescimento de tráfego
- ✅ ROI de campanhas
- ✅ Análise de comportamento
- ✅ Otimizações implementadas

## 🎯 **PRÓXIMOS PASSOS**

### **1. Configurar Objetivos**
- Definir conversões no GA4
- Configurar funis de conversão
- Criar segmentos de audiência

### **2. Implementar Remarketing**
- Configurar listas de remarketing
- Criar campanhas no Google Ads
- Otimizar para conversão

### **3. A/B Testing**
- Testar diferentes versões de páginas
- Otimizar formulários de contato
- Melhorar taxa de conversão

## 📞 **SUPORTE TÉCNICO**

Para dúvidas sobre implementação ou configuração:
- **Documentação GTM:** https://developers.google.com/tag-manager
- **Google Analytics:** https://support.google.com/analytics
- **MIB Suporte:** contato@mangueirasdeincendiobrasil.com.br

---

**Última atualização:** Janeiro 2025  
**Versão:** 1.0  
**Status:** ✅ Implementado e Funcionando
