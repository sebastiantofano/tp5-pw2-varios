<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1>Ejercicio 1 - Imágenes</h1>
<h3><a href="listado-imagenes.php">Ir al listado de imágenes del Ejercicio 2</a></h3>
<a href="../" class="btn btn-outline-primary ">Volver</a>
<br />
<form action="cargar-imagen.php" method="post" enctype="multipart/form-data" style="margin-top: 40px">
    <input type="file" name="imagen" id="">
    <input type="submit" value="Cargar Imagen">
</form>
<?php
$dirImagenes = "./img/";
$arrayImagenes = dir($dirImagenes);


while(($archivo = $arrayImagenes->read()) !== false ){
    if(!($archivo==".") && !($archivo=="..")) {
        echo "<li class='text-center'  style='display: inline-block;margin: 20px;'>";
        echo "<p class='h3' style='margin-bottom: 0; margin-top: 30px;'>$archivo </p>";
        echo  "<img src='$dirImagenes$archivo' width='150px' class='img-thumbnail card-img-top''"."<br />";
        echo "</li>";
    }
}
$arrayImagenes->close();
echo (isset($_GET["carga"]) and $_GET["carga"]=='1') ? "<p style='color:green'>La imagen se cargo correctamente" : "";
echo (isset($_GET["carga"]) and $_GET["carga"]=='2') ? "<p style='color:red'>Una imagen ya existe con este nombre" : "";
echo (isset($_GET["carga"]) and $_GET["carga"]=='3') ? "<p style='color:red'>No es un formato aceptado" : "";
?>



<!--Jquery.js-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<!--Popper.js-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<!--js-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>