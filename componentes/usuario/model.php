<?php

class modelUsuario
{
    public static function viewUserData($alias)
    {
        // $alias = $_SESSION["usuario"];

        $db = new database();
        $sql = "SELECT * 
                FROM usuario 
                WHERE alias='$alias'";
        $db->query($sql);
        return $db->cargaFila();
    }

    public static function viewReviews($alias)
    {
        $db = new database();
        $sql = "SELECT * 
        FROM reviews 
        WHERE alias_usuario='$alias'";
        $db->query($sql);
        return $db->cargaMatriz();                
     }
     public static function viewHistorias($alias)
     {
         $db = new database();
         $sql = "SELECT * 
         FROM curiosidades 
         WHERE alias_usuario='$alias'";
         $db->query($sql);
         return $db->cargaMatriz();                
      }
}
