<?php

/**
 * Header Component - MIB Site
 * Incluído em todas as páginas
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($page_config['description'] ?? $site_config['description'] ?? ''); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_config['keywords'] ?? $site_config['keywords'] ?? ''); ?>">
    <meta name="author" content="<?php echo htmlspecialchars($page_config['author'] ?? $site_config['author'] ?? 'MIB - Mangueiras de Incêndio Brasil'); ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo htmlspecialchars($page_config['canonical'] ?? $site_config['canonical'] ?? ''); ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_config['title'] ?? $site_config['title'] ?? ''); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_config['description'] ?? $site_config['description'] ?? ''); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_config['canonical'] ?? $site_config['canonical'] ?? ''); ?>">
    <meta property="og:image" content="<?php echo $site_config['base_url']; ?>/assets/img/logo-tagline.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_config['title'] ?? $site_config['title'] ?? ''); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_config['description'] ?? $site_config['description'] ?? ''); ?>">

    <title><?php echo htmlspecialchars($page_config['title'] ?? $site_config['title'] ?? 'MIB - Mangueiras de Incêndio Brasil'); ?></title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo $site_config['base_url']; ?>/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site_config['base_url']; ?>/favicon_io/apple-touch-icon.png">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo $site_config['base_url']; ?>/assets/css/style.css" rel="stylesheet">

    <!-- Schema.org -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "MIB - Mangueiras de Incêndio Brasil",
            "url": "https://mangueirasdeincendiobrasil.com.br",
            "logo": "https://mangueirasdeincendiobrasil.com.br/assets/img/logo-tagline.png",
            "description": "Especialistas em equipamentos contra incêndio e mangueiras de segurança",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "São Paulo",
                "addressRegion": "SP",
                "addressCountry": "BR"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+55-11-4442-3565",
                "contactType": "customer service",
                "email": "contato@mangueirasdeincendiobrasil.com.br"
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
                                <a href="tel:1144423565">11 4442-3565</a> /
                                <a href="tel:11940258669">11 94025-8669</a>
                            </span>
                            <span class="contact-item">
                                <i class="fas fa-envelope me-2"></i>
                                <a href="mailto:contato@mangueirasdeincendiobrasil.com.br">contato@mangueirasdeincendiobrasil.com.br</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-social text-md-end">
                            <a href="#" class="social-link" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <!-- <a href="#" class="social-link" title="Bluesky">
                                <i class="fa-brands fa-bluesky"></i>
                            </a> -->
                            <a href="#" class="social-link" title="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#" class="social-link" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="social-link" title="TikTok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="#" class="social-link" title="LinkedIn">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://wa.me/5511940258669?text=Olá! Gostaria de informações sobre equipamentos contra incêndio." target="_blank" class="social-link" title="WhatsApp">
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
                                <?php include __DIR__ . '/informacoes-tecnicas.php'; ?>
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