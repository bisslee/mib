<?php
/**
 * Página de Todos os Links - MIB Site
 * Lista completa de todas as páginas do sistema organizadas por categorias
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Todos os Links - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Lista completa de todas as páginas do site MIB - Mangueiras de Incêndio Brasil, organizadas por categorias.',
    'keywords' => 'links, páginas, site, MIB, mangueiras de incêndio, equipamentos contra incêndio',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/all-links.php'
];

// Identificar página atual para menu ativo
$current_page = 'all-links';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Todos os Links', 'active' => true]
];

// Incluir header
include 'includes/header.php';

// Incluir breadcrumb
include 'includes/breadcrumb.php';
?>

    <!-- Hero Section da Página -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Todos os Links</h1>
                    <p class="page-subtitle">Lista completa de todas as páginas do site MIB</p>
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
                        <h2 class="section-title">Navegação Completa do Site</h2>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    Esta página contém todos os links do site MIB organizados por categorias para facilitar a navegação e indexação.
                                </p>
                            </div>
                        </div>

                        <!-- Categoria Geral -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="category-title">
                                    <i class="fas fa-home text-primary me-2"></i>
                                    Geral
                                </h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="index.php" class="link-item">
                                                <i class="fas fa-home"></i>
                                                <span>Página Inicial</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="empresa.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>Empresa</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="contact.php" class="link-item">
                                                <i class="fas fa-envelope"></i>
                                                <span>Contato</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="privacy.php" class="link-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>Política de Privacidade</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categoria Novidades -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="category-title">
                                    <i class="fas fa-star text-warning me-2"></i>
                                    Novidades
                                </h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="novidades/" class="link-item">
                                                <i class="fas fa-newspaper"></i>
                                                <span>Novidades em Equipamentos</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categoria Equipamentos -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="category-title">
                                    <i class="fas fa-fire-extinguisher text-danger me-2"></i>
                                    Equipamentos
                                </h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/" class="link-item">
                                                <i class="fas fa-list"></i>
                                                <span>Página Principal</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/mangueiras-de-incendio.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>Mangueiras de Incêndio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/extintores-de-incendio.php" class="link-item">
                                                <i class="fas fa-fire-extinguisher"></i>
                                                <span>Extintores de Incêndio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/esguichos-para-equipamentos-contra-incendio.php" class="link-item">
                                                <i class="fas fa-spray-can"></i>
                                                <span>Esguichos</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/canhao-monitor-de-combate-a-incendio.php" class="link-item">
                                                <i class="fas fa-crosshairs"></i>
                                                <span>Canhão Monitor</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/derivante-para-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-code-branch"></i>
                                                <span>Derivante para Mangueira</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/sistema-aerossol-de-supressao-a-incendio.php" class="link-item">
                                                <i class="fas fa-cloud"></i>
                                                <span>Sistema Aerossol</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="equipamentos/hidrante-contra-incendio.php" class="link-item">
                                                <i class="fas fa-tint"></i>
                                                <span>Hidrantes</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categoria Produtos -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="category-title">
                                    <i class="fas fa-box text-success me-2"></i>
                                    Produtos
                                </h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/" class="link-item">
                                                <i class="fas fa-list"></i>
                                                <span>Página Principal</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/abrigos-para-equipamentos-contra-incendio.php" class="link-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>Abrigos</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/adaptador-para-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-plug"></i>
                                                <span>Adaptadores</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/armario-para-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-archive"></i>
                                                <span>Armários</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/bico-para-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-spray-can"></i>
                                                <span>Bicos e Esguichos</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/caixas-para-equipamentos-contra-incendio.php" class="link-item">
                                                <i class="fas fa-box"></i>
                                                <span>Caixas</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/conjunto-da-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-puzzle-piece"></i>
                                                <span>Conjuntos</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/gabinete-para-hidrante.php" class="link-item">
                                                <i class="fas fa-cabinet-filing"></i>
                                                <span>Gabinetes para Hidrantes</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/liquido-gerador-de-espuma.php" class="link-item">
                                                <i class="fas fa-flask"></i>
                                                <span>Líquido Gerador de Espuma</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/material-de-combate-a-incendio.php" class="link-item">
                                                <i class="fas fa-tools"></i>
                                                <span>Material de Combate</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/placas-de-sinalizacao.php" class="link-item">
                                                <i class="fas fa-sign"></i>
                                                <span>Placas de Sinalização</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="produtos/valvulas.php" class="link-item">
                                                <i class="fas fa-valve"></i>
                                                <span>Válvulas</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Categoria Informações Técnicas -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <h3 class="category-title">
                                    <i class="fas fa-info-circle text-info me-2"></i>
                                    Informações Técnicas
                                </h3>
                                <div class="row">
                                    <!-- Páginas Principais de Informações Técnicas -->
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/luzes-de-emergencia-led.php" class="link-item">
                                                <i class="fas fa-lightbulb"></i>
                                                <span>Luz de Emergência LED</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/informacoes-tecnicas-mangueiras-incendio.php" class="link-item">
                                                <i class="fas fa-info"></i>
                                                <span>Informações Técnicas de Mangueiras</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-tips"></i>
                                                <span>Dicas para Conservação</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php" class="link-item">
                                                <i class="fas fa-industry"></i>
                                                <span>Fabricante em São Paulo</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/mangueiras-de-incendio-certificada.php" class="link-item">
                                                <i class="fas fa-certificate"></i>
                                                <span>Mangueiras Certificadas</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/mangueiras-de-incendio-na-grande-sp.php" class="link-item">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Mangueiras na Grande SP</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/mangueiras-de-incendio-para-area-residencial.php" class="link-item">
                                                <i class="fas fa-home"></i>
                                                <span>Para Área Residencial</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/validade-da-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Validade da Mangueira</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/inspecao-de-equipamentos-de-combate-a-incendio.php" class="link-item">
                                                <i class="fas fa-search"></i>
                                                <span>Inspeção de Equipamentos</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="informacoes-tecnicas/mangueira-de-incendio-para-condominio.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>Para Condomínio</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Páginas Antigas (Old Pages) - Informações Técnicas -->
                                <div class="alert alert-info mt-4">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Páginas Antigas de Informações Técnicas:</strong> 
                                    Todas as páginas numeradas de 11 a 102 do menu "Informações Técnicas" estão listadas abaixo.
                                </div>
                                
                                <div class="row">
                                    <!-- Páginas 11-20 -->
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/o-que-e-avcb-corpo-de-bombeiros.php" class="link-item">
                                                <i class="fas fa-file-alt"></i>
                                                <span>11- O que é AVCB</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/tipos-de-mangueira-de-combate-a-incendio.php" class="link-item">
                                                <i class="fas fa-list"></i>
                                                <span>12- Tipos de Mangueiras</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/tampa-de-incendio-para-recalque.php" class="link-item">
                                                <i class="fas fa-circle"></i>
                                                <span>13- Tampa de Incêndio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/placas-de-sinalizacao-fotoluminescente.php" class="link-item">
                                                <i class="fas fa-sign"></i>
                                                <span>14- Placas Fotoluminescentes</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/chave-storz-para-mangueira-de-hidrante.php" class="link-item">
                                                <i class="fas fa-key"></i>
                                                <span>15- Chave Storz</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/adaptador-storz-para-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-plug"></i>
                                                <span>16- Adaptador Storz</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/fabricacao-de-mangueiras-de-incendio.php" class="link-item">
                                                <i class="fas fa-industry"></i>
                                                <span>17- Fabricação de Mangueiras</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/abrigos-para-extintores-e-mangueira-de-incendio-em-fibra.php" class="link-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>18- Abrigos em Fibra</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueiras-de-incendio-fabricada-conforme-nbr.php" class="link-item">
                                                <i class="fas fa-certificate"></i>
                                                <span>19- Mangueiras NBR</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/informacao-sobre-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-info-circle"></i>
                                                <span>20- Info sobre Mangueiras</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Páginas 21-40 -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/modelos-de-mangueiras-de-incendio.php" class="link-item">
                                                <i class="fas fa-list"></i>
                                                <span>21- Modelos de Mangueiras</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/fornecedor-de-mangueira-de-combate-a-incendio.php" class="link-item">
                                                <i class="fas fa-truck"></i>
                                                <span>22- Fornecedor de Mangueiras</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/como-indentificar-a-melhor-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-search"></i>
                                                <span>23- Como Identificar Melhor</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/comprar-equipamentos-contra-incendio.php" class="link-item">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>24- Como Comprar Equipamentos</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/comprar-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-shopping-bag"></i>
                                                <span>25- Comprar Mangueira</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/esguicho-regulavel-em-aluminio.php" class="link-item">
                                                <i class="fas fa-spray-can"></i>
                                                <span>26- Esguicho Regulável Alumínio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-co2-6-kg.php" class="link-item">
                                                <i class="fas fa-fire-extinguisher"></i>
                                                <span>27- Extintor CO2 6Kg</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-de-agua-pressurizada-10-litros.php" class="link-item">
                                                <i class="fas fa-tint"></i>
                                                <span>28- Extintor Água 10L</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-de-espuma-mecanica-10-litros.php" class="link-item">
                                                <i class="fas fa-cloud"></i>
                                                <span>29- Extintor Espuma 10L</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-po-9-kg.php" class="link-item">
                                                <i class="fas fa-fire"></i>
                                                <span>30- Extintor Pó ABC 9Kg</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-po-quimico-abc.php" class="link-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>31- Extintor Pó Químico ABC</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-po-quimico-bc.php" class="link-item">
                                                <i class="fas fa-fire-extinguisher"></i>
                                                <span>32- Extintor Pó Químico BC</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-sobre-rodas-agua-pressurizada-75-litros.php" class="link-item">
                                                <i class="fas fa-wheelchair"></i>
                                                <span>33- Extintor Sobre Rodas 75L</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-sobre-rodas-espuma-mecanica-50-litros.php" class="link-item">
                                                <i class="fas fa-truck"></i>
                                                <span>34- Extintor Sobre Rodas 50L</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-sobre-rodas-po-quimico-abc.php" class="link-item">
                                                <i class="fas fa-dolly"></i>
                                                <span>35- Extintor Sobre Rodas Pó</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-incendio-cm-couto.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>36- Mangueiras CM Couto</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/informacoes-sobre-extintores-de-incendio.php" class="link-item">
                                                <i class="fas fa-info"></i>
                                                <span>37- Info sobre Extintores</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-tipo-6-litros.php" class="link-item">
                                                <i class="fas fa-fire-extinguisher"></i>
                                                <span>38- Extintor Tipo K 6L</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/tipos-de-extintores-de-incendio.php" class="link-item">
                                                <i class="fas fa-list"></i>
                                                <span>39- Tipos de Extintores</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/informacoes-sobre-mangueiras-de-incendio-nbr.php" class="link-item">
                                                <i class="fas fa-certificate"></i>
                                                <span>40- Info Mangueiras NBR</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Páginas 41-60 -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-incendio-coutoflex.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>41- Mangueiras Coutoflex</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-bombeiro.php" class="link-item">
                                                <i class="fas fa-firefighter"></i>
                                                <span>42- Mangueira de Bombeiro</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/onde-comprar-mangueira.php" class="link-item">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>43- Onde Comprar Mangueira</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/como-entender-preco-extintor.php" class="link-item">
                                                <i class="fas fa-calculator"></i>
                                                <span>44- Entender Preço Extintor</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/encontre-tudo-aqui.php" class="link-item">
                                                <i class="fas fa-store"></i>
                                                <span>45- Encontre Tudo Aqui</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-novo.php" class="link-item">
                                                <i class="fas fa-star"></i>
                                                <span>46- Extintor Novo</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/fabricante-extintor.php" class="link-item">
                                                <i class="fas fa-industry"></i>
                                                <span>47- Fabricante Extintor</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/melhor-preco-de-mangueira.php" class="link-item">
                                                <i class="fas fa-dollar-sign"></i>
                                                <span>48- Melhor Preço Mangueira</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/onde-comprar-mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>49- Onde Comprar Mangueira</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-tipo-1.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>50- Mangueira Tipo 1</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/melhor-preco-extintor-encontrar.php" class="link-item">
                                                <i class="fas fa-search-dollar"></i>
                                                <span>51- Melhor Preço Extintor</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/bola-extintor-fireball.php" class="link-item">
                                                <i class="fas fa-circle"></i>
                                                <span>52- Bola Extintora Fireball</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangotinho-1-polegada.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>53- Mangotinho 1 Polegada</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-1-15m-para-condominio.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>54- Mangueira 1 15m Condomínio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-1-30m-para-condominio.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>55- Mangueira 1 30m Condomínio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mmangueira-de-incendio-2-15m.php" class="link-item">
                                                <i class="fas fa-industry"></i>
                                                <span>56- Mangueira 2 15m</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-incendio-2-30m.php" class="link-item">
                                                <i class="fas fa-industry"></i>
                                                <span>57- Mangueira 2 30m</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/equipamento-contra-incendio-para-condominio.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>58- Equipamentos Condomínio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/liquido-gerador-espuma.php" class="link-item">
                                                <i class="fas fa-flask"></i>
                                                <span>59- Líquido Gerador Espuma</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/carretel-mangotinho.php" class="link-item">
                                                <i class="fas fa-circle"></i>
                                                <span>60- Carretel Mangotinho</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Páginas 61-80 -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/canhao-monitor-fixo.php" class="link-item">
                                                <i class="fas fa-crosshairs"></i>
                                                <span>61- Canhão Monitor Fixo</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/abrigo-para-mangueiras-de-incendio.php" class="link-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>62- Abrigo Mangueiras</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/valvula-para-hidrante--registro-globo.php" class="link-item">
                                                <i class="fas fa-valve"></i>
                                                <span>63- Válvula Hidrante</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueiras-tipo-1-protecao-eficaz.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>64- Mangueira Tipo 1 Proteção</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-tipo-2-protecao-de-alta-performance.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>65- Mangueira Tipo 2 Alta Performance</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-tipo-4-solucao-robustez.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>66- Mangueira Tipo 4 Robustez</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-tipo-5-solucao-completa-para-ambientes-de-alto-risco.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>67- Mangueira Tipo 5 Alto Risco</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-tipo-3-solucao-ideal-para-ambientes-navais.php" class="link-item">
                                                <i class="fas fa-ship"></i>
                                                <span>68- Mangueira Tipo 3 Navais</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/equipamento-contra-incendio-para-condominio.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>69- Equipamentos Condomínio BS</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/protetores-de-coluna-cantoneiras-lombadas-protetores-de-choque.php" class="link-item">
                                                <i class="fas fa-shield-alt"></i>
                                                <span>70- Protetores Colunas</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/euipamento-contra-incendio-melhor-escolha.php" class="link-item">
                                                <i class="fas fa-fire-extinguisher"></i>
                                                <span>71- Equipamentos Melhor Escolha</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-incendio.php" class="link-item">
                                                <i class="fas fa-hose"></i>
                                                <span>72- Mangueira de Incêndio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-bombeiro.php" class="link-item">
                                                <i class="fas fa-firefighter"></i>
                                                <span>73- Mangueira de Bombeiro</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-hidrante.php" class="link-item">
                                                <i class="fas fa-tint"></i>
                                                <span>74- Mangueira de Hidrante</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-incendio-predial.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>75- Mangueira Predial</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/mangueira-de-Incêndio-para-prédios.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>76- Mangueira para Prédios</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/onde-comprar-mangueira-de-incendio-predial.php" class="link-item">
                                                <i class="fas fa-shopping-cart"></i>
                                                <span>77- Onde Comprar Predial</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/comprar-mangueira-de-incendio-1.php" class="link-item">
                                                <i class="fas fa-shopping-bag"></i>
                                                <span>78- Comprar Mangueira Garantia</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-empresas.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>79- Extintor para Empresas</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-portatil-1.php" class="link-item">
                                                <i class="fas fa-fire-extinguisher"></i>
                                                <span>80- Extintor Portátil</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Páginas 81-102 -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-condominio.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>81- Extintor Condomínio</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-empresas.php" class="link-item">
                                                <i class="fas fa-building"></i>
                                                <span>82- Extintor Empresas</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-industria.php" class="link-item">
                                                <i class="fas fa-industry"></i>
                                                <span>83- Extintor Indústria</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-residencia.php" class="link-item">
                                                <i class="fas fa-home"></i>
                                                <span>84- Extintor Residência</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo.php" class="link-item">
                                                <i class="fas fa-car"></i>
                                                <span>85- Extintor Veículo</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-1.php" class="link-item">
                                                <i class="fas fa-truck"></i>
                                                <span>86- Extintor Veículo 1</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-2.php" class="link-item">
                                                <i class="fas fa-bus"></i>
                                                <span>87- Extintor Veículo 2</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-3.php" class="link-item">
                                                <i class="fas fa-motorcycle"></i>
                                                <span>88- Extintor Veículo 3</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-4.php" class="link-item">
                                                <i class="fas fa-ship"></i>
                                                <span>89- Extintor Veículo 4</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-5.php" class="link-item">
                                                <i class="fas fa-plane"></i>
                                                <span>90- Extintor Veículo 5</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-6.php" class="link-item">
                                                <i class="fas fa-train"></i>
                                                <span>91- Extintor Veículo 6</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-7.php" class="link-item">
                                                <i class="fas fa-helicopter"></i>
                                                <span>92- Extintor Veículo 7</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-8.php" class="link-item">
                                                <i class="fas fa-tractor"></i>
                                                <span>93- Extintor Veículo 8</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-9.php" class="link-item">
                                                <i class="fas fa-bicycle"></i>
                                                <span>94- Extintor Veículo 9</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-10.php" class="link-item">
                                                <i class="fas fa-motorcycle"></i>
                                                <span>95- Extintor Veículo 10</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-11.php" class="link-item">
                                                <i class="fas fa-car"></i>
                                                <span>96- Extintor Veículo 11</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-12.php" class="link-item">
                                                <i class="fas fa-truck"></i>
                                                <span>97- Extintor Veículo 12</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-13.php" class="link-item">
                                                <i class="fas fa-bus"></i>
                                                <span>98- Extintor Veículo 13</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-14.php" class="link-item">
                                                <i class="fas fa-ship"></i>
                                                <span>99- Extintor Veículo 14</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-15.php" class="link-item">
                                                <i class="fas fa-plane"></i>
                                                <span>100- Extintor Veículo 15</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-16.php" class="link-item">
                                                <i class="fas fa-train"></i>
                                                <span>101- Extintor Veículo 16</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="link-card">
                                            <a href="old-pages/extintor-de-incendio-para-veiculo-17.php" class="link-item">
                                                <i class="fas fa-helicopter"></i>
                                                <span>102- Extintor Veículo 17</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Mostrar total de páginas de informações técnicas -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="alert alert-light">
                                            <i class="fas fa-info-circle me-2"></i>
                                            <strong>Total de páginas de Informações Técnicas:</strong> 102 páginas (10 principais + 92 páginas antigas).
                                            <br>
                                            <small class="text-muted">Para ver todas as páginas, consulte o menu "Informações Técnicas" no cabeçalho do site.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Estatísticas do Site -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <h3 class="category-title">
                                    <i class="fas fa-chart-bar text-primary me-2"></i>
                                    Estatísticas do Site
                                </h3>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="stat-card">
                                            <div class="stat-number">4</div>
                                            <div class="stat-label">Páginas Gerais</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="stat-card">
                                            <div class="stat-number">1</div>
                                            <div class="stat-label">Seção Novidades</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="stat-card">
                                            <div class="stat-number">8</div>
                                            <div class="stat-label">Equipamentos</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="stat-card">
                                            <div class="stat-number">12</div>
                                            <div class="stat-label">Produtos</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="stat-card">
                                            <div class="stat-number">102</div>
                                            <div class="stat-label">Informações Técnicas</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                        <div class="stat-card">
                                            <div class="stat-number">127</div>
                                            <div class="stat-label">Total de Páginas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <a href="contact.php" class="btn btn-primary btn-lg">Entre em Contato</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
// Incluir footer
include 'includes/footer.php';
?>
