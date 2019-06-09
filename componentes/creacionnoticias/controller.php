<?php
include 'componentes/creacionnoticias/model.php';

if (isset($_POST['submitNoticia'])) {

    $clave_pelicula = $_POST['inputSelectPelicula'];
    $titular = $_POST['inputTituloNoticia'];
    $noticia = $_POST['inputContenidoNoticia'];

    modelCreacionNoticias::newNoticia($clave_pelicula, $titular, $noticia);
}

include 'componentes/creacionnoticias/view.php';
