<?php
/**
 * Página de Conjunto da Mangueira de Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Conjunto da Mangueira de Incêndio Certificado ABNT - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Conjuntos completos de mangueiras de incêndio com todos os acessórios necessários certificados ABNT. Kit completo para combate a incêndio. MIB São Paulo.',
    'keywords' => 'Conjunto São Paulo, Mangueira Incêndio SP, Acessórios, Equipamentos Contra Incêndio, MIB, conjunto certificado ABNT, kit mangueira, acessórios incêndio',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/conjunto-da-mangueira-de-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Conjunto da Mangueira de Incêndio', 'active' => true]
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
                    <h1 class="page-title">Conjunto da Mangueira de Incêndio Certificado ABNT - MIB Brasil</h1>
                    <p class="page-subtitle">Conjuntos completos de mangueiras de incêndio com todos os acessórios necessários</p>
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
                        <h2 class="section-title">Conjunto da Mangueira - Especificações Técnicas</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Conjuntos completos de mangueiras de incêndio com todos os acessórios necessários.
                                </p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                            <img class="img-responsive" src="/assets/img/old-site/conjunto-da-mangueira-de-incendio.jpg" alt="Conjunto da Mangueira de Incêndio" title="Conjunto da Mangueira de Incêndio" style="margin:0px auto;">
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
