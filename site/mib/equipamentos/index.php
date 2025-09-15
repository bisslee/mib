<?php
/**
 * Página Principal de Equipamentos - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Equipamentos Contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Equipamentos contra incêndio certificados ABNT. Mangueiras, extintores, esguichos, hidrantes e sistemas de combate a incêndio.',
    'keywords' => 'Equipamentos Contra Incêndio, Mangueiras, Extintores, Esguichos, Hidrantes, Canhão Monitor, Sistema Aerossol, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/equipamentos/'
];

// Identificar página atual para menu ativo
$current_page = 'equipamentos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Equipamentos', 'active' => true]
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
                    <h1 class="page-title">Equipamentos Contra Incêndio</h1>
                    <p class="page-subtitle">Equipamentos certificados ABNT para proteção contra incêndios</p>
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
                        <h2 class="section-title">Nossos Equipamentos</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    💡 A MIB oferece uma linha completa de equipamentos contra incêndio certificados ABNT e Inmetro para máxima segurança e proteção.
                                </p>
                            </div>
                        </div>

                        <!-- Grid de Equipamentos -->
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Mangueiras de Incêndio</h5>
                                        <p class="card-text">Mangueiras certificadas ABNT NBR 11861, tipos 1 a 5, em diversos comprimentos.</p>
                                        <a href="mangueiras-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Extintores de Incêndio</h5>
                                        <p class="card-text">Extintores portáteis e sobre rodas para diferentes tipos de incêndio.</p>
                                        <a href="extintores-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Esguichos</h5>
                                        <p class="card-text">Esguichos reguláveis e bicos para mangueiras de incêndio.</p>
                                        <a href="esguichos-para-equipamentos-contra-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Canhão Monitor</h5>
                                        <p class="card-text">Canhões monitor para combate a incêndio em grandes áreas.</p>
                                        <a href="canhao-monitor-de-combate-a-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Derivante para Mangueira</h5>
                                        <p class="card-text">Derivantes para conexão de múltiplas mangueiras de incêndio.</p>
                                        <a href="derivante-para-mangueira-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Sistema Aerossol</h5>
                                        <p class="card-text">Sistema aerossol de supressão a incêndio para proteção automática.</p>
                                        <a href="sistema-aerossol-de-supressao-a-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Hidrantes</h5>
                                        <p class="card-text">Hidrantes contra incêndio para sistemas de proteção predial.</p>
                                        <a href="hidrante-contra-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
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
