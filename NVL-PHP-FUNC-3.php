<?php
function cuentaVocales($frase){
    echo "Longitud total del string: " . strlen($frase);
    echo "<br>";
    echo "<br>";
    $condicion = ["a","e","i","o","u"];
    foreach($condicion as $referencia){
        /* -----******-------Esta linea sin la condicion IF nos mostraría el numero de cada caracter-------********-------------
    echo "tiene: " . substr_count(strtolower($frase),strtolower($referencia)) . "caracter ". $referencia . "<br>";
    */
    if(substr_count(strtolower($frase),strtolower($referencia)) != $referencia){
        echo "<br>";
        echo "Tiene las 5 vocales";
    break;
    }else{
        echo "<br>";
        echo "No tiene las 5 vocales";
    break;
    }
    }
   }return cuentaVocales("escualido");
 


?>