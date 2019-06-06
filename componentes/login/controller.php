<?php
include 'componentes/login/model.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');

if (isset($_GET['logout'])) {
    session_unset();
}

if (isset($_SESSION['usuario'])) {

    $estado = '';

    if (isset($_POST['submitRegistro'])) {
        $newRegistro = modelLogin::newUsuario();
        $estado = "Usuario registrado.";
    }
} else {
    // header("Location: http://localhost/ProyectoFinDeCiclo_JavierSetienRivas/web/www/index.php?option=login");
}

include 'componentes/login/view.php';
