<?php

/**
 * Página Principal de Informações Técnicas - MIB Site
 */

// Incluir configurações comuns
require_once '../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Informações Técnicas - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Informações técnicas completas sobre equipamentos contra incêndio. Mangueiras, extintores, hidrantes, luzes de emergência e muito mais.',
    'keywords' => 'Informações Técnicas, Equipamentos Contra Incêndio, Mangueiras, Extintores, Hidrantes, Luzes de Emergência, MIB',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/'
];

// Identificar página atual para menu ativo
$current_page = 'informacoes-tecnicas';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'active' => true]
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
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Luz de Emergência LED</h5>
                                    <p class="card-text">Informações técnicas sobre luzes de emergência LED para sistemas de segurança.</p>
                                    <a href="luzes-de-emergencia-led.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueiras de Incêndio</h5>
                                    <p class="card-text">Informações técnicas completas sobre mangueiras de incêndio e suas especificações.</p>
                                    <a href="informacoes-tecnicas-mangueiras.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Dicas de Cuidados</h5>
                                    <p class="card-text">Dicas essenciais para conservação e manutenção das mangueiras de incêndio.</p>
                                    <a href="dicas-de-cuidados-mangueira-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Fabricante em São Paulo</h5>
                                    <p class="card-text">Informações sobre fabricação de mangueiras de incêndio em São Paulo.</p>
                                    <a href="fabricantes-de-mangueira-de-incendio-em-sao-paulo.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueiras Certificadas</h5>
                                    <p class="card-text">Informações sobre mangueiras de incêndio certificadas e suas especificações.</p>
                                    <a href="mangueiras-de-incendio-certificada.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Grande São Paulo</h5>
                                    <p class="card-text">Mangueiras de incêndio na grande São Paulo e região metropolitana.</p>
                                    <a href="mangueiras-de-incendio-na-grande-sp.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Área Residencial</h5>
                                    <p class="card-text">Mangueiras de incêndio específicas para área residencial e condomínios.</p>
                                    <a href="mangueiras-de-incendio-para-area-residencial.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Validade das Mangueiras</h5>
                                    <p class="card-text">Informações sobre validade e vida útil das mangueiras de incêndio.</p>
                                    <a href="validade-da-mangueira-de-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Inspeção de Equipamentos</h5>
                                    <p class="card-text">Guia completo para inspeção de equipamentos de combate a incêndio.</p>
                                    <a href="inspecao-de-equipamentos-de-combate-a-incendio.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Para Condomínios</h5>
                                    <p class="card-text">Mangueiras de incêndio específicas para condomínios residenciais.</p>
                                    <a href="mangueira-de-incendio-para-condominio.php" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seção de Extintores -->
                    <h3 class="section-subtitle mt-5 mb-4">Extintores de Incêndio</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Extintor CO2 6Kg</h5>
                                    <p class="card-text">Informações técnicas sobre extintores de CO2 de 6kg.</p>
                                    <a href="../old-pages/extintor-de-incendio-co2-6-kg.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Extintor Água Pressurizada</h5>
                                    <p class="card-text">Extintor de incêndio de água pressurizada 10 litros.</p>
                                    <a href="../old-pages/extintor-de-incendio-de-agua-pressurizada-10-litros.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Extintor Espuma Mecânica</h5>
                                    <p class="card-text">Extintor de incêndio de espuma mecânica 10 litros.</p>
                                    <a href="../old-pages/extintor-de-incendio-de-espuma-mecanica-10-litros.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Extintor Pó Químico ABC</h5>
                                    <p class="card-text">Extintor de incêndio pó químico ABC 9kg.</p>
                                    <a href="../old-pages/extintor-de-incendio-po-9-kg.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Extintor sobre Rodas</h5>
                                    <p class="card-text">Extintores de incêndio sobre rodas com diferentes capacidades.</p>
                                    <a href="../old-pages/extintor-de-incendio-sobre-rodas.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Tipos de Extintores</h5>
                                    <p class="card-text">Guia completo sobre tipos de extintores de incêndio.</p>
                                    <a href="../old-pages/tipos-de-extintores-de-incendio.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seção de Mangueiras por Tipo -->
                    <h3 class="section-subtitle mt-5 mb-4">Mangueiras por Tipo</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueira Tipo 1</h5>
                                    <p class="card-text">Proteção eficaz contra incêndios para uso geral.</p>
                                    <a href="../old-pages/mangueira-tipo-1.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueira Tipo 2</h5>
                                    <p class="card-text">Proteção de alta performance para ambientes industriais.</p>
                                    <a href="../old-pages/mangueira-tipo-2.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueira Tipo 3</h5>
                                    <p class="card-text">Solução ideal para ambientes navais e industriais.</p>
                                    <a href="../old-pages/mangueira-tipo-3.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueira Tipo 4</h5>
                                    <p class="card-text">Solução robusta para ambientes de alto risco.</p>
                                    <a href="../old-pages/mangueira-tipo-4.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueira Tipo 5</h5>
                                    <p class="card-text">Solução completa para ambientes de alto risco.</p>
                                    <a href="../old-pages/mangueira-tipo-5.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Mangueira de Bombeiro</h5>
                                    <p class="card-text">Mangueiras específicas para uso profissional de bombeiros.</p>
                                    <a href="../old-pages/mangueira-de-bombeiro.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seção de Acessórios -->
                    <h3 class="section-subtitle mt-5 mb-4">Acessórios e Equipamentos</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Esguichos e Bicos</h5>
                                    <p class="card-text">Esguichos reguláveis e bicos para mangueiras de incêndio.</p>
                                    <a href="../old-pages/esguichos-para-equipamentos-contra-incendio.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Hidrantes</h5>
                                    <p class="card-text">Informações sobre hidrantes contra incêndio e instalação.</p>
                                    <a href="../old-pages/hidrante-contra-incendio.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Placas de Sinalização</h5>
                                    <p class="card-text">Placas fotoluminescentes para sinalização de emergência.</p>
                                    <a href="../old-pages/placas-de-sinalizacao-fotoluminescente.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Líquido Gerador de Espuma</h5>
                                    <p class="card-text">Líquido gerador de espuma para sistemas de combate a incêndio.</p>
                                    <a href="../old-pages/liquido-gerador-de-espuma.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Canhão Monitor</h5>
                                    <p class="card-text">Canhões monitor para combate a incêndio em grandes áreas.</p>
                                    <a href="../old-pages/canhao-monitor-de-combate-a-incendio.php" class="btn btn-outline-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Sistema Aerossol</h5>
                                    <p class="card-text">Sistema aerossol de supressão a incêndio.</p>
                                    <a href="../old-pages/sistema-aerossol-de-supressao-a-incendio.php" class="btn btn-outline-primary">Saiba Mais</a>
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