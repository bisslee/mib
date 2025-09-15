# 🌐 Configuração de Ambientes - MIB Site

## Ambientes Configurados

### 🏠 **LOCAL** - Desenvolvimento
- **URL:** `http://localhost:8133/`
- **Propósito:** Desenvolvimento e testes locais
- **Detecção:** Contém "localhost" no host
- **Base URL:** Dinâmica baseada no host

### 🧪 **HOMOLOGAÇÃO** - Testes
- **URL:** `https://mib.biss.com.br/`
- **Propósito:** Testes antes da produção
- **Detecção:** Contém "mib.biss.com.br" no host
- **Base URL:** `https://mib.biss.com.br`

### 🚀 **PRODUÇÃO** - Live
- **URL:** `https://mangueirasdeincendiobrasil.com.br/`
- **Propósito:** Site em produção
- **Detecção:** Contém "mangueirasdeincendiobrasil.com.br" no host
- **Base URL:** `https://mangueirasdeincendiobrasil.com.br`

## Como Funciona a Detecção

O sistema detecta automaticamente o ambiente baseado no `$_SERVER['HTTP_HOST']`:

```php
if (strpos($host, 'localhost') !== false) {
    // LOCAL
} elseif (strpos($host, 'mib.biss.com.br') !== false) {
    // HOMOLOGAÇÃO
} elseif (strpos($host, 'mangueirasdeincendiobrasil.com.br') !== false) {
    // PRODUÇÃO
} else {
    // FALLBACK para produção
}
```

## Teste de Configuração

Para testar se a configuração está funcionando corretamente:

1. **Local:** Acesse `http://localhost:8133/test_config.php`
2. **HML:** Acesse `https://mib.biss.com.br/test_config.php`
3. **PRD:** Acesse `https://mangueirasdeincendiobrasil.com.br/test_config.php`

## Arquivos Importantes

- `includes/config.php` - Configuração principal
- `test_config.php` - Teste de configuração
- `AMBIENTES.md` - Esta documentação

## Deploy

### Para Homologação:
1. Faça upload dos arquivos para `mib.biss.com.br`
2. Teste acessando `https://mib.biss.com.br/test_config.php`
3. Verifique se o CSS está carregando corretamente

### Para Produção:
1. Faça upload dos arquivos para `mangueirasdeincendiobrasil.com.br`
2. Teste acessando `https://mangueirasdeincendiobrasil.com.br/test_config.php`
3. Verifique se tudo está funcionando

## Limpeza

Após confirmar que tudo está funcionando:
- Delete o arquivo `test_config.php` de todos os ambientes
- Mantenha apenas `config.php` e `AMBIENTES.md`

---

**Desenvolvido por:** Biss Solutions  
**Data:** Janeiro 2025  
**Versão:** 2.0
