<?php
global $total;
for ($i=0;$i<10;$i++) {
    //primero el numero es una string y luego lo convertimos a int
    $numero = readline("Introduce un numero: ");
    //NO HACE FALTA CONVERTIR
    //$numero = intval($numero);
    $total += $numero;
}
echo $total;

/*
 * CON FSCANF
for ($i = 0; $i < 10; $i++) {
    fscanf(STDIN, "%d", $numero);
    echo "Leído: $numero\n";
}
 */
