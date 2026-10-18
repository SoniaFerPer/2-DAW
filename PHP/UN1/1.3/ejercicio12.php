<?php
$numBaldosa = floatval(readline("Dime cuantas baldosas tienes: "));
$anchoLocal = floatval(readline("Dime el ancho del local: "));
$largoLocal = floatval(readline("Dime el largo del local: "));
$m2Baldosa = floatval(readline("Dime los metros cuadrados de la baldosa: "));
$m2Local= $anchoLocal * $largoLocal;

if($m2Baldosa*$numBaldosa >= $m2Local ){
    echo "Tienes suficientes baldosas";
}else{
    echo "No tienes suficientes baldosas";
}

