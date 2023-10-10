<?php
include 'get_ofertas.php';

if (count($ofertas) > 0) {
    foreach ($ofertas as $oferta) {
        echo "<div>";
        echo "<h2>" . $oferta['nombre'] . "</h2>";
        echo "</div>";
    }
} else {
    echo "<div class=\"no-productos\">";
    echo "<p>No hay Ofertas disponibles en este momento.</p>";
    echo "</div>";
}
?>
