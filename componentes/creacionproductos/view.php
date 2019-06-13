<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">

        <?php
        if (
            isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
            && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
        ) {
            echo "        <div id='creacionProductos' class='contenedor'>";
            echo "            <form class='formulariosCreacionMultiple' action='index.php?option=creacionproductos' method='POST'>";
            echo "                <h1>Creación de Producto:</h1>";
            echo "                <div id='divNombreProducto'>";
            echo "                    <label id='labelNombreProducto'>Nombre del Producto: </label><label id='errlabelNombreProducto'></label>";
            echo "                    <input type='text' id='inputNombreProducto' name='inputNombreProducto' placeholder='Introduce Nombre' />";
            echo "                </div>";
            echo "                <div id='divDescripcionProducto'>";
            echo "                    <label id='labelDescripcionProducto'>Descripción: </label>";
            echo "                    <textarea id='inputDescripcionProducto' name='inputDescripcionProducto' rows='4' placeholder='Introduce Descripción'></textarea>";
            echo "                </div>";
            echo "                <div id='divPVPProducto'>";
            echo "                    <label id='labelPVPProducto'>Precio del Producto: </label><label id='errlabelPVPProducto'></label>";
            echo "                    <input type='text' id='inputPVPProducto' name='inputPVPProducto' placeholder='Introduce Precio' />";
            echo "                </div>";
            echo "                <div id='divFechaProducto'>";
            echo "                    <label id='labelFechaProducto'>Fecha del Registro: </label>";
            echo "                    <input type='date' id='inputFechaProducto' name='inputFechaProducto' placeholder='Introduce Fecha del Registro' />";
            echo "                </div>";
            echo "                <div id='divStockProducto'>";
            echo "                    <label id='labelStockProducto'>Stock del Producto: </label><label id='errlabelStockProducto'></label>";
            echo "                    <input type='text' id='inputStockProducto' name='inputStockProducto' placeholder='Introduce Stock' />";
            echo "                </div>";
            echo "                <div id='divTipoProducto'>";
            echo "                    <label id='labelTipoProducto'>Tipo de Producto: </label>";
            echo "                    <select id='inputTipoProducto' name='inputTipoProducto'>";
            echo "                        <option disabled selected>Selecciona un Tipo</option>";


            $results_array = modelCreacionProductos::viewTypeProduct();

            foreach ($results_array as $tipo) {
                echo "<option value='" . $tipo[id_tipo] . "'>"
                    . utf8_encode($tipo[descripcion]) . "</option>";
            }


            echo "                    </select>";
            echo "                </div>";
            echo "                <div id='divBotonesAcceso'>";
            echo "                    <input type='submit' id='submitProducto' name='submitProducto' value='Crear' disabled/>";
            echo "                    <input type='reset' id='resetProducto' name='resetProducto' value='Cancelar' />";
            echo "                </div>";
            echo "            </form>";
            echo "        </div>";
            echo "        <div id='creacionImagenProductos' class='contenedor'>";
            echo "            <form class='formulariosCreacionVarios' action='index.php?option=creacionproductos' method='POST' enctype='multipart/form-data'>";
            echo "                <h1>Subida de Imagen del Producto:</h1>";
            echo "                <div id='divSelectProducto'>";
            echo "                    <label id='labelSelectProducto'>Producto: </label>";
            echo "                    <select id='inputSelectProducto' name='inputSelectProducto'>";
            echo "                        <option disabled selected>Selecciona un Producto</option>";


            $results_array = modelCreacionProductos::viewProductos();
            foreach ($results_array as $producto) {
                echo "<option value='$producto[codigo_articulo]'>"
                    . utf8_encode($producto[nombre]) . "</option>";
            }


            echo "                    </select>";
            echo "                </div>";
            echo "                <div id='divImagenProducto'>";
            echo "                    <label id='labelImagenProducto'>Imagen: </label><br />";
            echo "                    <input name='archivo' type='file' class='form-control' />";
            echo "                    <label for='file-upload' class='custom-file-upload'></label>";
            echo "                </div>";
            echo "                <div id='divBotonesAcceso'>";
            echo "                    <input type='submit' id='submitImagen' name='submitImagen' value='Crear' />";
            echo "                    <input type='reset' id='resetImagen' name='resetImagen' value='Cancelar' />";
            echo "                </div>";
            echo "            </form>";
            echo "        </div>";
        } else {
            echo "<div class='h-100 row align-items-center avisoNoLogin alert alert-warning' role='alert'>";
            echo "Ups!... Parece que ahora mismo no hay ningún usuario en la sesión. <i class='fas fa-frown emoji'></i><br/>";
            echo "Puedes acceder desde <a href='index.php?option=login'>Login</a> o dirigirte a <a href='index.php?option=home'>Inicio</a><br/>";
            echo "</div>";
        }
        ?>

    </div>
</div>
<script src="./js/creaelementos_script.js"></script>