<?php
include 'componentes/creacionreviews/model.php';

if (isset($_POST['submitReview'])) {

    $pelicula  = $_POST['inputSelectPelicula'];
    $alias  = $_SESSION["usuario"];
    $puntuacion  = $_POST['puntuacion'];
    $titulo  = $_POST['inputTituloReview'];
    $contenido = $_POST['inputContenidoReview'];

    modelCreacionReviews::newReview($pelicula, $alias, $puntuacion, $titulo, $contenido);
}

include 'componentes/creacionreviews/view.php';
