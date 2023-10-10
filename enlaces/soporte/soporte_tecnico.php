<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/estilos.css?<?php echo time(); ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>CompuCañete</title>
</head>
<?php include('../../includes/notification.php'); ?>
<body class="soporte">
    
    <?php include('../../includes/header.php'); ?>
        
        <main>
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/Recursos/img_suport/suport_1.jpg" alt="Imagen 1">
                        <div class="overlay">
                            <h1 class="titulo-slide">Especialistas en soporte técnico</h1>
                            <p class="info-slide">Como especialistas locales en soporte técnico, nos enorgullece ser un pilar en nuestra comunidad. Nuestra dedicación y compromiso garantizan que tus sistemas operen de manera óptima.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/Recursos/img_suport/suport_2.jpg" alt="Imagen 2">
                        <div class="overlay">
                            <h1 class="titulo-slide">Planes de soporte a medida</h1>
                            <p class="info-slide">En <b>CompuCañete</b>, ofrecemos planes de soporte personalizados, adaptándonos a tus necesidades para garantizar la eficiencia de tus sistemas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/Recursos/img_suport/suport_3.webp" alt="Imagen 3">
                        <div class="overlay">
                            <h1 class="titulo-slide">¿Problemas de soporte técnico?</h1>
                            <p class="info-slide">No permitas que los inconvenientes técnicos ralenticen tu ritmo. En <b>CompuCañete</b>, estamos listos para ayudarte y resolver cualquier desafío tecnológico que enfrentes.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/Recursos/img_suport/suport_4.jpg" alt="Imagen 4">
                        <div class="overlay">
                            <h1 class="titulo-slide">Soporte técnico a domicilio</h1>
                            <p class="info-slide">Ya no necesitas desplazarte. Ofrecemos un servicio de soporte técnico a domicilio para garantizar que tus dispositivos funcionen sin problemas, en la comodidad de tu hogar o empresa.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/Recursos/img_suport/suport_5.jpg" alt="Imagen 5">
                        <div class="overlay">
                            <h1 class="titulo-slide">Venta de equipos de Computo</h1>
                            <p class="info-slide">Descubre nuestra selección de equipos de cómputo de alta calidad. Ya sea para uso personal o empresarial, contamos con las mejores opciones que se adaptan a tus necesidades.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-controls">
                    <div class="carousel-button-container">
                        <button id="prev-button" class="carousel-button"><img src="/Recursos/imagenes_index/prev.png" alt="prev"></button>
                    </div>
                    <div class="carousel-button-container">
                        <button id="next-button" class="carousel-button"><img src="/Recursos/imagenes_index/next.png" alt="next"></button>
                    </div>
                </div>
            </div>
        </main>
        <section class="servicios">
            <div class="servicio">
                <i class="fas fa-tools icono-servicio"></i>
                <h3>Especialistas en Soporte</h3>
                <p>No permitas que los inconvenientes técnicos ralenticen tu ritmo. Estamos listos para ayudarte.</p>
            </div>
            <div class="servicio">
                <i class="fas fa-laptop icono-servicio"></i>
                <h3>Planes de Soporte a Medida</h3>
                <p>Ofrecemos soluciones personalizadas que se adaptan a las necesidades de cada cliente.</p>
            </div>
            <div class="servicio">
                <i class="fas fa-question-circle icono-servicio"></i>
                <h3>¿Problemas de Soporte Técnico?</h3>
                <p>Estamos aquí para resolver cualquier desafío tecnológico que enfrentes.</p>
            </div>
            <!-- Puedes continuar agregando más bloques de servicios aquí -->
        </section>


    <?php include('../../includes/footer.php'); ?>
    <script src="/comand.js"></script>
</body>
</html>