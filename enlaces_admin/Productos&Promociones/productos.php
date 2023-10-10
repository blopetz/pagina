<?php
session_start();

// Comprueba si el usuario está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/admin_css/admin.css?<?php echo time(); ?>">
  <title>Modo Admin</title>
</head>
<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/panel.php'; ?>

    <div class="content-wrapper">
        <h1 class="titulo-productos">Productos</h1>
        <div class="form-container">
            <form action="/enlaces_admin/Productos&Promociones/Recursos/process_product.php" method="post" class="product-form" enctype="multipart/form-data">
                    <label for="categoria">Categoría</label>
                        <select id="categoria" name="categoria" class="opciones">
                            <option value="computo">Computo</option>
                            <option value="accesorios">Accesorios</option>
                            <option value="eco_tech">Eco-Tech</option>
                        </select>

                            <label for="subcategoria">Subcategoría</label>
                                <select id="subcategoria" name="subcategoria" class="opciones">>
                                    <!-- Las opciones de la subcategoría se llenarán dinámicamente con JavaScript -->
                                </select>
                            
                            <label for="nombre">Nombre:</label><br>
                            <input type="text" id="nombre" name="nombre" class="form-input"><br>
                            <label for="descripcion">Descripción:</label><br>
                            <input type="text" id="descripcion" name="descripcion" class="form-input"><br>
                            <label for="precio">Precio:</label><br>
                            <input type="number" id="precio" name="precio" class="form-input"><br>
                            <label for="imagen">Imagen del producto:</label>
                            <input type="file" id="imagen" name="imagen" accept="image/webp,image/jpeg,image/png">
                
                <input type="submit" value="Añadir producto" class="form-submit">
            </form>
                <?php
                    if (!empty($_SESSION['mensaje'])) {
                        echo "<div class='notificacion'>{$_SESSION['mensaje']}</div>";
                        $_SESSION['mensaje'] = '';
                    }
                ?>
        </div>
    </div>
            
    <script src="/enlaces_admin/Productos&Promociones/Recursos/admin.js"></script>
</body>
</html>