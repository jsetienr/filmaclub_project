<?php

class modelStories {

    public static function viewPeliculas()
    {
        $db = new database();
        $sql = "SELECT p.nombre, p.director, p.anyo, g.genero_pelicula, p.duracion, p.descripcion, i.poster, p.clave_pelicula 
        FROM pelicula p, poster_peliculas i, genero_pelicula g, curiosidades c 
        WHERE p.clave_pelicula=i.clave_pelicula AND p.genero=g.id_genero AND c.clave_pelicula=p.clave_pelicula 
        GROUP BY p.nombre";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function viewCuriosidades($clave)
    {
        $db = new database();
        $sql = "SELECT c.alias_usuario, c.titulo, c.curiosidad 
        FROM curiosidades c, pelicula p 
        WHERE p.clave_pelicula=c.clave_pelicula AND c.clave_pelicula = '$clave'";
        $db->query($sql);
        return $db->cargaMatriz();
    }    

    public static function countHistorias($clave)
    {
        $db = new database();
        $sql = "SELECT COUNT(*) num 
        FROM curiosidades 
        WHERE clave_pelicula='$clave'";
        $db->query($sql);
        return $db->cargaFila();                
     }

     public static function viewActores($clave)
     {
         $db = new database();
         $sql = "SELECT a.nombre, a.apellidos 
         FROM pelicula p, actor a, actores_pelicula r 
         WHERE p.clave_pelicula=r.clave_pelicula AND a.id_actor=r.id_actor AND p.clave_pelicula='$clave'";
         $db->query($sql);
         return $db->cargaMatriz();
     }

}

?>