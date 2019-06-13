<?php

class modelCreacionHistorias
{

    public static function viewPeliculas()
    {
        $db = new database();
        $sql = "SELECT * FROM `pelicula` ORDER BY `nombre` ASC";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function newCuriosidad(
        $clave_pelicula,
        $alias_usuario,
        $titulo,
        $curiosidad
    ) {

        $curiosidad = addslashes($curiosidad);
        $titulo = addslashes($titulo);

        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `curiosidades`(`clave_pelicula`, `alias_usuario`, `titulo`, `curiosidad`) 
        VALUES ('$clave_pelicula', '$alias_usuario', '$titulo', '$curiosidad')";

        $db->query($sql);
        // var_dump($sql);
        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Historia creada con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo "  Puedes verla  <a href='index.php?option=historias'>aquí</a>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al insertar la historia... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

        return $db->affectedRows();
    }
}
