# Check.php - Guia Completo

## 📋 Visão Geral

O `check.php` é um script abrangente de verificação do sistema PHP que fornece informações detalhadas sobre:

- ✅ Configurações do PHP
- 🔧 Extensões instaladas
- 🖥️ Informações do servidor
- 📁 Permissões de diretórios
- 🌐 Testes de conectividade
- 🔒 Verificações básicas de segurança

## 🚀 Como Usar

### Método 1: Servidor Web Local

1. **Coloque o arquivo no diretório web:**
   ```
   # Para XAMPP/WAMP
   C:\xampp\htdocs\check.php
   
   # Para LAMP
   /var/www/html/check.php
   ```

2. **Acesse via navegador:**
   ```
   http://localhost/check.php
   ```

### Método 2: Servidor PHP Embutido

1. **Navegue até o diretório do arquivo:**
   ```bash
   cd /caminho/para/o/diretorio
   ```

2. **Inicie o servidor PHP:**
   ```bash
   php -S localhost:8000
   ```

3. **Acesse no navegador:**
   ```
   http://localhost:8000/check.php
   ```

### Método 3: Linha de Comando

```bash
php check.php
```
*Nota: A saída será em HTML, melhor visualizada no navegador*

## 🔧 Personalização

### Adicionando Novas Verificações

Você pode facilmente adicionar novas verificações editando o arquivo:

```php
// Exemplo: Verificar se uma extensão específica está instalada
function checkCustomExtension() {
    $extension = 'imagick'; // Substitua pela extensão desejada
    
    if (extension_loaded($extension)) {
        return "<span style='color: green;'>✓ {$extension} está instalada</span>";
    } else {
        return "<span style='color: red;'>✗ {$extension} não está instalada</span>";
    }
}

// Adicione a chamada na seção principal
formatOutput('🎨 Verificação Personalizada', checkCustomExtension());
```

### Modificando Extensões Verificadas

Edite o array `$extensions` na função `checkExtensions()`:

```php
$extensions = [
    'curl' => 'Necessário para requisições HTTP',
    'mysqli' => 'Conexão com MySQL',
    'redis' => 'Cache Redis', // Adicione novas extensões aqui
    'memcached' => 'Cache Memcached',
    // ... outras extensões
];
```

## 🎯 Casos de Uso Específicos

### Para Desenvolvimento Web

O script é ideal para:
- ✅ Verificar se o ambiente está configurado corretamente
- ✅ Diagnosticar problemas de configuração
- ✅ Validar extensões necessárias para frameworks
- ✅ Verificar permissões de upload e sessões

### Para Servidores de Produção

**⚠️ IMPORTANTE:** Remova ou proteja este arquivo em produção!

```php
// Adicione no início do arquivo para proteger em produção
if ($_SERVER['SERVER_NAME'] !== 'localhost' && !in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('Acesso negado');
}
```

### Para Debugging

Use o script para:
- 🔍 Identificar extensões faltantes
- 🔍 Verificar limites de upload
- 🔍 Diagnosticar problemas de conectividade
- 🔍 Validar configurações de sessão

## 📊 Interpretando os Resultados

### Códigos de Status

- **✓ Verde:** Funcionando corretamente
- **✗ Vermelho:** Problema detectado
- **⚠ Laranja:** Aviso ou funcionalidade limitada

### Configurações Importantes

| Configuração | Valor Recomendado | Descrição |
|--------------|-------------------|-----------|
| `memory_limit` | 128M ou superior | Limite de memória para scripts |
| `max_execution_time` | 30-300 segundos | Tempo máximo de execução |
| `upload_max_filesize` | Conforme necessário | Tamanho máximo de upload |
| `display_errors` | Off (produção) | Exibição de erros |

### Extensões Críticas

- **curl:** Requisições HTTP/HTTPS
- **mysqli/pdo:** Conexões de banco de dados
- **gd:** Manipulação de imagens
- **json:** Processamento de dados JSON
- **openssl:** Segurança e criptografia

## 🛠️ Solução de Problemas

### Extensão Não Encontrada

```bash
# Ubuntu/Debian
sudo apt-get install php-extensao

# CentOS/RHEL
sudo yum install php-extensao

# Windows (XAMPP)
# Edite php.ini e descomente: extension=extensao
```

### Problemas de Permissão

```bash
# Linux: Ajustar permissões
sudo chmod 755 /var/www/html
sudo chown www-data:www-data /var/www/html

# Verificar usuário do servidor web
ps aux | grep apache
ps aux | grep nginx
```

### Erro de Conectividade

1. **Verificar firewall:**
   ```bash
   # Linux
   sudo ufw status
   
   # Windows
   # Verificar Windows Firewall
   ```

2. **Testar DNS:**
   ```bash
   nslookup google.com
   ping google.com
   ```

## 📝 Versões Personalizadas

### Check.php Minimalista

```php
<?php
echo "<h1>PHP Check Rápido</h1>";
echo "<p>Versão PHP: " . PHP_VERSION . "</p>";
echo "<p>Extensões: " . implode(', ', get_loaded_extensions()) . "</p>";
?>
```

### Check.php para API

```php
<?php
header('Content-Type: application/json');

$check = [
    'php_version' => PHP_VERSION,
    'extensions' => get_loaded_extensions(),
    'memory_limit' => ini_get('memory_limit'),
    'timestamp' => date('c')
];

echo json_encode($check, JSON_PRETTY_PRINT);
?>
```

## 🔐 Considerações de Segurança

1. **Nunca deixe em produção sem proteção**
2. **Use autenticação se necessário:**
   ```php
   session_start();
   if (!isset($_SESSION['authenticated'])) {
       // Implementar login
   }
   ```
3. **Limite acesso por IP:**
   ```php
   $allowed_ips = ['127.0.0.1', '192.168.1.100'];
   if (!in_array($_SERVER['REMOTE_ADDR'], $allowed_ips)) {
       die('Acesso negado');
   }
   ```

## 📞 Suporte

Para problemas específicos:
1. Verifique os logs do servidor web
2. Consulte a documentação do PHP
3. Teste em ambiente isolado
4. Verifique configurações do php.ini

---

**Desenvolvido para facilitar a verificação e diagnóstico de ambientes PHP** 🚀

