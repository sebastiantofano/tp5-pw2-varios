<?php
include_once "./clases/Operando.php";
include_once "./clases/Sumar.php";
include_once "./clases/Restar.php";
include_once "./clases/Multiplicar.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 9</title>
</head>
<body>
<h1>Calculadora</h1>
<?php
    $operando1 = new Operando(10);
    $operando2 = new Operando(5);
    $resultado1 = new Sumar($operando1,$operando2);
    $resultado2 = new Restar($operando1,$operando2);
    $resultado3 = new Multiplicar($operando1,$operando2);

    echo "<p>El resultado de ".$operando1->getValor()." + " . $operando2->getValor() . " es ".$resultado1->resolverEcuacion()."</p>";
    echo "<p>El resultado de ".$operando1->getValor()." - " . $operando2->getValor() . " es ".$resultado2->resolverEcuacion()."</p>";
    echo "<p>El resultado de ".$operando1->getValor()." * " . $operando2->getValor() . " es ".$resultado3->resolverEcuacion()."</p>";
?>
</body>
</html>



