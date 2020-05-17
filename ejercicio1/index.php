<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<h1>Ejercicio 1 - Imágenes</h1>
<h3><a href="listado-imagenes.php">Ir al listado de imágenes del Ejercicio 2</a></h3>
<?php
$dirImagenes = "./img/";
$arrayImagenes = dir($dirImagenes);


while(($archivo = $arrayImagenes->read()) !== false ){
    if(!($archivo==".") && !($archivo=="..")) {
        echo "<li style='display: inline-block;margin: 20px;'>";
        echo "<p style='margin-bottom: 0; margin-top: 30px;'>$archivo </p>";
        echo  "<img src='$dirImagenes$archivo' width='150px'"."<br />";
        echo "</li>";
    }
}
$arrayImagenes->close();
echo (isset($_GET["carga"]) and $_GET["carga"]=='1') ? "<p style='color:green'>La imagen se cargo correctamente" : "";
echo (isset($_GET["carga"]) and $_GET["carga"]=='2') ? "<p style='color:red'>Una imagen ya existe con este nombre" : "";
echo (isset($_GET["carga"]) and $_GET["carga"]=='3') ? "<p style='color:red'>No es un formato aceptado" : "";
?>
<form action="cargar-imagen.php" method="post" enctype="multipart/form-data" style="margin-top: 40px">
    <input type="file" name="imagen" id="">
    <input type="submit" value="Cargar Imagen">
</form>

<a href="../" class="button">Volver</a>
</body>
</html>