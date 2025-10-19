/**
 * MIB - Mangueiras de Incêndio Brasil
 * JavaScript Principal - Site Modernizado
 * 
 * @author Biss Solutions
 * @version 2.0
 * @since 2025
 */

// Aguardar o DOM estar carregado
document.addEventListener('DOMContentLoaded', function() {
    
    // Inicializar funcionalidades
    initCookieBanner();
    initSmoothScrolling();
    initNavbarScroll();
    initAnimations();
    initFormValidation();
    initHeroCarousel();
    
    console.log('MIB Site carregado com sucesso! 🔥');
});

/**
 * Sistema de Cookies (LGPD)
 */
function initCookieBanner() {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookiesAccepted = localStorage.getItem('mib_cookies_accepted');
    
    if (!cookiesAccepted && cookieBanner) {
        // Mostrar banner após 2 segundos
        setTimeout(() => {
            cookieBanner.classList.add('show');
        }, 2000);
    }
}

function acceptCookies() {
    localStorage.setItem('mib_cookies_accepted', 'true');
    localStorage.setItem('mib_cookies_timestamp', Date.now());
    
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner) {
        cookieBanner.classList.remove('show');
    }
    
    // Mostrar confirmação
    showNotification('Cookies aceitos com sucesso!', 'success');
}

function rejectCookies() {
    localStorage.setItem('mib_cookies_accepted', 'false');
    localStorage.setItem('mib_cookies_timestamp', Date.now());
    
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner) {
        cookieBanner.classList.remove('show');
    }
    
    // Mostrar confirmação
    showNotification('Cookies recusados. Algumas funcionalidades podem não funcionar.', 'info');
}

/**
 * Rolagem Suave para Links Internos
 */
function initSmoothScrolling() {
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    
    internalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.header-main').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

/**
 * Navegação com Efeito de Scroll
 */
function initNavbarScroll() {
    const header = document.querySelector('.header-main');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScrollTop = scrollTop;
    });
}

/**
 * Animações de Entrada
 */
function initAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observar elementos para animação
    const animatedElements = document.querySelectorAll('.feature-card, .product-card, .section-title, .section-subtitle');
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

/**
 * Validação de Formulários
 */
function initFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        // Pular validação JavaScript para formulários de contato (deixar PHP processar)
        if (form.classList.contains('contact-form') || form.classList.contains('contact-form-simple')) {
            console.log('Formulário de contato detectado - validação JavaScript desabilitada');
            return;
        }
        
        form.addEventListener('submit', function(e) {
            if (!validateForm(this)) {
                e.preventDefault();
            }
        });
        
        // Validação em tempo real
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                clearFieldError(this);
            });
        });
    });
}

function validateForm(form) {
    let isValid = true;
    const requiredFields = form.querySelectorAll('[required]');
    
    requiredFields.forEach(field => {
        if (!validateField(field)) {
            isValid = false;
        }
    });
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let errorMessage = '';
    
    // Limpar erros anteriores
    clearFieldError(field);
    
    // Validações específicas
    if (field.hasAttribute('required') && !value) {
        errorMessage = 'Este campo é obrigatório';
        isValid = false;
    } else if (field.type === 'email' && value && !isValidEmail(value)) {
        errorMessage = 'Email inválido';
        isValid = false;
    } else if (field.type === 'tel' && value && !isValidPhone(value)) {
        errorMessage = 'Telefone inválido';
        isValid = false;
    }
    
    if (!isValid) {
        showFieldError(field, errorMessage);
    }
    
    return isValid;
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function isValidPhone(phone) {
    const phoneRegex = /^[\d\s\-\+\(\)]+$/;
    return phoneRegex.test(phone) && phone.replace(/\D/g, '').length >= 10;
}

function showFieldError(field, message) {
    field.classList.add('is-invalid');
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'invalid-feedback';
    errorDiv.textContent = message;
    
    field.parentNode.appendChild(errorDiv);
}

function clearFieldError(field) {
    field.classList.remove('is-invalid');
    
    const errorDiv = field.parentNode.querySelector('.invalid-feedback');
    if (errorDiv) {
        errorDiv.remove();
    }
}

/**
 * Sistema de Notificações
 */
function showNotification(message, type = 'info') {
    // Função desabilitada - não mostrar toaster
    console.log('showNotification desabilitada:', message, type);
    return;
}

/**
 * Lazy Loading para Imagens
 */
function initLazyLoading() {
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        const lazyImages = document.querySelectorAll('img[data-src]');
        lazyImages.forEach(img => imageObserver.observe(img));
    }
}

/**
 * Melhorar Performance de Scroll
 */
function initScrollOptimization() {
    let ticking = false;
    
    function updateOnScroll() {
        // Aqui você pode adicionar lógica para otimizar scroll
        ticking = false;
    }
    
    function requestTick() {
        if (!ticking) {
            requestAnimationFrame(updateOnScroll);
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', requestTick);
}

/**
 * Analytics e Tracking (se necessário)
 */
function initAnalytics() {
    // Verificar se cookies foram aceitos
    const cookiesAccepted = localStorage.getItem('mib_cookies_accepted');
    
    if (cookiesAccepted === 'true') {
        // Aqui você pode inicializar Google Analytics, Facebook Pixel, etc.
        console.log('Analytics habilitado - cookies aceitos');
    } else {
        console.log('Analytics desabilitado - cookies não aceitos');
    }
}

/**
 * Funcionalidades de Acessibilidade
 */
function initAccessibility() {
    // Navegação por teclado
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            document.body.classList.add('keyboard-navigation');
        }
    });
    
    document.addEventListener('mousedown', function() {
        document.body.classList.remove('keyboard-navigation');
    });
    
    // Pular para conteúdo principal
    const skipLink = document.createElement('a');
    skipLink.href = '#main-content';
    skipLink.className = 'skip-link';
    skipLink.textContent = 'Pular para o conteúdo principal';
    
    if (document.body.firstChild) {
        document.body.insertBefore(skipLink, document.body.firstChild);
    }
}

/**
 * Utilitários
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Exportar funções para uso global
window.MIB = {
    showNotification,
    acceptCookies,
    rejectCookies
};

/**
 * Modal de Contato - Funções Globais
 */
window.openContactModal = function() {
    console.log('openContactModal chamada!');
    const modal = document.getElementById('contactModal');
    if (modal) {
        modal.classList.add('show');
        document.body.style.overflow = 'hidden'; // Previne scroll da página
        
        // Focar no primeiro campo do formulário
        setTimeout(() => {
            const firstInput = modal.querySelector('input, select, textarea');
            if (firstInput) {
                firstInput.focus();
            }
        }, 300);
        
        // Adicionar listener para fechar com ESC
        document.addEventListener('keydown', handleEscKey);
    } else {
        console.error('Modal não encontrado!');
    }
};

window.closeContactModal = function() {
    // Função desabilitada - não mostrar toaster
    console.log('closeContactModal desabilitada - formulário simples');
    return;
};

function handleEscKey(e) {
    if (e.key === 'Escape') {
        closeContactModal();
    }
}

// Fechar modal ao clicar fora dele
document.addEventListener('click', function(e) {
    const modal = document.getElementById('contactModal');
    if (modal && e.target === modal) {
        closeContactModal();
    }
});

// Processar formulário do modal (removido - causava duplicação)
// O formulário agora é processado diretamente pelo PHP

// Inicializar funcionalidades adicionais quando necessário
window.addEventListener('load', function() {
    initLazyLoading();
    initScrollOptimization();
    initAnalytics();
    initAccessibility();
});

/**
 * ===== FUNÇÕES DO CARROSSEL =====
 */

/**
 * Inicializar Carrossel da Hero Section
 */
function initHeroCarousel() {
    console.log('🚀 Inicializando carrossel...');
    
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    
    console.log('📱 Slides encontrados:', slides.length);
    console.log('🔘 Indicadores encontrados:', indicators.length);
    
    if (slides.length === 0) {
        console.error('❌ Nenhum slide encontrado!');
        return;
    }
    
    // Garantir que o primeiro slide esteja ativo
    slides.forEach((slide, index) => {
        slide.classList.remove('active');
        if (indicators[index]) {
            indicators[index].classList.remove('active');
        }
    });
    
    slides[0].classList.add('active');
    if (indicators[0]) {
        indicators[0].classList.add('active');
    }
    
    console.log('✅ Primeiro slide ativado');
    
    // Auto-play do carrossel
    setInterval(() => {
        console.log('🔄 Auto-play executando...');
        changeSlide(1);
    }, 8000);
    
    // Suporte para teclas de seta
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            console.log('⬅️ Seta esquerda');
            changeSlide(-1);
        } else if (e.key === 'ArrowRight') {
            console.log('➡️ Seta direita');
            changeSlide(1);
        }
    });
    
    // Suporte para swipe
    let startX = 0;
    let endX = 0;
    
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        heroSection.addEventListener('touchstart', function(e) {
            startX = e.touches[0].clientX;
        });
        
        heroSection.addEventListener('touchend', function(e) {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });
    }
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = startX - endX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                changeSlide(1);
            } else {
                changeSlide(-1);
            }
        }
    }
    
    console.log('✅ Carrossel inicializado!');
}

/**
 * Mudar Slide do Carrossel
 */
function changeSlide(direction) {
    console.log('🔄 Mudando slide, direção:', direction);
    
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    
    if (slides.length === 0) return;
    
    let currentSlide = 0;
    
    // Encontrar slide atual
    slides.forEach((slide, index) => {
        if (slide.classList.contains('active')) {
            currentSlide = index;
        }
    });
    
    console.log('📍 Slide atual:', currentSlide);
    
    // Calcular próximo slide
    let nextSlide = currentSlide + direction;
    
    if (nextSlide >= slides.length) {
        nextSlide = 0;
    } else if (nextSlide < 0) {
        nextSlide = slides.length - 1;
    }
    
    console.log('🎯 Próximo slide:', nextSlide);
    
    // Aplicar transições direcionais
    if (direction > 0) {
        // Indo para direita (próximo slide)
        slides[currentSlide].classList.add('slide-out-left');
        slides[nextSlide].classList.add('slide-in-right');
    } else {
        // Indo para esquerda (slide anterior)
        slides[currentSlide].classList.add('slide-out-right');
        slides[nextSlide].classList.add('slide-in-left');
    }
    
    // Remover classe active do slide atual
    slides[currentSlide].classList.remove('active');
    if (indicators[currentSlide]) {
        indicators[currentSlide].classList.remove('active');
    }
    
    // Adicionar classe active ao próximo slide
    slides[nextSlide].classList.add('active');
    if (indicators[nextSlide]) {
        indicators[nextSlide].classList.add('active');
    }
    
    console.log('✅ Slide', nextSlide, 'ativado!');
    
    // Limpar classes de transição após a animação
    setTimeout(() => {
        slides.forEach(slide => {
            slide.classList.remove('slide-in-left', 'slide-in-right', 'slide-out-left', 'slide-out-right');
        });
    }, 800);
}

/**
 * Ir para Slide Específico
 */
function goToSlide(slideNumber) {
    console.log('🎯 Indo para slide:', slideNumber);
    
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    const targetSlide = slideNumber - 1;
    
    if (targetSlide >= 0 && targetSlide < slides.length) {
        // Encontrar slide ativo atual
        let currentSlide = 0;
        slides.forEach((slide, index) => {
            if (slide.classList.contains('active')) {
                currentSlide = index;
            }
        });
        
        // Determinar direção da transição
        if (targetSlide > currentSlide) {
            // Indo para direita
            slides[currentSlide].classList.add('slide-out-left');
            slides[targetSlide].classList.add('slide-in-right');
        } else if (targetSlide < currentSlide) {
            // Indo para esquerda
            slides[currentSlide].classList.add('slide-out-right');
            slides[targetSlide].classList.add('slide-in-left');
        }
        
        // Remover classe active de todos os slides
        slides.forEach((slide, index) => {
            slide.classList.remove('active');
            if (indicators[index]) {
                indicators[index].classList.remove('active');
            }
        });
        
        // Ativar slide alvo
        slides[targetSlide].classList.add('active');
        if (indicators[targetSlide]) {
            indicators[targetSlide].classList.add('active');
        }
        
        console.log('✅ Slide', slideNumber, 'ativado diretamente!');
        
        // Limpar classes de transição após a animação
        setTimeout(() => {
            slides.forEach(slide => {
                slide.classList.remove('slide-in-left', 'slide-in-right', 'slide-out-left', 'slide-out-right');
            });
        }, 800);
    }
}
