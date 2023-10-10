<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/estilos.css?<?php echo time(); ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>CompuCañete</title>
</head>
<body>
    
    <?php include('../../includes/header.php'); ?>
        
        <div class="container">

            <!-- Cabecera del Delivery -->
            <div class="delivery-header">
                <h1>Servicio de Delivery</h1>
                <p>Entregamos tus productos de tecnología directamente en la puerta de tu hogar o empresa.</p>
                <span class="coming-soon">¡Próximamente!</span>
            </div>

            <!-- Beneficios del Servicio -->
            <div class="delivery-benefits">
                <h2>Beneficios de nuestro servicio</h2>
                <ul>
                    <li>Rapidez: Entregas en tiempo récord, para que no tengas que esperar.</li>
                    <li>Seguridad: Tus productos estarán protegidos y asegurados durante el trayecto.</li>
                    <li>Comodidad: Recibe tus pedidos sin salir de casa.</li>
                    <li>Tracking: Rastrea tu pedido en tiempo real.</li>
                </ul>
            </div>

            <!-- Cómo Funciona -->
            <div class="how-it-works">
                <h2>¿Cómo funciona?</h2>
                <ol>
                    <li>Elige los productos que deseas adquirir y agrégales a tu carrito.</li>
                    <li>Selecciona la opción de "Delivery" al momento de hacer el checkout.</li>
                    <li>Recibirás un correo con la confirmación y detalles de tu envío.</li>
                    <li>Rastrea tu pedido con el código que te proporcionaremos.</li>
                    <li>¡Recibe tus productos en la puerta de tu hogar u oficina!</li>
                </ol>
            </div>

            <!-- Tarifas y Zonas -->
            <div class="rates-zones">
                <h2>Tarifas y zonas de cobertura</h2>
                <p>Ofrecemos tarifas competitivas y diferentes zonas de cobertura. Pronto tendrás acceso a un mapa detallado y una lista de tarifas por zona.</p>
            </div>

            <!-- Preguntas Frecuentes -->
            <div class="faq">
                <h2>Preguntas frecuentes</h2>
                <ul>
                    <li>¿Cómo puedo rastrear mi pedido? - Te proporcionaremos un código único para seguir tu envío en tiempo real.</li>
                    <li>¿Qué hago si mi pedido llega dañado? - Protegemos y aseguramos todos nuestros envíos. Contacta con nuestro equipo de soporte para solucionar cualquier problema.</li>
                    <li>¿Puedo cambiar la dirección de entrega una vez hecho el pedido? - Si el pedido aún no ha salido, puedes ponerte en contacto con nosotros para modificar la dirección.</li>
                </ul>
            </div>

            <!-- Formulario de Contacto -->
            <div class="contact-form">
                <h2>Contacta con nosotros</h2>
                <p>¿Tienes alguna duda o inquietud? No dudes en escribirnos. Estamos aquí para ayudarte.</p>
                <!-- Aquí puedes insertar un formulario de contacto, si lo deseas -->
            </div>

        </div>


    <?php include('../../includes/footer.php'); ?>
    
</body>
</html>