<?php
include 'componentes/creacionproductos/model.php';

if (isset($_POST['submitProducto'])) {
    $nombre_producto = $_POST['inputNombreProducto'];
    $descripcion = $_POST['inputDescripcionProducto'];
    $pvp = $_POST['inputPVPProducto'];
    $fecha = $_POST['inputFechaProducto'];
    $stock = $_POST['inputStockProducto'];
    $tipo_producto = $_POST['inputTipoProducto'];

    modelCreacionProductos::viewTypeProduct($nombre_producto, $descripcion, $pvp, $fecha, $stock, $tipo_producto);
}

// Crear Imagen para Producto
if (isset($_POST['submitImagen'])) {
    $status = "";

    $clave_producto = $_POST['inputSelectProducto'];
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())), 0, 6); // ---------- contruir un prefijo para evitar nombre repetidos

    if (!empty($archivo)) {
        if (!modelCreacionProductos::checkExtension($archivo))
            $status = "tipo incorrecto";
        else {
            if ($tamano > 10000000) {                  // ---------- tamaño en bytes --------------------------------
                $status = "ERROR, demasiado grande";
            } else {
                // guardamos el archivo a la carpeta física creada
                $destino = "img/tienda/" . $prefijo . "_" . $archivo;
                modelCreacionProductos::linkImagen($clave_producto, $destino);
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
                    // $status = "Archivo subido: <b>" . $archivo . "</b>";
                } else {
                    $status = "Error al subir el archivo";
                }
            }
        }
    } else {
        $status = "Error falta fichero";
    }

    echo $status . "<br>";
}

include 'componentes/creacionproductos/view.php';
