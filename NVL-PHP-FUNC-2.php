<?php
function cuentaLetras1 ($palabra1, $valor1){
   echo "Longitud total del string: " . strlen($palabra1);
   echo "<br>";
   echo "<br>";
   echo "Tiene: " . substr_count(strtolower($palabra1),strtolower($valor1)) . " caracter " . $valor1;
    
}return cuentaLetras1("Upgrade Hub", "u");
?>