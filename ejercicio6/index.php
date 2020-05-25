<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1>Ejercicio 6 - La Matrix... digo, matriz</h1>
<a href="../" class="btn btn-outline-primary ">Volver</a>
<?php

$ejeX = range( 1, 10 );
$ejeY = range( 1, 10 );
$contador= 0;
foreach ( $ejeX as $x ) {
    foreach ( $ejeY as $y ) {
        // Aquí creamos los valores
        $contador += 1;
        $ejesXY[ $x ][ $y ] = $contador;
    }
}
//print_r( $ejesXY );
//Construcción de tabla
$html = '<table border class="h3">';
$html .= '<th></th>';
// Para crear las columnas X ( $ejeX = 1 a 10 )
foreach ( $ejeX as $col_X ) {
    $html .= '<th class="h1 text-info">'.$col_X.'</th>';
}
foreach ( $ejesXY as $col_Y => $valores ) {
    $html .= '<tr>';
    // Para crear las columnas Y ( $ejeY = 1 a 10 )
    $html .= '<td class="h1 text-info"><b>'.$col_Y.'</b></td>';
    foreach ( $valores as $valor ) {
        // Creamos los campos de los valores
        $html .= '<td>'.$valor.'</td>';
    }
    $html .= '</tr>';
}
$html .= '</table>';

//Muestra la tabla
echo $html;

echo "<p class='h2'><strong>Diagonal principal: </strong></p>";
for($i=1; $i<=10; $i++){
    echo "<span class='text-success h4'>".$ejesXY[$i][$i] . " - " . "</span>" ;
}

echo "<p class='h2'><strong>Diagonal secundaria: </strong></p>";
for($i=10; $i>=1; $i--){
    echo "<span class='text-success h4'>".$ejesXY[11-$i][$i] . " - " . "</span>" ;
}

$resultado = 0 ;
for($i=1; $i<=10; $i++){
    for($j=1; $j<=10; $j++) {
         $resultado +=$ejesXY[$i][$j];
    }
}
echo "<p class='h2'><strong>Suma de toda la matriz: <span class='text-success'>$resultado</span></strong></p>";
?>
<br />

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