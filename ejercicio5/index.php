<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<h1>Ejercicio5 - Mostrando Configuraciones</h1>
<h2>Archivo de configuración </h2>
<?php
    $matriz_ini = parse_ini_file("config.ini",true);
    print_r($matriz_ini);
    echo "<br /><br />";

    foreach ($matriz_ini as $clave => $valor){
        echo "$clave : $valor". "<br />";
    }
?>
<br />
<a href="../" class="button">Volver</a>
</body>
</html>