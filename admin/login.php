<?php
session_start();

// Comprueba si el formulario se ha enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí tendrías que comprobar el nombre de usuario y la contraseña contra tu base de datos
    // Este es sólo un ejemplo, así que estamos asumiendo que el nombre de usuario es "admin" y la contraseña es "password"
    if ($username === 'admin' && $password === 'admin') {
        // Si las credenciales son correctas, marca al usuario como autenticado y redirígelo a admin.php
        $_SESSION['authenticated'] = true;
        header('Location: admin.php');
        exit;
    } else {
        // Si las credenciales no son correctas, muestra un mensaje de error
        $error = 'Nombre de usuario o contraseña incorrectos.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="/admin_css/login.css">
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <?php if (isset($error)): ?>
        <p><?= $error ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>
