<?php
include_once "./clases/Piedra.php";
include_once "./clases/Papel.php";
include_once "./clases/Tijera.php";
include_once "./clases/Empate.php";
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
<h1>Piedra, Papel o Tijera</h1>
<?php
$jugadaSeba = new Piedra("Seba");
$jugadaAnonimo = new Tijera("Anonimo");

$resultado = $jugadaSeba->competirContra($jugadaAnonimo);
$ganador = $resultado->ganador();
echo "<p>Seba eligió " . $jugadaSeba->getMano();
echo "<p>Anónimo eligió " . $jugadaAnonimo->getMano();
if($ganador != "Empate"){
    echo "<p>El jugador ganador es $ganador</p>";
}else{
    echo "<p>Mano empatada.</p>";
}

?>
</body>
</html>
