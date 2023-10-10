<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'get_products.php';  // Incluir el archivo que obtiene los productos

if (count($productos) > 0) {
    foreach ($productos as $producto) {
        echo "<div>";
        echo "<img src='" . $producto['imagen'] . "' alt='Imagen de producto'>";
        echo "<h2>" . $producto['nombre'] . "</h2>";
        echo "<p>" . $producto['descripcion'] . "</p>";
        echo "<h3>S/ " . $producto['precio'] . "</h3>";
        echo "</div>";
    }
} else {
    echo "<div class=\"no-productos\">";
    echo "<p>No hay productos disponibles en este momento.</p>";
    echo "</div>";
}
?>
