<?php
$mayor = 100;
$menor = 1;
for($i = 0; $i > 10; $i++){
    $num = intval(readline("di un numero del 1 al 100: "));
    while ($numero < 1 || $numero > 100) {
        echo "Número incorrecto. ";
        $numero = intval(readline("Introduce un número entre 1 y 100: "));
    }
    if ($numero < $menor) {
        $menor = $numero;
    }

    if ($numero > $mayor) {
        $mayor = $numero;
    }

    echo "Menor: $menor\n";
    echo "Mayor: $mayor\n";
}