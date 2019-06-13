<?php
include 'componentes/carrito/model.php';

if (isset($_SESSION['cesta'])) {
    if (isset($_GET['idproductoadd'])) {

        $carrito = $_SESSION['cesta'];
        $check = false;
        $num = 0;

        for ($i = 0; $i < count($carrito); $i++) {
            if ($carrito[$i]['Id'] == $_GET['idproductoadd']) {
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
            $producto = modelCarrito::viewProducto($_GET['idproductoadd']);
            $nombre = $producto['nombre'];
            $imagen = $producto['imagen_producto'];
            $precio = $producto['pvp'];

            $datosNuevos = array(
                'Id' => $_GET['idproductoadd'],
                'Nombre' => $nombre,
                'Precio' => $precio,
                'Imagen' => $imagen,
                'Cantidad' => 1
            );
            array_push($carrito, $datosNuevos);

            // print_r($datosNuevos);
            // print_r($carrito);

            $_SESSION['cesta'] = $carrito;
        }
    }
    $datos = $_SESSION['cesta'];
} else {

    if (isset($_GET['idproductoadd'])) {

        $nombre = "";
        $precio = 0;
        $imagen = "";
        $producto = modelCarrito::viewProducto($_GET['idproductoadd']);
        $nombre = $producto['nombre'];
        $imagen = $producto['imagen_producto'];
        $precio = $producto['pvp'];

        $carrito[] = array(
            'Id' => $_GET['idproductoadd'],
            'Nombre' => $nombre,
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1
        );

        $_SESSION['cesta'] = $carrito;

        $datos = $_SESSION['cesta'];
    }
}

if (isset($_SESSION['cesta'])) {
    if (isset($_GET['idproductorm'])) {

        $carrito = $_SESSION['cesta'];
        $check = false;
        $num = 0;

        for ($i = 0; $i < count($carrito); $i++) {
            if ($carrito[$i]['Id'] == $_GET['idproductorm']) {
                $check = true;
                $num = $i;
            }
        }

        if ($check == true) {
            if ($carrito[$num]['Cantidad'] > 1) {
                $carrito[$num]['Cantidad'] = $carrito[$num]['Cantidad'] - 1;
                $_SESSION['cesta'] = $carrito;
            } else {
                for ($i = 0; $i < count($carrito); $i++) {
                    if ($carrito[$i]['Id'] == $_GET['idproductorm']) {
                        // echo "Id: ".$carrito[$i]['Id']."<br/>";
                        // echo "Index: ".$i."<br/>";
                        // print_r($carrito[$i]);
                        unset($_SESSION['cesta'][$i]);
                        // unset($carrito[$i]);
                        // array_splice($carrito, $i, 1);
                    }
                }
            }
        }
    }
}

if (isset($_SESSION['cesta'])) {
    if (isset($_GET['idproductodelete'])) {

        $carrito = $_SESSION['cesta'];
        $check = false;
        $num = 0;

        for ($i = 0; $i < count($carrito); $i++) {
            if ($carrito[$i]['Id'] == $_GET['idproductodelete']) {
                $check = true;
                $num = $i;
            }
        }

        if ($check == true) {
            for ($i = 0; $i < count($carrito); $i++) {
                if ($carrito[$i]['Id'] == $_GET['idproductodelete']) {
                    unset($_SESSION['cesta'][$i]);
                }
            }
        }
    }
}

if (isset($_POST['comprabtn'])) {
    $id_proceso = modelCarrito::randHash(20);
    $id_relacion = modelCarrito::randHash(20);
    $fecha = date('mdYhis');
    $cod_proceso = $fecha . $id_proceso;
    $cod_relacion = $fecha . $id_relacion;

    for ($i = 0; $i < count($_SESSION['cesta']); $i++) {

        $id = $cod_proceso;
        $cod = $_SESSION['cesta'][$i]['Id'];
        $cantidad = $_SESSION['cesta'][$i]['Cantidad'];
        $importe = ($_SESSION['cesta'][$i]['Precio'] * $_SESSION['cesta'][$i]['Cantidad']);

        modelCarrito::insertProceso($id, $cod, $cantidad, $importe);
    }

    modelCarrito::insertRel($cod_relacion, $cod_proceso);

    $alias = $_SESSION["usuario"];
    $cantidad = $_POST['pagoTotal'];

    modelCarrito::createCompra($alias, $cantidad, $cod_relacion);

    unset($_SESSION['cesta']);
}

include 'componentes/carrito/view.php';
