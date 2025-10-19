# Configuração SPF para Evitar Spam

## 🎯 Problema
Os emails estão indo para spam porque o servidor não tem configuração SPF adequada.

## ✅ Solução
Configure o registro SPF no DNS do domínio `mangueirasdeincendiobrasil.com.br`.

## 📋 Instruções

### 1. Acesse o Painel DNS
- Entre no painel de controle do seu domínio
- Vá para a seção de DNS/Zona DNS

### 2. Adicione o Registro SPF
**Tipo:** TXT  
**Nome:** @ (ou mangueirasdeincendiobrasil.com.br)  
**Valor:** `v=spf1 include:_spf.google.com include:mailgun.org ~all`

### 3. Registros Alternativos (se necessário)
Se o servidor de email for diferente, use:

**Para cPanel/WHM:**
```
v=spf1 a mx include:_spf.google.com ~all
```

**Para servidor próprio:**
```
v=spf1 a mx ip4:SEU_IP_DO_SERVIDOR ~all
```

**Para múltiplos servidores:**
```
v=spf1 a mx include:_spf.google.com include:mailgun.org ip4:SEU_IP ~all
```

## 🔍 Como Verificar

### 1. Teste SPF Online
- Acesse: https://mxtoolbox.com/spf.aspx
- Digite: mangueirasdeincendiobrasil.com.br
- Verifique se aparece "SPF Record Found"

### 2. Teste de Email
- Envie um email de teste
- Verifique se não vai para spam
- Confirme se chega na caixa de entrada

## ⚠️ Importante

1. **Propagação DNS:** Pode levar até 24h para propagar
2. **Apenas um SPF:** Não pode ter múltiplos registros SPF
3. **Teste gradual:** Teste após cada mudança

## 🚀 Próximos Passos

1. Configure o SPF no DNS
2. Aguarde a propagação (2-24h)
3. Teste o formulário de contato
4. Verifique se não vai mais para spam

## 📞 Suporte

Se precisar de ajuda com a configuração DNS, entre em contato com o suporte do seu provedor de hospedagem.
