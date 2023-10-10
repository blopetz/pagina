<?php
session_start();

// Comprueba si el usuario está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}

// A partir de aquí, el usuario está autenticado y puedes mostrar la página de administrador

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/admin_css/admin.css?<? echo time(); ?>">
  <title>Modo Admin</title>
</head>
<body>

    <?php include('../includes/panel.php'); ?>

  </body>
</html>