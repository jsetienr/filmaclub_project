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
        $db->query($sql);

        $db->cargaFila();

        if ($db->affectedRows() == 1) {
            $_SESSION["usuario"] = $alias;
            return true;
        } else {

            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Vaya, parece que el login no era correcto... <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        
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
        if ($db->affectedRows() > 0) {
            echo " <div class='alert alert-success' role='alert'>";
            echo "  Usuario insertado con éxito! <i class='fas fa-laugh-beam icon-2x'></i>";
            echo " </div>";
        } else {
            echo " <div class='alert alert-warning' role='alert'>";
            echo "  Ha habido un problema al insertar el usuario <i class='fas fa-grin-beam-sweat icon-2x'></i>";
            echo " </div>";
        }
        return $db->affectedRows();
    }

    public static function viewAlias($alias)
    {
        $db = new database();
        $sql = "SELECT u.alias 
        FROM usuario u 
        WHERE u.alias='$alias'";
        // var_dump($sql);
        $db->query($sql);

        return $db->cargaFila();
    }

    function buscaAlias($alias)
    {
        sleep(3);
        $resultado = modelLogin::viewAlias($alias);
        $output = new xajaxResponse();
        if ($resultado['alias'] != $alias) {
            $output->assign("respuestaAlias", "innerHTML", "El alias elegido ya está en uso");
        } else {
            $output->assign("respuestaAlias", "innerHTML", "El alias elegido es válido");
        }
        return $output;
    }
}
