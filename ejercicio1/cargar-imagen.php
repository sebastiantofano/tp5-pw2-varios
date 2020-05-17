<?php
$dir = "./img/";

$tipoArchivo = $_FILES['imagen']['type'];
$tamanoArchivo = $_FILES['imagen']['size'];

if (!((strpos($tipoArchivo, "jpeg") || strpos($tipoArchivo, "jpg") || strpos($tipoArchivo, "png")) && ($tamanoArchivo  < 50000000))){
    header("location: index.php?carga=3");
    exit();
}else{
    if(file_exists($dir. $_FILES["imagen"]["name"])){
        header("location: index.php?carga=2");
        exit();
    } else{
        move_uploaded_file($_FILES["imagen"]["tmp_name"],$dir . $_FILES["imagen"]["name"]);
        header("location: index.php?carga=1");
        exit();
    }
}
