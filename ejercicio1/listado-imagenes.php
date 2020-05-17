<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Imagenes</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Listado de Imágenes</h1>
    <?php
    $dir = './img/';
    $dirArray = dir($dir);

    echo "<ul>";
    while (($archivo = $dirArray->read()) !== false) {
        if (!($archivo == ".") && !($archivo == "..")) {
            echo "<li>$archivo <a href='$dir$archivo'>Mostrar Imagen</a></li>" . "<br />";
        }
    }
    echo "</ul>";
    $dirArray->close();
    ?>
    <a href="./" class="button">Volver</a>
</body>
</html>