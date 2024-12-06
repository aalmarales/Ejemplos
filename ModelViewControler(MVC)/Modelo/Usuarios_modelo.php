<?php
class Usuarios{

    private $conexion_bd;
    private $array_usuarios;

    public function __construct()
    {
        require_once("Modelo/Conexion.php");
        $this->conexion_bd=Conexion::conectar();
        $array_usuarios=array();
    }

    public function mostrarAll(){

        $sql="SELECT * FROM registros_usuarios";
        $stm=$this->conexion_bd->prepare($sql);
        $stm->execute();
        

        while($fila=$stm->fetch(PDO::FETCH_ASSOC)){
            $this->array_usuarios[]=$fila;
        }

        return $this->array_usuarios;

    }



}


?>