<?php

/**
 * Header Component - MIB Site
 * Incluído em todas as páginas
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZKDXGP');</script>
    <!-- End Google Tag Manager -->
    
        <?php 
        // Incluir configurações do GTM
        if (file_exists(__DIR__ . '/gtm-config.php')) {
            include_once __DIR__ . '/gtm-config.php';
        }
        
        // Incluir configurações do Search Console
        if (file_exists(__DIR__ . '/search-console-config.php')) {
            include_once __DIR__ . '/search-console-config.php';
        }
        ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        
        // Schema.org WebSite para Search Console
        if (function_exists('generate_search_console_data')) {
            $website_schema = generate_search_console_data();
            echo '<script type="application/ld+json">' . json_encode($website_schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
        }
        
        // Incluir sistema de Testes A/B
        if (file_exists(__DIR__ . '/ab-testing-implementation.php')) {
            include_once __DIR__ . '/ab-testing-implementation.php';
            
            // Aplicar testes A/B na página atual
            $ab_tests_code = apply_page_ab_tests();
            if ($ab_tests_code) {
                echo $ab_tests_code;
            }
            
            // Adicionar CSS para testes A/B
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

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $site_config['base_url']; ?>/assets/css/style.css" rel="stylesheet">

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
    <!-- Header -->
    <header class="header-main">
        <!-- Top Bar com Contatos e Redes Sociais -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="header-contact">
                            <span class="contact-item">
                                <i class="fas fa-phone me-2"></i>
                                11 4442-3565 / 11 94025-8669
                            </span>
                            <span class="contact-item">
                                <i class="fas fa-envelope me-2"></i>
                                <a href="mailto:contato@mangueirasdeincendiobrasil.com.br" style="color: #fff;" onclick="dataLayer.push({'event': 'email_click', 'event_category': 'contact', 'event_action': 'email_click', 'event_label': 'header_email'});">contato@mangueirasdeincendiobrasil.com.br</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-social text-md-end">
                            <a href="https://www.instagram.com/mangueirasdeincendiobrasil/" target="_blank" class="social-link" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/mangueirasdeincendiobrasil/" target="_blank" class="social-link" title="LinkedIn">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.tiktok.com/@mangueirasincendio2025" target="_blank" class="social-link" title="TikTok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="https://www.youtube.com/@MangueirasDeIncendioBrasil" target="_blank" class="social-link" title="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <!-- Links comentados para atualização futura -->
                            <!-- <a href="#" target="_blank" class="social-link" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a> -->
                            <!-- <a href="#" target="_blank" class="social-link" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a> -->
                            <a href="https://api.whatsapp.com/send?phone=5511940258669&text=Vim pelo site e gostaria de mais informações sobre seus produtos." target="_blank" class="social-link" title="WhatsApp" onclick="dataLayer.push({'event': 'whatsapp_click', 'event_category': 'contact', 'event_action': 'whatsapp_click', 'event_label': 'header_whatsapp'});">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navegação Principal -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/index.php">
                    <img src="<?php echo $site_config['base_url']; ?>/assets/img/logo-transp.png" alt="MIB - Mangueiras de Incêndio Brasil" class="logo-header">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page === 'home') ? 'active' : ''; ?>" href="/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page === 'empresa') ? 'active' : ''; ?>" href="/empresa.php">Empresa</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Informações Técnicas
                            </a>
                            <ul class="dropdown-menu" style="max-height: 400px; overflow-y: auto;">
                                <?php 
                                // Incluir o array de informações técnicas
                                include __DIR__ . '/informacoes-tecnicas.php';

                                // Gerar os links dinamicamente usando o array
                                foreach ($informacoes_tecnicas as $item) {
                                    echo '<li><a class="dropdown-item" href="' . htmlspecialchars($item['url']) . '">' . htmlspecialchars($item['title']) . '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($current_page === 'equipamentos') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                                Equipamentos
                            </a>
                            <ul class="dropdown-menu">
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
                            <a class="nav-link dropdown-toggle <?php echo ($current_page === 'produtos') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                                Produtos
                            </a>
                            <ul class="dropdown-menu">
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
                            <a class="nav-link <?php echo ($current_page === 'novidades') ? 'active' : ''; ?>" href="/novidades/">Novidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page === 'contato') ? 'active' : ''; ?>" href="/contact.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>