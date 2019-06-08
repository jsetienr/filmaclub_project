<link rel="stylesheet" type="text/css" href="css/login_style.css">
<div>
    <div class="container">
        <div id="creacionProductos" class="contenedor">
            <form class="formulariosCreacion" action="index.php?option=login" method="POST">
                <h1>Creación de Producto:</h1>
                <div id="divDescripcionProducto">
                    <label id="labelDescripcionProducto">Descripción: </label>
                    <textarea id="inputDescripcionProducto" name="inputDescripcionProducto" placeholder="Introduce Descripción"></textarea>
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
                        $results_array = modelCreadorPeliculas::viewTypeProduct();

                        foreach ($results_array as $tipo) {
                            echo "<option value='$tipo[id_tipo]'>"
                                . $tipo[descripcion] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div>
    </div>
</div>