<?php
    session_start()
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Ejercicio 3 - Lanzar dados</h1>

    <form action="lanzar-dados.php" method="post">
        <input type="submit" name="boton" value="Lanzar Datos">
    </form>

    <?php
    if(isset($_SESSION["valor1"]) and isset($_SESSION["valor2"])){
        $valor1 = base64_decode($_SESSION["valor1"]);
        $valor2 = base64_decode($_SESSION["valor2"]);
        $resultado = $valor1 + $valor2;
        echo "<h2>Resultado del lanzamiento: $resultado</h2>";
        echo "<img src='./img/lado$valor1.png'>";
        echo "<img src='./img/lado$valor2.png'>";

    }
    ?>
    <br />
    <a href="../" class="button">Volver</a>
</body>
</html>