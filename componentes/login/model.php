<?php

class modelLogin
{

    public static function checkAlias($alias)
    {
        $db = new database();
        $sql = "SELECT alias 
                FROM usuario 
                WHERE alias='$alias'";
        $db->query($sql);
        return $db->cargaFila();
    }

    public static function newUsuario()
    {
        $db = new database();
        $sql = "INSERT INTO usuario VALUES
        (:alias, :contrasenya, :nombre, :apellidos, :dni, :fecha_nacimiento, 
        :mail, :direccion, :telefono, :tipo_usuario)";

        $params = array(
            ':alias'            => $_POST['inputAlias'],
            ':contrasenya'      => $_POST['inputNuevoPassword'],
            ':nombre'           => $_POST['inputNombre'],
            ':apellidos'        => $_POST['inputApellidos'],
            ':dni'              => $_POST['inputDNI'],
            ':fecha_nacimiento' => $_POST['inputFecha'],
            ':mail'             => $_POST['inputMail'],
            ':direccion'        => $_POST['inputDireccion'],
            ':telefono'         => $_POST['inputTelefono'],
            ':tipo_usuario'     => 2
        );
        var_dump($sql);
        var_dump($params);
        $db->query($sql, $params);
        return $db->affectedRows();
    }

    /*
    public static function registro(){
        $db = new database();
        $sql = 'INSERT INTO usuarios VALUES (NULL, :nombre, :apellidos, :email, :nick, :clave, :autonomias_id, :tipo)';
        $params = array(
            ':nombre'        => $_POST['nombre'],  
            ':apellidos'     => $_POST['apellidos'],
            ':email'         => $_POST['email'],
            ':nick'          => $_POST['nick'],
            ':clave'         => $_POST['clave'],
            ':autonomias_id' => $_POST['autonomias'],
            ':tipo'          => 0
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }
    */
}
