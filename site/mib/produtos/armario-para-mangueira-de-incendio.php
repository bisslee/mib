<?php

/**
 * Página de Armário para Mangueira de Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Armário para Mangueira de Incêndio Certificado ABNT - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Armários para armazenamento e proteção de mangueiras de incêndio certificados ABNT. Proteção contra intempéries e fácil acesso. MIB São Paulo.',
    'keywords' => 'Armário São Paulo, Mangueira Incêndio SP, Armazenamento, Equipamentos Contra Incêndio, MIB, armário certificado ABNT, proteção mangueira, armazenamento equipamentos',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/armario-para-mangueira-de-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Armário para Mangueira de Incêndio', 'active' => true]
];

// Incluir header
include '../includes/header.php';

// Incluir breadcrumb
include '../includes/breadcrumb.php';
?>

<!-- Hero Section da Página -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Armário para Mangueira de Incêndio Certificado ABNT - MIB Brasil</h1>
                <p class="page-subtitle">Armários para armazenamento e proteção de mangueiras de incêndio</p>
            </div>
        </div>
    </div>
</section>

<!-- Conteúdo Principal -->
<main id="main-content">
    <!-- Seção de Conteúdo -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Armário para Mangueira - Especificações Técnicas</h2>

                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="lead">
                                Armários para armazenamento e proteção de mangueiras de incêndio.
                            </p>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <img class="img-fluid" src="/assets/img/old-site/armario-para-mangueira-de-incendio.jpg" alt="Armário para Mangueira de Incêndio" title="Armário para Mangueira de Incêndio" style="margin:0px auto;">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <a href="../contact.php" class="btn btn-primary btn-lg">Solicite um Orçamento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Incluir footer
include '../includes/footer.php';
?>