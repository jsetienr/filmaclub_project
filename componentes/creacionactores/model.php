<?php

class modelCreacionActores
{

    public static function newActor(
        $nombre,
        $apellidos,
        $fecha_nacimiento,
        $lugar_nacimiento
    ) {
        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `actor`(`nombre`, `apellidos`, `fecha_nacimiento`, `lugar_nacimiento`) 
        VALUES ('$nombre', '$apellidos', '$fecha_nacimiento', '$lugar_nacimiento')";

        $db->query($sql);

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Actor creado con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al crear el actor... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

        return $db->affectedRows();
    }

    public static function newRelActorPelicula(
        $id_actor,
        $clave_pelicula
    ) {
        $db = new database();

        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `actores_pelicula`(`id_actor`, `clave_pelicula`) 
        VALUES ('$id_actor', '$clave_pelicula')";
        $db->query($sql);

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Actor y Película enlazados con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al crear el enlace... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

        return $db->affectedRows();
    }

    public static function viewPeliculas()
    {
        $db = new database();
        $sql = "SELECT * FROM pelicula ORDER BY nombre ASC";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function viewActores()
    {
        $db = new database();
        $sql = "SELECT * FROM actor ORDER BY nombre ASC";
        $db->query($sql);
        return $db->cargaMatriz();
    }
}
