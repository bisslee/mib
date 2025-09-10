<?php
/**
 * Template de Página - MIB Site
 * Use este arquivo como base para criar novas páginas
 */

// Incluir configurações comuns
require_once __DIR__ . '/../includes/config.php';

// Configurações específicas da página
$page_config = [
    'title' => 'Informações Técnicas - MIB | Mangueiras de Incêndio Brasil',
    'description' => 'Informações Técnicas sobre Equipamentos Contra Incêndio da MIB.',
    'keywords' => 'Luz de emergência, equipamentos contra incêndio, segurança contra incêndio, extintores, hidrantes',
    'canonical' => 'https://mangueirasdeincendiobrasil.com.br/informacoes-tecnicas/index.php'
];

// Identificar página atual para menu ativo
$current_page = 'Informações Técnicas'; // deve corresponder ao item do menu

// Breadcrumbs
$breadcrumbs = array(
    0 => array(
        'url' => '/informacoes-tecnicas/',
        'text' => 'Informações Técnicas',
    )
);

// Incluir header
include __DIR__ . '/../includes/header.php';

// Incluir breadcrumb (opcional)
if (isset($breadcrumbs)) {
    include __DIR__ . '/../includes/breadcrumb.php';
}

$HeroSection = [
    'title' => 'Informações Técnicas',
    'subtitle' => 'Informações Técnicas sobre Equipamentos Contra Incêndio da MIB.'
];

$PageContent = [
    'sections' => [
        'section' => [
            'order' => 1,
            'title' => '',
            'content-list' =>[
                'item' => [
                    'order' => 1,
                    'image' => '',
                    'content' => '💡 A MIB é especialista em atender condomínios, indústrias, comércios, hospitais, galpões e transportadoras com equipamentos contra incêndio certificados. ⚠️ Não saia do site sem solicitar seu orçamento: iluminação de emergência é item obrigatório e salva vidas em evacuações.',
                    'list' => [],
                    'table' => [],
                ],
                'item' => [
                    'order' => 2,
                    'image' => '',
                    'content' => '',
                    'list' => [],
                    'table' => [],
                    'list-with-title' => [],
                    'list-with-title-urls' => [
                        'title' => 'Veja informações técnicas sobre os produtos da MIB:',
                        'list' => [
                            [
                                'order' => 1,
                                'text' => 'Luz de Emergência LED',
                                'url' => '/informacoes-tecnicas/luzes-de-emergencia-led.php'
                            ],
                            'item' => [
                                'order' => 2,
                                'text' => 'Informações técnicas de mangueiras de incêndio',
                                'url' => '/informacoes-tecnicas/informacoes-tecnicas-mangueiras.php'
                            ],
                            [
                                'order' => 3,
                                'text' => 'Dicas para conservação das mangueiras de incêndio',
                                'url' => '/informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 4,
                                'text' => 'Fabricante de mangueira de incêndio em São Paulo',
                                'url' => '/informacoes-tecnicas/fabricantes-de-mangueira-de-incendio-em-sao-paulo.php'
                            ],
                            [
                                'order' => 5,
                                'text' => 'Mangueiras de incêndio certificada',
                                'url' => '/informacoes-tecnicas/mangueiras-de-incendio-certificada.php'
                            ],
                            [
                                'order' => 6,
                                'text' => 'Mangueiras de incêndio na grande São Paulo',
                                'url' => '/old-pages/mangueiras-de-incendio-na-grande-sp.php'
                            ],
                            [
                                'order' => 7,
                                'text' => 'Mangueira de incêndio para residencia',
                                'url' => '/old-pages/mangueiras-de-incendio-para-area-residencial.php'
                            ],
                            [
                                'order' => 8,
                                'text' => 'Validade da mangueira de Incêndio',
                                'url' => '/old-pages/validade-da-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 9,
                                'text' => 'Inspeção de equipamentos de combate a incêndio',
                                'url' => '/old-pages/inspecao-de-equipamento-de-combante-a-incendio.php'
                            ],
                            [
                                'order' => 10,
                                'text' => 'Mangueiras de incêndio para condomínio',
                                'url' => '/old-pages/mangueira-de-incendio-para-condominio.php'
                            ],
                            [
                                'order' => 11,
                                'text' => 'O que é AVCB corpo de bombeiros',
                                'url' => '/old-pages/o-que-e-avcb-corpo-de-bombeiros.php'
                            ],
                            [
                                'order' => 12,
                                'text' => 'Tipos de mangueiras de combate a incêndio',
                                'url' => '/old-pages/tipos-de-mangueira-de-combate-a-incendio.php'
                            ],
                            [
                                'order' => 13,
                                'text' => 'Tampa de incêndio para recalque',
                                'url' => '/old-pages/tampa-de-incendio-para-recalque.php'
                            ],
                            [
                                'order' => 14,
                                'text' => 'Placas de sinalização fotoluminescente',
                                'url' => '/old-pages/placas-de-sinalizacao-fotoluminescente.php'
                            ],
                            [
                                'order' => 15,
                                'text' => 'Chave storz para mangueira de hidrante',
                                'url' => '/old-pages/chave-storz-para-mangueira-de-hidrante.php'
                            ],
                            [
                                'order' => 16,
                                'text' => 'Adaptador storz para mangueira de incêndio',
                                'url' => '/old-pages/adaptador-storz-para-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 17,
                                'text' => 'Fabricação de mangueira de incêndio',
                                'url' => '/old-pages/fabricacao-de-mangueiras-de-incendio.php'
                            ],
                            [
                                'order' => 18,
                                'text' => 'Abrigos para extintores e mangueiras de incêndio em fibra',
                                'url' => '/old-pages/abrigos-para-extintores-e-mangueira-de-incendio-em-fibra.php'
                            ],
                            [
                                'order' => 19,
                                'text' => 'Mangueiras de incêndio fabricadas conforme NBR',
                                'url' => '/old-pages/mangueiras-de-incendio-fabricada-conforme-nbr.php'
                            ],
                            [
                                'order' => 20,
                                'text' => 'Informação sobre mangueiras de incêndio',
                                'url' => '/old-pages/informacao-sobre-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 21,
                                'text' => 'Modelos de mangueiras de incêndio',
                                'url' => '/old-pages/modelos-de-mangueiras-de-incendio.php'
                            ],
                            [
                                'order' => 22,
                                'text' => 'Fornecedor de mangueiras de combate a incêndio',
                                'url' => '/old-pages/fornecedor-de-mangueira-de-combate-a-incendio.php'
                            ],
                            [
                                'order' => 23,
                                'text' => 'Como Identificar a Melhor Mangueira de Incêndio',
                                'url' => '/old-pages/como-indentificar-a-melhor-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 24,
                                'text' => 'Como comprar equipamentos contra incêndio',
                                'url' => '/old-pages/comprar-equipamentos-contra-incendio.php'
                            ],
                            [
                                'order' => 25,
                                'text' => 'Comprar mangueira de Incêndio',
                                'url' => '/old-pages/comprar-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 26,
                                'text' => 'Esguicho Regulável em Alumínio',
                                'url' => '/old-pages/esguicho-regulavel-em-aluminio.php'
                            ],
                            [
                                'order' => 27,
                                'text' => 'Extintor de Incêndio Co2 6Kg',
                                'url' => '/old-pages/extintor-de-incendio-co2-6-kg.php'
                            ],
                            [
                                'order' => 28,
                                'text' => 'Extintor de Incêndio de Água Pressurizada 10KG',
                                'url' => '/old-pages/extintor-de-incendio-de-agua-pressurizada-10-litros.php'
                            ],
                            [
                                'order' => 29,
                                'text' => 'Extintor de Incêndio de Espuma Mecânica 10 Litros',
                                'url' => '/old-pages/extintor-de-incendio-de-espuma-mecanica-10-litros.php'
                            ],
                            [
                                'order' => 30,
                                'text' => 'Extintor de Incêndio pó ABC 9 KG',
                                'url' => '/old-pages/extintor-de-incendio-po-9-kg.php'
                            ],
                            [
                                'order' => 31,
                                'text' => 'Extintor de Incêndio pó Químico ABC',
                                'url' => '/old-pages/extintor-de-incendio-po-quimico-abc.php'
                            ],
                            [
                                'order' => 32,
                                'text' => 'Extintor de Incêndio pó quimico BC',
                                'url' => '/old-pages/extintor-de-incendio-po-quimico-bc.php'
                            ],
                            [
                                'order' => 33,
                                'text' => 'Extintor de incêndio sobre rodas com carga de água pressurizada 75 litros',
                                'url' => '/old-pages/extintor-de-incendio-sobre-rodas-agua-pressurizada-75-litros.php'
                            ],
                            [
                                'order' => 34,
                                'text' => 'Extintor de Incêndio sobre rodas espuma mecânica 50 Litros',
                                'url' => '/old-pages/extintor-de-incendio-sobre-rodas-espuma-mecanica-50-litros.php'
                            ],
                            [
                                'order' => 35,
                                'text' => 'Extintor de Incêndio sobre rodas pó quimico ABC',
                                'url' => '/old-pages/extintor-de-incendio-sobre-rodas-po-quimico-abc.php'
                            ],
                            [
                                'order' => 36,
                                'text' => 'Mangueiras de Incêndio CM Couto',
                                'url' => '/old-pages/mangueira-de-incendio-cm-couto.php'
                            ],
                            [
                                'order' => 37,
                                'text' => 'Informações sobre Extintores de Incêndio',
                                'url' => '/old-pages/informacoes-sobre-extintores-de-incendio.php'
                            ],
                            [
                                'order' => 38,
                                'text' => 'Extintor de Incêndio Tipo K 6 Litros',
                                'url' => '/old-pages/extintor-de-incendio-tipo-6-litros.php'
                            ],
                            [
                                'order' => 39,
                                'text' => 'Tipos de Extintores de Incêndio',
                                'url' => '/old-pages/tipos-de-extintores-de-incendio.php'
                            ],
                            [
                                'order' => 40,
                                'text' => 'Informações sobre mangueiras de Incêndio NBR',
                                'url' => '/old-pages/informacoes-sobre-mangueiras-de-incendio-nbr.php'
                            ],
                            [
                                'order' => 41,
                                'text' => 'Mangueiras de Incêndio Coutoflex',
                                'url' => '/old-pages/mangueira-de-incendio-coutoflex.php'
                            ],
                            [
                                'order' => 42,
                                'text' => 'Mangueira de Bombeiro',
                                'url' => '/old-pages/mangueira-de-bombeiro.php'
                            ],
                            [
                                'order' => 43,
                                'text' => 'Onde comprar mangueira de incêndio?',
                                'url' => '/old-pages/onde-comprar-mangueira.php'
                            ],
                            [
                                'order' => 44,
                                'text' => 'Como entender a composição do preço de extintores de incêndio e assegurar o melhor custo-benefício',
                                'url' => '/old-pages/como-entender-preco-extintor.php'
                            ],
                            [
                                'order' => 45,
                                'text' => 'Encontre tudo o que precisa para a proteção de sua empresa ou comércio em nossa loja de mangueira de incêndio',
                                'url' => '/old-pages/encontre-tudo-aqui.php'
                            ],
                            [
                                'order' => 46,
                                'text' => 'Extintor de incêndio novo – investimento em qualidade, segurança e proteção',
                                'url' => '/old-pages/extintor-de-incendio-novo.php'
                            ],
                            [
                                'order' => 47,
                                'text' => 'Fabricante de extintor de incêndio: garantindo a segurança com qualidade',
                                'url' => '/old-pages/fabricante-extintor.php'
                            ],
                            [
                                'order' => 48,
                                'text' => 'Garanta o melhor preço de mangueira de incêndio priorizando a proteção e confiabilidade',
                                'url' => '/old-pages/melhor-preco-de-mangueira.php'
                            ],
                            [
                                'order' => 49,
                                'text' => 'Guia completo: onde comprar mangueira de incêndio',
                                'url' => '/old-pages/onde-comprar-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 50,
                                'text' => 'Mangueira tipo 1 incêndio: entenda as especificações dessa mangueira',
                                'url' => '/old-pages/mangueira-tipo-1.php'
                            ],
                            [
                                'order' => 51,
                                'text' => 'Como encontrar o melhor preço de extintor de incêndio?',
                                'url' => '/old-pages/melhor-preco-extintor-encontrar.php'
                            ],
                            [
                                'order' => 52,
                                'text' => 'Bola Extintora Fireball ABC - Validade 5 Anos',
                                'url' => '/old-pages/bola-extintor-fireball.php'
                            ],
                            [
                                'order' => 53,
                                'text' => 'Mangotinho de 1" Polegada: Qualidade e Segurança com a Brasil Segurança HSA',
                                'url' => '/old-pages/mangotinho-1-polegada.php'
                            ],
                            [
                                'order' => 54,
                                'text' => 'Mangueira Tipo 1 de 15 Metros para Condomínios: Proteção Indispensável contra Incêndios',
                                'url' => '/old-pages/mangueira-1-15m-para-condominio.php'
                            ],
                            [
                                'order' => 55,
                                'text' => 'Mangueira Tipo 1 de 30 Metros para Condomínios: Proteção Indispensável contra Incêndios',
                                'url' => '/old-pages/mangueira-1-30m-para-condominio.php'
                            ],
                            [
                                'order' => 56,
                                'text' => 'Mangueira de Incêndio Tipo 2 de 15 Metros: Proteção Indispensável para Áreas Industriais e Comerciais',
                                'url' => '/old-pages/mmangueira-de-incendio-2-15m.php'
                            ],
                            [
                                'order' => 57,
                                'text' => 'Mangueira de Incêndio Tipo 2 de 30 Metros: Proteção Indispensável para Áreas Industriais e Comerciais',
                                'url' => '/old-pages/mangueira-de-incendio-2-30m.php'
                            ],
                            [
                                'order' => 58,
                                'text' => 'Equipamentos Contra Incêndio para Condomínios: Segurança e Qualidade com a BS Brasil',
                                'url' => '/old-pages/equipamento-contra-incendio-para-condominio.php'
                            ],
                            [
                                'order' => 59,
                                'text' => 'Líquido Gerador de Espuma (LGE) no Combate a Incêndios',
                                'url' => '/old-pages/liquido-gerador-espuma.php'
                            ],
                            [
                                'order' => 60,
                                'text' => 'Carretel Mangotinho: A Solução Eficiente para Combate a Incêndios',
                                'url' => '/old-pages/carretel-mangotinho.php'
                            ],
                            [
                                'order' => 61,
                                'text' => 'Canhão Monitor Fixo: Eficácia e Versatilidade no Combate a Incêndios (Flangeado 3" ou 4")',
                                'url' => '/old-pages/canhao-monitor-fixo.php'
                            ],
                            [
                                'order' => 62,
                                'text' => 'Abrigo para Mangueiras de Incêndio: Segurança e Qualidade com a BS Brasil Segurança HSA',
                                'url' => '/old-pages/abrigo-para-mangueiras-de-incendio.php'
                            ],
                            [
                                'order' => 63,
                                'text' => 'Válvula para Hidrante: Registro Globo 2 1/2" x 45º 76mm',
                                'url' => '/old-pages/valvula-para-hidrante--registro-globo.php'
                            ],
                            [
                                'order' => 64,
                                'text' => 'Mangueira Tipo 1: Proteção Eficaz Contra Incêndios',
                                'url' => '/old-pages/mangueiras-tipo-1-protecao-eficaz.php'
                            ],
                            [
                                'order' => 65,
                                'text' => 'Mangueira Tipo 2: Proteção de Alta Performance para Ambientes Industriais e Comerciais',
                                'url' => '/old-pages/mangueira-tipo-2-protecao-de-alta-performance.php'
                            ],
                            [
                                'order' => 66,
                                'text' => 'Mangueira Tipo 4: Solução Robustez e Eficiência para Ambientes Industriais e de Alto Risco',
                                'url' => '/old-pages/mangueira-tipo-4-solucao-robustez.php'
                            ],
                            [
                                'order' => 67,
                                'text' => 'Mangueira Tipo 5: A Solução Completa para Proteção Contra Incêndios em Ambientes de Alto Risco',
                                'url' => '/old-pages/mangueira-tipo-5-solucao-completa-para-ambientes-de-alto-risco.php'
                            ],
                            [
                                'order' => 68,
                                'text' => 'Mangueira Tipo 3: A Solução Ideal para Ambientes Industriais, Navais e de Emergência',
                                'url' => '/old-pages/mangueira-tipo-3-solucao-ideal-para-ambientes-navais.php'
                            ],
                            [
                                'order' => 69,
                                'text' => 'Equipamentos para Condomínios: Garantia de Segurança e Proteção Completa com a BS Brasil Segurança',
                                'url' => '/old-pages/equipamento-contra-incendio-para-condominio.php'
                            ],
                            [
                                'order' => 70,
                                'text' => 'Protetores de Colunas, Cantoneiras, Lombadas e protetores de para choque',
                                'url' => '/old-pages/protetores-de-coluna-cantoneiras-lombadas-protetores-de-choque.php'
                            ],
                            [
                                'order' => 71,
                                'text' => 'Equipamentos Contra Incêndio: A Melhor Escolha para a Sua Segurança pois aqui na BS',
                                'url' => '/old-pages/euipamento-contra-incendio-melhor-escolha.php'
                            ],
                            [
                                'order' => 72,
                                'text' => 'Mangueira de incêndio',
                                'url' => '/old-pages/mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 73,
                                'text' => 'Mangueira de Bombeiro',
                                'url' => '/old-pages/mangueira-de-bombeiro.php'
                            ],
                            [
                                'order' => 74,
                                'text' => 'Mangueira de Hidrante',
                                'url' => '/old-pages/mangueira-de-hidrante.php'
                            ],
                            [
                                'order' => 75,
                                'text' => 'Mangueira de Incêndio Predial',
                                'url' => '/old-pages/mangueira-de-incendio-predial.php'
                            ],
                            [
                                'order' => 76,
                                'text' => 'Mangueira de Incêndio para Prédios',
                                'url' => '/old-pages/mangueira-de-Incêndio-para-prédios.php'
                            ],
                            [
                                'order' => 77,
                                'text' => 'Onde Comprar Mangueira de Incêndio Predial',
                                'url' => '/old-pages/onde-comprar-mangueira-de-incendio-predial.php'
                            ],
                            [
                                'order' => 78,
                                'text' => 'Comprar Mangueira de Incêndio com Garantia de Qualidade',
                                'url' => '/old-pages/comprar-mangueira-de-incendio-1.php'
                            ],
                            [
                                'order' => 79,
                                'text' => 'Extintor de Incêndio para Empresas',
                                'url' => '/old-pages/extintor-de-incendio-para-empresas.php'
                            ],
                            [
                                'order' => 80,
                                'text' => 'Extintor de Incêndio Portátil',
                                'url' => '/old-pages/extintor-de-incendio-portatil-1.php'
                            ],
                            [
                                'order' => 81,
                                'text' => 'Extintor de Incêndio Preço',
                                'url' => '/old-pages/extintor-de-incendio-preco.php'
                            ],
                            [
                                'order' => 82,
                                'text' => 'Extintor de Incêndio',
                                'url' => '/old-pages/extintor-de-incendio.php'
                            ],
                            [
                                'order' => 83,
                                'text' => 'Mangueira Tipo 1 Preço Imbatível – Qualidade e Economia Garantidas!',
                                'url' => '/old-pages/mangueira-tipo-1-preco-imbativel.php'
                            ],
                            [
                                'order' => 84,
                                'text' => 'Mangueira Tipo 2 Preço Imbatível – Garantia de Qualidade e Desempenho para Áreas Comerciais e industriais',
                                'url' => '/old-pages/mangueira-tipo-2-preco-imbativel.php'
                            ],
                            [
                                'order' => 85,
                                'text' => 'Mangueira Tipo 3 Preço Imbatível – Garantia de Qualidade e Desempenho para Áreas Comerciais e industriais',
                                'url' => '/old-pages/mangueira-tipo-3-preco.php'
                            ],
                            [
                                'order' => 86,
                                'text' => 'Mangueira Tipo 5 Preço: Por que Escolher a BS Brasil Segurança?',
                                'url' => '/old-pages/mangueira-tipo-5-preco.php'
                            ],
                            [
                                'order' => 87,
                                'text' => 'Mangueira Tipo 4 Preço: A Melhor Opção para Sua Segurança e Economia',
                                'url' => '/old-pages/mangueira-tipo-4-preco.php'
                            ],
                            [
                                'order' => 88,
                                'text' => 'Extintor para Baterias de Lítio: Proteção Completa Contra Incêndios e Riscos Térmicos',
                                'url' => '/old-pages/extintor-para-baterias-de-litio.php'
                            ],
                            [
                                'order' => 89,
                                'text' => 'Mangueiras de Incêndio e Extintores: Equipamentos Cruciais para Sua Segurança Contra Incêndios',
                                'url' => '/old-pages/mangueiras-de-incendio-e-extintores.php'
                            ],
                            [
                                'order' => 90,
                                'text' => 'Mangueira de Incêndio Preço de Fábrica: Garantia de Qualidade para Sua Segurança',
                                'url' => '/old-pages/mangueira-de-incendio-preco-de-fabrica.php'
                            ],
                            [
                                'order' => 91,
                                'text' => 'Mangueira de Incêndio para Hospital: A Melhor Solução em Segurança e Qualidade',
                                'url' => '/old-pages/mangueira-de-incendio-para-hospital.php'
                            ],
                            [
                                'order' => 92,
                                'text' => 'Mangueira de Incêndio para Venda: A Melhor Solução em Segurança e Qualidade',
                                'url' => '/old-pages/mangueiras-de-incendio-para-venda.php'
                            ],
                            [
                                'order' => 93,
                                'text' => 'Carretel de Mesa para Mangotinho de 1" – Alta Performance e Durabilidade | BS Brasil Segurança',
                                'url' => '/old-pages/carretel-de-mesa-mangotinho.php'
                            ],
                            [
                                'order' => 94,
                                'text' => 'Mangueira de Incêndio 2 1/2" (2.5) – A Melhor Opção para Proteger Seu Patrimônio',
                                'url' => '/old-pages/mangueira-de-incendio-2-12.php'
                            ],
                            [
                                'order' => 95,
                                'text' => 'Extintor de Incêndio ABC 5 Anos – Modelos com Carga de 4 kg e 6 kg',
                                'url' => '/old-pages/extintor-de-incendio-abc-5-anos.php'
                            ],
                            [
                                'order' => 96,
                                'text' => 'Adaptadores Storz para Caminhão Pipa: Conexão Rápida, Segura e Eficiente',
                                'url' => '/old-pages/adaptador-para-caminhao-pipa-storz.php'
                            ],
                            [
                                'order' => 97,
                                'text' => 'Preço de Mangueira de Incêndio: Encontre Qualidade com Economia',
                                'url' => '/old-pages/preco-mangueira-de-incendio.php'
                            ],
                            [
                                'order' => 98,
                                'text' => 'Como Encontrar o Melhor Preço de Mangueira de Incêndio 1 1/2"?',
                                'url' => '/old-pages/preco-mangueira-de-incendio-1-1-2.php'
                            ],
                            [
                                'order' => 99,
                                'text' => 'Produtos de Combate a Incêndio: Soluções Certificadas para sua Segurança',
                                'url' => '/old-pages/produto-combate-incendio.php'
                            ],
                            [
                                'order' => 100,
                                'text' => 'Produto Mangueira de Incêndio: Segurança e Alta Performance para sua Proteção',
                                'url' => '/old-pages/produtos-mangueiras-de-incendio.php'
                            ],
                            [
                                'order' => 101,
                                'text' => 'Substitua Agora o Esguicho Tipo Agulheta por Esguicho Regulável e a Segurança do Seu Sistema Contra Incêndios!',
                                'url' => '/old-pages/troca-esguicho-agulheta-regulavel.php'
                            ],
                            [
                                'order' => 102,
                                'text' => 'Mangueira de Incêndio 30 Metros: Qualidade, Resistência e Segurança',
                                'url' => '/old-pages/mangueira-incendio-30-metros.php'
                            ]
                        ]
                    ],
                    'table-with-title' => [
                        'title' => '',
                        'table' => []
                    ]
                ]
            ]
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
        usort($sections, function($a, $b) {
            return $a['order'] - $b['order'];
        });

        // Loop para renderizar cada seção
        foreach ($sections as $section):
            // Ordenar itens de conteúdo por ordem
            $content_items = $section['content-list'];
            usort($content_items, function($a, $b) {
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
                                
                                <?php if (!empty($item['list-with-title-urls'])): ?>
                                    <div class="content-list-with-title-urls">
                                        <?php if (is_array($item['list-with-title-urls']) && isset($item['list-with-title-urls']['title'])): ?>
                                            <h4 class="list-title"><?php echo $item['list-with-title-urls']['title']; ?></h4>
                                            <div class="row">
                                                <?php if (!empty($item['list-with-title-urls']['list'])): ?>
                                                    <?php 
                                                    // Ordenar lista por ordem
                                                    $url_list = $item['list-with-title-urls']['list'];
                                                    usort($url_list, function($a, $b) {
                                                        return $a['order'] - $b['order'];
                                                    });
                                                    
                                                    foreach ($url_list as $url_item): 
                                                    ?>
                                                        <div class="col-md-6 col-lg-4 mb-3">
                                                            <div class="card h-100 shadow-sm">
                                                                <div class="card-body">
                                                                    <h6 class="card-title">
                                                                        <a href="<?php echo $url_item['url']; ?>" class="text-decoration-none text-primary">
                                                                            <?php echo $url_item['text']; ?>
                                                                        </a>
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
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
