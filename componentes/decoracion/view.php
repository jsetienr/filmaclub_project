<div class="container">
    <h1>DECORACION DE CINE</h1>
    <section class="container-fluid" id="contenido">
        <div id='contenido-reciente' class='row independiente' id='divDecoracion'>
            <?php
            $arrayDecoracion = modelDecoracion::viewProductos();

            foreach ($arrayDecoracion as  $producto) {
                echo "            <div class='col-md-4 col-xs-12'>";
                echo "                <div class='producto container-fluid'>";
                echo "                    <div class='col-md-12 col-xs-12'>";
                echo "                        <img class='img-responsive imgProducto' alt='producto' src='" . $producto['imagen_producto'] . "'>";
                echo "                    </div>";
                echo "                    <div class='col-md-12 col-xs-12'>";
                echo "                        <div class='producto-info'>";
                echo "                            <h4>" . utf8_encode($producto['nombre']) . "</h4>";
                echo "                            <span>" . $producto['pvp'] . "€</span>";
                // echo "                        <p>" . utf8_encode($producto['descripcion']) . "</p>";
                echo "                        </div>";
                echo "                        <a type='button' class='btn btn-success' name='carrito' href='index.php?option=carrito&idproductoadd=" . $producto['codigo_articulo'] . "'>Añadir al Carrito</a>";
                echo "                    </div>";
                echo "                </div>";
                echo "            </div>";
            }
            ?>
        </div>
    </section>
</div>