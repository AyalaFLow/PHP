<?php
$apertura = fopen("quijote.txt", "r");
$findName = "que";
while (($contenido = fgets($apertura)) !== false) {
    echo "<br>";
    echo "<br>";
    echo "El contenido de QUIJOTE tiene la palabra: " . $findName . " " . substr_count(strtolower($contenido) , strtolower($findName)) . "  veces";
}
?>