<?php
session_start();
//    Para actualizar y que me borre la notificación de carga exitosa, se hace asi?
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!--    Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h1>Ejercicio 4 - Contador de visitas... extraterrestres</h1>
<form action="registrar-visita.php" method="post">
    <label for="nombre">Ingrese nombre: <input type="text" name="nombre" id="nombre" required></label><br/><br/>
    <label for="planeta">Ingrese planeta:
        <select name="planeta" id="planeta">
            <option value="planeta-tierra">Planeta Tierra</option>
            <option value="planeta2">Planeta 2</option>
            <option value="planeta3">Planeta 3</option>
            <option value="planeta4">Planeta 4</option>
            <option value="planeta5">Planeta 5</option>
            <option value="planeta6">Planeta 6</option>
            <option value="planeta7">Planeta 7</option>
            <option value="planeta8">Planeta 8</option>
        </select></label>
    <input type="submit" value="Registrar visita">
</form>
<?php
echo (isset($_SESSION["success"])) ? "<p style='color: green'>Cargado Correctamente</p>" : "";

$dirArchivo = "./visitas/visitas.json";
if (file_exists($dirArchivo)) {
    $visitasJSON = file_get_contents($dirArchivo);
//    Convierto el json en una matriz asociativa
    $visitasMatriz = json_decode($visitasJSON, TRUE);


    $contadorExt = 0;
    echo "<table class='table'>
          <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Nombre del Planeta</th>
      <th scope=\"col\">Nombre del visitante</th>
    </tr>
  </thead>";

//    Recorro mi matriz, la cual en cada posición tiene una matriz asociativa
//        print_r($visitasMatriz);
    echo "<tbody>";
    foreach ($visitasMatriz as $registro) {
        echo "
            <tr>
                <td>{$registro['planeta']}</td>
                <td>{$registro['nombre']}</td>
            </tr>";

        if ($registro['planeta'] != "planeta-tierra") {
            $contadorExt++;
        }
    }
    echo "</tbody>";
    echo "</table>";
    echo "<h2 style='color: red'><strong>La cantidad de extraterrestres es $contadorExt</strong></h2>";
}
?>
<br/>
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