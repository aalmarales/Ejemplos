<?php


$url="";

$inicializar_url=curl_init($url);

//curl_setopt($inicializar_url,CURLOPT_URL,$url);

//curl_setopt($inicializar_url,)

curl_setopt($inicializar_url,CURLOPT_RETURNTRANSFER,true);

$resul=curl_exec($inicializar_url);

$arr=json_decode($resul,true);


print_r($arr);

//curl_close($inicializar_url);



?>