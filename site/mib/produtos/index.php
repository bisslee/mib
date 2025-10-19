<?php
/**
 * Página Principal de Produtos - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Produtos para Equipamentos Contra Incêndio - MIB São Paulo',
    'description' => 'Produtos certificados para combate a incêndio: abrigos, adaptadores Storz, armários, bicos, caixas, gabinetes. Preço de fábrica. Entrega SP ✆ (11) 94025-8669 | MIB Brasil',
    'keywords' => 'Produtos, Equipamentos Contra Incêndio, Abrigos, Adaptadores, Armários, Bicos, Caixas, Gabinetes, Storz, MIB, São Paulo',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'active' => true]
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
                    <h1 class="page-title">Produtos para Equipamentos Contra Incêndio - MIB Brasil</h1>
                    <p class="page-subtitle">Conheça nossa linha completa de produtos para equipamentos contra incêndio</p>
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
                        <h2 class="section-title">Nossos Produtos</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Oferecemos uma linha completa de produtos para equipamentos contra incêndio, desenvolvidos com qualidade e seguindo as normas técnicas vigentes.
                                </p>
                            </div>
                        </div>

                        <!-- Grid de Produtos -->
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Abrigos</h5>
                                        <p class="card-text">Abrigos para equipamentos contra incêndio que conservam e protegem os equipamentos das intempéries.</p>
                                        <a href="abrigos-para-equipamentos-contra-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Adaptadores</h5>
                                        <p class="card-text">Adaptadores para mangueiras de incêndio com diferentes conexões e especificações técnicas.</p>
                                        <a href="adaptador-para-mangueira-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Armários</h5>
                                        <p class="card-text">Armários para armazenamento e proteção de mangueiras de incêndio.</p>
                                        <a href="armario-para-mangueira-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Bicos e Esguichos</h5>
                                        <p class="card-text">Bicos e esguichos para mangueiras de incêndio com diferentes tipos e aplicações.</p>
                                        <a href="bico-para-mangueira-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Caixas</h5>
                                        <p class="card-text">Caixas e gabinetes para armazenamento de equipamentos contra incêndio.</p>
                                        <a href="caixas-para-equipamentos-contra-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Conjuntos</h5>
                                        <p class="card-text">Conjuntos completos de mangueiras de incêndio com todos os acessórios necessários.</p>
                                        <a href="conjunto-da-mangueira-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Gabinetes para Hidrantes</h5>
                                        <p class="card-text">Gabinetes para proteção e armazenamento de hidrantes contra incêndio.</p>
                                        <a href="gabinete-para-hidrante.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Líquido Gerador de Espuma</h5>
                                        <p class="card-text">Líquidos geradores de espuma para sistemas de combate a incêndio.</p>
                                        <a href="liquido-gerador-de-espuma.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Material de Combate</h5>
                                        <p class="card-text">Materiais diversos para combate a incêndio e segurança.</p>
                                        <a href="material-de-combate-a-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Placas de Sinalização</h5>
                                        <p class="card-text">Placas de sinalização para equipamentos contra incêndio e emergência.</p>
                                        <a href="placas-de-sinalizacao.php" class="btn btn-primary">Saiba Mais</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Válvulas</h5>
                                        <p class="card-text">Válvulas para sistemas de combate a incêndio e hidrantes.</p>
                                        <a href="valvulas.php" class="btn btn-primary">Saiba Mais</a>
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
