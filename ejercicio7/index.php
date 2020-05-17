<?php
    include_once ("./funciones.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
<h1>Ejercicio 7 - Búsqueda de palabra</h1>

<?php
    $texto = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur ?";
    $palabra = "dolorem";
    $resultado = buscar($palabra,$texto);

    echo "<p><strong>El texto enviado es:</strong><br /> $texto</p>";
    echo "<p><strong>La palabra enviada es:</strong> $palabra</p>";
    echo "<p><strong>La cantidad de ocurrencias es:</strong> $resultado</p>";

?>

<br />
<a href="../" class="button">Volver</a>
</body>
</html>
