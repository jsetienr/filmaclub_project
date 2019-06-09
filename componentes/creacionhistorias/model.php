<?php

class modelCreacionHistorias {

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
        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `curiosidades`(`clave_pelicula`, `alias_usuario`, `titulo`, `curiosidad`) 
        VALUES ('$clave_pelicula', '$alias_usuario', '$titulo', '$curiosidad')";

        $db->query($sql);
        return $db->affectedRows();
    }
}
