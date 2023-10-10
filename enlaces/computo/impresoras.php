<?php
$subcategoria = 'impresoras';
include '../../includes/get_products.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/estilos.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>CompuCañete</title>
</head>
<?php include('../../includes/notification.php'); ?>
<body>
    
    <?php include('../../includes/header.php'); ?>
    
    <h1 class="titulo_producto">Impresoras</h1>

    <div class="productos-container">
        <?php
            include '../../includes/display_products.php';
        ?>
    </div>

    <?php include('../../includes/footer.php'); ?>
</body>
</html>