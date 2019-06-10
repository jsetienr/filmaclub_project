<div class="container">
    <h1>CARRITO</h1>
    <section class="container-fluid" id="contenido">

        <table class="table">
            <thead>
                <tr class="text-center">
                    <th style="text-align: center;">Imagen</th>
                    <th style="text-align: center;">Nombre</th>
                    <th style="text-align: center;">PVP</th>
                    <th style="text-align: center;">Cantidad</th>
                    <th style="text-align: center;">Suma</th>
                    <th style="text-align: center;"></th>
                </tr>
            </thead>
            <tbody class="carrito">
                <?php
                $precioTotal = 0;
                for ($i = 0; $i < count($datos); $i++) {
                    echo "                    <tr class='text-center'>";
                    echo "                        <td style='width:30%;'><img style='width:30%;' src='" . $datos[$i]['Imagen'] . "'> </td>";
                    echo "                        <td>" .  utf8_encode($datos[$i]['Nombre']) . "</td>";
                    echo "                        <td>" .  utf8_encode($datos[$i]['Precio']) . "</td>";
                    echo "                        <td> <input type='number' class='form-control text-center w-100' value='" . $datos[$i]['Cantidad'] . "'> </td>";
                    echo "                        <td>" . ($datos[$i]['Precio'] * $datos[$i]['Cantidad']) . "</td>";
                    echo "                        <td> <a href='#' class='borrar' data-id='" . $datos[$i]['Id'] . "'>Eliminar </a>";
                    echo "                    </tr>";

                    $precioTotal = ($datos[$i]['Precio'] * $datos[$i]['Cantidad']) + $precioTotal;
                }
                echo "   </tbody>";
                echo "   <tfoot>";
                echo "       <tr>";
                echo "           <td><a href='index.php?option=complementos' class='btn btn-warning text-cent'>Continuar comprando</a></td>";
                echo "           <td> </td>";
                echo "           <td> <input class='w-100 text-center' disabled type='number' value='" . $precioTotal . "' name='precioTotal'> </td>";
                echo "           <td> </td>";
                echo "           <td> ";
                if ($precioTotal != 0) {
                    echo "                      <a href='index.php?option=home' class='btn btn-danger w-100'>Comprar</a>";
                } ?> </td>
                </tr>
                </tfoot>
        </table>

    </section>
</div>