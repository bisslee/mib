<?php
/**
 * Página migrada do old-site
 * Arquivo original: o-que-e-avcb-corpo-de-bombeiros.php
 */

// Configuração da página
$page_config = array(
    'title' => 'O QUE É AVCB CORPO DE BOMBEIROS - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Descrição da página',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/old-pages/o-que-e-avcb-corpo-de-bombeiros.php',
);

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/',
        'text' => 'Home',
    ),
    1 => array(
        'url' => '',
        'text' => 'O QUE É AVCB CORPO DE BOMBEIROS',
    ),
);

$heroConfig = array(
    'title' => 'O QUE É AVCB CORPO DE BOMBEIROS',
    'description' => 'Descrição da página',
    'image' => '/assets/img/old-site/default-image.jpg',
);

// Incluir template
require_once '../includes/config.php';
include '../includes/header.php';
if (isset($breadcrumbs)) {
    include '../includes/breadcrumb.php';
}
?>

<!-- Hero Section da Página -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">
                    <?php echo $heroConfig['title']; ?>
                </h1>
                <p class="page-subtitle">
                    <?php echo $heroConfig['description']; ?>
                </p>
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
                    <h2 class="section-title"><?php echo $heroConfig['title']; ?></h2>
                    <article class="text-justify">


 <!-- Google Tag Manager (noscript) -->

 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZKDXGP"

 height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

 <!-- End Google Tag Manager (noscript) -->

 <div class="fixa2">

 <a href="placas-de-sinalizacao.php" class="btn btn-primary">Veja o Produto</a>

 </div>

 <section class="container">

 <div class="row"> 

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 <h2><strong>O QUE É AVCB CORPO DE BOMBEIROS</strong></h2>

 <img src="/assets/img/old-site/panilha-44.png" class="img-responsive">

 <p>No processo de adequação de imóveis e a requisição de documentos que

 comprovam sua viabilidade é comum ouvir a pergunta sobre <strong>o que é AVCB

 Corpo de Bombeiros.</strong> Apesar de ser pouco conhecido pelo público não

 especializado, o AVCB é um documento de suma importância.</p>

 <h2><strong>Mas, afinal, o que é AVCB Corpo de Bombeiros?</strong></h2>

 <br>

 <p>A sigla AVCB significa Auto de Vistoria do Corpo de Bombeiros e a emissão

 desse documento indica que determinada edificação está apta a funcionar, pois

 apresenta os equipamentos e dispositivos necessários para a contenção de

 situações de emergência, como incêndios.</p>

 <p>O AVCB deve, portanto, atestar que as edificações possuem todas as

 condições de segurança contra a propagação das chamas, as quais devem

 integrar medidas estruturais, organizacionais e técnicas previstas legalmente e

 imprescindíveis para o pleno funcionamento dos imóveis.</p>

 <p>O documento é emitido pelo Corpo de Bombeiros da Polícia Militar do Estado

 de São Paulo e apenas não é obrigatório para residências exclusivamente

 unifamiliares, localizadas em via pública ou em pavimento superior em

 edificações com até dois pavimentos e acessos independentes.</p>

 <ul>

 <li>Assim sendo, o Auto é obrigatório em construções e reformas, quando

 há ampliação da área construída, mudança do uso ou ocupação do

 imóvel, em construções provisórias, como circos e eventos, além de

 regularização de áreas de risco e edificações;</li>

 <li>A validade do AVCB varia entre 2 e 5 anos, a depender da avaliação de

 risco, ou seja, em áreas que apresentam maior risco, as avaliações

 devem ser feitas com menor intervalo quando comparadas àquelas mais

 estáveis e seguras;</li>

 <li>A adequação dos imóveis inclui a presença de elementos estruturais,

 tais como saídas e escadas de emergência, organizacionais, como

 sinalização de emergência e placas fotoluminescentes, e técnicas, como

 extintores e mangueiras de incêndio;</li>

 <li>A aquisição desses equipamentos também deve ser criteriosa, uma vez

 que eles devem ser adequados ao contexto nos quais serão aplicados

 (fábricas, imóveis residenciais, lojas) e estarem posicionados de forma

 correta, com fácil acesso e visibilidade;</li>

 <li>A dispensa da solicitação e obtenção do AVCB resulta no pagamento de

 multas e na inviabilização do imóvel, visto que este não estará seguro

 para usufruto de moradores, frequentadores e funcionários,

 representando alto risco às pessoas e estruturas adjacentes.</li>

 </ul>

 <h2><strong>Equipamentos acessíveis e em conformação com a legislação</strong></h2>

 <br>

 <p>Para adequar os imóveis com mais economia, de acordo com a legislação e,

 assim, obter o AVCB, o mais indicado é procurar a , empresa

 especialista no comércio de equipamentos de segurança com preços mais

 justos e certificados pela ABNT, Inmetro e ISO 9001.</p>

 <br><br>

 </div>

 </div>

 </section>


                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
// Incluir footer
include '../includes/footer.php';
?>