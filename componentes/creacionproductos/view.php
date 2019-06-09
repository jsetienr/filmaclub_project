<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
        <div id="creacionProductos" class="contenedor">
            <form class="formulariosCreacionMultiple" action="index.php?option=creacionproductos" method="POST">
                <h1>Creación de Producto:</h1>
                <div id="divNombreProducto">
                    <label id="labelNombreProducto">Nombre del Producto: </label><label id="errlabelNombreProducto"></label>
                    <input type="text" id="inputNombreProducto" name="inputNombreProducto" placeholder="Introduce Nombre" />
                </div>
                <div id="divDescripcionProducto">
                    <label id="labelDescripcionProducto">Descripción: </label>
                    <textarea id="inputDescripcionProducto" name="inputDescripcionProducto" rows="4" placeholder="Introduce Descripción"></textarea>
                </div>
                <div id="divPVPProducto">
                    <label id="labelPVPProducto">Precio del Producto: </label><label id="errlabelPVPProducto"></label>
                    <input type="text" id="inputPVPProducto" name="inputPVPProducto" placeholder="Introduce Precio" />
                </div>
                <div id="divFechaProducto">
                    <label id="labelFechaProducto">Fecha del Registro: </label>
                    <input type="date" id="inputFechaProducto" name="inputFechaProducto" placeholder="Introduce Fecha del Registro" />
                </div>
                <div id="divStockProducto">
                    <label id="labelStockProducto">Stock del Producto: </label><label id="errlabelStockProducto"></label>
                    <input type="text" id="inputStockProducto" name="inputStockProducto" placeholder="Introduce Stock" />
                </div>
                <div id="divTipoProducto">
                    <label id="labelTipoProducto">Tipo de Producto: </label>
                    <select id="inputTipoProducto" name="inputTipoProducto">
                        <option disabled selected>Selecciona un Tipo</option>
                        <?php
                        $results_array = modelCreacionProductos::viewTypeProduct();

                        foreach ($results_array as $tipo) {
                            echo "<option value='".$tipo[id_tipo]."'>"
                                . utf8_encode($tipo[descripcion]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitProducto" name="submitProducto" value="Crear" />
                    <input type="reset" id="resetProducto" name="resetProducto" value="Cancelar" />
                </div>
            </form>
        </div>
        <div id="creacionImagenProductos" class="contenedor">
            <form class="formulariosCreacionVarios" action="index.php?option=creacionproductos" method="POST" enctype="multipart/form-data">
                <h1>Subida de Imagen del Producto:</h1>
                <div id="divSelectProducto">
                    <label id="labelSelectProducto">Producto: </label>
                    <select id="inputSelectProducto" name="inputSelectProducto">
                        <option disabled selected>Selecciona un Producto</option>
                        <?php
                        $results_array = modelCreacionProductos::viewProductos();
                        foreach ($results_array as $producto) {
                            echo "<option value='$producto[codigo_articulo]'>"
                                . utf8_encode($producto[nombre]) . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div id="divImagenProducto">
                    <label id="labelImagenProducto">Imagen: </label><br />
                    <input name="archivo" type="file" class="form-control" />
                    <label for="file-upload" class="custom-file-upload"></label>
                </div>
                <div id="divBotonesAcceso">
                    <input type="submit" id="submitImagen" name="submitImagen" value="Crear" />
                    <input type="reset" id="resetImagen" name="resetImagen" value="Cancelar" />
                </div>
            </form>
        </div>
    </div>
</div>