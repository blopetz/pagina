document.addEventListener("DOMContentLoaded", function() {

    // Función para editar producto
    function editProduct(productId) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/includes/getProductDetails.php?id=' + productId, true);
        xhr.onload = function() {
            if (this.status == 200) {
                var product = JSON.parse(this.responseText);

                // Rellenar el formulario con los detalles del producto
                document.getElementById("product-title").value = product.titulo;
                document.getElementById("product-desc").value = product.descripcion;
                document.getElementById("product-price").value = product.precio;
            }
        }
        xhr.send();
    }

    // Función para eliminar producto
    function deleteProduct(productId) {
        var confirmation = confirm("¿Estás seguro de que quieres eliminar este producto?");
        if (confirmation) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/includes/deleteProduct.php', true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onload = function() {
                if (this.status == 200 && this.responseText == "success") {
                    var productDiv = document.querySelector('.product-item[data-id="' + productId + '"]');
                    productDiv.remove();
                    alert("Producto eliminado con éxito");
                } else {
                    alert("Hubo un error al eliminar el producto. Inténtalo de nuevo.");
                }
            }
            xhr.send("id=" + productId);
        }
    }

    // Event listeners para los botones
    var editButtons = document.querySelectorAll(".edit-btn");
    var deleteButtons = document.querySelectorAll(".delete-btn");

    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var productId = this.getAttribute("data-id");
            editProduct(productId);
        });
    });

    deleteButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var productId = this.getAttribute("data-id");
            deleteProduct(productId);
        });
    });

});
