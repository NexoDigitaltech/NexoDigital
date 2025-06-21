<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexoDigital - Soluciones tech para PYMEs</title>
    <!-- Bootstrap + Animate.css + AOS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="./css/style.css" rel="stylesheet">
    <a href="https://wa.me/51999888777" class="whatsapp-float animate__animated animate__bounceIn">
    <i class="bi bi-whatsapp"></i>
</a>
</head>
<body>
    <!-- Navbar con efecto scroll -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" width="40" class="d-inline-block align-top me-2"> 
                NexoDigital
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#casos">Casos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

   
   <!-- Hero Section con Video Background & Efectos -->
<header class="hero-section position-relative overflow-hidden">
    <!-- Video de fondo (opcional) -->
    <div class="hero-video-wrapper">
        <video autoplay muted loop playsinline class="position-absolute">
            <source src="Banner3.mp4" type="video/mp4">
            <!-- Fallback para móviles/imagen -->
        </video>
        <div class="video-overlay"></div>
    </div>

    <!-- Contenido principal -->
    <div class="container position-relative z-index-1">
        <div class="row min-vh-80 align-items-center py-5">
            <div class="col-lg-8 text-center text-lg-start" data-aos="fade-right">
                <!-- Badge animado -->
                <span class="badge bg-primary bg-opacity-25 text-white mb-3 animate__animated animate__fadeInDown animate__delay-1s">
                    <i class="bi bi-star-fill me-2"></i>Transformando tu empresa
                </span>
                
                <!-- Título con efecto máquina de escribir -->
                <h1 class="display-3 fw-bold text-white mb-3 typewriter"> NexoDigital Soluciones Tech tu Medida <span class="text-primary"></span>
                </h1>
                
                <!-- Subtítulo -->
                <p class="lead text-white-50 mb-4" data-aos="fade-right" data-aos-delay="300">
                    Deja que la tecnología impulse tus ventas mientras tú te enfocas en lo importante.
                </p>
                
                <!-- CTA con efecto hover -->
                
                
                <!-- Trust badges -->
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start align-items-center mt-4 gap-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-check-circle-fill text-success fs-4"></i>
                        </div>
                        <span class="text-white-50 small">+ x proyectos exitosos</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <i class="bi bi-people-fill text-info fs-4"></i>
                        </div>
                        <span class="text-white-50 small">Clientes en x países</span>
                    </div>
                </div>
            </div>
            
            <!-- Imagen decorativa (opcional) 
            <div class="col-lg-4 d-none d-lg-block" data-aos="fade-left">
                <div class="hero-image-wrapper p-4">
                    <img src="RecepcionT1_C.png" alt="Dashboard app" class="img-fluid floating">
                </div>
            </div>
        </div>
    </div>-->

    <!-- Flecha de scroll down -->
    
</header>

     <!-- ======= Sección Servicios Completa ======= -->
    <section id="servicios" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-down">Nuestros Servicios</h2>
            <div class="row">
                <!-- Servicio 1 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-globe fs-1 text-primary"></i>
                            </div>
                            <h3 class="card-title">Desarrollo Web</h3>
                            <p class="card-text">Sitios rápidos, responsive y optimizados para SEO.</p>
                            <ul class="text-start mt-3">
                                <li>Landing Pages</li>
                                <li>Tiendas Online</li>
                                <li>Webs Corporativas</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-phone fs-1 text-primary"></i>
                            </div>
                            <h3 class="card-title">Apps Móviles</h3>
                            <p class="card-text">Aplicaciones nativas e híbridas para iOS y Android.</p>
                            <ul class="text-start mt-3">
                                <li>Apps de Productividad</li>
                                <li>E-commerce Móvil</li>
                                <li>Integración con APIs</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-gear fs-1 text-primary"></i>
                            </div>
                            <h3 class="card-title">Software a Medida</h3>
                            <p class="card-text">Soluciones personalizadas para tu negocio.</p>
                            <ul class="text-start mt-3">
                                <li>Sistemas ERP/CRM</li>
                                <li>Gestión de Inventario</li>
                                <li>Automatización de Procesos</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Servicio 4 
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-headset fs-1 text-primary"></i>
                            </div>
                            <h3 class="card-title">Soporte Técnico</h3>
                            <p class="card-text">Asistencia continua para tus sistemas.</p>
                            <ul class="text-start mt-3">
                                <li>Mantenimiento Preventivo</li>
                                <li>Resolución de Incidencias</li>
                                <li>Actualizaciones</li>
                            </ul>
                        </div>
                    </div>
                </div>-->

                <!-- Servicio 5 
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-graph-up fs-1 text-primary"></i>
                            </div>
                            <h3 class="card-title">Marketing Digital</h3>
                            <p class="card-text">Aumenta tu presencia online.</p>
                            <ul class="text-start mt-3">
                                <li>SEO y SEM</li>
                                <li>Redes Sociales</li>
                                <li>Email Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>-->

                <!-- Servicio 6 
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card service-card h-100">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">
                                <i class="bi bi-shield-check fs-1 text-primary"></i>
                            </div>
                            <h3 class="card-title">Ciberseguridad</h3>
                            <p class="card-text">Protege tus datos y sistemas.</p>
                            <ul class="text-start mt-3">
                                <li>Auditorías de Seguridad</li>
                                <li>Protección de Datos</li>
                                <li>Backups Automatizados</li>
                            </ul>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    

    <!-- Script para el efecto "back to top" -->
    <a href="#" id="back-to-top" class="btn btn-primary btn-lg back-to-top" role="button">
        <i class="bi bi-arrow-up"></i>
    </a>


    <!-- Caso de éxito con slider -->
    <section id="casos-exito" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-down">Casos de Éxito Reales</h2>
        
        <!-- Caso 1: Restaurante -->
        <div class="row align-items-center mb-5 g-4" data-aos="fade-right">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <img src="RecepcionT1_C.png" class="card-img-top" alt="Restaurante Los Sabores" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">+45% ventas</span>
                        <h3 class="h4">Restaurante "Los Sabores"</h3>
                        <p class="text-muted">Transformamos su menú físico en una experiencia digital.</p>
                        <ul class="list-unstyled">
                            <li class="mb-1"><i class="bi bi-check-circle text-primary me-2"></i> Web con reservas online y pedidos a domicilio.</li>
                            <li class="mb-1"><i class="bi bi-check-circle text-primary me-2"></i> Integración con WhatsApp para confirmaciones.</li>
                            <li><i class="bi bi-check-circle text-primary me-2"></i> Tiempo de desarrollo: <strong>2 semanas</strong>.</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm">Ver proyecto completo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 p-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <img src="RecepcionT1_C.png" class="rounded-circle me-3" width="60" alt="Cliente">
                        <div>
                            <h4 class="h6 mb-0">Carlos Mendoza</h4>
                            <small class="text-muted">Dueño del restaurante</small>
                        </div>
                    </div>
                    <blockquote class="blockquote fs-5">
                        <p>"NexoDigital no solo nos hizo una web, nos dio una herramienta para competir con cadenas grandes. En 1 mes recuperamos la inversión."</p>
                    </blockquote>
                    <div class="stars text-warning mb-3">
                        ★★★★★ (4.9/5)
                    </div>
                    <div class="d-flex">
                        <div class="pe-4 border-end">
                            <p class="h2 text-primary mb-0">45%</p>
                            <small class="text-muted">Aumento en ventas</small>
                        </div>
                        <div class="px-4">
                            <p class="h2 text-primary mb-0">80%</p>
                            <small class="text-muted">Pedidos online</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Caso 2: Tienda de Ropa -->
        <div class="row align-items-center mb-5 g-4" data-aos="fade-left">
            <div class="col-md-6 order-md-2">
                <div class="card border-0 shadow-sm h-100">
                    <img src="RecepcionT1_C.png" class="card-img-top" alt="ModaExpress" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">+30% clientes</span>
                        <h3 class="h4">Tienda "ModaExpress"</h3>
                        <p class="text-muted">De vender solo en físico a expandirse a 3 regiones.</p>
                        <ul class="list-unstyled">
                            <li class="mb-1"><i class="bi bi-check-circle text-primary me-2"></i> E-commerce con pasarela de pago.</li>
                            <li class="mb-1"><i class="bi bi-check-circle text-primary me-2"></i> Sistema de inventario automatizado.</li>
                            <li><i class="bi bi-check-circle text-primary me-2"></i> ROI: <strong>220% en 6 meses</strong>.</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary btn-sm">Ver proyecto completo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-md-1">
                <div class="p-4 p-lg-5">
                    <div class="d-flex align-items-center mb-3">
                        <img src="RecepcionT1_C.png" class="rounded-circle me-3" width="60" alt="Cliente">
                        <div>
                            <h4 class="h6 mb-0">Laura Fernández</h4>
                            <small class="text-muted">CEO de ModaExpress</small>
                        </div>
                    </div>
                    <blockquote class="blockquote fs-5">
                        <p>"Antes vendíamos solo a locales. Ahora el 60% de nuestros ingresos viene de otras ciudades gracias a la tienda online que nos desarrollaron."</p>
                    </blockquote>
                    <div class="d-flex">
                        <div class="pe-4 border-end">
                            <p class="h2 text-primary mb-0">3x</p>
                            <small class="text-muted">Más clientes</small>
                        </div>
                        <div class="px-4">
                            <p class="h2 text-primary mb-0">6</p>
                            <small class="text-muted">Nuevas regiones</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>

   
            <!-- ======= Sección Contacto Mejorada ======= -->
<section id="contacto" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-down">
                <h2 class="mb-4">¿Listo para transformar tu negocio?</h2>
                <p class="lead mb-5">Déjanos tus datos y en <span class="text-primary fw-bold">24 horas</span> te enviaremos una propuesta personalizada <u>sin costo</u>.</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="zoom-in">
                <div class="contact-card p-4 p-md-5 shadow-lg rounded-4">
                    <form id="contactForm" action="./contacto.php" method="POST" class="needs-validation" novalidate>
                        <!-- Campo Nombre -->
                        <div class="mb-4">
                            <label for="nombre" class="form-label fw-bold">Nombre completo *</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control py-2" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required>
                                <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                            </div>
                        </div>
                        
                        <!-- Campo Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">Email *</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control py-2" id="email" name="email" placeholder="tucorreo@empresa.com" required>
                                <div class="invalid-feedback">Ingresa un email válido.</div>
                            </div>
                        </div>
                        
                        <!-- Campo Teléfono -->
                        <div class="mb-4">
                            <label for="telefono" class="form-label fw-bold">WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white"><i class="bi bi-whatsapp"></i></span>
                                <input type="tel" class="form-control py-2" id="telefono" name="telefono" placeholder="+57 ">
                            </div>
                        </div>
                        
                        <!-- Selector de Servicio -->
                        <div class="mb-4">
                            <label for="servicio" class="form-label fw-bold">¿Qué necesitas? *</label>
                            <select class="form-select py-2" id="servicio" name="servicio" required>
                                <option value="" selected disabled>Selecciona un servicio</option>
                                <option value="web">Desarrollo Web</option>
                                <option value="app">App Móvil</option>
                                <option value="software">Software a Medida</option>
                                <option value="marketing">Marketing Digital</option>
                                <option value="otros">Otros</option>
                            </select>
                            <div class="invalid-feedback">Selecciona una opción.</div>
                        </div>
                        
                        <!-- Campo Mensaje -->
                        <div class="mb-4">
                            <label for="mensaje" class="form-label fw-bold">Cuéntanos más *</label>
                            <textarea class="form-control py-2" id="mensaje" name="mensaje" rows="4" placeholder="Ej: Necesito una web para mi restaurante con menú online..." required></textarea>
                            <div class="invalid-feedback">Describe brevemente tu proyecto.</div>
                        </div>
                        
                        <!-- Checkbox GDPR -->
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="privacidad" required>
                            <label class="form-check-label small" for="privacidad">Acepto la <a href="#" class="text-primary">política de privacidad</a> *</label>
                        </div>
                        
                        <!-- Botón de envío -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg py-2">
                                <i class="bi bi-send-fill me-2"></i> Enviar consulta
                            </button>
                        </div>
                    </form>
                    
                    <!-- Llamada alternativa -->
<div class="text-center mt-4">
    <p class="small mb-2">¿Prefieres hablar directamente?</p>
    <a href="https://wa.me/573013897141" target="_blank" class="btn btn-success px-4">
        <i class="bi bi-whatsapp me-2"></i> Chatea por WhatsApp
    </a>
</div>

                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/scripts.js"></script>
    <script>
        // Inicializar AOS (Animate On Scroll)
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    <!-- ======= Footer ======= -->
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- Columna 1: Logo y descripción -->
                <div class="col-md-4 mb-4">
                    <img src="logo.png" alt="NexoDigital" width="120" class="mb-3">
                    <p>Somos tu aliado tecnológico para el crecimiento de tu PYME.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white me-2"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-linkedin fs-4"></i></a>
                        <a href="#" class="text-white me-2"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-github fs-4"></i></a>
                    </div>
                </div>

                <!-- Columna 2: Enlaces rápidos -->
                <div class="col-md-2 mb-4">
                    <h5 class="mb-3">Enlaces</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#servicios" class="text-white">Servicios</a></li>
                        <li class="mb-2"><a href="#casos" class="text-white">Casos de Éxito</a></li>
                        <li class="mb-2"><a href="#contacto" class="text-white">Contacto</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Contacto -->
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Contacto</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i> Lima, Perú</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i> +51 999 888 777</li>
                        <li><i class="bi bi-envelope me-2"></i> hola@nexodigital.com</li>
                    </ul>
                </div>

                <!-- Columna 4: Newsletter -->
                <div class="col-md-3 mb-4">
                    <h5 class="mb-3">Newsletter</h5>
                    <p>Suscríbete para recibir consejos tech.</p>
                    <form class="mt-3">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Tu email">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="my-4 bg-light">

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2023 NexoDigital. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white me-3">Términos</a>
                    <a href="#" class="text-white">Privacidad</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>