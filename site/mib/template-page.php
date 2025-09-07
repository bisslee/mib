<?php
/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Título da Página - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Descrição da página para SEO',
    'keywords' => 'palavras, chave, da, página',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/nome-da-pagina.php'
];

// Identificar página atual para menu ativo
$current_page = 'nome_da_pagina'; // deve corresponder ao item do menu

// Configurar breadcrumbs (opcional)
$breadcrumbs = [
    ['text' => 'Nome da Página', 'active' => true]
];

// Incluir header
include 'includes/header.php';

// Incluir breadcrumb (opcional)
if (isset($breadcrumbs)) {
    include 'includes/breadcrumb.php';
}
?>

    <!-- Hero Section da Página -->
    <section class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Título da Página</h1>
                    <p class="page-subtitle">Subtítulo ou descrição da página</p>
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
                        <h2 class="section-title">Título da Seção</h2>
                        <p>Conteúdo da página aqui...</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Outras seções conforme necessário -->
    </main>

<?php
// Incluir footer
include 'includes/footer.php';
?>
