<?php
include 'componentes/creacionpeliculas/model.php';

// Crear Pelicula
if (isset($_POST['submitPelicula'])) {

    $nombre = $_POST['inputNombrePelicula'];
    $director = $_POST['inputDirectorPelicula'];
    $anyo = $_POST['inputAnyoPelicula'];
    $genero = $_POST['inputGeneroPelicula'];
    $duracion = $_POST['inputDuracionPelicula'];
    $descripcion = $_POST['inputDescripcionPelicula'];

    modelCreadorPeliculas::newPelicula($nombre, $director, $anyo, $genero, $duracion, $descripcion);
}

// Crear Poster para Pelicula
if (isset($_POST['submitPoster'])) {
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())), 0, 6); // ---------- contruir un prefijo para evitar nombre repetidos

    if (!empty($archivo)) {
        if (!modelCreadorPeliculas::checkExtension($archivo))
            $status = "tipo incorrecto";
        else {
            if ($tamano > 10000000) {                  // ---------- tamaño en bytes --------------------------------
                $status = "ERROR, demasiado grande";
            } else {
                // guardamos el archivo a la carpeta física creada
                $destino = "img/postersPeliculas/" . $prefijo . "_" . $archivo;
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
                    $status = "Archivo subido: <b>" . $archivo . "</b>";
                } else {
                    $status = "Error al subir el archivo";
                }
            }
        }
    } else {
        $status = "Error falta fichero";
    }

    echo $status . "<br>";
}

include 'componentes/creacionpeliculas/view.php';
