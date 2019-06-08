<?php
require_once 'componentes/login/model.php';

// error_reporting(E_ALL);
// ini_set('display_errors', '1');
if (isset($_GET['logout'])) {
    session_unset();
}

if (isset($_POST['submitAcceso'])) {

    $alias = $_POST['inputAlias'];
    $passwd = $_POST['inputPassword'];

    modelLogin::checkAlias($alias, $passwd);
    // header("Refresh:0");
    // header("Refresh:0; url=page2.php");
    // header("Location: index.php?option=home");                

}

// if (isset($_SESSION['usuario'])) {


if (isset($_POST['submitRegistro'])) {

    $alias            = $_POST['inputNuevoAlias'];
    $contrasenya      = $_POST['inputNuevoPassword'];
    $nombre           = $_POST['inputNombre'];
    $apellidos        = $_POST['inputApellidos'];
    $dni              = $_POST['inputDNI'];
    $fecha_nacimiento = $_POST['inputFecha'];
    $mail             = $_POST['inputMail'];
    $direccion        = $_POST['inputDireccion'];
    $telefono         = $_POST['inputTelefono'];
    $tipo_usuario     = 2;

    modelLogin::newUsuario($alias, $contrasenya, $nombre, $apellidos, $dni, $fecha_nacimiento, $mail, $direccion, $telefono, $tipo_usuario);
    $estado = "Usuario registrado";
}
// } else {
// header("Location: header("Location: index.php?option=login");
// }

require_once 'componentes/login/view.php';
