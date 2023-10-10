<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ob_start();

// Conexión a la base de datos
include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // El formulario se ha enviado, es seguro acceder a los datos del formulario.
    if (!isset($_POST['nombre']) || !isset($_POST['subcategoria']) || !isset($_POST['descripcion']) || !isset($_POST['precio']) || !isset($_FILES['imagen'])) {
        // Uno o más campos esperados no están presentes en la solicitud POST
        echo "Error: Formulario incompleto.";
        exit;
    }

    // Asegurarse de que se subió una imagen y que es del tipo correcto
    $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/webp'];
    if (!in_array($_FILES['imagen']['type'], $allowedMimeTypes)) {
        echo "Error: Tipo de archivo no permitido. Solo se permiten imágenes JPEG, PNG y WebP.";
        exit;
    }

    $nombreProducto = $_POST['nombre'];
    $categoriaProducto = $_POST['categoria'];
    $subcategoriaProducto = $_POST['subcategoria'];
    $descripcionProducto = $_POST['descripcion'];
    $precioProducto = $_POST['precio'];
    
    // Get the original name of the uploaded file
    $originalFilename = basename($_FILES['imagen']['name']);

        // Create the directory for the category if it doesn't exist
        $dir = '../../../Recursos/productos' . $subcategoriaProducto;
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        // Create the file name based on the original name and a timestamp
        $timestamp = time();
        $filename = $dir . '/' . $timestamp . '_' . $originalFilename;

        // Move the uploaded file to the category directory
        if (!move_uploaded_file($_FILES['imagen']['tmp_name'], $filename)) {
            // There was an issue uploading the file
            echo 'Hubo un error al subir la imagen.';
            exit;
        }

    // Preparar la consulta SQL
    $stmt = $conn->prepare('INSERT INTO productos (nombre, subcategoria, descripcion, precio, imagen, categoria) VALUES (?, ?, ?, ?, ?, ?)');

    // Enlazar variables a la sentencia preparada como parámetros
    $stmt->bind_param("ssssss", $nombreProducto, $subcategoriaProducto, $descripcionProducto, $precioProducto, $filename, $categoriaProducto);

    // Ejecutar la sentencia preparada
    if ($stmt->execute()) {            
        $_SESSION['mensaje'] = 'El producto se agregó exitosamente.';

        // Redirige al usuario de vuelta a productos.php
        header('Location: ../productos.php');
        exit;
    } else {
        echo "Algo salió mal. Por favor, inténtalo de nuevo más tarde.";
    }
    
    // Cerrar la sentencia
    $stmt->close();
} else {
    echo "Algo salió mal. Por favor, inténtalo de nuevo más tarde.";
}

// Cerrar la conexión
$conn->close();
?>