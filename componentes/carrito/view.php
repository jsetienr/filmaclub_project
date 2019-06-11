<div class="container">
    <h1>CARRITO</h1>
    <section class="container-fluid" id="contenido">

        <?php

        if (
            isset($_SESSION['cesta']) && !empty($_SESSION['cesta'])
            && ($_SESSION['cesta'] !== "") && ($_SESSION['cesta'] !== NULL)
        ) {
            echo "        <table class='table'>";
            echo "            <thead>";
            echo "                <tr class='text-center'>";
            echo "                    <th style='text-align: center;'>Imagen</th>";
            echo "                    <th style='text-align: center;'>Nombre</th>";
            echo "                    <th style='text-align: center;'>PVP</th>";
            echo "                    <th style='text-align: center;'>Cantidad</th>";
            echo "                    <th style='text-align: center;'>Suma</th>";
            echo "                    <th style='text-align: center;'></th>";
            echo "                </tr>";
            echo "            </thead>";
            echo "            <tbody class='carrito'>";
            $precioTotal = 0;
            for ($i = 0; $i < count($datos); $i++) {
                echo "                    <tr class='text-center filaProducto'>";
                echo "                        <td style='width:30%;'><img style='width:30%;' src='" . $datos[$i]['Imagen'] . "'> </td>";
                echo "                        <td class='filaProducto'>" .  utf8_encode($datos[$i]['Nombre']) . "</td>";
                echo "                        <td class='filaProducto'>" .  utf8_encode($datos[$i]['Precio']) . "</td>";
                // echo "                        <a type='button' class='btn btn-success' name='carrito' href='index.php?option=carrito&idproductoadd=" . $datos[$i]['idproducto'] . "'><i class='fas fa-plus-square'></i></a>";
                // echo "                        <td> <input type='number' class='form-control text-center w-100' value='" . $datos[$i]['Cantidad'] . "'> </td>";
                echo "                        <td class='filaProducto'><a type='button' class='btn btn-success' name='carrito' href='index.php?option=carrito&idproductoadd=" . $datos[$i]['Id']
                    . "'><i class='fas fa-plus-square'></i></a><input class='cantidadProductoCarrito' type='text' value='" . $datos[$i]['Cantidad'] . "' disabled/><a type='button' class='btn btn-danger' name='carrito' href='index.php?option=carrito&idproductorm=" . $datos[$i]['Id']
                    . "'><i class='fas fa-minus-square'></i></a></td>";
                echo "                        <td class='filaProducto'>" . ($datos[$i]['Precio'] * $datos[$i]['Cantidad']) . "</td>";
                echo "                        <td class='filaProducto'> <a href='index.php?option=carrito&idproductodelete=" . $datos[$i]['Id'] . "' class='btn btn-danger' data-id='" . $datos[$i]['Id'] . "'>Eliminar </a>";
                echo "                    </tr>";

                $precioTotal = ($datos[$i]['Precio'] * $datos[$i]['Cantidad']) + $precioTotal;
            }
            echo "   </tbody>";
            echo "   <tfoot>";
            echo "       <tr>";
            echo "           <td><a href='index.php?option=complementos' class='btn btn-warning btn-sm text-cent'>+ Complementos</a>
                <a href='index.php?option=figuras' class='btn btn-warning btn-sm text-cent'>+ Figuras</a>
                <a href='index.php?option=decoracion' class='btn btn-warning btn-sm text-cent'>+ Decoración</a></td>";
            echo "           <td> </td>";
            echo "           <td> <input class='w-100 text-center' disabled type='text' value='" . $precioTotal . "' name='precioTotal' name='precioTotal'> </td>";
            echo "           <td> </td>";
            echo "           <td> ";
            if (
                isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])
                && ($_SESSION["usuario"] !== "") && ($_SESSION["usuario"] !== NULL)
            ) {
                if ($precioTotal != 0) {
                    echo    "<form method='post' action='index.php?option=carrito'>
                <input type='text' id='pagoTotal' name='pagoTotal' value='" . $precioTotal . "' hidden>
                    <input type='submit' class='btn btn-info w-100' id='comprabtn' name='comprabtn' value='Comprar'/></form>";
                }
            } else {
                echo "Para comprar, debes <a href='index.php?option=login'>Iniciar Sesión</a>";
            }
            echo "                 </td>";
            echo "                </tr>";
            echo "                </tfoot>";
            echo "        </table>";
        } else {
            echo "<div class='h-100 row align-items-center'>";
            echo "Ups!... Parece que ahora mismo no hay ningún producto en el carrito. <i class='fas fa-frown emoji'></i><br/>";
            echo "<a href='index.php?option=home'>Inicio</a>";
            echo "</div>";
        }
        ?>
    </section>
</div>