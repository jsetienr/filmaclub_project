<?php

class modelNoticias {

    public static function viewNoticias()
    {
        $db = new database();
        $sql = "SELECT n.titular, n.noticia, n.fecha, i.poster, p.nombre 
        FROM noticias_pelicula n, poster_peliculas i, pelicula p 
        WHERE n.clave_pelicula=i.clave_pelicula AND p.clave_pelicula=n.clave_pelicula AND p.clave_pelicula=i.clave_pelicula
        ORDER BY `n`.`fecha` DESC";
        $db->query($sql);
        return $db->cargaMatriz();
    } 

}

?>