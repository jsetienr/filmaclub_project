<?php

class modelCreacionProductos{

    public static function viewTypeProduct()
    {
        $db = new database();
        $sql = "SELECT * 
                FROM tipo_producto";
        $db->query($sql);
        return $db->cargaMatriz();
    }
    
}

?>