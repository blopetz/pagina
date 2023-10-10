<?php
$servername = "localhost";
$username = "ua8lyezmyrx8i";
$password = "Salangmzflt6.";
$dbname = "dbbgbvkgvkvsqw";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>