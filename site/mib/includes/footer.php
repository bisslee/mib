    <!-- Footer -->
    <footer class="footer-main">
        <div class="container">
            <div class="row g-4">
                                        <div class="col-lg-4">
                            <img src="<?php echo $site_config['base_url']; ?>/assets/img/logo-tagline.png" alt="MIB Logo" class="footer-logo mb-3">
                            <p class="text-light">Especialistas em equipamentos contra incêndio com mais de 20 anos de experiência no mercado.</p>
                    <div class="social-links">
                        <a href="#" class="social-link" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <!-- <a href="#" class="social-link" title="Bluesky"><i class="fa-brands fa-bluesky"></i></a> -->
                        <a href="#" class="social-link" title="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-link" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link" title="TikTok"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="social-link" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="https://wa.me/5511940258669?text=Olá! Gostaria de informações sobre equipamentos contra incêndio." target="_blank" class="social-link" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-light">Produtos</h5>
                    <ul class="footer-links">
                        <li><a href="mangueiras-de-incendio.php">Mangueiras</a></li>
                        <li><a href="extintores.php">Extintores</a></li>
                        <li><a href="esguichos.php">Esguichos</a></li>
                        <li><a href="hidrantes.php">Hidrantes</a></li>
                    </ul>
                </div>
                
                                 <div class="col-lg-2 col-md-6">
                     <h5 class="text-light">Empresa</h5>
                     <ul class="footer-links">
                         <li><a href="empresa.php">Sobre Nós</a></li>
                         <li><a href="novidades.php">Novidades</a></li>
                         <li><a href="contact.php">Contato</a></li>
                         <li><a href="privacy.php">Política de Privacidade</a></li>
                         <li><a href="all-links.php">Todos os Links</a></li>
                     </ul>
                 </div>
                
                <div class="col-lg-4">
                    <h5 class="text-light">Contato</h5>
                    <div class="contact-info">
                        <p><i class="fas fa-phone me-2"></i>(11) 4442-3565</p>
                        <p><i class="fas fa-mobile-alt me-2"></i>(11) 94025-8669</p>
                        <p><i class="fas fa-envelope me-2"></i>contato@mangueirasdeincendiobrasil.com.br</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i>São Paulo - SP</p>
                    </div>
                </div>
            </div>
            
            <hr class="footer-divider">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light mb-0">&copy; 2025 MIB - Mangueiras de Incêndio Brasil. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-light mb-0">Desenvolvido por <a href="#" class="text-light">Biss Solutions</a></p>
                </div>
            </div>
        </div>
    </footer>

              <!-- WhatsApp Flutuante -->
     <div class="whatsapp-float">
         <a href="https://wa.me/5511940258669?text=Olá! Gostaria de informações sobre equipamentos contra incêndio." target="_blank" class="whatsapp-link">
             <i class="fab fa-whatsapp"></i>
         </a>
     </div>
 
     <!-- Ícone de Contato Flutuante -->
     <div class="contact-float">
         <button class="contact-link" onclick="openContactModal()" title="Entre em Contato">
             <i class="fas fa-envelope"></i>
         </button>
     </div>
 
     <!-- Modal de Contato Completo -->
     <div id="contactModal" class="contact-modal">
         <div class="contact-modal-content">
             <div class="contact-modal-header">
                 <h3>Entre em Contato - MIB</h3>
                 <button class="contact-modal-close" onclick="closeContactModal()">
                     <i class="fas fa-times"></i>
                 </button>
             </div>
             <div class="contact-modal-body">
                 <!-- Informações de Contato -->
                 <div class="contact-info-section mb-4">
                     <h4 class="text-center mb-3">Informações de Contato</h4>
                     <div class="row g-3">
                         <div class="col-md-6">
                             <div class="contact-info-card text-center">
                                 <div class="contact-icon mb-2">
                                     <i class="fas fa-phone fa-2x text-primary"></i>
                                 </div>
                                 <h5>Telefone</h5>
                                 <p class="mb-1">(11) 94025-8669</p>
                                 <small class="text-muted">Segunda a Sexta, 8h às 17h30</small>
                             </div>
                         </div>
                         
                         <div class="col-md-6">
                             <div class="contact-info-card text-center">
                                 <div class="contact-icon mb-2">
                                     <i class="fab fa-whatsapp fa-2x text-success"></i>
                                 </div>
                                 <h5>WhatsApp</h5>
                                 <p class="mb-1">(11) 94025-8669</p>
                                 <small class="text-muted">Atendimento rápido e eficiente</small>
                             </div>
                         </div>
                         
                         <div class="col-md-6">
                             <div class="contact-info-card text-center">
                                 <div class="contact-icon mb-2">
                                     <i class="fas fa-envelope fa-2x text-primary"></i>
                                 </div>
                                 <h5>Email</h5>
                                 <p class="mb-1">contato@mangueirasdeincendiobrasil.com.br</p>
                                 <small class="text-muted">Resposta em até 24 horas</small>
                             </div>
                         </div>
                         
                         <div class="col-md-6">
                             <div class="contact-info-card text-center">
                                 <div class="contact-icon mb-2">
                                     <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                 </div>
                                 <h5>Localização</h5>
                                 <p class="mb-1">São Paulo, SP</p>
                                 <small class="text-muted">Atendemos todo o Brasil</small>
                             </div>
                         </div>
                     </div>
                 </div>
                 
                 <!-- Horário de Atendimento -->
                 <div class="hours-section mb-4">
                     <h4 class="text-center mb-3">Horário de Atendimento</h4>
                     <div class="hours-card text-center">
                         <div class="hours-info">
                             <p class="mb-2"><strong>Segunda a Sexta:</strong> 08:00 às 17:30</p>
                             <p class="mb-2"><strong>Sábado:</strong> 08:00 às 12:00</p>
                             <p class="text-muted">Domingo e feriados: Fechado</p>
                         </div>
                         <div class="emergency-contact mt-3">
                             <p class="text-danger fw-bold">
                                 <i class="fas fa-exclamation-triangle me-2"></i>
                                 Para emergências, entre em contato via WhatsApp
                             </p>
                         </div>
                     </div>
                 </div>
                 
                 <!-- Formulário de Contato -->
                 <div class="form-section">
                     <h4 class="text-center mb-3">Solicite um Orçamento</h4>
                     <div class="contact-form-modal">
                         <?php include 'includes/contact-section.php'; ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>

    <!-- Banner de Cookies -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="mb-0">Utilizamos cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa <a href="privacy.php">Política de Privacidade</a>.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <button class="btn btn-primary btn-sm me-2" onclick="acceptCookies()">Aceitar</button>
                    <button class="btn btn-outline-primary btn-sm" onclick="rejectCookies()">Recusar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $site_config['base_url']; ?>/assets/js/main.js" defer></script>
</body>
</html>
