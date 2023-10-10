<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbconfig.php';

echo "Delete Product fue llamado.";

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    // Primero, obtén la ruta de la imagen para este producto
    $queryImg = "SELECT imagen FROM productos WHERE id = ?";
    $stmtImg = $conn->prepare($queryImg);
    $stmtImg->bind_param("i", $product_id);
    $stmtImg->execute();
    $resultImg = $stmtImg->get_result();
    $imageData = $resultImg->fetch_assoc();

    // Ahora, elimina el producto de la base de datos
    $queryDelete = "DELETE FROM productos WHERE id = ?";
    $stmtDelete = $conn->prepare($queryDelete);
    $stmtDelete->bind_param("i", $product_id);
    
    if ($stmtDelete->execute()) {
        // Si el producto se eliminó con éxito, elimina también la imagen
        if (isset($imageData['imagen'])) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $imageData['imagen']);
        }
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
}
?>
