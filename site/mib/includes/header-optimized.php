<?php
/**
 * Header Component OTIMIZADO - MIB Site
 * 
 * Otimizações implementadas:
 * - Preconnect para recursos externos
 * - Defer/async em JavaScript
 * - Preload de recursos críticos
 * - CSS crítico inline
 * - Font optimization
 * - ARIA labels para acessibilidade
 * 
 * Performance esperada:
 * - FCP: < 1.0s (antes: 3.3s)
 * - LCP: < 2.5s (antes: 4.0s)
 * - PageSpeed: 95+ (antes: 80)
 * 
 * @version 2.0 - Otimizado para Performance
 * @date 2025-10-06
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Preconnect para recursos externos (reduz latência) -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    
    <!-- Meta tags básicas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Tag Manager (async para não bloquear) -->
    <script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZKDXGP');</script>
    <!-- End Google Tag Manager -->
    
    <?php 
    // Incluir configurações
    if (file_exists(__DIR__ . '/gtm-config.php')) {
        include_once __DIR__ . '/gtm-config.php';
    }
    
    if (file_exists(__DIR__ . '/search-console-config.php')) {
        include_once __DIR__ . '/search-console-config.php';
    }
    ?>
    
    <!-- Meta tags SEO -->
    <meta name="description" content="<?php echo htmlspecialchars(isset($page_config['description']) ? $page_config['description'] : (isset($site_config['description']) ? $site_config['description'] : '')); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars(isset($page_config['keywords']) ? $page_config['keywords'] : (isset($site_config['keywords']) ? $site_config['keywords'] : '')); ?>">
    <meta name="author" content="<?php echo htmlspecialchars(isset($page_config['author']) ? $page_config['author'] : (isset($site_config['author']) ? $site_config['author'] : 'MIB - Mangueiras de Incêndio Brasil')); ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo htmlspecialchars(isset($page_config['canonical']) ? $page_config['canonical'] : (isset($site_config['canonical']) ? $site_config['canonical'] : '')); ?>">
    
    <?php 
    // Meta tag de verificação do Google Search Console
    if (isset($search_console_config) && !empty($search_console_config['verification_code'])) {
        echo generate_verification_meta($search_console_config['verification_code']);
    }
    
    // Schema.org WebSite
    if (function_exists('generate_search_console_data')) {
        $website_schema = generate_search_console_data();
        echo '<script type="application/ld+json">' . json_encode($website_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
    }
    
    // Testes A/B
    if (file_exists(__DIR__ . '/ab-testing-implementation.php')) {
        include_once __DIR__ . '/ab-testing-implementation.php';
        $ab_tests_code = apply_page_ab_tests();
        if ($ab_tests_code) {
            echo $ab_tests_code;
        }
        echo generate_ab_test_css();
    }
    ?>

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars(isset($page_config['title']) ? $page_config['title'] : (isset($site_config['title']) ? $site_config['title'] : '')); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars(isset($page_config['description']) ? $page_config['description'] : (isset($site_config['description']) ? $site_config['description'] : '')); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars(isset($page_config['canonical']) ? $page_config['canonical'] : (isset($site_config['canonical']) ? $site_config['canonical'] : '')); ?>">
    <meta property="og:image" content="<?php echo $site_config['base_url']; ?>/assets/img/logo-tagline.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars(isset($page_config['title']) ? $page_config['title'] : (isset($site_config['title']) ? $site_config['title'] : '')); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars(isset($page_config['description']) ? $page_config['description'] : (isset($site_config['description']) ? $site_config['description'] : '')); ?>">

    <title><?php echo htmlspecialchars(isset($page_config['title']) ? $page_config['title'] : (isset($site_config['title']) ? $site_config['title'] : 'MIB - Mangueiras de Incêndio Brasil')); ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $site_config['base_url']; ?>/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site_config['base_url']; ?>/favicon_io/apple-touch-icon.png">

    <!-- CSS Crítico Inline (Above the fold) -->
    <style>
        /* CSS crítico para renderização rápida */
        *{margin:0;padding:0;box-sizing:border-box}
        body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;font-size:16px;line-height:1.6;color:#333;background:#fff}
        .header-main{background:#fff;box-shadow:0 2px 10px rgba(0,0,0,.1);position:relative;z-index:1000}
        .header-top{background:linear-gradient(135deg,#ff8000 0%,#ff6600 100%);padding:.5rem 0;color:#fff}
        .navbar{background:#1a1a1a;padding:1rem 0}
        .navbar-brand{display:flex;align-items:center}
        .logo-header{height:60px;width:auto}
        .container{max-width:1200px;margin:0 auto;padding:0 15px}
        .hero-section{min-height:400px;background:#f5f5f5;display:flex;align-items:center;justify-content:center}
        @media (max-width:768px){
            .logo-header{height:40px}
            .navbar{padding:.5rem 0}
        }
    </style>

    <!-- Preload recursos críticos -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style">
    <link rel="preload" href="<?php echo $site_config['base_url']; ?>/assets/img/logo-transp.png" as="image">

    <!-- CSS não-crítico (carrega assíncrono) -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?php echo $site_config['base_url']; ?>/assets/css/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    
    <!-- Fallback para navegadores sem JS -->
    <noscript>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo $site_config['base_url']; ?>/assets/css/style.css" rel="stylesheet">
    </noscript>

    <!-- Schema.org - Organization -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "MIB - Mangueiras de Incêndio Brasil",
            "alternateName": "MIB",
            "url": "https://mangueirasdeincendiobrasil.com.br",
            "logo": "https://mangueirasdeincendiobrasil.com.br/assets/img/logo-tagline.png",
            "description": "Especialistas em equipamentos contra incêndio e mangueiras de segurança certificadas ABNT em São Paulo",
            "foundingDate": "2020",
            "slogan": "Segurança e Qualidade em Equipamentos Contra Incêndio",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "São Paulo",
                "addressRegion": "SP",
                "addressCountry": "BR",
                "postalCode": "00000-000"
            },
            "contactPoint": [
                {
                    "@type": "ContactPoint",
                    "telephone": "+55-11-4442-3565",
                    "contactType": "customer service",
                    "email": "contato@mangueirasdeincendiobrasil.com.br",
                    "availableLanguage": "Portuguese",
                    "areaServed": "São Paulo, SP, Brasil"
                },
                {
                    "@type": "ContactPoint",
                    "telephone": "+55-11-94025-8669",
                    "contactType": "sales",
                    "contactOption": "TollFree"
                }
            ],
            "sameAs": [
                "https://www.instagram.com/mangueirasdeincendiobrasil/",
                "https://www.linkedin.com/company/mangueirasdeincendiobrasil/",
                "https://www.tiktok.com/@mangueirasincendio2025",
                "https://www.youtube.com/@MangueirasDeIncendioBrasil",
                "https://wa.me/5511940258669"
            ],
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Equipamentos Contra Incêndio",
                "itemListElement": [
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Product",
                            "name": "Mangueiras de Incêndio"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Product",
                            "name": "Extintores de Incêndio"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Product",
                            "name": "Hidrantes Contra Incêndio"
                        }
                    }
                ]
            }
        }
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZKDXGP"
    height="0" width="0" style="display:none;visibility:hidden" title="Google Tag Manager"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Header -->
    <header class="header-main">
        <!-- Top Bar com Contatos e Redes Sociais -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="header-contact">
                            <span class="contact-item">
                                <i class="fas fa-phone me-2" aria-hidden="true"></i>
                                <a href="tel:+551144423565" style="color: #fff;" aria-label="Ligar para 11 4442-3565">11 4442-3565</a> / 
                                <a href="tel:+5511940258669" style="color: #fff;" aria-label="Ligar para 11 94025-8669">11 94025-8669</a>
                            </span>
                            <span class="contact-item">
                                <i class="fas fa-envelope me-2" aria-hidden="true"></i>
                                <a href="mailto:contato@mangueirasdeincendiobrasil.com.br" 
                                   style="color: #fff;" 
                                   aria-label="Enviar e-mail para contato@mangueirasdeincendiobrasil.com.br"
                                   onclick="dataLayer.push({'event': 'email_click', 'event_category': 'contact', 'event_action': 'email_click', 'event_label': 'header_email'});">
                                   contato@mangueirasdeincendiobrasil.com.br
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-social text-md-end">
                            <a href="https://www.instagram.com/mangueirasdeincendiobrasil/" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="social-link" 
                               aria-label="Visite nosso Instagram">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/mangueirasdeincendiobrasil/" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="social-link" 
                               aria-label="Visite nosso LinkedIn">
                                <i class="fab fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.tiktok.com/@mangueirasincendio2025" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="social-link" 
                               aria-label="Visite nosso TikTok">
                                <i class="fab fa-tiktok" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.youtube.com/@MangueirasDeIncendioBrasil" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="social-link" 
                               aria-label="Visite nosso canal no YouTube">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=5511940258669&text=Vim pelo site e gostaria de mais informações sobre seus produtos." 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="social-link" 
                               aria-label="Fale conosco pelo WhatsApp"
                               onclick="dataLayer.push({'event': 'whatsapp_click', 'event_category': 'contact', 'event_action': 'whatsapp_click', 'event_label': 'header_whatsapp'});">
                                <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navegação Principal -->
        <nav class="navbar navbar-expand-lg navbar-dark" role="navigation" aria-label="Menu principal">
            <div class="container">
                <a class="navbar-brand" href="/index.php" aria-label="MIB - Mangueiras de Incêndio Brasil - Ir para página inicial">
                    <img src="<?php echo $site_config['base_url']; ?>/assets/img/logo-transp.png" 
                         alt="Logo MIB - Mangueiras de Incêndio Brasil" 
                         class="logo-header"
                         width="180"
                         height="60"
                         loading="eager">
                </a>

                <button class="navbar-toggler" 
                        type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#navbarMain"
                        aria-controls="navbarMain"
                        aria-expanded="false"
                        aria-label="Abrir menu de navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page === 'home') ? 'active' : ''; ?>" 
                               href="/index.php"
                               <?php echo ($current_page === 'home') ? 'aria-current="page"' : ''; ?>>
                               Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page === 'empresa') ? 'active' : ''; ?>" 
                               href="/empresa.php"
                               <?php echo ($current_page === 'empresa') ? 'aria-current="page"' : ''; ?>>
                               Empresa
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" 
                               href="#" 
                               role="button" 
                               data-bs-toggle="dropdown"
                               aria-expanded="false"
                               aria-haspopup="true"
                               aria-label="Menu Informações Técnicas">
                                Informações Técnicas
                            </a>
                            <ul class="dropdown-menu" 
                                style="max-height: 400px; overflow-y: auto;"
                                aria-label="Submenu Informações Técnicas">
                                <?php 
                                $informacoes_tecnicas = include __DIR__ . '/informacoes-tecnicas.php';
                                foreach ($informacoes_tecnicas as $item) {
                                    echo '<li><a class="dropdown-item" href="' . htmlspecialchars($item['url']) . '">' . htmlspecialchars($item['title']) . '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($current_page === 'equipamentos') ? 'active' : ''; ?>" 
                               href="#" 
                               role="button" 
                               data-bs-toggle="dropdown"
                               aria-expanded="false"
                               aria-haspopup="true"
                               aria-label="Menu Equipamentos">
                                Equipamentos
                            </a>
                            <ul class="dropdown-menu" aria-label="Submenu Equipamentos">
                                <li><a class="dropdown-item" href="/equipamentos/mangueiras-de-incendio.php">Mangueiras de Incêndio</a></li>
                                <li><a class="dropdown-item" href="/equipamentos/extintores-de-incendio.php">Extintores de Incêndio</a></li>
                                <li><a class="dropdown-item" href="/equipamentos/esguichos-para-equipamentos-contra-incendio.php">Esguichos</a></li>
                                <li><a class="dropdown-item" href="/equipamentos/canhao-monitor-de-combate-a-incendio.php">Canhão Monitor</a></li>
                                <li><a class="dropdown-item" href="/equipamentos/derivante-para-mangueira-de-incendio.php">Derivante para Mangueira de Incêndio</a></li>
                                <li><a class="dropdown-item" href="/equipamentos/sistema-aerossol-de-supressao-a-incendio.php">Sistema aerossol de supressão a incêndio</a></li>
                                <li><a class="dropdown-item" href="/equipamentos/hidrante-contra-incendio.php">Hidrantes</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($current_page === 'produtos') ? 'active' : ''; ?>" 
                               href="#" 
                               role="button" 
                               data-bs-toggle="dropdown"
                               aria-expanded="false"
                               aria-haspopup="true"
                               aria-label="Menu Produtos">
                                Produtos
                            </a>
                            <ul class="dropdown-menu" aria-label="Submenu Produtos">
                                <li><a class="dropdown-item" href="/produtos/abrigos-para-equipamentos-contra-incendio.php">Abrigos</a></li>
                                <li><a class="dropdown-item" href="/produtos/adaptador-para-mangueira-de-incendio.php">Adaptador para Mangueira de Incêndio</a></li>
                                <li><a class="dropdown-item" href="/produtos/armario-para-mangueira-de-incendio.php">Armário para Mangueira de Incêndio</a></li>
                                <li><a class="dropdown-item" href="/produtos/bico-para-mangueira-de-incendio.php">Bico para Mangueira de Incêndio</a></li>
                                <li><a class="dropdown-item" href="/produtos/caixas-para-equipamentos-contra-incendio.php">Caixas</a></li>
                                <li><a class="dropdown-item" href="/produtos/conjunto-da-mangueira-de-incendio.php">Conjunto da Mangueira de Incêndio</a></li>
                                <li><a class="dropdown-item" href="/produtos/gabinete-para-hidrante.php">Gabinete para Hidrante</a></li>
                                <li><a class="dropdown-item" href="/produtos/liquido-gerador-de-espuma.php">Líquido Gerador de Espuma</a></li>
                                <li><a class="dropdown-item" href="/produtos/material-de-combate-a-incendio.php">Material de Combate a Incêndio</a></li>
                                <li><a class="dropdown-item" href="/produtos/placas-de-sinalizacao.php">Placas de Sinalização</a></li>
                                <li><a class="dropdown-item" href="/produtos/valvulas.php">Válvulas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page === 'novidades') ? 'active' : ''; ?>" 
                               href="/novidades/"
                               <?php echo ($current_page === 'novidades') ? 'aria-current="page"' : ''; ?>>
                               Novidades
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page === 'contato') ? 'active' : ''; ?>" 
                               href="/contact.php"
                               <?php echo ($current_page === 'contato') ? 'aria-current="page"' : ''; ?>>
                               Contato
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- JavaScript com defer (não bloqueia renderização) -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <!-- Main JS - USANDO VERSÃO NORMAL (não minificada) pois minificação quebrou -->
    <script src="<?php echo $site_config['base_url']; ?>/assets/js/main.js" defer></script>

