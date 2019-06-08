<?php

class modelLogin
{
    //Función para comprobar los datos en el Login
    public static function checkAlias($alias, $passwd)
    {
        $db = new database();
        $sql = "SELECT u.alias 
        FROM usuario u 
        WHERE u.alias='$alias' AND u.contrasenya=MD5('$passwd')";
        // var_dump($sql);
        $db->query($sql);

        $db->cargaFila();

        // echo "<br/>Lineas mostradas: ", $db->affectedRows();
        // echo "<br/>";

        if ($db->affectedRows() == 1) {
            $_SESSION["usuario"] = $alias;
            // echo "Usuario de la sesion Final: ", $_SESSION["usuario"];
            return true;
        } else {
            // echo "Usuario de la sesion: ", $_SESSION["usuario"];
            // echo "<br/>WE HAVE A PROBLEM";
            return false;
        }
    }

    //Función para registrar un nuevo usuario
    public static function newUsuario(
        $alias,
        $contrasenya,
        $nombre,
        $apellidos,
        $dni,
        $fecha_nacimiento,
        $mail,
        $direccion,
        $telefono,
        $tipo_usuario
    ) {
        $db = new database();
        $sql = "INSERT INTO `usuario`
        (`alias`, `contrasenya`, `nombre`, `apellidos`, `dni`, `fecha_nacimiento`, `mail`, `direccion`, `telefono`, `tipo_usuario`)
         VALUES 
        ('$alias', MD5('$contrasenya'), '$nombre', '$apellidos', '$dni', '$fecha_nacimiento', '$mail', '$direccion', $telefono, $tipo_usuario)";

        // var_dump($sql);
        $db->query($sql);
        // var_dump($db->affectedRows());
        return $db->affectedRows();
    }
}
