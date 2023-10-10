<?php
session_start();

// Comprueba si el usuario está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/admin_css/admin.css?<?php echo time(); ?>">
  <title>Modo Admin</title>
</head>
<body>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/panel.php'; ?>

    <div class="content-area">
    <p>a</p>
    </div>

</body>
</html>