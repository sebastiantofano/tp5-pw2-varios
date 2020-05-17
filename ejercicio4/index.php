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
</head>
<body>
    <h1>Ejercicio 4 - Visitas Extraterrestres</h1>
    <form action="registrar-visita.php" method="post">
        <label for="nombre">Ingrese nombre: <input type="text" name="nombre" id="nombre" required></label><br /><br />
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
    echo (isset($_SESSION["success"])) ? "<p style='color: green'>Cargado Correctamente</p>":"";

    $dirArchivo = "./visitas/visitas.json";
    if(file_exists($dirArchivo)) {
        $visitasJSON = file_get_contents($dirArchivo);
//    Convierto el json en una matriz asociativa
        $visitasMatriz = json_decode($visitasJSON, TRUE);


        $contadorExt = 0;
        echo "<table>
            <tr>
              <td><strong>Planeta</strong></td>
              <td><strong>Nombre del visitante</strong></td>
            </tr>";

//    Recorro mi matriz, la cual en cada posición tiene una matriz asociativa
//        print_r($visitasMatriz);
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
        echo "</table>";
        echo "<h2 style='color: red'><strong>La cantidad de extraterrestres es $contadorExt</strong></h2>";
    }
    ?>
</body>
</html>