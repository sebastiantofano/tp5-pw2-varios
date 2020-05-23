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
    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1>Ejercicio 8 - Piedra, Papel o Tijera</h1>
<?php
$jugadaSeba = new Piedra("Seba");
$jugadaAnonimo = new Tijera("Anonimo");

$resultado = $jugadaSeba->competirContra($jugadaAnonimo);
$ganador = $resultado->ganador();
echo "<p class='h5'>Seba eligió " . $jugadaSeba->getMano();
echo "<p class='h5'>Anónimo eligió " . $jugadaAnonimo->getMano();
if($ganador != "Empate"){
    echo "<p class='h3'>El jugador ganador es $ganador</p>";
}else{
    echo "<p class='h3'>Mano empatada.</p>";
}
?>
<br />
<a href="../" class="btn btn-outline-primary ">Volver</a>
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
