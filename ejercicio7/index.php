<?php
    include_once ("./funciones.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
</head>
<body>
<h1>Ejercicio 7 - </h1>
<?php
    $texto = "hola como estas todo bine hola holas";
    $palabra = "hola";

    $resultado = buscar($palabra,$texto);
    print_r($resultado);

?>
</body>
</html>
