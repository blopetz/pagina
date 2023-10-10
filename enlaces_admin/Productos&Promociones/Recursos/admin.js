// Diccionario de subcategorías para cada categoría
const subcategorias = {
    'computo': ['Computadoras', 'Laptops', 'Impresoras', 'Tablets'],
    'accesorios': ['Perifericos', 'Hardware', 'Cargadores', 'Tintas'],
    'eco_tech': ['Camaras', 'Paneles Solares'],
};

// Obtiene los elementos del formulario
const categoriaSelect = document.getElementById('categoria');
const subcategoriaSelect = document.getElementById('subcategoria');

// Función para actualizar las opciones de subcategoría
function updateSubcategorias() {
    // Obtiene la categoría seleccionada
    const categoria = categoriaSelect.value;

    // Limpia las opciones de subcategoría existentes
    subcategoriaSelect.innerHTML = '';

    // Agrega nuevas opciones de subcategoría basadas en la categoría seleccionada
    for (const subcategoria of subcategorias[categoria]) {
        const option = document.createElement('option');
        option.value = subcategoria;
        option.text = subcategoria;
        subcategoriaSelect.appendChild(option);
    }
}

// Actualiza las opciones de subcategoría cuando cambia la categoría
categoriaSelect.addEventListener('change', updateSubcategorias);

// Actualiza las opciones de subcategoría en la carga de la página
updateSubcategorias();
