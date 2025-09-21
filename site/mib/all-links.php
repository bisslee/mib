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

// Função para definir ícone baseado no título da página
function getIconForPage($title) {
    // Ícones específicos para páginas principais
    if (strpos($title, 'Luz') !== false || strpos($title, 'LED') !== false) {
        return 'fas fa-lightbulb';
    } elseif (strpos($title, 'Dicas') !== false) {
        return 'fas fa-hand-holding-heart';
    } elseif (strpos($title, 'Fabricante') !== false) {
        return 'fas fa-industry';
    } elseif (strpos($title, 'certificada') !== false) {
        return 'fas fa-certificate';
    } elseif (strpos($title, 'São Paulo') !== false || strpos($title, 'grande') !== false) {
        return 'fas fa-map-marker-alt';
    } elseif (strpos($title, 'residencial') !== false) {
        return 'fas fa-home';
    } elseif (strpos($title, 'Validade') !== false) {
        return 'fas fa-calendar-alt';
    } elseif (strpos($title, 'Inspeção') !== false) {
        return 'fas fa-search';
    } elseif (strpos($title, 'condomínio') !== false || strpos($title, 'Condomínio') !== false) {
        return 'fas fa-building';
    }
    
    // Ícones para páginas antigas baseados no conteúdo
    elseif (strpos($title, 'Mangueira') !== false) {
        return 'fas fa-hose';
    } elseif (strpos($title, 'Extintor') !== false) {
        return 'fas fa-fire-extinguisher';
    } elseif (strpos($title, 'Esguicho') !== false) {
        return 'fas fa-spray-can';
    } elseif (strpos($title, 'Abrigo') !== false) {
        return 'fas fa-shield-alt';
    } elseif (strpos($title, 'Válvula') !== false) {
        return 'fas fa-valve';
    } elseif (strpos($title, 'Preço') !== false) {
        return 'fas fa-dollar-sign';
    } elseif (strpos($title, 'Equipamento') !== false) {
        return 'fas fa-tools';
    } elseif (strpos($title, 'Carretel') !== false) {
        return 'fas fa-circle';
    } elseif (strpos($title, 'Canhão') !== false) {
        return 'fas fa-crosshairs';
    } elseif (strpos($title, 'Placa') !== false) {
        return 'fas fa-sign';
    } elseif (strpos($title, 'Adaptador') !== false) {
        return 'fas fa-plug';
    } elseif (strpos($title, 'Hospital') !== false) {
        return 'fas fa-hospital';
    } elseif (strpos($title, 'AVCB') !== false) {
        return 'fas fa-file-alt';
    } elseif (strpos($title, 'Tampa') !== false) {
        return 'fas fa-circle';
    } elseif (strpos($title, 'Chave') !== false) {
        return 'fas fa-key';
    }
    
    // Ícone padrão
    return 'fas fa-file-alt';
}

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
                                        <a href="/index.php" class="link-item">
                                            <i class="fas fa-home"></i>
                                            <span>Página Inicial</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/empresa.php" class="link-item">
                                            <i class="fas fa-building"></i>
                                            <span>Empresa</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/contact.php" class="link-item">
                                            <i class="fas fa-envelope"></i>
                                            <span>Contato</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/privacy.php" class="link-item">
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
                                        <a href="/novidades/" class="link-item">
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
                                        <a href="//equipamentos/" class="link-item">
                                            <i class="fas fa-list"></i>
                                            <span>Página Principal</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="//equipamentos/mangueiras-de-incendio.php" class="link-item">
                                            <i class="fas fa-hose"></i>
                                            <span>Mangueiras de Incêndio</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/equipamentos/extintores-de-incendio.php" class="link-item">
                                            <i class="fas fa-fire-extinguisher"></i>
                                            <span>Extintores de Incêndio</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/equipamentos/esguichos-para-equipamentos-contra-incendio.php" class="link-item">
                                            <i class="fas fa-spray-can"></i>
                                            <span>Esguichos</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/equipamentos/canhao-monitor-de-combate-a-incendio.php" class="link-item">
                                            <i class="fas fa-crosshairs"></i>
                                            <span>Canhão Monitor</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/equipamentos/derivante-para-mangueira-de-incendio.php" class="link-item">
                                            <i class="fas fa-code-branch"></i>
                                            <span>Derivante para Mangueira</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/equipamentos/sistema-aerossol-de-supressao-a-incendio.php" class="link-item">
                                            <i class="fas fa-cloud"></i>
                                            <span>Sistema Aerossol</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/equipamentos/hidrante-contra-incendio.php" class="link-item">
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
                                        <a href="/produtos/" class="link-item">
                                            <i class="fas fa-list"></i>
                                            <span>Página Principal</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/abrigos-para-equipamentos-contra-incendio.php" class="link-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <span>Abrigos</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/adaptador-para-mangueira-de-incendio.php" class="link-item">
                                            <i class="fas fa-plug"></i>
                                            <span>Adaptadores</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/armario-para-mangueira-de-incendio.php" class="link-item">
                                            <i class="fas fa-archive"></i>
                                            <span>Armários</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/bico-para-mangueira-de-incendio.php" class="link-item">
                                            <i class="fas fa-spray-can"></i>
                                            <span>Bicos e Esguichos</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/caixas-para-equipamentos-contra-incendio.php" class="link-item">
                                            <i class="fas fa-box"></i>
                                            <span>Caixas</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/conjunto-da-mangueira-de-incendio.php" class="link-item">
                                            <i class="fas fa-puzzle-piece"></i>
                                            <span>Conjuntos</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/gabinete-para-hidrante.php" class="link-item">
                                            <i class="fas fa-cabinet-filing"></i>
                                            <span>Gabinetes para Hidrantes</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/liquido-gerador-de-espuma.php" class="link-item">
                                            <i class="fas fa-flask"></i>
                                            <span>Líquido Gerador de Espuma</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/material-de-combate-a-incendio.php" class="link-item">
                                            <i class="fas fa-tools"></i>
                                            <span>Material de Combate</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/placas-de-sinalizacao.php" class="link-item">
                                            <i class="fas fa-sign"></i>
                                            <span>Placas de Sinalização</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                    <div class="link-card">
                                        <a href="/produtos/valvulas.php" class="link-item">
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
                            <?php 
                            // Incluir o array de informações técnicas (se não foi incluído ainda)
                            if (!isset($informacoes_tecnicas)) {
                                include 'includes/informacoes-tecnicas.php';
                            }
                            
                            // Separar páginas principais das antigas
                            $paginas_principais = array_slice($informacoes_tecnicas, 0, 10);
                            
                            // Gerar links das páginas principais
                            $count = 0;
                            foreach ($paginas_principais as $item) {
                                if ($count % 4 == 0) {
                                    echo '<div class="row">';
                                }
                                
                                // Usar função para definir ícone
                                $icon = getIconForPage($item['title']);
                                
                                echo '<div class="col-lg-3 col-md-6 col-sm-12 mb-3">';
                                echo '<div class="link-card">';
                                echo '<a href="' . htmlspecialchars($item['url']) . '" class="link-item">';
                                echo '<i class="' . $icon . '"></i>';
                                echo '<span>' . htmlspecialchars($item['title']) . '</span>';
                                echo '</a>';
                                echo '</div>';
                                echo '</div>';
                                
                                $count++;
                                if ($count % 4 == 0) {
                                    echo '</div>';
                                }
                            }
                            
                            // Fechar div row se necessário
                            if ($count % 4 != 0) {
                                echo '</div>';
                            }
                            ?>

                            <!-- Páginas Antigas (Old Pages) - Informações Técnicas -->
                            <div class="alert alert-info mt-4">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Páginas Antigas de Informações Técnicas:</strong>
                                Todas as páginas numeradas de 11 a 102 do menu "Informações Técnicas" estão listadas abaixo.
                            </div>

                            <?php 
                            // Incluir o array de informações técnicas
                            include 'includes/informacoes-tecnicas.php';
                            
                            // Separar páginas principais das antigas
                            $paginas_principais = array_slice($informacoes_tecnicas, 0, 10);
                            $paginas_antigas = array_slice($informacoes_tecnicas, 10);
                            
                            // Gerar links das páginas antigas (11-102)
                            $count = 0;
                            foreach ($paginas_antigas as $item) {
                                if ($count % 4 == 0) {
                                    echo '<div class="row">';
                                }
                                
                                // Usar função para definir ícone
                                $icon = getIconForPage($item['title']);
                                
                                echo '<div class="col-lg-3 col-md-6 col-sm-12 mb-3">';
                                echo '<div class="link-card">';
                                echo '<a href="' . htmlspecialchars($item['url']) . '" class="link-item">';
                                echo '<i class="' . $icon . '"></i>';
                                echo '<span>' . htmlspecialchars($item['title']) . '</span>';
                                echo '</a>';
                                echo '</div>';
                                echo '</div>';
                                
                                $count++;
                                if ($count % 4 == 0) {
                                    echo '</div>';
                                }
                            }
                            
                            // Fechar div row se necessário
                            if ($count % 4 != 0) {
                                echo '</div>';
                            }
                            ?>

                                  


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
                            <a href="/contact.php" class="btn btn-primary btn-lg">Entre em Contato</a>
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