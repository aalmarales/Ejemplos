<?php
require_once("Modelo/Usuarios_modelo.php");

$obj=new Usuarios();
$userAll=$obj->mostrarAll();




require_once("View/Usuarios_view.php");

?>