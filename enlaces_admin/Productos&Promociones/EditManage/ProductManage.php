<?php
session_start();

// Comprueba si el usuario está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/dbconfig.php'; 
    

    // Define tus categorías y subcategorías en arrays:
    $categorias = ['Computo', 'Accesorios', 'Eco-tech'];
    $subcategorias = [
        'Computo' => ['Computadoras','Laptops', 'Impresoras', 'Tablets'],
        'Accesorios' => ['Perifericos', 'Hardware', 'Cargadores','Tintas'],
        'Eco-tech' => ['Camaras', 'Paneles Solares']
    ];

    // Realiza la consulta para obtener todos los productos o filtrados por categoría y subcategoría.
    $queryProductos = "SELECT * FROM productos";
    $whereAdded = false;

    if (isset($_POST['categoria']) && isset($_POST['subcategoria']) && $_POST['categoria'] != 'all' && $_POST['subcategoria'] != 'all') {
        $selectedCategoria = $_POST['categoria'];
        $selectedSubcategoria = $_POST['subcategoria'];
        $queryProductos .= " WHERE categoria = '$selectedCategoria' AND subcategoria = '$selectedSubcategoria'";
        $whereAdded = true;
    }

    // Si no se ha añadido una cláusula WHERE, añade WHERE 1=0 para evitar que se muestren resultados
    if (!$whereAdded) {
        $queryProductos .= " WHERE 1=0";
    }

    $queryProductos .= " ORDER BY fecha_agregado DESC";
    $resultProductos = $conn->query($queryProductos);

    if (!$resultProductos) {
        die("Error en la consulta: " . $conn->error);
    }

    $products = [];
    while ($row = $resultProductos->fetch_assoc()) {
        $products[] = $row;
    }
?>

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
    
        <form action="ProductManage.php" method="post" class="product-filter">
            <select name="categoria" id="categoria" onchange="updateSubcategorias()">
                <option value="all">Seleccione la categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
                <?php endforeach; ?>
            </select>
            
            <select name="subcategoria" id="subcategoria">
                <option value="all">Seleccione la subcategoría</option>
                <!-- Las subcategorías se actualizarán dinámicamente con JavaScript -->
            </select>
            
            <input type="submit" value="Filtrar">
        </form>

        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">                   
                    <img src="<?php echo $product['imagen']; ?>" alt="Icono del producto" class="product-img">
                    <div class="product-info">
                        <h3><?php echo $product['nombre']; ?></h3>
                        <p><?php echo $product['descripcion']; ?></p>
                        <p>Precio: $<?php echo $product['precio']; ?></p>
                        <p>Fecha de ingreso: <?php echo $product['fecha_agregado']; ?></p>
                    </div>
                    <div class="product-actions">
                        <button class="edit-btn" data-id="<?php echo $product['id']; ?>">Editar</button>
                        <button class="delete-btn" data-id="<?php echo $product['id']; ?>">Eliminar</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

            <!-- Formulario de edición -->
        <div class="product-edit">
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="product-title">Título:</label>
                <input type="text" id="product-title" name="title" value="Título actual del producto">
                
                <label for="product-desc">Descripción:</label>
                <textarea id="product-desc" name="description">Descripción actual del producto</textarea>
                
                <label for="product-price">Precio:</label>
                <input type="number" id="product-price" name="price">

                <label for="product-image">Imagen:</label>
                <input type="file" id="product-image" name="image">

                <button type="submit">Actualizar producto</button>
            </form>
        </div>
    </div>

    <script>
        function updateSubcategorias() {
            var cat = document.getElementById("categoria").value;
            console.log("Categoría seleccionada: ", cat);

            var subcatSelect = document.getElementById("subcategoria");
            var subcatOptions = <?php echo json_encode($subcategorias); ?>;
            console.log("Todas las subcategorías: ", subcatOptions);

            // Limpiar opciones actuales
            subcatSelect.innerHTML = "";

            // Añadir opción predeterminada
            var defaultOption = document.createElement("option");
            defaultOption.value = "all";
            defaultOption.textContent = "Todas las subcategorías";
            subcatSelect.appendChild(defaultOption);

            // Añadir subcategorías de la categoría seleccionada
            if (subcatOptions[cat]) {
                console.log("Subcategorías para la categoría seleccionada: ", subcatOptions[cat]);
                subcatOptions[cat].forEach(function(subcat) {
                    var option = document.createElement("option");
                    option.value = subcat;
                    option.textContent = subcat;
                    subcatSelect.appendChild(option);
                });
            }
        }
    </script>


    <script src="botones/botones.js"></script>
</body>
</html>