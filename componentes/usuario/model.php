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
        $sql = "SELECT DISTINCT(nombre), puntuacion FROM pelicula p, reviews r 
        WHERE p.clave_pelicula = r.clave_pelicula AND r.alias_usuario='$alias'";
        $db->query($sql);
        // var_dump( $db->cargaMatriz());
        return $db->cargaMatriz();                
     }

     public static function countReviews($alias)
    {
        $db = new database();
        $sql = "SELECT COUNT(*) num 
        FROM reviews 
        WHERE alias_usuario='$alias'";
        $db->query($sql);
        return $db->cargaFila();                
     }

     public static function viewHistorias($alias)
     {
         $db = new database();
         $sql = "SELECT DISTINCT(nombre) FROM pelicula p, curiosidades c 
         WHERE p.clave_pelicula = c.clave_pelicula AND c.alias_usuario='$alias'";
         $db->query($sql);
        //  var_dump( $db->cargaMatriz());
         return $db->cargaMatriz();                
      }

      public static function countHistorias($alias)
     {
         $db = new database();
         $sql = "SELECT COUNT(*) num 
         FROM curiosidades 
         WHERE alias_usuario='$alias'";
         $db->query($sql);
         return $db->cargaFila();                
      }

}
