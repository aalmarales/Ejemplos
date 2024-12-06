<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>USUARIOS REGISTRADOS</h1>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Usuario</td>
        </tr>
 
    <?php

    header("Content-Type: application/json");
    $metodo=$_SERVER["REQUEST_METHOD"];

    //print_r($metodo);

    switch ($metodo) {
        case 'GET':
            echo "Metodo GET";
            break;
        case 'POST':
            echo "Metodo POST";
            break;
        case 'PUT':
            echo "Metodo PUT";
            break;
        case 'DELETE':
            echo "Metodo DELETE";
            break;
        
        default:
            echo"no esta permitido otro metodo";
            break;
    }
    
    /*foreach($userAll as $user):?>
    {
        <tr>
            <td><?php echo $user["nombre"];?></td>
            <td><?php echo $user["apellido"];?></td>
            <td><?php echo $user["edad"];?></td>
            <td><?php echo $user["usuario"];?></td>
        </tr>
    }
    
<?php
endforeach;*/
?>
</table>
</body>
</html>