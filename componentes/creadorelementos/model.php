<?php

class modelCreadorElementos
{

    public static function viewGenre()
    {
        $db = new database();
        $sql = "SELECT * 
                FROM genero_pelicula";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function viewTypeProduct()
    {
        $db = new database();
        $sql = "SELECT * 
                FROM tipo_producto";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function newPelicula()
    {
        $db = new database();
        $sql = "INSERT INTO comentarios VALUES
               (NULL, :nombre, :director, :anyo, :genero, :duracion, :descripcion)";
        $params = array(
            ':nombre' => $_POST['inputNombrePelicula'],
            ':director' => $_POST['inputDirectorPelicula'],
            ':anyo' =>  $_POST['inputAnyoPelicula'],
            ':genero' => $_POST['inputGeneroPelicula'],
            ':duracion' => $_POST['inputDuracionPelicula'],
            ':descripcion' => $_POST['inputDescripcionPelicula'],
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }
    // FALTA    JS ->   DESHABILITAR EL BOTON DE ENVIAR SI ALGUNO DE LOS CAMPOS NO CUMPLE SU EXPR.REG.
    //          PHP ->  HACER EL IFISSET DE NEWPELICULA() Y LA FUNCION PARA SUBIR EL POSTER DE LA PELICULA Y RELACIONARLO

    // public static function newComentario($id)
    // {
    //     $db = new database();
    //     $sql = "INSERT INTO comentarios VALUES
    //            (NULL, :fecha, :texto, :usuarios_id, :sitios_interes_id)";
    //     $params = array(
    //         ':fecha'                => date("Y-m-d H:i:s"),
    //         ':texto'                => $_POST['comentario'],
    //         ':usuarios_id'          => $_SESSION['usuario']['id'],
    //         ':sitios_interes_id'    => $id
    //     );
    //     $db->query($sql, $params);
    //     return $db->affectedRows();
    // }
}
