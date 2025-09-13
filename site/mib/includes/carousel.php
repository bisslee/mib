<?php

$slides = [
    [
        'order' => 1,
        'title' => 'Mangueiras de incêndio, Extintores, canhões monitores, proporcionadores de espuma, lge',
        'subtitle' => 'Economia com segurança  e garantia',
        'images' => [
            [
                'order' => 1, 
                'image' => 'assets/img/carousel/slide01/01-mangueira-tipo-01.jpeg',
                'alt' => 'Mangueira Tipo 1 - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 2, 
                'image' => 'assets/img/carousel/slide01/02-p4- 20-bc.jpeg',
                'alt' => 'Extintor P4 20 BC- MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 3, 
                'image' => 'assets/img/carousel/slide01/03-carreta-p50-bc-80bc.jpeg',
                'alt' => 'Carreta P50 BC 80BC- MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 4, 
                'image' => 'assets/img/carousel/slide01/04-canhao-motor-fixo.jpeg',
                'alt' => 'Canhão Motor Fixo- MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 5, 
                'image' => 'assets/img/carousel/slide01/05-proporcionador-de-espuma.jpeg',
                'alt' => 'Proporcionador de Espuma- MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 6, 
                'image' => 'assets/img/carousel/slide01/06-galao-20-litros-lge.jpeg',
                'alt' => 'Galão 20 Litros LGE- MIB – Mangueiras de incêndio'
            ]
        ]
    ],
    [
        'order' => 2,
        'title' => 'Linha completa acessórios para hidrantes',
        'subtitle' => 'Não perca a oportunidade de economizar com qualidade e garantia.',
        'images' => [
            [
                'order' => 1, 
                'image' => 'assets/img/carousel/slide02/01-abrigo-90x60x17-sobrepor.jpeg',
                'alt' => 'Abrigo 90x60x17 Sobrepor - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 2, 
                'image' => 'assets/img/carousel/slide02/02-valvula-globo-ranhurada-mb.jpeg',
                'alt' => 'Valvula Globo Ranhurada MB - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 3, 
                'image' => 'assets/img/carousel/slide02/03-esguicho-regulavel-de-1-1-5.jpeg',
                'alt' => 'Esguicho Regulavel de 1 1 5 - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 4, 
                'image' => 'assets/img/carousel/slide02/04-adaptador-storz-de-2-1-5-femea-5-FPP.jpeg',
                'alt' => 'Adaptador Storz de 2 1 5 Femea 5 FPP - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 5, 
                'image' => 'assets/img/carousel/slide02/05-tampao-storz-duas-faces.jpeg',
                'alt' => 'Tampao Storz Duas Faces - MIB – Mangueiras de incêndio'
            ]
        ]
    ],
    [
        'order' => 3,
        'title' => 'Possui uma vasta linha de equipamentos de combate a incêndio',
        'subtitle' => 'Confira os equipamentos de ponta no mercado conosco.',
        'images' => [
            [
                'order' => 1, 
                'image' => 'assets/img/carousel/slide03/01-luz-de-emergencia-1200-lumens.jpeg',
                'alt' => 'Luz de Emergencia 1200 Lúmens - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 2, 
                'image' => 'assets/img/carousel/slide03/02-placa-de-sinalizacao-em-led-rota-de-fuga.jpeg',
                'alt' => 'Placa de Sinalizacao em LED Rota de Fuga - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 3, 
                'image' => 'assets/img/carousel/slide03/03-protetor-de-coluna-para-estacionamentos.jpeg',
                'alt' => 'Protetor de Coluna para Estacionamentos - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 4, 
                'image' => 'assets/img/carousel/slide03/04-suporte-se-solo-para-extintor-tipo-baton-em-inox.jpeg',
                'alt' => 'Suporte SE Solo para Extintor Tipo Baton em Inox - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 5, 
                'image' => 'assets/img/carousel/slide03/05-carretel-de-mesa-com-mangueira-e-esguicho.jpeg',
                'alt' => 'Carretel de Mesa com Mangueira e Esguicho - MIB – Mangueiras de incêndio'
            ],
            [
                'order' => 6, 
                'image' => 'assets/img/carousel/slide03/06-carretel-mangitinho-1-parede.jpeg',
                'alt' => 'Carretel Mangitinho 1 Parede - MIB – Mangueiras de incêndio'
            ]
        ]
    ]
];

// Função para dividir array em chunks
function array_chunk_custom($array, $chunk_size) {
    return array_chunk($array, $chunk_size);
}

?>

<div class="hero-carousel">
    <?php foreach ($slides as $index => $slide): ?>
        <div class="hero-slide <?= $index === 0 ? 'active' : '' ?>" data-slide="<?= $slide['order'] ?>">
            <div class="container" style="display: flex; justify-content: center; align-items: center; width: 100%;">
                <div class="slide-content">
                    <div class="hero-layout">
                    <!-- Título no topo -->
                    <div class="hero-header text-center">
                        <span class="hero-brand"><i><b>MIB</b> - Mangueiras de Incêndio Brasil</i></span>
                        <h1 class="hero-title"><?= htmlspecialchars($slide['title']) ?></h1>
                    </div>
                    
                    <!-- Imagens no meio -->
                    <div class="hero-images">
                        <!-- Desktop: Todas as imagens -->
                        <div class="product-grid desktop-only">
                            <?php foreach ($slide['images'] as $image): ?>
                                <div class="product-item">
                                    <img src="<?= $image['image'] ?>" alt="<?= htmlspecialchars($image['alt']) ?>" class="img-fluid">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <!-- Tablet: Imagens divididas em grupos de 3 -->
                        <div class="product-carousel tablet-only">
                            <?php 
                            $tablet_chunks = array_chunk_custom($slide['images'], 3);
                            foreach ($tablet_chunks as $chunk_index => $chunk): 
                            ?>
                                <div class="product-slide <?= $chunk_index === 0 ? 'active' : '' ?>" data-tablet-slide="<?= $chunk_index + 1 ?>">
                                    <?php foreach ($chunk as $image): ?>
                                        <div class="product-item">
                                            <img src="<?= $image['image'] ?>" alt="<?= htmlspecialchars($image['alt']) ?>" class="img-fluid">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <!-- Mobile: Imagens divididas em grupos de 2 -->
                        <div class="product-carousel mobile-only">
                            <?php 
                            $mobile_chunks = array_chunk_custom($slide['images'], 2);
                            foreach ($mobile_chunks as $chunk_index => $chunk): 
                            ?>
                                <div class="product-slide <?= $chunk_index === 0 ? 'active' : '' ?>" data-mobile-slide="<?= $chunk_index + 1 ?>">
                                    <?php foreach ($chunk as $image): ?>
                                        <div class="product-item">
                                            <img src="<?= $image['image'] ?>" alt="<?= htmlspecialchars($image['alt']) ?>" class="img-fluid">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Subtítulo embaixo -->
                    <div class="hero-footer text-center">
                        <p class="hero-description"><?= htmlspecialchars($slide['subtitle']) ?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Controles do Carrossel -->
    <div class="carousel-controls">
        <button class="carousel-control prev" onclick="changeSlide(-1)">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="carousel-control next" onclick="changeSlide(1)">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <!-- Indicadores do Carrossel -->
    <div class="carousel-indicators">
        <?php foreach ($slides as $index => $slide): ?>
            <button class="indicator <?= $index === 0 ? 'active' : '' ?>" onclick="goToSlide(<?= $slide['order'] ?>)"></button>
        <?php endforeach; ?>
    </div>
</div>

<style>
/* Estilos para o carrossel responsivo */
.hero-carousel {
    position: relative;
    width: 100%;
    min-height: 75vh;
    overflow: hidden;
}

.hero-slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    min-height: 75vh;
    opacity: 0;
    visibility: hidden;
    transition: all 0.8s ease;
    transform: translateX(100%);
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.slide-content {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 25px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.9);
    width: 100%;
    max-width: 1400px;
    overflow: hidden;
    min-height: 70vh;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-slide.active {
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
    z-index: 2;
}

/* Layout vertical conforme rascunho */
.hero-layout {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 3rem 2rem;
    gap: 1.5rem;
    min-height: 65vh;
}

.hero-header {
    width: 100%;
    max-width: 800px;
}

.hero-brand {
    font-size: 1.1rem;
    color: #E55A2B;
    font-weight: 600;
    margin-bottom: 1rem;
    display: block;
}

.hero-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0;
    color: #2D5A4A;
    line-height: 1.2;
}

.hero-images {
    width: 100%;
    max-width: 1200px;
    margin: 1rem auto;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-footer {
    width: 100%;
    max-width: 800px;
}

.hero-description {
    font-size: 1.3rem;
    color: #6C757D;
    margin-bottom: 2rem;
    line-height: 1.6;
    font-weight: 500;
}

.hero-buttons {
    margin-top: 1rem;
}

.product-grid {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    align-items: center !important;
    gap: 20px !important;
    max-width: 100% !important;
    padding: 10px !important;
    width: 100% !important;
}

.product-carousel {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.product-slide {
    display: none;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    width: 100%;
    padding: 10px;
}

.product-slide.active {
    display: grid;
}

.product-item {
    text-align: center !important;
    padding: 15px !important;
    background: #fff !important;
    border-radius: 12px !important;
    box-shadow: 0 6px 20px rgba(0,0,0,0.1) !important;
    transition: transform 0.3s ease !important;
    border: 2px solid #e9ecef !important;
    width: 100% !important;
    max-width: 180px !important;
    display: block !important;
    float: none !important;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #E55A2B;
}

.product-item img {
    width: 100% !important;
    height: 150px !important;
    object-fit: contain !important;
    border-radius: 8px !important;
    display: block !important;
}

/* Forçar layout horizontal */
.desktop-only .product-grid {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    align-items: center !important;
    gap: 20px !important;
}

.desktop-only .product-item {
    flex: 0 0 auto !important;
    min-width: 0 !important;
    max-width: 160px !important;
    width: 160px !important;
}

/* Garantir que as imagens fiquem lado a lado */
.product-grid .product-item {
    display: inline-block !important;
    vertical-align: top !important;
    margin: 0 !important;
}

/* Reset para evitar conflitos */
.product-grid * {
    box-sizing: border-box !important;
}

/* Responsividade */
@media (max-width: 768px) {
    .desktop-only {
        display: none !important;
    }
    
    .tablet-only {
        display: none !important;
    }
    
    .mobile-only {
        display: block !important;
    }
    
    .mobile-only .product-slide {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        justify-content: center !important;
        align-items: center !important;
        gap: 15px !important;
    }
    
    .product-item {
        max-width: 140px;
    }
    
    .product-item img {
        height: 100px;
    }
    
    .hero-title {
        font-size: 1.5rem;
    }
    
    .hero-description {
        font-size: 1.1rem;
    }
    
    .hero-layout {
        gap: 1rem;
        padding: 2rem 1rem;
        min-height: 55vh;
    }
    
    .hero-slide {
        padding: 10px;
    }
    
    .slide-content {
        max-width: 100%;
        border-radius: 20px;
        min-height: 60vh;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .desktop-only {
        display: none !important;
    }
    
    .tablet-only {
        display: block !important;
    }
    
    .mobile-only {
        display: none !important;
    }
    
    .tablet-only .product-slide {
        display: flex !important;
        flex-direction: row !important;
        flex-wrap: nowrap !important;
        justify-content: center !important;
        align-items: center !important;
        gap: 20px !important;
    }
    
    .product-item {
        max-width: 160px;
    }
    
    .product-item img {
        height: 130px;
    }
    
    .hero-title {
        font-size: 1.8rem;
    }
}

@media (min-width: 1025px) {
    .desktop-only {
        display: block !important;
    }
    
    .tablet-only {
        display: none !important;
    }
    
    .mobile-only {
        display: none !important;
    }
    
    .product-grid {
        grid-template-columns: repeat(5, 1fr);
        gap: 25px;
    }
    
    .product-item {
        max-width: 180px;
    }
    
    .product-item img {
        height: 150px;
    }
}

/* Controles do Carrossel */
.carousel-controls {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    z-index: 10;
    pointer-events: none;
}

.carousel-control {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    background: rgba(0, 0, 0, 0.7);
    border: 2px solid rgba(0, 0, 0, 0.8);
    border-radius: 50%;
    color: #ffffff;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s ease;
    pointer-events: auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.carousel-control:hover {
    background: rgba(0, 0, 0, 0.9);
    border-color: rgba(0, 0, 0, 1);
    transform: translateY(-50%) scale(1.1);
}

.carousel-control.prev {
    left: 20px;
}

.carousel-control.next {
    right: 20px;
}

/* Indicadores */
.carousel-indicators {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 12px;
    z-index: 10;
}

.indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.4);
    border: 2px solid rgba(255, 255, 255, 0.6);
    cursor: pointer;
    transition: all 0.3s ease;
}

.indicator:hover {
    background: rgba(255, 255, 255, 0.6);
    transform: scale(1.2);
}

.indicator.active {
    background: #E55A2B;
    border-color: #E55A2B;
    transform: scale(1.3);
}

/* Responsividade dos controles */
@media (max-width: 768px) {
    .carousel-control {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .carousel-control.prev {
        left: 10px;
    }
    
    .carousel-control.next {
        right: 10px;
    }
    
    .carousel-indicators {
        bottom: 20px;
    }
    
    .indicator {
        width: 10px;
        height: 10px;
    }
}
</style>

<script>
// Controles do carrossel principal
let currentSlide = 1;
const totalSlides = document.querySelectorAll('.hero-slide').length;

function changeSlide(direction) {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    
    // Remove active class do slide atual
    slides[currentSlide - 1].classList.remove('active');
    indicators[currentSlide - 1].classList.remove('active');
    
    // Calcula próximo slide
    currentSlide += direction;
    if (currentSlide > totalSlides) currentSlide = 1;
    if (currentSlide < 1) currentSlide = totalSlides;
    
    // Adiciona active class ao novo slide
    slides[currentSlide - 1].classList.add('active');
    indicators[currentSlide - 1].classList.add('active');
}

function goToSlide(slideNumber) {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    
    // Remove active class de todos os slides
    slides.forEach(slide => slide.classList.remove('active'));
    indicators.forEach(indicator => indicator.classList.remove('active'));
    
    // Adiciona active class ao slide selecionado
    currentSlide = slideNumber;
    slides[slideNumber - 1].classList.add('active');
    indicators[slideNumber - 1].classList.add('active');
}

// Controles para carrossel de produtos em tablet e mobile
let currentTabletSlide = 1;
let currentMobileSlide = 1;

function changeProductSlide(direction, type) {
    const slides = document.querySelectorAll(`.${type}-only .product-slide`);
    const totalSlides = slides.length;
    
    if (type === 'tablet') {
        currentTabletSlide += direction;
        if (currentTabletSlide > totalSlides) currentTabletSlide = 1;
        if (currentTabletSlide < 1) currentTabletSlide = totalSlides;
    } else {
        currentMobileSlide += direction;
        if (currentMobileSlide > totalSlides) currentMobileSlide = 1;
        if (currentMobileSlide < 1) currentMobileSlide = totalSlides;
    }
    
    // Remove active class de todos os slides
    slides.forEach(slide => slide.classList.remove('active'));
    
    // Adiciona active class ao slide atual
    const currentSlide = document.querySelector(`.${type}-only .product-slide[data-${type}-slide="${type === 'tablet' ? currentTabletSlide : currentMobileSlide}"]`);
    if (currentSlide) {
        currentSlide.classList.add('active');
    }
}

// Auto-play para carrossel principal
setInterval(() => {
    changeSlide(1);
}, 8000);

// Auto-play para carrossel de produtos
setInterval(() => {
    if (window.innerWidth <= 768) {
        changeProductSlide(1, 'mobile');
    } else if (window.innerWidth <= 1024) {
        changeProductSlide(1, 'tablet');
    }
}, 5000);
</script>