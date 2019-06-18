<?php

class modelCreacionProductos
{

    public static function viewTypeProduct()
    {
        $db = new database();
        $sql = "SELECT * FROM `tipo_producto` 
        ORDER BY `tipo_producto`.`descripcion` ASC";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function viewProductos()
    {
        $db = new database();
        $sql = "SELECT * FROM `producto`
        ORDER BY `producto`.`nombre` ASC";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function newProducto(
        $nombre_producto,
        $descripcion,
        $pvp,
        $fecha,
        $stock,
        $tipo_producto
    ) {

        $descripcion=addslashes($descripcion);

        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `producto`(`nombre`, `descripcion`, `pvp`, `fecha`, `stock`, `tipo_producto`) 
        VALUES ('$nombre_producto', '$descripcion', '$pvp', '$fecha', $stock, $tipo_producto)";

        // var_dump($sql);
        $db->query($sql);
        // var_dump($db->affectedRows());

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Producto creado con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al crear el producto... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

        return $db->affectedRows();
    }

    function checkExtension($nombre)
    {
        //obtenemos la extension
        $intermedio = explode(".", $nombre);
        $extension = end($intermedio);
        // echo "extension obtenida: " . $extension;
        //aqui podemos añadir las extensiones que deseemos permitir
        $extensiones = array("jpg", "jpeg", "png", "JPG");
        if (in_array(strtolower($extension), $extensiones))
            return TRUE;
        else
            return FALSE;
    }

    public static function linkImagen($id_producto, $ruta)
    {
        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `producto_imagen`(`id_producto`, `imagen_producto`)
        VALUES ($id_producto, '$ruta')";

        $db->query($sql);

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Imagen enlazada con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al enlazar la imagen... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

        return $db->affectedRows();
    }
}
