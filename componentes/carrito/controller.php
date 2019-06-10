<?php
include 'componentes/carrito/model.php';

if (isset($_SESSION['cesta'])) {
    if (isset($_GET['idproducto'])) {

        $carrito = $_SESSION['cesta'];
        $check = false;
        $num = 0;

        for ($i = 0; $i < count($carrito); $i++) {
            if ($carrito[$i]['Id'] == $_GET['idproducto']) {
                $check = true;
                $num = $i;
            }
        }

        if ($check == true) {

            $carrito[$num]['Cantidad'] = $carrito[$num]['Cantidad'] + 1;
            $_SESSION['cesta'] = $carrito;
        } else {

            $nombre = "";
            $precio = 0;
            $imagen = "";
            $producto = modelCarrito::viewProducto($_GET['idproducto']);
            $nombre = $producto['nombre'];
            $imagen = $producto['imagen_producto'];
            $precio = $producto['pvp'];

            $datosNuevos = array(
                'Id' => $_GET['idproducto'],
                'Nombre' => $nombre,
                'Precio' => $precio,
                'Imagen' => $imagen,
                'Cantidad' => 1
            );
            array_push($carrito, $datosNuevos);

            print_r($datosNuevos);
            print_r($carrito);

            $_SESSION['cesta'] = $carrito;
        }
    } else {
        echo "oye, que no hay idproducto";
    }
} else {
    if (isset($_GET['idproducto'])) {

        $nombre = "";
        $precio = 0;
        $imagen = "";
        $producto = modelCarrito::viewProducto($_GET['idproducto']);
        $nombre = $producto['nombre'];
        $imagen = $producto['imagen_producto'];
        $precio = $producto['pvp'];

        $carrito[] = array(
            'Id' => $_GET['idproducto'],
            'Nombre' => $nombre,
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1
        );

        $_SESSION['cesta'] = $carrito;
    }
}

$datos = $_SESSION['cesta'];

include 'componentes/carrito/view.php';
