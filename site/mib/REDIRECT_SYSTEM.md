# Sistema de Redirecionamento MIB

## Visão Geral

Este sistema foi criado para gerenciar as páginas antigas que foram indexadas pelo Google, redirecionando-as para a pasta `old-pages/` ou mostrando uma página 404 personalizada quando a página não existe.

## Como Funciona

### 1. Redirecionamentos Diretos (.htaccess)
As páginas mais comuns são redirecionadas diretamente pelo `.htaccess` para melhor performance:

```apache
RewriteRule ^mangueira-para-hidrante\.php$ /old-pages/mangueira-para-hidrante.php [L,R=301]
```

### 2. Sistema Inteligente (redirect-handler.php)
Para outras páginas PHP, o sistema usa um handler PHP que:

1. **Verifica se existe mapeamento específico** no array `$redirect_map`
2. **Verifica se a página existe** na pasta `old-pages/`
3. **Redireciona com 301** se encontrar a página
4. **Mostra página 404** se não encontrar

### 3. Página 404 Personalizada
A página `404.php` tem:
- Design consistente com o site
- Links para produtos em destaque
- Informações de contato
- Navegação para páginas importantes

## Arquivos Criados/Modificados

### Novos Arquivos:
- `.htaccess` - Configurações de redirecionamento
- `404.php` - Página 404 personalizada
- `redirect-handler.php` - Sistema inteligente de redirecionamento
- `test-redirects.php` - Página de teste (remover em produção)

### Estrutura:
```
site/mib/
├── .htaccess                    # Redirecionamentos principais
├── 404.php                     # Página 404 personalizada
├── redirect-handler.php        # Handler inteligente
├── test-redirects.php          # Teste (remover)
├── old-pages/                  # Páginas antigas
│   ├── mangueira-para-hidrante.php
│   ├── mangueira-de-incendio-tipo1.php
│   └── ... (outras páginas antigas)
└── includes/                   # Includes do site
```

## URLs de Exemplo

### ✅ Redirecionamentos que funcionam:
- `https://site.com/mangueira-para-hidrante.php` → `old-pages/mangueira-para-hidrante.php`
- `https://site.com/contato.php` → `contact.php`
- `https://site.com/equipamentos-contra-incendio.php` → `old-pages/equipamentos-contra-incendio.php`

### ❌ Páginas que mostram 404:
- `https://site.com/pagina-que-nao-existe.php` → Página 404 personalizada
- `https://site.com/qualquer-coisa.php` → Página 404 personalizada

## Benefícios

1. **SEO**: Mantém o link juice das páginas antigas indexadas
2. **UX**: Usuários não veem erros, são redirecionados ou veem página útil
3. **Performance**: Redirecionamentos diretos no .htaccess são mais rápidos
4. **Manutenção**: Sistema centralizado e fácil de atualizar

## Configuração do Servidor

### Apache (.htaccess)
O arquivo `.htaccess` já está configurado com:
- Mod_rewrite habilitado
- Redirecionamentos 301
- Compressão GZIP
- Cache de arquivos estáticos
- Configurações de segurança

### Nginx (se necessário)
Para servidores Nginx, seria necessário configurar redirecionamentos similares no arquivo de configuração do servidor.

## Testes

Use a página `test-redirects.php` para verificar se tudo está funcionando:

1. Acesse `/test-redirects.php`
2. Clique nos links de teste
3. Verifique se os redirecionamentos estão corretos
4. **Remova o arquivo de teste em produção**

## Manutenção

### Adicionar Nova Página Antiga:
1. Adicione a regra no `.htaccess` (para páginas comuns)
2. Ou adicione no array `$redirect_map` em `redirect-handler.php`

### Atualizar Página 404:
Edite o arquivo `404.php` para alterar o design ou conteúdo.

## Monitoramento

Para monitorar os redirecionamentos:
1. Use Google Search Console para ver páginas 404
2. Monitore logs do servidor para redirecionamentos
3. Use ferramentas como Screaming Frog para auditoria

## Segurança

O sistema inclui:
- Bloqueio de acesso a arquivos sensíveis
- Headers de segurança
- Validação de URLs
- Sanitização de entrada

---

**Nota**: Este sistema foi criado especificamente para o site MIB e pode ser adaptado para outros projetos conforme necessário.
