<?php
header("Content-Type: application/json");

$metodo=$_SERVER["REQUEST_METHOD"];
$path=$_SERVER["PATH_INFO"];
$url=$_SERVER["PHP_SELF"];
$script_name=$_SERVER["SCRIPT_NAME"];

$json='{"nombre": "Alexis",
        "apellido": "Medina"}';

$decod=json_decode($json,true);

$arr=["nombre"=>"Yili", "apellido"=>"Aguilar"];

$encod=json_encode($arr);
//print_r($arr) ;
//print_r($encod);
//echo $encod;
//echo $cod["nombre"];
//var_dump($cod) ;

/*echo $path."<br>";
echo $url."<br>";
echo $script_name."<br>";*/
//print_r($_SERVER);
/*$frase="hola/quetal/eresmia";
$porcion=explode("/",$frase);
//echo $primera;
//echo $segunda;
echo $porcion[0];*/

/*switch ($metodo) {
    case 'GET':
       echo "Metodo GET";
       mostrar();
        break;

    case 'POST':
        //echo "Metodo POST"."<br>";
        leer();
        break;
    
    default:
        echo "NO mas metodos";
        break;
}*/

function mostrar(){
    $all=array();
    $all["nombre"]="Berta";
    $all["apellido"]="Jerez";
    echo json_encode($all);
    
}
function leer(){
    $leer=json_decode(file_get_contents("php://input"));
    
    echo $leer->pinga;
    
}


?>