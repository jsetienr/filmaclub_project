<div class="container">
    <h1>COMPLEMENTOS DE CINE</h1>
    <section class="container-fluid" id="contenido">
        <div id='contenido-reciente' class='row independiente' id='divComplementos'>
            <?php
            $arrayComplementos = modelComplementos::viewProductos();

            foreach ($arrayComplementos as  $complemento) {
                echo "            <div class='col-md-4 col-xs-12'>";
                echo "                <div class='producto container-fluid'>";
                echo "                    <div class='col-md-12 col-xs-12'>";
                echo "                        <img class='img-responsive imgProducto' alt='producto' src='" . $complemento['imagen_producto'] . "'>";
                echo "                    </div>";
                echo "                    <div class='col-md-12 col-xs-12'>";
                echo "                        <div class='producto-info'>";
                echo "                            <h4>" . utf8_encode($complemento['nombre']) . "</h4>";
                echo "                            <span>" . $complemento['pvp'] . "€</span>";
                // echo "                        <p>" . utf8_encode($complemento['descripcion']) . "</p>";
                echo "                        </div>";
                echo "                        <a type='button' class='btn btn-success' name='carrito' href='index.php?option=carrito&idproductoadd=" . $complemento['codigo_articulo'] . "'>Añadir al Carrito</a>";
                echo "                    </div>";
                echo "                </div>";
                echo "            </div>";
            }
            ?>
        </div>
    </section>
</div>