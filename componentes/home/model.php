<?php

class modelHome {
    
     public static function getReviews(){
        $db = new database();
        $sql = "SELECT r.puntuacion, r.alias_usuario, r.titulo, p.nombre 
        FROM reviews r, pelicula p 
        WHERE p.clave_pelicula=r.clave_pelicula 
        ORDER BY r.fecha DESC LIMIT 5";
        $db->query($sql);
        return $db->cargaMatriz();
    }

    public static function getStories(){
        $db = new database();
        $sql = "SELECT c.alias_usuario, c.titulo, c.fecha, p.nombre 
        FROM curiosidades c, pelicula p 
        WHERE p.clave_pelicula=c.clave_pelicula 
        ORDER BY c.fecha DESC LIMIT 5";
        $db->query($sql);
        return $db->cargaMatriz();
    }
    
    public static function getNoticias(){
        $db = new database();
        $sql = "SELECT p.nombre, n.titular, n.fecha 
        FROM noticias_pelicula n, pelicula p 
        WHERE n.clave_pelicula=p.clave_pelicula 
        ORDER BY n.fecha DESC LIMIT 5";
        $db->query($sql);
        return $db->cargaMatriz();
    }
}