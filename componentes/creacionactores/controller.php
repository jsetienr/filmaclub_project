<?php
include 'componentes/creacionactores/model.php';

if (isset($_POST['submitActor'])) {

    $nombre = $_POST['inputNombreActor'];
    $apellidos = $_POST['inputApellidosActor'];
    $fecha_nacimiento = $_POST['inputFechaNacActor'];
    $lugar_nacimiento = $_POST['inputLugarNacActor'];

    modelCreacionActores::newActor($nombre, $apellidos, $fecha_nacimiento, $lugar_nacimiento);
}

if (isset($_POST['submitRelacion'])) {

    $id_actor = $_POST['inputSelectActor'];
    $clave_pelicula = $_POST['inputSelectPelicula'];

    modelCreacionActores::newRelActorPelicula($id_actor, $clave_pelicula);
}

include 'componentes/creacionactores/view.php';
