<?php

/**
 * Página Principal de Informações Técnicas - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Incluir funções compartilhadas
require_once '../includes/functions.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Informações Técnicas - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Guias técnicos especializados: mangueiras ABNT NBR 11861, certificações Inmetro, inspeções, cuidados. Tipos 1 a 5. Condomínios, indústrias, hospitais. Consulte grátis ✆ (11) 94025-8669',
    'keywords' => 'Informações Técnicas, Equipamentos Contra Incêndio, Mangueiras, Extintores, Hidrantes, Luzes de Emergência, MIB, ABNT NBR 11861, Certificação',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/'
];

// Identificar página atual para menu ativo
$current_page = 'informacoes-tecnicas';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'active' => true]
];

$links_data = include '../includes/informacoes-tecnicas.php';




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
                <h1 class="page-title">Informações Técnicas sobre Equipamentos Contra Incêndio - MIB Brasil</h1>
                <p class="page-subtitle">Informações técnicas completas sobre equipamentos contra incêndio</p>
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
                    <h2 class="section-title">Nossas Informações Técnicas</h2>

                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="lead">
                                💡 A MIB é especialista em atender condomínios, indústrias, comércios, hospitais, galpões e transportadoras com equipamentos contra incêndio certificados.
                            </p>
                            <p class="lead">
                                ⚠️ Não saia do site sem solicitar seu orçamento: iluminação de emergência é item obrigatório e salva vidas em evacuações.
                            </p>
                        </div>
                    </div>

                    <!-- Grid de Informações Técnicas -->
                    <div class="row">
                        <?php foreach ($links_data as $link): ?>
                            <?php
                                // Usar função para definir ícone
                                $icon = getIconForPage($link['title']);
                            ?>
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                                <div class="link-card">
                                    <a href="<?php echo htmlspecialchars($link['url']); ?>" class="link-item">
                                        <i class="<?php echo $icon; ?>"></i>
                                        <span><?php echo htmlspecialchars($link['title']); ?></span>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
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