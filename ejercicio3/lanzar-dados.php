<?php
    session_start();
if(isset($_POST["boton"])) {

    $valor1 = base64_encode(rand(1,6));
    $valor2 = base64_encode(rand(1,6));

    $_SESSION["valor1"] = $valor1;
    $_SESSION["valor2"] = $valor2;
    header("location: index.php");
    exit();
}