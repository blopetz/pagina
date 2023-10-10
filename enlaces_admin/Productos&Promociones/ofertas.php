<?php
session_start();

// Comprueba si el usuario está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}
// A partir de aquí, el usuario está autenticado y puedes mostrar la página de administrador
?>

<?php
// Activar visualización de errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre_oferta'])) {
    $nombreOferta = $_POST['nombre_oferta'];
    $sql = "INSERT INTO ofertas (nombre) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $nombreOferta);
    if ($stmt->execute()) {
        echo "Oferta agregada con éxito.";
    } else {
        echo "Error al agregar oferta: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin_css/admin.css?<?php echo time(); ?>">
    <title>Modo Admin</title>
</head>
<body>
    
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/panel.php'; ?>

    <div class="content-area">
    <form action="ofertas.php" method="post">
        <label for="nombre_oferta">Nombre de la oferta:</label>
        <input type="text" id="nombre_oferta" name="nombre_oferta">
        <input type="submit" value="Agregar oferta">
    </form>

    <h2>Ofertas:</h2>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/display_ofertas.php';  ?>
    
    </div>
</body>
</html>
