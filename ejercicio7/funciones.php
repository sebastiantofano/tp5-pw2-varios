<?php

function buscar($palabra, $texto){
    $ocurrencias = 0;

//    Recorro todos los caracteres del texto
    for($i=0;$i<strlen($texto);$i++) {
//       Pregunto si hay coincidencia con la primera letra de la palabra
        if($texto[$i] == $palabra[0]){
            $siguienteLetraPalabra = 0;
            $cantidadLetraCoincidenciaTexto = 0;
//           j va a recorrer la cantidad de letras que tenga la palabra, y me ayuda a recorrer las siguientes letras del texto a partir de la ocurrencia de la primera letra con la palabra i= primera letra coincidente  , j=próximas N letras de la palabra
            for($j=0;$j<strlen($palabra);$j++){
                if($texto[$i+$j] == $palabra[$siguienteLetraPalabra]){
                    $cantidadLetraCoincidenciaTexto++;
                    $siguienteLetraPalabra++;
                }
                    if(strlen($palabra) == $cantidadLetraCoincidenciaTexto
                    and ($texto[$i-1]== " " || $texto[$i] == $texto[0])){
                        $ocurrencias++;
                    }
            }
        }
    }
    return $ocurrencias;
}