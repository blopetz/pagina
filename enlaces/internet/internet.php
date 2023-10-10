<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/estilos.css?<?php echo time(); ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fontawesome.com/icons/headset?f=classic&s=solid&an=bounce" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
    <title>CompuCañete</title>
</head>
<?php include('../../includes/notification.php'); ?>
<body>
    
    <?php include('../../includes/header.php'); ?>
        
        <div class="contenedor-general">
            <div class="fondo">
                <div id="particulas"></div>
            </div>

            <section class="main-banner">
                <div class="banner-content">
                    <h1>Internet Ilimitado</h1>
                    <p>Con CompuCañete, disfruta de una conexión constante sin preocuparte por límites de datos. Ya sea para trabajo, estudio o entretenimiento, garantizamos velocidades consistentes y un soporte técnico inigualable. Descubre la verdadera libertad en línea con nuestro plan de Internet Ilimitado.</p>
                    <!-- Aquí puedes poner más contenido si lo deseas -->
                </div>
                <div class="banner-image">
                    <img src="/Recursos/imagenes_internet/internet_2.png" alt="Imagen referencial de los planes de internet">
                </div>
            </section>
        </div>

        
        <!-- BANNER INFORMATIVO -->
        <section class="info-banner">
            <p>Información relevante sobre el internet que ofreces. Por ejemplo, "¡Conexión de alta velocidad garantizada!"</p>
        </section>

        <!-- PLANES -->
        <section class="internet-plans">
            <!-- PLAN 1 -->
            <div class="plan">
                <h2>Navegador Ligero</h2>
                <p>Conexión básica para tareas esenciales como correo y navegación web.</p>
                <h3>s/ 45.00</h3>
                <div class="corner-icon icon1"></div>
            </div>
            
            <!-- PLAN 2 -->
            <div class="plan">
                <h2>Conexión Streamer</h2>
                <p>Ideal para streaming y videollamadas en alta definición..</p>
                <h3>s/ 60.00</h3>
                <div class="corner-icon icon2"></div>
            </div>

            <!-- PLAN 3 -->
            <div class="plan">
                <h2>Gamer Pro</h2>
                <p>Velocidades ultrarrápidas para una experiencia de juego en línea fluida.</p>
                <h3>s/ 80.00</h3>
                <div class="corner-icon icon3"></div>
            </div>

            <!-- PLAN 4 -->
            <div class="plan">
                <h2>Ultra Conectividad</h2>
                <p>Máximo rendimiento para profesionales y multitareas exigentes.</p>
                <h3>s/ 120.00</h3>
                <div class="corner-icon icon4"></div>
            </div>
            
        </section>

    <?php include('../../includes/footer.php'); ?>
    <script src="/Recursos/script_recursos/internet_script.js"></script>
</body>
</html>