<?php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbconfig.php';

echo "Get Product Details fue llamado.";

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    $query = "SELECT * FROM productos WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    
    echo json_encode($product);
}
?>
