<?php

class modelCreacionReviews
{

    public static function viewPeliculas()
    {
        $db = new database();
        $sql = "SELECT * 
                FROM pelicula";
        $db->query($sql);
        return $db->cargaFila();
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
         VALUES 
        ('$pelicula', '$alias', $puntuacion, '$titulo', '$contenido')";

        // var_dump($sql);
        $db->query($sql);
        // var_dump($db->affectedRows());
        return $db->affectedRows();
    }
}
