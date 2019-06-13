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

        $contenido = addslashes($contenido);
        $titulo = addslashes($titulo);

        $db = new database();
        $sql = "INSERT INTO `reviews`(`clave_pelicula`, `alias_usuario`, `puntuacion`, `titulo`, `contenido_review`)
         VALUES ('$pelicula', '$alias', '$puntuacion', '$titulo', '$contenido')";

        // var_dump($sql);
        $db->query($sql);
        // var_dump($db->affectedRows());

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Review creada con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo "  Puedes verla  <a href='index.php?option=reviews'>aquí</a>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al insertar la review... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }
        return $db->affectedRows();
    }
}
