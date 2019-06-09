<?php

class modelCreadorPeliculas
{

    public static function viewGenre()
    {
        $db = new database();
        $sql = "SELECT * 
                FROM genero_pelicula";
        $db->query($sql);
        // var_dump($db->cargaMatriz());
        return $db->cargaMatriz();
    }

    public static function newPelicula(
        $nombre,
        $director,
        $anyo,
        $genero,
        $duracion,
        $descripcion
    ) {
        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `pelicula`(`nombre`, `director`, `anyo`, `genero`, `duracion`, `descripcion`) 
        VALUES 
            ( '$nombre', '$director', $anyo, $genero, $duracion, '$descripcion')";

        $db->query($sql);
        return $db->affectedRows();
    }

    public static function viewPeliculas()
    {
        $db = new database();
        $sql = "SELECT * FROM pelicula 
        WHERE clave_pelicula NOT IN (SELECT clave_pelicula FROM poster_peliculas)";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    function checkExtension($nombre)
    {
        //obtenemos la extension
        $intermedio = explode(".", $nombre);
        $extension = end($intermedio);
        // echo "extension obtenida: " . $extension;
        //aqui podemos añadir las extensiones que deseemos permitir
        $extensiones = array("jpg", "jpeg", "png", "JPG");
        if (in_array(strtolower($extension), $extensiones))
            return TRUE;
        else
            return FALSE;
    }

    public static function linkPoster($clave_pelicula, $ruta)
    {
        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `poster_peliculas`(`clave_pelicula`, `poster`) 
        VALUES ($clave_pelicula, '$ruta')";

        $db->query($sql);
        return $db->affectedRows();
    }
}
