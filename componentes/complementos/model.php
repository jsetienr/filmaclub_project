<?php

class modelComplementos {

    public static function viewProductos()
    {
        $db = new database();
        $sql = "SELECT p.nombre, p.descripcion, p.pvp, i.imagen_producto, p.codigo_articulo 
        FROM producto p, producto_imagen i 
        WHERE p.codigo_articulo=i.id_producto AND p.tipo_producto='1' 
        ORDER BY p.fecha ASC";
        $db->query($sql);
        // var_dump($db->cargaMatriz());
        return $db->cargaMatriz();
    } 

}

?>