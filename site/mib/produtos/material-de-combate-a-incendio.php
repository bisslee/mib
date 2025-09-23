<?php
/**
 * Página de Material de Combate a Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Material de Combate a Incêndio Certificado ABNT - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Materiais diversos para combate a incêndio e segurança certificados ABNT. Acessórios e equipamentos complementares para sistemas de proteção. MIB São Paulo.',
    'keywords' => 'Material São Paulo, Combate Incêndio SP, Segurança, Equipamentos Contra Incêndio, MIB, material certificado ABNT, acessórios incêndio, equipamentos proteção',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/material-de-combate-a-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Material de Combate a Incêndio', 'active' => true]
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
                    <h1 class="page-title">Material de Combate a Incêndio</h1>
                    <p class="page-subtitle">Materiais diversos para combate a incêndio e segurança</p>
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
                        <h2 class="section-title">Material de Combate a Incêndio</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Materiais diversos para combate a incêndio e segurança.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                            <img class="img-fluid" src="/assets/img/old-site/material-de-combate-a-incendio.jpg" alt="Material de Combate a Incêndio" title="Material de Combate a Incêndio" style="margin:0px auto;">
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
