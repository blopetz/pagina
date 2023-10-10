<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include 'dbconfig.php';

// Preparar la consulta SQL para obtener los productos en la subcategoría especificada
$sql = "SELECT * FROM productos WHERE subcategoria = ?";

// Prepara la sentencia
$stmt = $conn->prepare($sql);

// Enlaza la subcategoría a la sentencia
$stmt->bind_param("s", $subcategoria);

// Ejecuta la sentencia
$stmt->execute();

// Obtiene los resultados
$result = $stmt->get_result();

// Crea un array para almacenar los productos
$productos = [];

// Si la consulta devolvió algún resultado, guarda los productos en el array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $productos[] = $row;
    }
}

$stmt->close();
?>
