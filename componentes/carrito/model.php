<?php

class modelCarrito {

    public static function viewProducto($id_art){
        echo "dentro de viewProducto, nos llega: ". $id_art."<br/>";
        $db = new database();
        $sql = "SELECT p.nombre, p.codigo_articulo, p.pvp, p.stock, i.imagen_producto 
        FROM producto p, producto_imagen i 
        WHERE p.codigo_articulo=i.id_producto AND p.codigo_articulo='$id_art'";

        $db->query($sql);
        // var_dump($sql);
        // var_dump($db->cargaFila());
        return $db->cargaFila();
    } 

}

?>