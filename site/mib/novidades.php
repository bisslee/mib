<?php
/**
 * Página de Novidades - MIB Site
 * Novidades em Equipamentos contra Incêndio
 */

// Incluir configurações comuns
require_once 'includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Novidades em Equipamentos contra Incêndio - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Novidades em Equipamentos contra Incêndio é na MIB. Contamos com diversos equipamentos contra incêndio. Novidades sobre Equipamentos contra Incêndio em SP é aqui!',
    'keywords' => 'Mangueiras de Incêndio, MIB, Equipamentos Contra Incêndio, Novidades, Tanques CMC',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/novidades.php'
];

// Identificar página atual para menu ativo
$current_page = 'novidades';

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Novidades', 'active' => true]
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
                    <h1 class="page-title">Novidades</h1>
                    <p class="page-subtitle">Conheça nossos novos equipamentos contra incêndio</p>
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
                        <h2 class="section-title">Novidades em Equipamentos contra Incêndio</h2>

                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="lead">
                                    O CMC#TAP é fabricado em polietileno de média densidade (PEMD), protegido com aditivos e estabilizadores da radiação ultravioleta, quimicamente estável e inalterável. O tanque é produzido em uma só peça, sem uniões nem costuras, evitando o risco de perdas; sua capacidade pode ser configurada para 300/600/1000/1500/2000/3000/4000 litros e, quando em cor natural, permite visualização do conteúdo em escala gradual. O recipiente tem cor, cilíndrico e pode ser utilizado em posição estática ou móvel; equipado na parte superior com boca de carga de Ø 500 mm (acima de 1000 rts.) e 250 mm (abaixo de 1000 Its.), uma válvula na pane inferior para a descarga total do produto envasado e válvula de respiro na parte superior para melhor descarga. Indicado para armazenagem de liquido geradorde espuma.
                                </p>
                            </div>
                        </div>

                        <h3 class="section-subtitle">Especificações Técnicas</h3>
                        
                        <div class="row mb-5">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                                <div class="product-image">
                                    <img src="assets/img/novidades/novidade-em-equipamentos-contra-incendio.webp" 
                                         alt="Novidades em Equipamentos Contra Incêndio" 
                                         title="Novidades em Equipamentos Contra Incêndio"
                                         class="img-fluid rounded shadow" />
                                </div>
                            </div>
                            
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="specifications-list">
                                    <ul class="list-unstyled">
                                        <li><strong>Pressão:</strong> O tanque suporta pressão negativa e positiva de 0,6 bar;</li>
                                        <li><strong>Cor:</strong> Diversas cores;</li>
                                        <li><strong>Espessura:</strong> 6 mm;</li>
                                        <li><strong>Conexão:</strong> Engate Rápido (Opcional T.CH Lub);</li>
                                        <li><strong>Boca de Carga:</strong> Ø 500 mm e Ø 250mm;</li>
                                        <li><strong>Anel de Vedação:</strong> Nitrílica, Viton ou SBR (tampa 500 mm);</li>
                                        <li><strong>Válvula de Respiro:</strong> PP ou (de acordo com a vazão);</li>
                                        <li><strong>Válvula de Descarga:</strong> ¾, 1/2, 1, 1½, 2, 3; Latão/PVC/PP;</li>
                                        <li><strong>Densidade:</strong> até 0,5 a 1,6 Kg/cm³.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <h3 class="section-subtitle">Estrutura Metálica OPCIONAL</h3>
                        
                        <div class="row mb-4">
                            <div class="col-12">
                                <p>
                                    Confeccionada em Aço Carbono 1020 com tratamento anticorrosivo de fosfatização, com posterior pintura epóxi para produtos agressivos e para maior resistência utiliza solda tipo MIG. Adequada para transporte terrestre, possui olhais de içamento nas extremidades facilitando assim a movimentação quando necessário.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Linha. Tq. Cil. Horizontal</th>
                                                <th>Largura</th>
                                                <th>Comprimento</th>
                                                <th>Altura</th>
                                                <th>Peso</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CMC Hor.300Lts</td>
                                                <td>710</td>
                                                <td>970</td>
                                                <td>720</td>
                                                <td>15</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Hor.600Lts</td>
                                                <td>756</td>
                                                <td>1435</td>
                                                <td>945</td>
                                                <td>25</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Hor.1000Lts</td>
                                                <td>1040</td>
                                                <td>1335</td>
                                                <td>1165</td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Hor.1500Lts</td>
                                                <td>1070</td>
                                                <td>2095</td>
                                                <td>1230</td>
                                                <td>60</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Hor.2000Lts</td>
                                                <td>1200</td>
                                                <td>2100</td>
                                                <td>1320</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Hor.3000Lts</td>
                                                <td>1490</td>
                                                <td>2090</td>
                                                <td>1600</td>
                                                <td>110</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Hor.4000Lts</td>
                                                <td>1730</td>
                                                <td>2250</td>
                                                <td>1850</td>
                                                <td>140</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-4">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Linha. Tq. Cil. Vertical</th>
                                                <th>Largura</th>
                                                <th>Comprimento</th>
                                                <th>Altura</th>
                                                <th>Peso</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CMC Ver. 600Lts</td>
                                                <td>1130</td>
                                                <td>1130</td>
                                                <td>800</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Ver. 1200Lts</td>
                                                <td>1110</td>
                                                <td>1110</td>
                                                <td>1490</td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Ver. 1800Lts</td>
                                                <td>1200</td>
                                                <td>1200</td>
                                                <td>2100</td>
                                                <td>67</td>
                                            </tr>
                                            <tr>
                                                <td>CMC Ver. 3000Lts</td>
                                                <td>1765</td>
                                                <td>1765</td>
                                                <td>1820</td>
                                                <td>110</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <a href="contato.php" class="btn btn-primary btn-lg">Entre em Contato</a>
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
