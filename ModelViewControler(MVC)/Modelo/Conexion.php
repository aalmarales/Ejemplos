<?php
class Conexion{

public static function conectar(){
    try {
        $conect=new PDO("mysql:host=localhost; dbname=proyecto1","root","");

        $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (Exception $e) {
        die("Error de conexion". $e->getMessage());
    }

    return $conect;
}



}

?>