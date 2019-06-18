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

        $descripcion= addslashes($descripcion);

        $db = new database();
        $sql = ("SET NAMES 'utf8'");
        $sql = "INSERT INTO `pelicula`(`nombre`, `director`, `anyo`, `genero`, `duracion`, `descripcion`) 
        VALUES 
            ( '$nombre', '$director', $anyo, $genero, $duracion, '$descripcion')";

        $db->query($sql);

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Película creada con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al insertar la película... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

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

        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Poster insertado con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al insertar el poster... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }

        return $db->affectedRows();
    }
}
