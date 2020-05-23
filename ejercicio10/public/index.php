<?php
include_once "../scr/Pacman.php";
include_once "../scr/Fantasma.php";
include_once "../scr/Pildora.php";
include_once "../scr/FantasmaComestible.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
    <!--Estilos CSS-->
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <h1>Ejercicio 10 - Pacman</h1>

    <?php
    $pacman = new Pacman();
    $fantasma = new Fantasma();
    $pildora = new Pildora();
    $fantasmaComestible = new FantasmaComestible();

    if (!isset($_GET["restablecer"])) {
        try{
            $pacman->chocaContra($pildora);
            $pacman->chocaContra($pildora);
            $pacman->chocaContra($pildora);
            $pacman->chocaContra($pildora);

            $pacman->chocaContra($fantasmaComestible);
            $pacman->chocaContra($fantasmaComestible);
            $pacman->chocaContra($fantasmaComestible);

//            $pacman->chocaContra($fantasma);
            $pacman->chocaContra($fantasma);
            $pacman->chocaContra($fantasma);

            $puntos = $pacman->getPuntos();
            echo "<p class='h5'>Pacman esta sumando: $puntos</p>";
            $vidas = $pacman->getVidas();
            echo "Cantidad de vidas para seguir jugando: $vidas";

        }catch (Exception $e){
            $puntos = $pacman->getPuntos();
            echo "<p class='h5'>Pacman sumo: $puntos</p>";
            echo $e->getMessage();
        }
    }else{
       $restablecido = restablecerPacman($pacman);
       $vidasRestablecidas = $pacman->getVidas();
       $puntosRestablecidos = $pacman->getPuntos();
        echo $restablecido;
        echo "<p class='h5'>Nuevas vidas: $vidasRestablecidas</p>";
        echo "<p class='h5'>Puntos: $puntosRestablecidos</p>";
    }

    function restablecerPacman($pac) {
        return $pac->restart();
    }
    ?>

    <form action="index.php" method="GET">
        <input type="submit" value="Restart" name="restablecer" class="btn btn-info">
    </form>

    <br />
    <a href="../../" class="btn btn-outline-primary ">Volver</a>
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


