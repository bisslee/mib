<?php
/**
 * Componente de Links Relacionados - SEO Internal Linking
 * 
 * Este componente adiciona links contextuais entre páginas relacionadas
 * para melhorar SEO, navegação do usuário e autoridade das páginas
 * 
 * @author Biss Solutions
 * @version 1.0
 * @since 2025
 */

// Mapear páginas relacionadas para cada página
$related_links_map = [
    // Informações Técnicas - Mangueiras
    'mangueiras-de-incendio-certificada.php' => [
        ['title' => 'Fabricante de Mangueiras de Incêndio em São Paulo', 'url' => '/informacoes-tecnicas/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php', 'description' => 'Conheça o fabricante MIB e nossos processos de certificação'],
        ['title' => 'Mangueira de Incêndio para Condomínio', 'url' => '/informacoes-tecnicas/mangueira-de-incendio-para-condominio.php', 'description' => 'Guia completo para condomínios escolherem a mangueira certa'],
        ['title' => 'Dicas de Cuidados com Mangueiras', 'url' => '/informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php', 'description' => 'Saiba como manter suas mangueiras em perfeito estado']
    ],
    
    'fabricante-de-mangueiras-de-incendio-em-sao-paulo.php' => [
        ['title' => 'Informações Técnicas de Mangueiras', 'url' => '/informacoes-tecnicas/informacoes-tecnicas-mangueiras-incendio.php', 'description' => 'Especificações completas ABNT NBR 11861'],
        ['title' => 'Mangueiras na Grande SP', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-na-grande-sp.php', 'description' => 'Atendimento especializado na região metropolitana'],
        ['title' => 'Validade da Mangueira de Incêndio', 'url' => '/informacoes-tecnicas/validade-da-mangueira-de-incendio.php', 'description' => 'Entenda o prazo de vida útil e quando trocar']
    ],
    
    'mangueira-de-incendio-para-condominio.php' => [
        ['title' => 'Mangueiras para Área Residencial', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-para-area-residencial.php', 'description' => 'Especificações técnicas para residências'],
        ['title' => 'Inspeção de Equipamentos', 'url' => '/informacoes-tecnicas/inspecao-de-equipamentos-de-combate-a-incendio.php', 'description' => 'Como fazer a manutenção correta'],
        ['title' => 'Equipamentos para Condomínio', 'url' => '/equipamentos/mangueiras-de-incendio.php', 'description' => 'Veja nossa linha completa de produtos']
    ],
    
    'dicas-de-cuidados-mangueira-de-incendio.php' => [
        ['title' => 'Validade da Mangueira', 'url' => '/informacoes-tecnicas/validade-da-mangueira-de-incendio.php', 'description' => 'Quando trocar suas mangueiras'],
        ['title' => 'Inspeção de Equipamentos', 'url' => '/informacoes-tecnicas/inspecao-de-equipamentos-de-combate-a-incendio.php', 'description' => 'Guia de inspeções obrigatórias'],
        ['title' => 'Mangueiras Certificadas', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-certificada.php', 'description' => 'Importância da certificação ABNT']
    ],
    
    'validade-da-mangueira-de-incendio.php' => [
        ['title' => 'Dicas de Cuidados', 'url' => '/informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php', 'description' => 'Como prolongar a vida útil'],
        ['title' => 'Inspeção Obrigatória', 'url' => '/informacoes-tecnicas/inspecao-de-equipamentos-de-combate-a-incendio.php', 'description' => 'Periodicidade e procedimentos'],
        ['title' => 'Mangueiras Novas Certificadas', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-certificada.php', 'description' => 'Quando substituir por mangueiras novas']
    ],
    
    'mangueiras-de-incendio-na-grande-sp.php' => [
        ['title' => 'Fabricante em São Paulo', 'url' => '/informacoes-tecnicas/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php', 'description' => 'Conheça a MIB - fabricante paulista'],
        ['title' => 'Mangueiras para Área Residencial', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-para-area-residencial.php', 'description' => 'Soluções para condomínios residenciais'],
        ['title' => 'Informações Técnicas Completas', 'url' => '/informacoes-tecnicas/informacoes-tecnicas-mangueiras-incendio.php', 'description' => 'ABNT NBR 11861 - Todos os tipos']
    ],
    
    'mangueiras-de-incendio-para-area-residencial.php' => [
        ['title' => 'Mangueiras para Condomínio', 'url' => '/informacoes-tecnicas/mangueira-de-incendio-para-condominio.php', 'description' => 'Guia específico para síndicos'],
        ['title' => 'Mangueiras na Grande SP', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-na-grande-sp.php', 'description' => 'Entrega rápida em toda região metropolitana'],
        ['title' => 'Dicas de Conservação', 'url' => '/informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php', 'description' => 'Mantenha seus equipamentos em dia']
    ],
    
    'informacoes-tecnicas-mangueiras-incendio.php' => [
        ['title' => 'Mangueiras Certificadas ABNT', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-certificada.php', 'description' => 'Importância da certificação'],
        ['title' => 'Fabricante em São Paulo', 'url' => '/informacoes-tecnicas/fabricante-de-mangueiras-de-incendio-em-sao-paulo.php', 'description' => 'Processo de fabricação MIB'],
        ['title' => 'Equipamentos Mangueiras', 'url' => '/equipamentos/mangueiras-de-incendio.php', 'description' => 'Veja nossa linha de produtos']
    ],
    
    'inspecao-de-equipamentos-de-combate-a-incendio.php' => [
        ['title' => 'Dicas de Cuidados', 'url' => '/informacoes-tecnicas/dicas-de-cuidados-mangueira-de-incendio.php', 'description' => 'Manutenção preventiva de mangueiras'],
        ['title' => 'Validade das Mangueiras', 'url' => '/informacoes-tecnicas/validade-da-mangueira-de-incendio.php', 'description' => 'Quando substituir equipamentos'],
        ['title' => 'Extintores de Incêndio', 'url' => '/equipamentos/extintores-de-incendio.php', 'description' => 'Conheça nossa linha de extintores']
    ],
    
    'luzes-de-emergencia-led.php' => [
        ['title' => 'Inspeção de Equipamentos', 'url' => '/informacoes-tecnicas/inspecao-de-equipamentos-de-combate-a-incendio.php', 'description' => 'Manutenção de sistemas de segurança'],
        ['title' => 'Equipamentos para Condomínio', 'url' => '/informacoes-tecnicas/mangueira-de-incendio-para-condominio.php', 'description' => 'Segurança completa para condomínios'],
        ['title' => 'Mangueiras Certificadas', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-certificada.php', 'description' => 'Produtos com certificação ABNT']
    ]
];

// Detectar a página atual
$current_page_file = basename($_SERVER['PHP_SELF']);

// Obter links relacionados
$related_links = isset($related_links_map[$current_page_file]) ? $related_links_map[$current_page_file] : [];

// Se não houver links específicos, usar links genéricos
if (empty($related_links)) {
    $related_links = [
        ['title' => 'Mangueiras de Incêndio Certificadas', 'url' => '/informacoes-tecnicas/mangueiras-de-incendio-certificada.php', 'description' => 'Conheça nossa linha certificada ABNT'],
        ['title' => 'Equipamentos Contra Incêndio', 'url' => '/equipamentos/', 'description' => 'Veja todos os equipamentos disponíveis'],
        ['title' => 'Entre em Contato', 'url' => '/contact.php', 'description' => 'Solicite um orçamento personalizado']
    ];
}
?>

<?php if (!empty($related_links)): ?>
<!-- Seção de Artigos Relacionados - SEO Internal Linking -->
<section class="related-links-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-4">
                    <i class="fas fa-link me-2"></i>Artigos Relacionados
                </h2>
                <p class="text-center mb-5">Continue explorando nosso conteúdo técnico especializado</p>
            </div>
        </div>
        
        <div class="row g-4">
            <?php foreach ($related_links as $link): ?>
                <div class="col-md-4">
                    <div class="related-link-card h-100">
                        <div class="card-body">
                            <h3 class="h5 mb-3">
                                <a href="<?php echo htmlspecialchars($link['url']); ?>" class="text-decoration-none">
                                    <?php echo htmlspecialchars($link['title']); ?>
                                </a>
                            </h3>
                            <p class="text-muted mb-3"><?php echo htmlspecialchars($link['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($link['url']); ?>" class="btn btn-outline-primary btn-sm">
                                Leia Mais <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- CTA Final -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="cta-box p-4 rounded bg-primary text-white">
                    <h3 class="mb-3">Precisa de Equipamentos Contra Incêndio?</h3>
                    <p class="mb-4">Entre em contato conosco e solicite um orçamento personalizado para sua necessidade</p>
                    <a href="/contact.php" class="btn btn-light btn-lg me-3">
                        <i class="fas fa-envelope me-2"></i>Solicitar Orçamento
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=5511940258669&text=Vim pelo site e gostaria de mais informações sobre seus produtos." target="_blank" class="btn btn-success btn-lg">
                        <i class="fab fa-whatsapp me-2"></i>WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.related-link-card {
    background: white;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.related-link-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.related-link-card h3 a {
    color: #c8102e;
    font-weight: 600;
}

.related-link-card h3 a:hover {
    color: #a00d24;
    text-decoration: underline !important;
}

.cta-box {
    background: linear-gradient(135deg, #c8102e 0%, #a00d24 100%);
}
</style>
<?php endif; ?>

