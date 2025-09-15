<?php
/**
 * Página de Abrigos para Equipamentos Contra Incêndio - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Abrigos para Equipamentos Contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Abrigos para equipamentos contra incêndio são importantes pois conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo.',
    'keywords' => 'Abrigos, Equipamentos Contra Incêndio, Extintores, Hidrantes, Mangueiras, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/produtos/abrigos-para-equipamentos-contra-incendio.php'
];

// Identificar página atual para menu ativo
$current_page = 'produtos';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Produtos', 'url' => '/produtos/'],
    ['text' => 'Abrigos para Equipamentos Contra Incêndio', 'active' => true]
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
                    <h1 class="page-title">Abrigos para Equipamentos Contra Incêndio</h1>
                    <p class="page-subtitle">Conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo</p>
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
                        <h2 class="section-title">Abrigos para Equipamentos Contra Incêndio</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Os Abrigos para equipamentos contra incêndio são importantes pois, conservam todos os equipamentos dentro de sua caixa, preservando das intempéries do tempo. Temos vários tipos de abrigos tais como: abrigos para extintores de incêndio, abrigos para hidrantes e abrigos para mangueiras de incêndio.
                                </p>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
                                <h3 class="section-subtitle">Modelo Industrial</h3>
                                <p>Fabricado em aço carbono, 1010 - 1020 com acabamento em pintura epóxi, na cor vermelha padrão bombeiro. Porta dotada de trinco, visor para vidro e veneziana de ventilação.</p>
                                
                                <h4>Especificações:</h4>
                                <ul>
                                    <li><strong>Modelo:</strong> 2 Portas</li>
                                    <li><strong>Mangueira:</strong> Ø: 1.1/2" ou 2.1/2"</li>
                                    <li><strong>Comprimento:</strong> 30m</li>
                                    <li><strong>Quantidade:</strong> 4</li>
                                    <li><strong>Suporte Tipo:</strong> 1/2 Lua ou Basculante</li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
                                <div class="product-image">
                                    <img src="../assets/img/old-site/abrigo-industrial.jpg" 
                                         alt="Abrigo Modelo Industrial" 
                                         title="Abrigo Modelo Industrial"
                                         class="img-fluid rounded shadow" />
                                </div>
                            </div>
                        </div>

                        <h3 class="section-subtitle">Modelos Disponíveis</h3>
                        
                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Abrigo para Extintor</h5>
                                        <img src="../assets/img/old-site/abrigo-para-extintor-de-incendio.jpg" 
                                             alt="Abrigo para Extintor de Incêndio" 
                                             class="img-fluid mb-3 rounded">
                                        <p class="card-text">Modelo para extintores pó químico 4,6,8, 12 Kg e água 10 litros</p>
                                        <p><strong>Medidas:</strong> 75 altura x 30 largura x 25 de profundidade cm</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Abrigo para Hidrante</h5>
                                        <img src="../assets/img/old-site/abrigo-para-hidrante.jpg" 
                                             alt="Abrigo para Hidrante" 
                                             class="img-fluid mb-3 rounded">
                                        <p class="card-text">Abrigo específico para hidrantes contra incêndio</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Abrigo para Mangueira</h5>
                                        <img src="../assets/img/old-site/abrigo-para-mangueira-de-incendio.jpg" 
                                             alt="Abrigo para Mangueira de Incêndio" 
                                             class="img-fluid mb-3 rounded">
                                        <p class="card-text">Abrigo para mangueiras de incêndio</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-12">
                                <h4>Modelo para Extintor de CO2 6Kg</h4>
                                <p><strong>Medidas:</strong> 85 altura x 40 largura x 30 profundidade cm</p>
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
