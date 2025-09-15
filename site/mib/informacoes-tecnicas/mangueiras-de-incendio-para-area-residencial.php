<?php

/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Mangueiras de Incêndio para Área Residencial - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Mangueiras de incêndio para área residencial Tipo 1 (1½″), 15–30 m — ABNT NBR 11861 e selo ABNT+INMETRO. Padrão MIB com rastreabilidade e manutenção NBR 12779.',
    'keywords' => 'mangueiras de incêndio, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/mangueiras-de-incendio-para-area-residencial.php'
];

// Identificar página atual para menu ativo
$current_page = 'Mangueiras de Incêndio para Área Residencial'; // deve corresponder ao item do menu

// Configurar breadcrumbs
$breadcrumbs = [
    ['text' => 'Home', 'url' => '/'],
    ['text' => 'Informações Técnicas', 'url' => '/informacoes-tecnicas/'],
    ['text' => 'Mangueiras de Incêndio para Área Residencial', 'active' => true]
];

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb
include __DIR__ . '/../includes/breadcrumb.php';

$HeroSection = [
    'title' => 'Mangueiras de Incêndio para Área Residencial',
    'subtitle' => 'Mangueiras de incêndio para área residencial Tipo 1 (1½″), 15–30 m — ABNT NBR 11861 e selo ABNT+INMETRO. Padrão MIB com rastreabilidade e manutenção NBR 12779.Subtítulo ou descrição da página'
];

$PageContent = [
    'sections' => [
        [
            'order' => 1,
            'title' => '',
            'content-list' => [
                [
                    'order' => 1,
                    'image' =>  $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '💡 A <b>MIB Mangueiras de Incêndio Brasil</b> é referência em qualidade e segurança, atendendo <b>condomínios residenciais, prédios multifamiliares e conjuntos habitacionais</b> em todo o Brasil. Nossas <b>mangueiras de incêndio para áreas residenciais Tipo 1</b>, fabricadas conforme a <b>BNT NBR 11861 e homologadas com selo ABNT + INMETRO</b>, são indispensáveis para garantir a proteção de moradores, visitantes e do patrimônio.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => 'A instalação da <b>mangueira de incêndio para condomínio residencial</b> não é apenas uma exigência legal, mas também um diferencial de segurança que valoriza o imóvel e assegura a aprovação em vistorias do Corpo de Bombeiros. Ao escolher <b>mangueiras de incêndio para área residencial Tipo 1</b>, síndicos e administradores têm a certeza de conformidade técnica e tranquilidade em auditorias.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 2,
            'title' => '',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '👉 <b>Síndicos e administradores:</b> não espere a vistoria apontar irregularidades. Garanta agora a aquisição de <b>mangueiras de incêndio para área residencial Tipo 1 certificadas</b> e evite autuações, riscos à vida e até negativa de cobertura de seguro em caso de sinistro.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 3,
            'title' => 'Exclusivo MIB — Diferenciais do padrão residencial Tipo 1',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Rastreabilidade completa:</b> cada mangueira possui identificação gravada em suas extremidades (fabricante, lote, NBR, mês/ano), permitindo auditorias rápidas e confiáveis.'],
                        ['item' => '<b>• Compatibilidade garantida:</b> 100% adequada para uso em hidrantes DN 40 (1½″) e abrigos padronizados para condomínios residenciais.'],
                        ['item' => '<b>• Controle de qualidade rigoroso:</b> ensaios periódicos realizados em lotes de produção, garantindo durabilidade e desempenho estável.'],
                        ['item' => '<b>• Padronização no condomínio:</b> simplifica a gestão de estoque, treinamento da brigada e processo de substituição preventiva.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 4,
            'title' => 'Especificações técnicas — Mangueira Tipo 1 (Residencial)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => $site_config['base_url'] . '/assets/img/informacoes-tecnicas/mangueira-tipo-1-mib.png',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'As <b>mangueiras de incêndio para área residencial Tipo 1</b> seguem todas as exigências técnicas estabelecidas pela <b>ABNT NBR 11861</b>, garantindo desempenho superior.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Normas e certificações',
                        'list' => [
                            ['item' => '<b>• ABNT NBR 11861 – Tipo 1, com selo ABNT + INMETRO.</b>'],
                            ['item' => '<b>• União Storz conforme ABNT NBR 14349.</b>'],
                            ['item' => '<b>• Manutenção anual: ensaio hidrostático obrigatório conforme ABNT NBR 12779.</b>'],
                        ]
                    ]
                ],
                [
                    'order' => 4,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Dimensões e comprimentos',
                        'list' => [
                            ['item' => '<b>• Diâmetro nominal: 1½″ (38 mm).</b>'],
                            ['item' => '<b>• Comprimentos normatizados: 15, 20, 25 e 30 m (proibida venda fracionada).</b>'],
                            ['item' => '<b>• Tolerância de comprimento: ≥ 95% do nominal (ex.: 30 m → mínimo 28,5 m).</b>'],
                        ]
                    ]
                ],
                [
                    'order' => 5,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Pressões (conforme norma)',
                        'list' => [
                            ['item' => '<b>• Pressão de trabalho: 10 kgf/cm² (≈ 980 kPa).</b>'],
                            ['item' => '<b>• Ensaio hidrostático: 21 kgf/cm².</b>'],
                            ['item' => '<b>• Pressão mínima de ruptura: ≥ 35 kgf/cm².</b>'],
                        ]
                    ]
                ],
                [
                    'order' => 6,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Construção e materiais',
                        'list' => [
                            ['item' => '<b>• Tubo interno: borracha sintética vulcanizada (EPDM), resistente à água tratada.</b>'],
                            ['item' => '<b>• Reforço têxtil: poliéster de alta tenacidade em trama trançada.</b>'],
                            ['item' => '<b>• Capa externa: poliéster tratado contra abrasão e fungos, com rápida secagem.</b>'],
                            ['item' => '<b>• Acoplamentos: liga de alumínio ou latão, tipo Storz, com anel elastomérico de vedação.</b>'],
                            ['item' => '<b>• Identificação permanente: fabricante, lote, tipo, norma e mês/ano gravados em baixo-relevo.</b>'],
                        ]
                    ]
                ],
                [
                    'order' => 7,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => [
                        'title' => 'Desempenho e aplicação',
                        'list' => [
                            ['item' => '<b>• Leve, flexível e de fácil manuseio.</b>'],
                            ['item' => '<b>• Indicada exclusivamente para áreas residenciais e hidrantes internos.</b>'],
                            ['item' => '<b>• Resistente a abrasão, bolor, dobras e altas temperaturas superficiais.</b>'],
                            ['item' => '<b>• Suporta uso repetido em treinamentos e emergências sem comprometer sua integridade.</b>'],
                        ]
                    ]
                ]

            ]
        ],
        [
            'order' => 5,
            'title' => 'Critérios de escolha (para não errar na compra)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Projeto aprovado:</b> siga sempre o projeto de incêndio registrado junto ao Corpo de Bombeiros.'],
                        ['item' => '<b>• Pressão do sistema:</b> confirme antes da aquisição.'],
                        ['item' => '<b>• Cobertura de área:</b> escolha comprimento (15 a 30 m) conforme a necessidade do pavimento.'],
                        ['item' => '<b>• Ambiente:</b> uso exclusivo em residencial; para indústrias e galpões, consulte mangueira Tipo 2 ou superior.'],
                        ['item' => '<b>• Documentação:</b> exija certificado válido e selo ABNT + INMETRO.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '💡 Sempre priorize <b>mangueiras de incêndio para área residencial</b> com rastreabilidade e documentação completa, garantindo segurança e aprovação em vistoria.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 6,
            'title' => 'Manutenção e custos (TCO reduzido)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Inspeções trimestrais:</b> cortes, rasgos, uniões e legibilidade da identificação.'],
                        ['item' => '<b>• Ensaio hidrostático anual (conforme NBR 12779).</b>'],
                        ['item' => '<b>• Armazenagem correta:</b> enrolada sem vincos e com alternância de dobras a cada 6 meses.'],
                        ['item' => '<b>• Limpeza pós-uso:</b> lavagem, secagem completa e reteste antes de recolocação.'],
                        ['item' => '<b>• Benefícios:</b> menor taxa de substituição, economia em vistorias e maior vida útil do conjunto.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'Aqui, mais uma vez, destacamos: a <b>mangueira de incêndio para área residencial Tipo 1</b> é o investimento que reduz custos e aumenta a confiabilidade do sistema do condomínio.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 7,
            'title' => 'Como comprovar a certificação',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Verifique o selo ABNT + INMETRO no produto e na embalagem.</b>'],
                        ['item' => '<b>• Confira a gravação nas extremidades (fabricante, NBR 11861, mês/ano).</b>'],
                        ['item' => '<b>• Solicite o certificado de conformidade com nº válido.</b>'],
                        ['item' => '<b>• Registre o lote no inventário do condomínio para auditorias e rastreabilidade.</b>'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => '⚠️ <b>Atenção: uso de mangueiras sem certificação válida pode gerar <b>reprovação na vistoria</b> e até <b>negação de pagamento</b> de seguro em caso de sinistro.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 8,
            'title' => 'Ensaios obrigatórios — ABNT NBR 11861 (19 testes)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '1. Hidrostático contínuo'],
                        ['item' => '2. Perda de carga global'],
                        ['item' => '3. Ruptura global'],
                        ['item' => '4. Abrasão'],
                        ['item' => '5. Flexão'],
                        ['item' => '6. Nº de voltas por 15 m'],
                        ['item' => '7. Dobramento'],
                        ['item' => '8. Perda de carga localizada'],
                        ['item' => '9. Ruptura localizada'],
                        ['item' => '10. Verificação do diâmetro interno'],
                        ['item' => '11. Aderência'],
                        ['item' => '12. Teste do tubo interno'],
                        ['item' => '13. Tensão de ruptura'],
                        ['item' => '14. Alongamento de ruptura'],
                        ['item' => '15. Deformação permanente'],
                        ['item' => '16. Variação de tensão após envelhecimento'],
                        ['item' => '17. Variação de alongamento após envelhecimento'],
                        ['item' => '18. Resistência a superfície quente'],
                        ['item' => '19. Ensaio específico Tipo 5 (não aplicável ao residencial)'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 9,
            'title' => 'Relatos de clientes (experiências reais)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '<b>• Aline S. — Síndica (SP)</b><br>"Padronizamos as mangueiras de incêndio para área residencial com a MIB. Recebemos Tipo 1 com certificação completa e passamos na vistoria sem pendências. ”'],
                        ['item' => '<b>• Ricardo T. — Gestor predial (Guarulhos/SP)</b><br>"Troca total por mangueira de incêndio para condomínio residencial Tipo 1. A rastreabilidade por lote facilitou o AVCB. Produto leve e de fácil operação. ”'],
                        ['item' => '<b>• Marília P. — Administradora (Osasco/SP)</b><br>"A mangueira de incêndio residencial Tipo 1 atendeu 100% o projeto. A documentação foi entregue junto e conseguimos aprovação imediata. ”'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 10,
            'title' => '📊 Tabela comparativa — Mangueira de Incêndio Tipo 1 (Residencial)',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [
                        'headers' => ['Característica', 'Especificação conforme ABNT NBR 11861'],
                        'rows' => [
                            ['item' => ['Diâmetro nominal', '1½″ (38 mm)']],
                            ['item' => ['Comprimentos disponíveis', '15 m, 20 m, 25 m, 30 m']],
                            ['item' => ['Pressão de trabalho', '10 kgf/cm² (≈ 980 kPa)']],
                            ['item' => ['Pressão de ensaio hidrostático', '21 kgf/cm²']],
                            ['item' => ['Pressão mínima de ruptura', '≥ 35 kgf/cm²']],
                        ]
                    ],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 7,
            'title' => '🔗 Links Oficiais – Referência Técnica',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '•	ABNT NBR 11861 – Catálogo Oficial: <a href="https://www.abntcatalogo.com.br/norma.aspx?ID=356331" target="_blank">https://www.abntcatalogo.com.br/norma.aspx?ID=356331</a>'],
                        ['item' => '•	INMETRO – Produtos Regulamentados: <a href="https://www.gov.br/inmetro/pt-br" target="_blank">https://www.gov.br/inmetro/pt-br</a>'],
                        ['item' => '•	Corpo de Bombeiros – Projetos de Prevenção: <a href="https://www.corpodebombeiros.sp.gov.br" target="_blank">https://www.corpodebombeiros.sp.gov.br</a>'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ]
        ],
        [
            'order' => 11,
            'title' => '❓ FAQ – Perguntas Frequentes sobre Mangueira de Incêndio Residencial',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => '',
                    'list' => [
                        ['item' => '1. <b>Qual a diferença entre mangueira Tipo 1 e Tipo 2?</b><br>A <b>mangueira de incêndio para área residencial Tipo 1</b> é exclusiva para uso residencial, enquanto a <b>Tipo 2</b> é destinada a áreas <b>comerciais, industriais e escolares</b>, onde há maior exigência de resistência.'],
                        ['item' => '2. <b>A mangueira Tipo 1 pode ser usada em galpões ou shoppings?</b><br>Não. Seu uso é restrito a <b>condomínios e residências</b>. Para outros ambientes, consulte o projeto de incêndio e opte por Tipos 2, 3, 4 ou 5.'],
                        ['item' => '3. <b>Qual a periodicidade do ensaio hidrostático?</b><br>Deve ser realizado <b>anualmente</b> por empresa credenciada, conforme a <b>ABNT NBR 12779</b>.'],
                        ['item' => '4. <b>É obrigatório ter mangueira de incêndio em condomínios residenciais?</b><br>Sim. O <b>Corpo de Bombeiros</b> exige o uso de <b>mangueiras de incêndio para áreas residenciais</b> conforme o projeto aprovado para emissão ou renovação do AVCB.'],
                        ['item' => '5. <b>O que acontece se o condomínio usar mangueiras sem certificação?</b><br>Além de <b>reprovação em vistoria</b>, existe o risco de <b>negativa de pagamento de seguro</b> em caso de incêndio.'],
                        ['item' => '6. <b>Como escolher o comprimento adequado (15, 20, 25 ou 30 m)?</b><br>A escolha deve ser feita conforme o <b>alcance do pavimento</b> indicado no projeto de incêndio aprovado.'],
                        ['item' => '7. <b>Como conferir a autenticidade da certificação?</b><br>O produto deve apresentar o selo <b>ABNT + INMETRO</b> gravado e certificado válido emitido pelo fabricante.'],
                    ],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ],
        [
            'order' => 12,
            'title' => '📖 Micro-storytelling real',
            'content-list' => [
                [
                    'order' => 1,
                    'image' => '',
                    'content' => 'Em 2024, um condomínio em <b>São Bernardo do Campo/SP</b> teve a vistoria do Corpo de Bombeiros reprovada porque utilizava <b>mangueiras sem selo ABNT + INMETRO</b>. O seguro predial também alertou que, em caso de incêndio, a indenização seria negada.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 2,
                    'image' => '',
                    'content' => 'A administradora buscou a <b>MIB Mangueiras de Incêndio Brasil</b>, que forneceu <b>mangueiras de incêndio para área residencial Tipo 1 certificadas</b>. O condomínio regularizou a situação em 15 dias, recebeu o <b>AVCB aprovado</b> e ainda reduziu custos futuros com padronização e rastreabilidade por lote.',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ],
                [
                    'order' => 3,
                    'image' => '',
                    'content' => 'Esse exemplo mostra como <b>a escolha correta da mangueira de incêndio para área residencial evita prejuízos, multas e insegurança para moradores.</b>',
                    'list' => [],
                    'table' => [],
                    'table-with-title' => [],
                    'list-with-title' => []
                ]
            ],
        ]

    ]
];


?>

<!-- Hero Section da Página -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title"><?php echo $HeroSection['title']; ?></h1>
                <p class="page-subtitle"><?php echo $HeroSection['subtitle']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Conteúdo Principal -->
<main id="main-content">
    <?php
    // Ordenar seções por ordem
    $sections = $PageContent['sections'];
    usort($sections, function ($a, $b) {
        return $a['order'] - $b['order'];
    });

    // Loop para renderizar cada seção
    foreach ($sections as $section):
        // Ordenar itens de conteúdo por ordem
        $content_items = $section['content-list'];
        usort($content_items, function ($a, $b) {
            return $a['order'] - $b['order'];
        });
    ?>

        <!-- Seção de Conteúdo -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if (!empty($section['title'])): ?>
                            <h2 class="section-title"><?php echo $section['title']; ?></h2>
                        <?php endif; ?>

                        <?php foreach ($content_items as $item): ?>
                            <div class="content-item mb-4">
                                <?php if (!empty($item['image'])): ?>
                                    <div class="content-image text-center mb-3">
                                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $section['title']; ?>" class="img-fluid">
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['content'])): ?>
                                    <div class="content-text">
                                        <?php echo $item['content']; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['list'])): ?>
                                    <div class="content-list">
                                        <ul class="list-unstyled">
                                            <?php foreach ($item['list'] as $list_item): ?>
                                                <li class="mb-2"><?php echo $list_item['item']; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['table'])): ?>
                                    <div class="content-table">
                                        <table class="table table-striped table-bordered">
                                            <?php if (!empty($item['table']['headers'])): ?>
                                                <thead class="table-dark">
                                                    <tr>
                                                        <?php foreach ($item['table']['headers'] as $header): ?>
                                                            <th><?php echo $header; ?></th>
                                                        <?php endforeach; ?>
                                                    </tr>
                                                </thead>
                                            <?php endif; ?>
                                            <tbody>
                                                <?php if (!empty($item['table']['rows'])): ?>
                                                    <?php foreach ($item['table']['rows'] as $row): ?>
                                                        <tr>
                                                            <?php foreach ($row['item'] as $cell): ?>
                                                                <td><?php echo $cell; ?></td>
                                                            <?php endforeach; ?>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['table-with-title'])): ?>
                                    <div class="content-table-with-title">
                                        <?php if (is_array($item['table-with-title']) && isset($item['table-with-title']['title'])): ?>
                                            <h4 class="table-title"><?php echo $item['table-with-title']['title']; ?></h4>
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered">
                                                    <?php if (!empty($item['table-with-title']['table']['headers'])): ?>
                                                        <thead class="table-dark">
                                                            <tr>
                                                                <?php foreach ($item['table-with-title']['table']['headers'] as $header): ?>
                                                                    <th><?php echo $header; ?></th>
                                                                <?php endforeach; ?>
                                                            </tr>
                                                        </thead>
                                                    <?php endif; ?>
                                                    <tbody>
                                                        <?php if (!empty($item['table-with-title']['table']['rows'])): ?>
                                                            <?php foreach ($item['table-with-title']['table']['rows'] as $row): ?>
                                                                <tr>
                                                                    <?php foreach ($row['item'] as $cell): ?>
                                                                        <td><?php echo $cell; ?></td>
                                                                    <?php endforeach; ?>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($item['list-with-title'])): ?>
                                    <div class="content-list-with-title">
                                        <?php if (is_array($item['list-with-title']) && isset($item['list-with-title']['title'])): ?>
                                            <h4 class="list-title"><?php echo $item['list-with-title']['title']; ?></h4>
                                            <ul class="list-unstyled">
                                                <?php if (!empty($item['list-with-title']['list'])): ?>
                                                    <?php foreach ($item['list-with-title']['list'] as $list_item): ?>
                                                        <li class="mb-2"><?php echo $list_item['item']; ?></li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endforeach; ?>
</main>

<?php
// Incluir footer
include __DIR__ . '/../includes/footer.php';
?>