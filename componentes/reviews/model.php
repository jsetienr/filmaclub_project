<?php

class modelReviews {

    public static function viewPeliculas()
    {
        $db = new database();
        $sql = "SELECT p.nombre, p.director, p.anyo, g.genero_pelicula, p.duracion, p.descripcion, i.poster, p.clave_pelicula 
        FROM pelicula p, poster_peliculas i, genero_pelicula g, reviews r 
        WHERE p.clave_pelicula=i.clave_pelicula AND p.genero=g.id_genero AND r.clave_pelicula=p.clave_pelicula 
        GROUP BY p.nombre";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function viewReviews($clave)
    {
        $db = new database();
        $sql = "SELECT r.alias_usuario, r.titulo, r.contenido_review, r.puntuacion 
        FROM reviews r, pelicula p 
        WHERE p.clave_pelicula=r.clave_pelicula AND r.clave_pelicula = '$clave'";
        $db->query($sql);
        return $db->cargaMatriz();
    }    

    public static function countReviews($clave)
    {
        $db = new database();
        $sql = "SELECT COUNT(*) num 
        FROM reviews 
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