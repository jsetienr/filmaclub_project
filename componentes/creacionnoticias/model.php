<?php

class modelCreacionNoticias
{

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

        $titular = addslashes($titular);
        $noticia = addslashes($noticia);

        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `noticias_pelicula`(`clave_pelicula`, `titular`, `noticia`) 
        VALUES($clave_pelicula, '$titular', '$noticia')";

        $db->query($sql);

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Noticia creada con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al crear la noticia... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

        return $db->affectedRows();
    }
}
