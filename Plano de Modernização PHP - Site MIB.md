# Plano de Modernização PHP - Site MIB
## Análise Completa e Estratégia de Implementação

### Resumo Executivo

Após análise detalhada do código atual da MIB, identificamos oportunidades significativas de modernização que resultarão em melhor performance, SEO otimizado, manutenibilidade superior e experiência do usuário aprimorada. Este documento apresenta um plano estruturado para modernizar o site mantendo PHP como tecnologia base, mas implementando práticas modernas e arquitetura escalável.

## 1. Análise Crítica do Código Atual

### 1.1 Problemas Identificados

**Problemas de Segurança Críticos:**
- Uso direto de `$_POST` sem sanitização ou validação
- Includes sem verificação de existência de arquivos
- Ausência de proteção CSRF nos formulários
- Função `mail()` nativa sem autenticação SMTP
- Sem escape de dados para prevenção de XSS

**Problemas de Estrutura:**
- 200+ arquivos PHP na raiz do projeto (estrutura flat)
- 8.747 estilos inline espalhados pelo código
- Bootstrap 3.3.1 (versão de 2014, desatualizada)
- Duplicação massiva de código (1.218 ocorrências de "Brasil Segurança")
- 17 páginas similares de tipos de mangueira com código repetido

**Problemas de Performance:**
- Ausência total de sistema de cache
- Imagens não otimizadas
- CSS e JS não minificados
- Múltiplas requisições desnecessárias
- Sem compressão GZIP configurada

**Problemas de SEO:**
- 19 títulos duplicados entre páginas
- Meta descriptions genéricas e repetitivas
- Ausência de dados estruturados (Schema.org)
- Sem canonical URLs
- Estrutura de headings inconsistente

### 1.2 Pontos Positivos Identificados

**Aspectos Bem Implementados:**
- Sitemap.xml presente e estruturado
- Google Tag Manager corretamente implementado
- URLs amigáveis em todas as páginas
- Estrutura HTML semântica básica
- Responsive design funcional (Bootstrap)

## 2. Estratégia de Modernização PHP

### 2.1 Atualização da Versão PHP

**Situação Atual:** Versão PHP não especificada (provavelmente 7.x ou inferior)
**Meta:** PHP 8.2+ com todas as extensões modernas

**Benefícios da Atualização:**
- Performance 25-30% superior ao PHP 7.4
- Novos recursos como Union Types, Named Arguments, Match Expression
- Melhor tratamento de erros e debugging
- Suporte aprimorado para orientação a objetos
- Compatibilidade com bibliotecas modernas

**Plano de Migração:**
1. Teste de compatibilidade com PHP 8.2 em ambiente de desenvolvimento
2. Atualização gradual de sintaxe deprecated
3. Implementação de type hints em funções críticas
4. Migração para ambiente de produção com rollback preparado

### 2.2 Implementação de Arquitetura MVC Moderna

**Estrutura Proposta:**
```
/
├── app/
│   ├── Controllers/     # Lógica de controle
│   ├── Models/         # Modelos de dados
│   ├── Views/          # Templates Twig
│   └── Services/       # Lógica de negócio
├── config/             # Configurações
├── public/             # Arquivos públicos
├── storage/            # Cache, logs, uploads
├── vendor/             # Dependências Composer
└── routes/             # Definição de rotas
```

**Framework Micro Recomendado:**
Implementação de um micro-framework customizado baseado em:
- **Slim Framework 4** para roteamento
- **Twig** para template engine
- **Doctrine DBAL** para banco de dados
- **Monolog** para logging estruturado
- **PHPMailer** para envio de emails

### 2.3 Sistema de Cache Multicamadas

**Implementação de Cache Estratégico:**

**Nível 1 - Cache de Página Completa:**
- Cache de páginas estáticas por 24 horas
- Invalidação automática quando conteúdo é atualizado
- Compressão GZIP integrada
- Headers de cache otimizados

**Nível 2 - Cache de Fragmentos:**
- Cache de componentes reutilizáveis (header, footer, sidebar)
- Cache de listagens de produtos
- Cache de formulários renderizados
- TTL configurável por tipo de conteúdo

**Nível 3 - Cache de Dados:**
- Cache de consultas de banco de dados
- Cache de APIs externas
- Cache de cálculos complexos
- Implementação com Redis ou Memcached

**Código de Exemplo - Sistema de Cache:**
```php
<?php
class CacheManager {
    private $redis;
    
    public function __construct() {
        $this->redis = new Redis();
        $this->redis->connect('127.0.0.1', 6379);
    }
    
    public function getPage($key) {
        $cached = $this->redis->get("page:$key");
        return $cached ? unserialize($cached) : null;
    }
    
    public function setPage($key, $content, $ttl = 3600) {
        $this->redis->setex("page:$key", $ttl, serialize($content));
    }
    
    public function invalidatePattern($pattern) {
        $keys = $this->redis->keys($pattern);
        if (!empty($keys)) {
            $this->redis->del($keys);
        }
    }
}
```


## 3. Implementação de Segurança Robusta

### 3.1 Sanitização e Validação de Dados

**Problema Atual:** Uso direto de `$_POST` sem tratamento
**Solução:** Sistema de validação multicamadas

**Implementação de Input Sanitization:**
```php
<?php
class InputValidator {
    public static function sanitizeString($input) {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }
    
    public static function validateEmail($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    public static function validatePhone($phone) {
        $phone = preg_replace('/[^0-9]/', '', $phone);
        return strlen($phone) >= 10 && strlen($phone) <= 11 ? $phone : false;
    }
    
    public static function validateCSRF($token) {
        return hash_equals($_SESSION['csrf_token'], $token);
    }
}
```

### 3.2 Sistema de Formulários Unificado

**Problema Atual:** 5 formulários diferentes com inconsistências
**Solução:** Componente único reutilizável

**Formulário Unificado - Estrutura:**
```php
<?php
class ContactForm {
    private $fields = [
        'nome' => ['required' => true, 'type' => 'string', 'max' => 100],
        'email' => ['required' => true, 'type' => 'email'],
        'telefone' => ['required' => true, 'type' => 'phone'],
        'empresa' => ['required' => false, 'type' => 'string', 'max' => 100],
        'assunto' => ['required' => true, 'type' => 'string', 'max' => 200],
        'mensagem' => ['required' => true, 'type' => 'text', 'max' => 1000]
    ];
    
    public function validate($data) {
        $errors = [];
        foreach ($this->fields as $field => $rules) {
            if ($rules['required'] && empty($data[$field])) {
                $errors[$field] = "Campo {$field} é obrigatório";
                continue;
            }
            
            if (!empty($data[$field])) {
                $errors = array_merge($errors, $this->validateField($field, $data[$field], $rules));
            }
        }
        return $errors;
    }
    
    private function validateField($field, $value, $rules) {
        $errors = [];
        
        switch ($rules['type']) {
            case 'email':
                if (!InputValidator::validateEmail($value)) {
                    $errors[$field] = "Email inválido";
                }
                break;
            case 'phone':
                if (!InputValidator::validatePhone($value)) {
                    $errors[$field] = "Telefone inválido";
                }
                break;
            case 'string':
            case 'text':
                if (isset($rules['max']) && strlen($value) > $rules['max']) {
                    $errors[$field] = "Campo {$field} muito longo";
                }
                break;
        }
        
        return $errors;
    }
}
```

### 3.3 Sistema de Email Robusto

**Problema Atual:** Função `mail()` nativa não confiável
**Solução:** PHPMailer com SMTP autenticado

**Implementação de Email Service:**
```php
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class EmailService {
    private $mailer;
    
    public function __construct() {
        $this->mailer = new PHPMailer(true);
        $this->configureSMTP();
    }
    
    private function configureSMTP() {
        $this->mailer->isSMTP();
        $this->mailer->Host = $_ENV['SMTP_HOST'];
        $this->mailer->SMTPAuth = true;
        $this->mailer->Username = $_ENV['SMTP_USERNAME'];
        $this->mailer->Password = $_ENV['SMTP_PASSWORD'];
        $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port = 587;
        $this->mailer->CharSet = 'UTF-8';
    }
    
    public function sendContactForm($data) {
        try {
            $this->mailer->setFrom($_ENV['SMTP_FROM'], 'Site MIB');
            $this->mailer->addAddress($_ENV['CONTACT_EMAIL']);
            $this->mailer->addReplyTo($data['email'], $data['nome']);
            
            $this->mailer->isHTML(true);
            $this->mailer->Subject = 'Novo contato: ' . $data['assunto'];
            $this->mailer->Body = $this->buildEmailTemplate($data);
            
            $result = $this->mailer->send();
            $this->logEmailSent($data, $result);
            
            return $result;
        } catch (Exception $e) {
            $this->logEmailError($data, $e->getMessage());
            return false;
        }
    }
    
    private function buildEmailTemplate($data) {
        return "
        <h2>Novo contato recebido</h2>
        <p><strong>Nome:</strong> {$data['nome']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Telefone:</strong> {$data['telefone']}</p>
        <p><strong>Empresa:</strong> {$data['empresa']}</p>
        <p><strong>Assunto:</strong> {$data['assunto']}</p>
        <p><strong>Mensagem:</strong></p>
        <p>{$data['mensagem']}</p>
        ";
    }
}
```

## 4. Otimização de SEO Avançada

### 4.1 Sistema de Meta Tags Dinâmicas

**Problema Atual:** Meta descriptions genéricas e títulos duplicados
**Solução:** Sistema dinâmico baseado em conteúdo

**Implementação de SEO Manager:**
```php
<?php
class SEOManager {
    private $pageData;
    
    public function __construct($pageData) {
        $this->pageData = $pageData;
    }
    
    public function generateTitle() {
        $baseTitle = "MIB - Mangueiras de Incêndio Brasil";
        
        if (isset($this->pageData['title'])) {
            return $this->pageData['title'] . " | " . $baseTitle;
        }
        
        return $baseTitle;
    }
    
    public function generateDescription() {
        if (isset($this->pageData['description'])) {
            return $this->pageData['description'];
        }
        
        // Gerar descrição baseada no conteúdo
        $content = strip_tags($this->pageData['content'] ?? '');
        return substr($content, 0, 155) . '...';
    }
    
    public function generateStructuredData() {
        $structuredData = [
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => "MIB - Mangueiras de Incêndio Brasil",
            "url" => "https://www.mangueirasdeincendiobrasil.com.br",
            "logo" => "https://www.mangueirasdeincendiobrasil.com.br/images/logo.png",
            "contactPoint" => [
                "@type" => "ContactPoint",
                "telephone" => "+55-11-4442-3565",
                "contactType" => "customer service"
            ]
        ];
        
        if ($this->pageData['type'] === 'product') {
            $structuredData = $this->addProductSchema($structuredData);
        }
        
        return json_encode($structuredData, JSON_UNESCAPED_UNICODE);
    }
    
    private function addProductSchema($baseData) {
        return array_merge($baseData, [
            "@type" => "Product",
            "name" => $this->pageData['product_name'],
            "description" => $this->pageData['description'],
            "brand" => [
                "@type" => "Brand",
                "name" => "MIB"
            ],
            "offers" => [
                "@type" => "Offer",
                "availability" => "https://schema.org/InStock",
                "priceCurrency" => "BRL"
            ]
        ]);
    }
}
```

### 4.2 Sistema de URLs Canônicas e Redirects

**Implementação de URL Manager:**
```php
<?php
class URLManager {
    private $redirects = [];
    
    public function __construct() {
        $this->loadRedirects();
    }
    
    public function handleRedirects() {
        $currentURL = $_SERVER['REQUEST_URI'];
        
        if (isset($this->redirects[$currentURL])) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: " . $this->redirects[$currentURL]);
            exit();
        }
    }
    
    public function generateCanonical($page) {
        $baseURL = "https://www.mangueirasdeincendiobrasil.com.br";
        return $baseURL . "/" . ltrim($page, '/');
    }
    
    public function generateSitemap() {
        $pages = $this->getAllPages();
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        foreach ($pages as $page) {
            $xml .= '<url>';
            $xml .= '<loc>' . $this->generateCanonical($page['url']) . '</loc>';
            $xml .= '<lastmod>' . date('Y-m-d', $page['modified']) . '</lastmod>';
            $xml .= '<changefreq>' . $page['changefreq'] . '</changefreq>';
            $xml .= '<priority>' . $page['priority'] . '</priority>';
            $xml .= '</url>';
        }
        
        $xml .= '</urlset>';
        return $xml;
    }
}
```


## 5. Nova Estrutura de Projeto

### 5.1 Arquitetura de Diretórios Modernizada

**Estrutura Atual:** Todos os arquivos na raiz (flat structure)
**Nova Estrutura:** Organização modular e escalável

```
mib-website/
├── app/
│   ├── Controllers/
│   │   ├── HomeController.php
│   │   ├── ProductController.php
│   │   ├── ContactController.php
│   │   └── AdminController.php
│   ├── Models/
│   │   ├── Product.php
│   │   ├── Contact.php
│   │   └── Page.php
│   ├── Services/
│   │   ├── EmailService.php
│   │   ├── SEOService.php
│   │   └── CacheService.php
│   ├── Middleware/
│   │   ├── AuthMiddleware.php
│   │   ├── CSRFMiddleware.php
│   │   └── CacheMiddleware.php
│   └── Helpers/
│       ├── InputValidator.php
│       ├── URLHelper.php
│       └── ImageHelper.php
├── config/
│   ├── app.php
│   ├── database.php
│   ├── cache.php
│   └── mail.php
├── public/
│   ├── index.php
│   ├── assets/
│   │   ├── css/
│   │   │   ├── app.min.css
│   │   │   └── admin.min.css
│   │   ├── js/
│   │   │   ├── app.min.js
│   │   │   └── admin.min.js
│   │   └── images/
│   │       ├── products/
│   │       ├── logos/
│   │       └── optimized/
│   ├── uploads/
│   └── .htaccess
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── main.twig
│   │   │   └── admin.twig
│   │   ├── pages/
│   │   │   ├── home.twig
│   │   │   ├── products/
│   │   │   └── contact.twig
│   │   └── components/
│   │       ├── header.twig
│   │       ├── footer.twig
│   │       └── forms/
│   ├── scss/
│   │   ├── main.scss
│   │   ├── components/
│   │   └── pages/
│   └── js/
│       ├── main.js
│       └── components/
├── storage/
│   ├── cache/
│   ├── logs/
│   ├── sessions/
│   └── uploads/
├── database/
│   ├── migrations/
│   └── seeds/
├── routes/
│   ├── web.php
│   └── api.php
├── vendor/
├── composer.json
├── package.json
├── webpack.config.js
└── .env
```

### 5.2 Sistema de Roteamento Moderno

**Implementação de Router Customizado:**
```php
<?php
// routes/web.php
$router = new Router();

// Páginas principais
$router->get('/', 'HomeController@index');
$router->get('/empresa', 'PageController@empresa');
$router->get('/contato', 'ContactController@show');
$router->post('/contato', 'ContactController@send');

// Produtos - Rotas dinâmicas
$router->get('/produtos', 'ProductController@index');
$router->get('/produtos/{categoria}', 'ProductController@category');
$router->get('/produtos/{categoria}/{produto}', 'ProductController@show');

// Mangueiras - Compatibilidade com URLs existentes
$router->get('/mangueira-de-incendio', 'ProductController@mangueiras');
$router->get('/mangueira-tipo-{tipo}', 'ProductController@tipo');
$router->get('/mangueira-de-incendio-tipo{tipo}', 'ProductController@tipo');

// Admin
$router->group('/admin', function($router) {
    $router->get('/', 'AdminController@dashboard');
    $router->get('/produtos', 'AdminController@products');
    $router->get('/leads', 'AdminController@leads');
    $router->get('/seo', 'AdminController@seo');
}, ['middleware' => 'auth']);

// API
$router->group('/api', function($router) {
    $router->post('/contact', 'API\ContactController@store');
    $router->get('/products', 'API\ProductController@index');
});
```

### 5.3 Sistema de Templates com Twig

**Problema Atual:** HTML misturado com PHP em todos os arquivos
**Solução:** Separação completa com template engine

**Layout Principal (resources/views/layouts/main.twig):**
```twig
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>{{ seo.title }}</title>
    <meta name="description" content="{{ seo.description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ seo.canonical }}">
    
    <!-- CSS -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
        {{ seo.structured_data|raw }}
    </script>
    
    <!-- Google Tag Manager -->
    {{ gtm_head|raw }}
</head>
<body>
    {{ gtm_body|raw }}
    
    <header>
        {% include 'components/header.twig' %}
    </header>
    
    <main>
        {% block content %}{% endblock %}
    </main>
    
    <footer>
        {% include 'components/footer.twig' %}
    </footer>
    
    <!-- JavaScript -->
    <script src="{{ asset('js/app.min.js') }}"></script>
    {% block scripts %}{% endblock %}
</body>
</html>
```

**Página de Produto (resources/views/pages/product.twig):**
```twig
{% extends 'layouts/main.twig' %}

{% block content %}
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/produtos">Produtos</a></li>
            <li class="breadcrumb-item active">{{ product.name }}</li>
        </ol>
    </nav>
    
    <div class="row">
        <div class="col-md-8">
            <h1>{{ product.name }}</h1>
            <div class="product-content">
                {{ product.description|raw }}
            </div>
            
            {% if product.specifications %}
            <div class="specifications">
                <h2>Especificações Técnicas</h2>
                <table class="table table-striped">
                    {% for spec in product.specifications %}
                    <tr>
                        <td><strong>{{ spec.name }}</strong></td>
                        <td>{{ spec.value }}</td>
                    </tr>
                    {% endfor %}
                </table>
            </div>
            {% endif %}
        </div>
        
        <div class="col-md-4">
            {% include 'components/contact-form.twig' %}
        </div>
    </div>
</div>
{% endblock %}
```

### 5.4 Sistema de Gerenciamento de Conteúdo

**Implementação de CMS Simples:**
```php
<?php
class ContentManager {
    private $db;
    
    public function __construct($database) {
        $this->db = $database;
    }
    
    public function getPage($slug) {
        $stmt = $this->db->prepare("
            SELECT * FROM pages 
            WHERE slug = ? AND status = 'published'
        ");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getProduct($slug) {
        $stmt = $this->db->prepare("
            SELECT p.*, c.name as category_name 
            FROM products p 
            LEFT JOIN categories c ON p.category_id = c.id 
            WHERE p.slug = ? AND p.status = 'active'
        ");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updatePageSEO($pageId, $seoData) {
        $stmt = $this->db->prepare("
            UPDATE pages SET 
                meta_title = ?, 
                meta_description = ?, 
                meta_keywords = ?,
                updated_at = NOW()
            WHERE id = ?
        ");
        return $stmt->execute([
            $seoData['title'],
            $seoData['description'],
            $seoData['keywords'],
            $pageId
        ]);
    }
}
```

## 6. Modernização de CSS e Frontend

### 6.1 Migração do Bootstrap e Sistema de Design

**Problema Atual:** Bootstrap 3.3.1 (2014) + 8.747 estilos inline
**Solução:** Bootstrap 5.3 + Sistema de Design Customizado

**Estrutura SCSS Proposta:**
```scss
// resources/scss/main.scss
@import 'variables';
@import 'bootstrap/bootstrap';
@import 'components/buttons';
@import 'components/forms';
@import 'components/cards';
@import 'layout/header';
@import 'layout/footer';
@import 'pages/home';
@import 'pages/products';
```

**Variáveis Customizadas (resources/scss/_variables.scss):**
```scss
// Cores da marca
$primary: #ff8000;
$secondary: #333333;
$success: #28a745;
$info: #17a2b8;
$warning: #ffc107;
$danger: #dc3545;

// Tipografia
$font-family-base: 'Lato', sans-serif;
$font-size-base: 1rem;
$line-height-base: 1.6;

// Breakpoints customizados
$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
);

// Espaçamentos
$spacer: 1rem;
$spacers: (
  0: 0,
  1: $spacer * .25,
  2: $spacer * .5,
  3: $spacer,
  4: $spacer * 1.5,
  5: $spacer * 3,
  6: $spacer * 4
);
```

### 6.2 Sistema de Build Moderno

**Webpack Configuration (webpack.config.js):**
```javascript
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
    entry: {
        app: './resources/js/main.js',
        admin: './resources/js/admin.js'
    },
    output: {
        path: path.resolve(__dirname, 'public/assets'),
        filename: 'js/[name].min.js',
        publicPath: '/assets/'
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.(png|jpg|gif|svg)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: 'images/[name].[ext]',
                            publicPath: '/assets/'
                        }
                    }
                ]
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].min.css'
        })
    ],
    optimization: {
        minimizer: [
            new TerserPlugin(),
            new OptimizeCSSAssetsPlugin()
        ]
    }
};
```

### 6.3 Otimização de Imagens

**Sistema de Otimização Automática:**
```php
<?php
class ImageOptimizer {
    private $uploadPath;
    private $optimizedPath;
    
    public function __construct($uploadPath, $optimizedPath) {
        $this->uploadPath = $uploadPath;
        $this->optimizedPath = $optimizedPath;
    }
    
    public function optimizeImage($filename) {
        $originalPath = $this->uploadPath . '/' . $filename;
        $optimizedPath = $this->optimizedPath . '/' . $filename;
        
        // Criar versões responsivas
        $this->createResponsiveVersions($originalPath, $filename);
        
        // Converter para WebP se suportado
        if (function_exists('imagewebp')) {
            $this->convertToWebP($originalPath, $filename);
        }
        
        return true;
    }
    
    private function createResponsiveVersions($originalPath, $filename) {
        $sizes = [
            'thumb' => 150,
            'small' => 300,
            'medium' => 600,
            'large' => 1200
        ];
        
        foreach ($sizes as $size => $width) {
            $this->resizeImage($originalPath, $filename, $size, $width);
        }
    }
    
    private function convertToWebP($originalPath, $filename) {
        $webpPath = $this->optimizedPath . '/' . pathinfo($filename, PATHINFO_FILENAME) . '.webp';
        
        $image = imagecreatefromjpeg($originalPath);
        imagewebp($image, $webpPath, 80);
        imagedestroy($image);
    }
}
```


## 7. Guia de Boas Práticas e Implementação

### 7.1 Cronograma de Implementação

**Fase 1: Preparação e Infraestrutura (Semanas 1-2)**

**Semana 1:**
- [ ] Backup completo do site atual
- [ ] Configuração de ambiente de desenvolvimento local
- [ ] Instalação do PHP 8.2+ no servidor de desenvolvimento
- [ ] Configuração do Composer e dependências iniciais
- [ ] Setup do Git e versionamento

**Semana 2:**
- [ ] Configuração do Webpack e sistema de build
- [ ] Migração do Bootstrap 3.3.1 para 5.3
- [ ] Criação da estrutura de diretórios nova
- [ ] Configuração inicial do Twig
- [ ] Setup do sistema de cache (Redis)

**Fase 2: Migração de Conteúdo (Semanas 3-4)**

**Semana 3:**
- [ ] Criação do banco de dados para CMS
- [ ] Migração do conteúdo estático para templates Twig
- [ ] Implementação do sistema de roteamento
- [ ] Migração das páginas principais (home, empresa, contato)

**Semana 4:**
- [ ] Migração das páginas de produtos
- [ ] Implementação do sistema de URLs canônicas
- [ ] Configuração de redirects 301 para URLs antigas
- [ ] Testes de compatibilidade e SEO

**Fase 3: Formulários e Segurança (Semanas 5-6)**

**Semana 5:**
- [ ] Implementação do formulário unificado
- [ ] Sistema de validação e sanitização
- [ ] Configuração do PHPMailer com SMTP
- [ ] Implementação de proteção CSRF

**Semana 6:**
- [ ] Sistema de logs estruturado
- [ ] Implementação de rate limiting
- [ ] Testes de segurança e penetração
- [ ] Configuração de monitoramento

**Fase 4: SEO e Performance (Semanas 7-8)**

**Semana 7:**
- [ ] Implementação de meta tags dinâmicas
- [ ] Sistema de dados estruturados (Schema.org)
- [ ] Otimização de imagens e lazy loading
- [ ] Configuração de compressão GZIP

**Semana 8:**
- [ ] Implementação de cache multicamadas
- [ ] Otimização de Core Web Vitals
- [ ] Geração automática de sitemap
- [ ] Testes de performance e SEO

**Fase 5: Painel Administrativo (Semanas 9-10)**

**Semana 9:**
- [ ] Desenvolvimento do dashboard administrativo
- [ ] Sistema de autenticação e autorização
- [ ] Interface de gestão de conteúdo
- [ ] Sistema de gestão de leads

**Semana 10:**
- [ ] Relatórios e analytics
- [ ] Sistema de backup automático
- [ ] Configuração de alertas e monitoramento
- [ ] Treinamento da equipe

### 7.2 Padrões de Código e Convenções

**PSR Standards Obrigatórios:**
```php
<?php
// PSR-1: Basic Coding Standard
// PSR-4: Autoloader
// PSR-12: Extended Coding Style

namespace MIB\Controllers;

use MIB\Services\EmailService;
use MIB\Models\Contact;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ContactController
{
    private EmailService $emailService;
    private Contact $contactModel;
    
    public function __construct(EmailService $emailService, Contact $contactModel)
    {
        $this->emailService = $emailService;
        $this->contactModel = $contactModel;
    }
    
    public function store(ServerRequestInterface $request): ResponseInterface
    {
        $data = $request->getParsedBody();
        
        // Validação
        $validator = new ContactValidator();
        $errors = $validator->validate($data);
        
        if (!empty($errors)) {
            return $this->jsonResponse(['errors' => $errors], 422);
        }
        
        // Processamento
        try {
            $contact = $this->contactModel->create($data);
            $this->emailService->sendContactNotification($contact);
            
            return $this->jsonResponse([
                'success' => true,
                'message' => 'Mensagem enviada com sucesso!'
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erro ao processar contato', [
                'error' => $e->getMessage(),
                'data' => $data
            ]);
            
            return $this->jsonResponse([
                'success' => false,
                'message' => 'Erro interno. Tente novamente.'
            ], 500);
        }
    }
}
```

**Convenções de Nomenclatura:**
- Classes: PascalCase (`ContactController`, `EmailService`)
- Métodos: camelCase (`sendEmail`, `validateInput`)
- Variáveis: camelCase (`$userData`, `$emailAddress`)
- Constantes: UPPER_SNAKE_CASE (`MAX_FILE_SIZE`, `DEFAULT_CACHE_TTL`)
- Arquivos: kebab-case (`contact-form.twig`, `email-service.php`)

### 7.3 Sistema de Monitoramento e Logs

**Implementação de Logging Estruturado:**
```php
<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\JsonFormatter;

class LogManager
{
    private static $loggers = [];
    
    public static function getLogger($channel = 'app')
    {
        if (!isset(self::$loggers[$channel])) {
            self::$loggers[$channel] = self::createLogger($channel);
        }
        
        return self::$loggers[$channel];
    }
    
    private static function createLogger($channel)
    {
        $logger = new Logger($channel);
        
        // Handler para arquivo rotativo
        $fileHandler = new RotatingFileHandler(
            __DIR__ . "/../storage/logs/{$channel}.log",
            0,
            Logger::DEBUG
        );
        $fileHandler->setFormatter(new JsonFormatter());
        
        // Handler para erros críticos
        $errorHandler = new StreamHandler(
            __DIR__ . "/../storage/logs/errors.log",
            Logger::ERROR
        );
        
        $logger->pushHandler($fileHandler);
        $logger->pushHandler($errorHandler);
        
        return $logger;
    }
}

// Uso nos controllers
class ContactController
{
    private $logger;
    
    public function __construct()
    {
        $this->logger = LogManager::getLogger('contact');
    }
    
    public function store($request)
    {
        $this->logger->info('Novo contato recebido', [
            'ip' => $request->getClientIp(),
            'user_agent' => $request->headers->get('User-Agent'),
            'data' => $request->all()
        ]);
        
        // ... processamento
    }
}
```

**Dashboard de Monitoramento:**
```php
<?php
class MonitoringDashboard
{
    public function getSystemHealth()
    {
        return [
            'php_version' => PHP_VERSION,
            'memory_usage' => memory_get_usage(true),
            'disk_space' => disk_free_space('/'),
            'cache_status' => $this->getCacheStatus(),
            'database_status' => $this->getDatabaseStatus(),
            'last_errors' => $this->getRecentErrors(),
            'performance_metrics' => $this->getPerformanceMetrics()
        ];
    }
    
    private function getCacheStatus()
    {
        try {
            $redis = new Redis();
            $redis->connect('127.0.0.1', 6379);
            $info = $redis->info();
            return [
                'status' => 'connected',
                'memory_usage' => $info['used_memory_human'],
                'connected_clients' => $info['connected_clients']
            ];
        } catch (Exception $e) {
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }
    
    private function getPerformanceMetrics()
    {
        $logFile = __DIR__ . '/../storage/logs/performance.log';
        if (!file_exists($logFile)) {
            return [];
        }
        
        $lines = file($logFile, FILE_IGNORE_NEW_LINES);
        $metrics = [];
        
        foreach (array_slice($lines, -100) as $line) {
            $data = json_decode($line, true);
            if ($data && isset($data['response_time'])) {
                $metrics[] = $data['response_time'];
            }
        }
        
        return [
            'avg_response_time' => array_sum($metrics) / count($metrics),
            'max_response_time' => max($metrics),
            'min_response_time' => min($metrics)
        ];
    }
}
```

### 7.4 Testes e Qualidade de Código

**Estrutura de Testes:**
```php
<?php
// tests/Unit/ContactValidatorTest.php
use PHPUnit\Framework\TestCase;
use MIB\Validators\ContactValidator;

class ContactValidatorTest extends TestCase
{
    private $validator;
    
    protected function setUp(): void
    {
        $this->validator = new ContactValidator();
    }
    
    public function testValidContactData()
    {
        $data = [
            'nome' => 'João Silva',
            'email' => 'joao@empresa.com',
            'telefone' => '11999999999',
            'assunto' => 'Orçamento',
            'mensagem' => 'Gostaria de um orçamento para mangueiras tipo 2.'
        ];
        
        $errors = $this->validator->validate($data);
        $this->assertEmpty($errors);
    }
    
    public function testInvalidEmail()
    {
        $data = [
            'nome' => 'João Silva',
            'email' => 'email-invalido',
            'telefone' => '11999999999',
            'assunto' => 'Orçamento',
            'mensagem' => 'Mensagem de teste.'
        ];
        
        $errors = $this->validator->validate($data);
        $this->assertArrayHasKey('email', $errors);
    }
    
    public function testRequiredFields()
    {
        $data = [];
        
        $errors = $this->validator->validate($data);
        $this->assertArrayHasKey('nome', $errors);
        $this->assertArrayHasKey('email', $errors);
        $this->assertArrayHasKey('telefone', $errors);
    }
}
```

**Configuração do PHPUnit (phpunit.xml):**
```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php"
         colors="true"
         convertErrorsToExceptions="true"
         convertNoticesToExceptions="true"
         convertWarningsToExceptions="true"
         processIsolation="false"
         stopOnFailure="false">
    <testsuites>
        <testsuite name="Unit">
            <directory suffix="Test.php">./tests/Unit</directory>
        </testsuite>
        <testsuite name="Feature">
            <directory suffix="Test.php">./tests/Feature</directory>
        </testsuite>
    </testsuites>
    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">./app</directory>
        </whitelist>
    </filter>
</phpunit>
```

### 7.5 Configuração de Produção

**Configuração do Apache (.htaccess):**
```apache
# public/.htaccess
RewriteEngine On

# Redirect para HTTPS
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

# Compressão GZIP
<IfModule mod_deflate.c>
    AddOutputFilterByType DEFLATE text/plain
    AddOutputFilterByType DEFLATE text/html
    AddOutputFilterByType DEFLATE text/xml
    AddOutputFilterByType DEFLATE text/css
    AddOutputFilterByType DEFLATE application/xml
    AddOutputFilterByType DEFLATE application/xhtml+xml
    AddOutputFilterByType DEFLATE application/rss+xml
    AddOutputFilterByType DEFLATE application/javascript
    AddOutputFilterByType DEFLATE application/x-javascript
</IfModule>

# Cache Headers
<IfModule mod_expires.c>
    ExpiresActive on
    ExpiresByType text/css "access plus 1 year"
    ExpiresByType application/javascript "access plus 1 year"
    ExpiresByType image/png "access plus 1 year"
    ExpiresByType image/jpg "access plus 1 year"
    ExpiresByType image/jpeg "access plus 1 year"
    ExpiresByType image/gif "access plus 1 year"
    ExpiresByType image/webp "access plus 1 year"
</IfModule>

# Roteamento
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]

# Segurança
<Files ".env">
    Order allow,deny
    Deny from all
</Files>

# Prevent access to sensitive files
<FilesMatch "\.(htaccess|htpasswd|ini|log|sh|inc|bak)$">
    Order Allow,Deny
    Deny from all
</FilesMatch>
```

**Configuração de Ambiente (.env):**
```env
# Aplicação
APP_ENV=production
APP_DEBUG=false
APP_URL=https://www.mangueirasdeincendiobrasil.com.br

# Banco de Dados
DB_HOST=localhost
DB_NAME=mib_website
DB_USER=mib_user
DB_PASS=senha_segura

# Cache
CACHE_DRIVER=redis
REDIS_HOST=127.0.0.1
REDIS_PORT=6379

# Email
MAIL_DRIVER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=587
MAIL_USERNAME=contato@mangueirasdeincendiobrasil.com.br
MAIL_PASSWORD=senha_email
MAIL_FROM_ADDRESS=contato@mangueirasdeincendiobrasil.com.br
MAIL_FROM_NAME="MIB - Mangueiras de Incêndio Brasil"

# Analytics
GOOGLE_ANALYTICS_ID=GTM-WZKDXGP
GOOGLE_TAG_MANAGER_ID=GTM-WZKDXGP

# Segurança
SESSION_LIFETIME=120
CSRF_TOKEN_LIFETIME=3600
```

### 7.6 Checklist de Lançamento

**Pré-Lançamento:**
- [ ] Todos os testes unitários passando
- [ ] Testes de performance realizados
- [ ] Backup completo do site atual
- [ ] Configuração de monitoramento ativa
- [ ] SSL configurado e funcionando
- [ ] Redirects 301 testados
- [ ] Sitemap atualizado e submetido
- [ ] Google Analytics configurado

**Pós-Lançamento:**
- [ ] Monitoramento de erros 404
- [ ] Verificação de indexação no Google
- [ ] Testes de formulários em produção
- [ ] Verificação de performance
- [ ] Backup automático configurado
- [ ] Documentação atualizada
- [ ] Treinamento da equipe concluído

## 8. ROI e Benefícios Esperados

### 8.1 Melhorias Quantificáveis

**Performance:**
- Redução de 60% no tempo de carregamento (de ~3s para ~1.2s)
- Melhoria de 40 pontos no Google PageSpeed Insights
- Redução de 50% no bounce rate

**SEO:**
- Aumento de 30-50% no tráfego orgânico em 6 meses
- Melhoria de 25% na taxa de conversão de leads
- Aumento de 40% na visibilidade para palavras-chave principais

**Manutenção:**
- Redução de 70% no tempo para atualizações de conteúdo
- Diminuição de 80% em bugs relacionados a formulários
- Redução de 60% no tempo de desenvolvimento de novas funcionalidades

### 8.2 Investimento Total

**Desenvolvimento:** R$ 25.000 - R$ 35.000
**Ferramentas e Licenças:** R$ 2.400/ano
**Hospedagem Otimizada:** R$ 1.800/ano
**Manutenção:** R$ 8.000/ano

**Total Primeiro Ano:** R$ 37.200 - R$ 47.200
**Total Anos Subsequentes:** R$ 12.200/ano

### 8.3 Cronograma de Retorno

**Mês 1-2:** Implementação e migração
**Mês 3-4:** Otimizações e ajustes finos
**Mês 5-6:** Primeiros resultados de SEO visíveis
**Mês 7-12:** ROI positivo através de aumento de leads

---

**Documento preparado em:** Agosto 2025  
**Versão:** 1.0  
**Próxima revisão:** Após aprovação do plano

