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

            $pacman->chocaContra($fantasma);
            $pacman->chocaContra($fantasma);
            $pacman->chocaContra($fantasma);

            $puntos = $pacman->getPuntos();
            echo "<p>Pacman esta sumando: $puntos</p>";
            $vidas = $pacman->getVidas();
            echo "Cantidad de vidas para seguir jugando: $vidas";

        }catch (Exception $e){
            $puntos = $pacman->getPuntos();
            echo "<p>Pacman sumo: $puntos</p>";
            echo $e->getMessage();
        }
    }else{
       $restablecido = restablecerPacman($pacman);
        echo $restablecido;
    }

    function restablecerPacman($pac) {
        return $pac->restart();
    }
    ?>

    <form action="index.php" method="GET">
        <input type="submit" value="Restart" name="restablecer">
    </form>
</body>
</html>


