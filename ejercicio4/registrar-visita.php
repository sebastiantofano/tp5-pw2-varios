<?php
session_start();
$nombre = $_POST["nombre"];
$planeta = $_POST["planeta"];

$dirVisitas = "./visitas/";
$archivo = $dirVisitas."visitas.json";

//Si el archivo no existe crearlo
if(!file_exists($archivo)) {
//    Empiezo guardándolo en la posición 0 porque sino me falla cuando quiero agregar otro registro mas al json
    $registroMatriz[0] = array("nombre" => $nombre, "planeta" => $planeta);
//    Codifico la matriz
    $registroJSON = json_encode($registroMatriz);
//    Guardo el json
    file_put_contents($archivo, $registroJSON);
}else{
//    Obtengo el json
    $archivoJSON = file_get_contents($archivo);
//    Decodifico el json para tener una matriz asociativa
    $archivoMatriz = json_decode($archivoJSON,TRUE);
//    Armo un registro para insertar en la matriz
    $regMatriz = array("nombre" => $nombre, "planeta" => $planeta);
//    Inserto el registro en la matriz
    array_push($archivoMatriz, $regMatriz);
//    Convierto la matriz en json y la guardo en el archivo
    file_put_contents($archivo, json_encode($archivoMatriz));
}

    $_SESSION["success"] = true;
    header("location: index.php");
    exit();

