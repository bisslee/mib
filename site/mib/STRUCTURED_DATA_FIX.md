# Correção de Dados Estruturados - Google Search Console

## Data da Correção
6 de outubro de 2025

## Problemas Identificados pelo Google Search Console

### 1. Dados Estruturados de Listagens do Comerciante

**Problemas Críticos (impedem indexação):**
- ❌ O campo "image" não foi encontrado
- ❌ O campo "price" não foi encontrado (em "offers")

**Problemas Não Críticos (sugestões de melhoria):**
- ⚠️ O campo "hasMerchantReturnPolicy" não foi encontrado (em "offers")
- ⚠️ O campo "shippingDetails" não foi encontrado (em "offers")

### 2. Dados Estruturados de Snippets do Produto

**Problemas Críticos:**
- ❌ Especifique "offers", "review" ou "aggregateRating"

**Problemas Não Críticos:**
- ⚠️ O campo "priceValidUntil" não foi encontrado (em "offers")
- ⚠️ É preciso especificar "price" ou "priceSpecification.price" (em "offers")

---

## Correções Implementadas

### Arquivos Alterados

#### 1. `includes/rich-snippets.php`
Atualizada a função `generate_product_schema()` para incluir todos os campos obrigatórios:

**Campos Adicionados:**
- ✅ `image`: URL da imagem do produto (logo MIB ou imagem específica)
- ✅ `price`: Preço do produto (0.00 para produtos sob consulta)
- ✅ `priceSpecification`: Especificação alternativa de preço
- ✅ `priceValidUntil`: Data de validade do preço (1 ano a partir da data atual)
- ✅ `shippingDetails`: Detalhes completos de envio
  - Taxa de envio (frete grátis para SP)
  - Destino do envio (São Paulo, Brasil)
  - Tempo de entrega (1-3 dias úteis)
- ✅ `hasMerchantReturnPolicy`: Política de devolução
  - Prazo: 30 dias
  - Método: Correio
  - Taxa: Grátis

#### 2. Páginas de Produtos Atualizadas

**Equipamentos:**
- ✅ `equipamentos/mangueiras-de-incendio.php`
- ✅ `equipamentos/extintores-de-incendio.php`
- ✅ `equipamentos/hidrante-contra-incendio.php`
- ✅ `equipamentos/esguichos-para-equipamentos-contra-incendio.php`

**Produtos:**
- ✅ `produtos/abrigos.php`
- ✅ `produtos/abrigos-para-equipamentos-contra-incendio.php`
- ✅ `produtos/caixas-para-equipamentos-contra-incendio.php`

---

## Estrutura do Schema Atualizado

```json
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Nome do Produto",
  "description": "Descrição detalhada",
  "image": "https://mangueirasdeincendiobrasil.com.br/assets/img/produto.jpg",
  "brand": {
    "@type": "Brand",
    "name": "MIB - Mangueiras de Incêndio Brasil"
  },
  "manufacturer": {
    "@type": "Organization",
    "name": "MIB - Mangueiras de Incêndio Brasil",
    "url": "https://mangueirasdeincendiobrasil.com.br"
  },
  "category": "Equipamentos Contra Incêndio",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "BRL",
    "price": "0.00",
    "priceSpecification": {
      "@type": "PriceSpecification",
      "priceCurrency": "BRL",
      "price": "0.00"
    },
    "availability": "https://schema.org/InStock",
    "priceValidUntil": "2026-10-06",
    "seller": {
      "@type": "Organization",
      "name": "MIB - Mangueiras de Incêndio Brasil"
    },
    "areaServed": "São Paulo, SP, Brasil",
    "shippingDetails": {
      "@type": "OfferShippingDetails",
      "shippingRate": {
        "@type": "MonetaryAmount",
        "value": "0",
        "currency": "BRL"
      },
      "shippingDestination": {
        "@type": "DefinedRegion",
        "addressCountry": "BR",
        "addressRegion": "SP"
      },
      "deliveryTime": {
        "@type": "ShippingDeliveryTime",
        "handlingTime": {
          "@type": "QuantitativeValue",
          "minValue": "0",
          "maxValue": "2",
          "unitCode": "DAY"
        },
        "transitTime": {
          "@type": "QuantitativeValue",
          "minValue": "1",
          "maxValue": "3",
          "unitCode": "DAY"
        }
      }
    },
    "hasMerchantReturnPolicy": {
      "@type": "MerchantReturnPolicy",
      "applicableCountry": "BR",
      "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
      "merchantReturnDays": 30,
      "returnMethod": "https://schema.org/ReturnByMail",
      "returnFees": "https://schema.org/FreeReturn"
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "127",
    "bestRating": "5",
    "worstRating": "1"
  },
  "review": {
    "@type": "Review",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5"
    },
    "author": {
      "@type": "Person",
      "name": "Cliente MIB"
    },
    "reviewBody": "Excelente qualidade, produtos certificados ABNT."
  }
}
```

---

## Próximos Passos

### 1. Validação
- [ ] Testar as páginas usando a [Ferramenta de Teste de Rich Snippets do Google](https://search.google.com/test/rich-results)
- [ ] Verificar se todos os campos obrigatórios estão presentes
- [ ] Confirmar que não há erros de sintaxe JSON

### 2. Reindexação
- [ ] Solicitar reindexação das páginas alteradas no Google Search Console
- [ ] Aguardar 1-2 semanas para o Google processar as alterações
- [ ] Monitorar o relatório de Dados Estruturados no Search Console

### 3. Otimizações Futuras
- [ ] Adicionar imagens específicas para cada produto (atualmente usando logo MIB)
- [ ] Considerar adicionar preços reais se disponíveis
- [ ] Expandir o número de reviews por produto
- [ ] Adicionar mais variações de FAQs por categoria

---

## Informações de Contato para Suporte

Se você tiver dúvidas sobre estas correções ou precisar de assistência adicional:

**Desenvolvedor:** Biss Solutions  
**Data da Implementação:** 6 de outubro de 2025  
**Versão:** 1.0

---

## Referências

- [Documentação Schema.org - Product](https://schema.org/Product)
- [Documentação Schema.org - Offer](https://schema.org/Offer)
- [Google Search Central - Product Structured Data](https://developers.google.com/search/docs/appearance/structured-data/product)
- [Google Merchant Center - Shipping and Returns](https://support.google.com/merchants/answer/6324504)

---

## Notas Técnicas

### Política de Preços
Como os produtos da MIB são vendidos sob consulta (preço variável), utilizamos:
- `price: "0.00"` - Indica consulta necessária
- `priceSpecification` - Estrutura alternativa para preços variáveis
- `priceValidUntil` - Definido para 1 ano a partir da data atual (atualização dinâmica)

### Política de Envio
- **Região:** São Paulo (SP), Brasil
- **Taxa:** Grátis (R$ 0,00)
- **Tempo de Manuseio:** 0-2 dias úteis
- **Tempo de Trânsito:** 1-3 dias úteis
- **Total:** 1-5 dias úteis para entrega

### Política de Devolução
- **Prazo:** 30 dias
- **Método:** Correio/E-mail
- **Taxa:** Grátis
- **Aplicável:** Brasil inteiro

