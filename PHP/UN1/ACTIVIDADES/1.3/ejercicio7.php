<?php
$a = (float) readline("valor: ");
$b = (float) readline("valor: ");
$c = (float) readline("valor: ");
//con ** es la potencia y ademas le da prioridad al ser una potencia, se hace antes
$discriminante = $b ** 2 - 4 * $a * $c;

if($discriminante < 0){
    echo "No hay soluciones reales\n";
}else if($discriminante == 0){
    $x = -$b / (2 * $a);
    echo "Hay una única solución: $x\n";
}else{
    //sqrt es la raiz cuadrada
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

    echo "Hay dos soluciones reales:\n";
    echo "x1 = $x1\n";
    echo "x2 = $x2\n";
}