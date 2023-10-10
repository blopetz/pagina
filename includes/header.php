<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='estilos.css?<?php echo time(); ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>CompuCañete</title>
</head>
<body>
<header>
        <nav class="navbar">
            <a href="/">
            <img src="/Recursos/imagenes_rep/logo_a.png" alt="Logo" class="logo" />
            </a>
            <div class="nav-links">
                <div class="nav-item">
                    <a href="#" class="nav-link" id="boton1">
                        <div class="nav-link-content">
                            <img src="/Recursos/imagenes_index/icon_computadora.png" alt="Icono" class="nav-link-icon" />
                            <span>Cómputo</span>
                        </div>
                    </a>
                    <ul class="dropdown">
                        <li><a href="/enlaces/computo/computadoras.php">Computadoras</a></li>
                        <li><a href="/enlaces/computo/laptops.php">Laptops</a></li>
                        <li><a href="/enlaces/computo/impresoras.php">Impresoras</a></li>
                        <li><a href="/enlaces/computo/tablets.php">Tablets</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link" id="boton2">
                        <div class="nav-link-content">
                            <img src="/Recursos/imagenes_rep/Accesorios.png" alt="Icono" class="nav-link-icon" />
                            <span>Accesorios y Suministros</span>
                        </div>
                    </a>
                    <ul class="dropdown">
                        <li><a href="/enlaces/accesorios/periféricos.php">Periféricos</a></li>
                        <li><a href="/enlaces/accesorios/hardware.php">Hardware</a></li>
                        <li><a href="/enlaces/accesorios/cargadores.php">Cargadores</a></li>
                        <li><a href="/enlaces/accesorios/tintas.php">Tintas</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <a href="#" class="nav-link" id="boton3">
                        <div class="nav-link-content">
                            <img src="/Recursos/imagenes_rep/Eco_Tech.png" alt="Icono" class="nav-link-icon" />
                            <span>Eco-Tech</span>
                        </div>
                    </a>
                    <ul class="dropdown">
                        <li><a href="/enlaces/eco_tech/camaras.php">Camaras</a></li>
                        <li><a href="/enlaces/eco_tech/paneles.php">Paneles Solares</a></li>
                    </ul>
                </div>
                <div class="nav-item">
                    <a href="/enlaces/internet/internet.php" class="nav-link">
                        <div class="nav-link-content">
                            <img src="/Recursos/imagenes_rep/Internet.png" alt="Icono" class="nav-link-icon" />
                            <span>Internet Ilimitado</span>
                        </div>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/enlaces/soporte/soporte_tecnico.php" class="nav-link">
                        <div class="nav-link-content">
                            <img src="/Recursos/imagenes_rep/Soporte.png" alt="Icono" class="nav-link-icon" />
                            <span>Soporte Técnico</span>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
        
    </header>
    <script src="/comand.js"></script>
</body>