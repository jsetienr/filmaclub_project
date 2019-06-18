<div class="container">
    <h1>FIGURAS DE CINE</h1>
    <section class="container-fluid" id="contenido">
        <div id='contenido-reciente' class='row independiente' id='divFiguras'>
            <?php
            $arrayFiguras = modelFiguras::viewProductos();

            foreach ($arrayFiguras as  $figura) {
                echo "            <div class='col-md-4 col-xs-12'>";
                echo "                <div class='producto container-fluid'>";
                echo "                    <div class='col-md-12 col-xs-12'>";
                echo "                        <img class='img-responsive imgProducto' alt='producto' src='" . $figura['imagen_producto'] . "'>";
                echo "                    </div>";
                echo "                    <div class='col-md-12 col-xs-12'>";
                echo "                        <div class='producto-info'>";
                echo "                            <h4>" . utf8_encode($figura['nombre']) . "</h4>";
                echo "                            <span>" . $figura['pvp'] . "€</span>";
                // echo "                        <p>" . utf8_encode($figura['descripcion']) . "</p>";
                echo "                        </div>";
                echo "                        <a type='button' class='btn btn-success' name='carrito' href='index.php?option=carrito&idproductoadd=" . $figura['codigo_articulo'] . "'>Añadir al Carrito</a>";
                echo "                    </div>";
                echo "                </div>";
                echo "            </div>";
            }
            ?>
        </div>
    </section>
</div>