<?php

class modelCreacionProductos{

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
        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `producto`(`nombre`, `descripcion`, `pvp`, `fecha`, `stock`, `tipo_producto`) 
        VALUES ('$nombre_producto', '$descripcion', '$pvp', '$fecha', $stock, $tipo_producto)";

        $db->query($sql);
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
        return $db->affectedRows();
    }
}

?>