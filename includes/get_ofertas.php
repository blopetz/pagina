<?php
include 'dbconfig.php';

$sql = "SELECT nombre FROM ofertas";
$result = $conn->query($sql);
$ofertas = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $ofertas[] = $row;
    }
}
?>
