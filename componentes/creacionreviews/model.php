<?php

class modelCreacionReviews
{

    public static function viewPeliculas()
    {
        $usuario = $_SESSION["usuario"];

        $db = new database();
        $sql = "SELECT * FROM pelicula WHERE clave_pelicula 
        NOT IN (SELECT clave_pelicula FROM reviews WHERE alias_usuario='$usuario') 
        ORDER BY `pelicula`.`nombre` ASC";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function newReview(
        $pelicula,
        $alias,
        $puntuacion,
        $titulo,
        $contenido
    ) {
        $db = new database();
        $sql = "INSERT INTO `reviews`(`clave_pelicula`, `alias_usuario`, `puntuacion`, `titulo`, `contenido_review`)
         VALUES ('$pelicula', '$alias', '$puntuacion', '$titulo', '$contenido')";

        // var_dump($sql);
        $db->query($sql);
        // var_dump($db->affectedRows());
        return $db->affectedRows();
    }
}
