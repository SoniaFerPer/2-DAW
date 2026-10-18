<?php
$edadGer = readline("Edad de Gervasio: ");
$edadFac = readline("Edad de Facundina: ");
if($edadGer >= 18 && $edadFac >= 18){
    echo "Ambos pueden ir al cine";
}elseif ($edadGer >= 18 || $edadFac >= 18){
    echo "Uno de ellos puede ir al cine";
}else{
    echo "Ninguno puede ir al cine";
}