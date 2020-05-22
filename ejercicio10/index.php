<?php
include_once "./clases/Pacman.php";
include_once "./clases/Fantasma.php";
include_once "./clases/Pildora.php";
include_once "./clases/FantasmaComestible.php";

$pacman = new Pacman();
$fantasma = new Fantasma();
$pildora = new Pildora();
$fantasmaComestible = new FantasmaComestible();

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


