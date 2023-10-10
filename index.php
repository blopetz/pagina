<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/estilos.css?<?php echo time(); ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>CompuCañete</title>
</head>

<?php include('includes/notification.php'); ?>

<body class="home">
        
    <div class="color_index">
    <?php include('includes/header.php'); ?> 
    </div>

    <main>
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Recursos/imagenes_index/imagen1.jpg" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="Recursos/imagenes_index/imagen2.jpg" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="Recursos/imagenes_index/imagen3.jpg" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                    <img src="Recursos/imagenes_index/imagen4.jpg" alt="Imagen 3">
                </div>
            </div>
            <div class="carousel-controls">
                <div class="carousel-button-container">
                    <button id="prev-button" class="carousel-button"><img src="Recursos/imagenes_index/prev.png" alt="prev"></button>
                </div>
                <div class="carousel-button-container">
                    <button id="next-button" class="carousel-button"><img src="Recursos/imagenes_index/next.png" alt="next"></button>
                </div>
            </div>
            
        </div>
        
        
    </main>
    
    <?php include('includes/footer.php'); ?>
    <script src="comand.js"></script>
</body>
</html>
