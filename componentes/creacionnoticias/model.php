<?php

class modelCreacionNoticias {

    public static function viewPeliculas()
    {
        $db = new database();
        $sql = "SELECT * FROM `pelicula` ORDER BY `pelicula`.`nombre` ASC";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function newNoticia(
        $clave_pelicula,
        $titular,
        $noticia
    ) {
        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `noticias_pelicula`(`clave_pelicula`, `titular`, `noticia`) 
        VALUES($clave_pelicula, '$titular', '$noticia')";

        $db->query($sql);
        return $db->affectedRows();
    }
}
