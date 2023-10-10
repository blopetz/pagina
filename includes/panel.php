<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin_css/admin.css?<?php echo time(); ?>">
    <title>Panel</title>
</head>
<body>
    <div id="admin-panel">
    <h1>Panel de Administración</h1>
    <ul>
        <li><a href="/admin/admin.php">Inicio</a></li>
        <li>
        <a href="#">Productos y Promociones</a>
        <ul class="submenu">
            <li><a href="/enlaces_admin/Productos&Promociones/productos.php">Productos</a></li>
            <li><a href="/enlaces_admin/Productos&Promociones/ofertas.php">Ofertas</a></li>
        </ul>
        </li>
        <li>
        <a href="#">Centro de Edición</a>
        <ul class="submenu">
            <li><a href="/enlaces_admin/Productos&Promociones/EditManage/ProductManage.php">Product Manage</a></li>
            <li><a href="/enlaces_admin/Productos&Promociones/EditManage/OfertManage.php">Ofert Manage</a></li>
        </ul>
        </li>
    </ul>
    </div>

</body>
</html>