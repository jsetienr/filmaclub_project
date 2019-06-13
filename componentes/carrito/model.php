<?php

class modelCarrito
{

    public static function viewProducto($id_art)
    {
        // echo "dentro de viewProducto, nos llega: ". $id_art."<br/>";
        $db = new database();
        $sql = "SELECT p.nombre, p.codigo_articulo, p.pvp, p.stock, i.imagen_producto 
        FROM producto p, producto_imagen i 
        WHERE p.codigo_articulo=i.id_producto AND p.codigo_articulo='$id_art'";

        $db->query($sql);
        // var_dump($sql);
        // var_dump($db->cargaFila());
        return $db->cargaFila();
    }

    public static function insertProceso($id, $cod, $cantidad, $importe)
    {
        // echo "estoy insertando un proceso --------------------------------- <br/>";
        // echo "id: " . $id . "<br/>";
        // echo "cod: " . $cod . "<br/>";
        // echo "cantidad: " . $cantidad . "<br/>";
        // echo "importe: " . $importe . "<br/>";
        $db = new database();
        $sql = "INSERT INTO `articulo_cliente`(`id_proceso`, `codigo_articulo`, `cantidad`, `importe`) VALUES ('$id', '$cod', '$cantidad', '$importe')";

        $db->query($sql);
        // var_dump($sql);
        // var_dump($db->affectedRows());
        return $db->affectedRows();
    }

    public static function viewProductsProcess($id)
    {
        $db = new database();
        $sql = "SELECT * 
                FROM articulo_cliente 
                WHERE id_proceso='$id'";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function insertRel($id_sesion, $cod_proceso)
    {
        // echo "estoy insertando una relacion --------------------------------- <br/>";
        // echo "id_sesion: " . $id_sesion . "<br/>";
        // echo "id_proceso: " . $cod_proceso . "<br/>";

        $db = new database();
        $sql = "INSERT INTO `relacion_proceso_compra`(`id_sesion`, `id_proceso`) VALUES ('$id_sesion', '$cod_proceso')";

        $db->query($sql);
        // var_dump($sql);
        // var_dump($db->affectedRows());
        return $db->affectedRows();
    }

    public static function createCompra($alias, $cantidad, $id_proceso)
    {
        // echo "estoy insertando una compra --------------------------------- <br/>";
        // echo "alias: " . $alias . "<br/>";
        // echo "cantidad: " . $cantidad . "<br/>";
        // echo "proceso: " . $id_proceso . "<br/>";


        $db = new database();
        $sql = "INSERT INTO `proceso_compra`(`alias_usuario`, `importe_total`, `id_proceso`) VALUES ('$alias', '$cantidad', '$id_proceso')";

        $db->query($sql);
        // var_dump($sql);
        // var_dump($db->affectedRows());
        return $db->affectedRows();
    }


    public static function randHash($len = 40)
    {
        return substr(md5(openssl_random_pseudo_bytes(20)), -$len);
    }
}
