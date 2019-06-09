<?php
include 'componentes/creacionhistorias/model.php';

// Crar Curiosidad
if (isset($_POST['submitCuriosidad'])) {

    $clave_pelicula = $_POST['inputSelectPelicula'];
    $alias_usuario = $_SESSION["usuario"];
    $titulo = $_POST['inputTituloCuriosidad'];
    $curiosidad = $_POST['inputContenidoCuriosidad'];

    modelCreacionHistorias::newCuriosidad( $clave_pelicula, $alias_usuario, $titulo, $curiosidad);
}

include 'componentes/creacionhistorias/view.php';
