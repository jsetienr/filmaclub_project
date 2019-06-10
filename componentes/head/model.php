<?php

class modelHead
{

    public static function filterUserType($alias)
    {
        $db = new database();
        $sql = "SELECT tipo_usuario FROM usuario WHERE alias='$alias'";
        $db->query($sql);

        if ($db->cargaFila()['tipo_usuario'] == 1) {
            // echo "Usuario Administrador";
            return true;
        } elseif ($db->cargaFila()['tipo_usuario'] == 2) {
            // echo "Usuario Publico";
            return false;
        } else {
            // echo "Usuario Publico";
            return false;
        }
        // return $db->cargaFila();
    }
}
