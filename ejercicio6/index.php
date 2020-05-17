<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
</head>
<body>
<h1>Ejercicio 6 - Matriz</h1>
<?php

$ejeX = range( 1, 10 );
$ejeY = range( 1, 10 );
$contador= 0;
foreach ( $ejeX as $x ) {
    foreach ( $ejeY as $y ) {
        // Aquí creamos los ejes con un valor aleatorio
        $contador += 1;
        $ejesXY[ $x ][ $y ] = $contador;
    }
}
//print_r( $ejesXY );

//Construcción de tabla
$html = '<table border style="font-size: 20px;">';
$html .= '<th></th>';
// Para crear las columnas X ( $ejeX = 1 a 10 )
foreach ( $ejeX as $col_X ) {
    $html .= '<th>'.$col_X.'</th>';
}
foreach ( $ejesXY as $col_Y => $valores ) {
    $html .= '<tr>';
    // Para crear las columnas Y ( $ejeY = 1 a 10 )
    $html .= '<td><b>'.$col_Y.'</b></td>';
    foreach ( $valores as $valor ) {
        // Creamos los campos de los valores
        $html .= '<td>'.$valor.'</td>';
    }
    $html .= '</tr>';
}
$html .= '</table>';

//Muestra la tabla
echo $html;

echo "<p><strong>Diagonal principal: </strong></p>";
for($i=1; $i<=10; $i++){
    echo $ejesXY[$i][$i] . " - " ;
}
echo "<p><strong>Diagonal secundaria: </strong></p>";
for($i=10; $i>=1; $i--){
    echo $ejesXY[11-$i][$i] . " - " ;
}

$resultado = 0 ;
for($i=1; $i<=10; $i++){
    for($j=1; $j<=10; $j++) {
         $resultado +=$ejesXY[$i][$j];
    }
}
echo "<p><strong>Suma de toda la matriz: $resultado</strong></p>";
?>
</body>
</html>