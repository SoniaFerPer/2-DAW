<?php
$nombre1 = readline("Nombre del jugador 1: ");
$precio1 = (float) readline("Precio del jugador 1: ");
$nombre2 = readline("Nombre del jugador 2: ");
$precio2 = (float) readline("Precio del jugador 2: ");
$precioJusto = (float) readline("El precio Justo: ");

$valido1 = $precio1 <= $precioJusto;
$valido2 = $precio2 <= $precioJusto;

//PRIMERA COMPROBAMOS SI ES VALIDO AMBOS Y LOS COMPARAMOS
if($valido1 && $valido2){
    if($precio1 > $precio2){
        echo "$nombre1 gana";
    }elseif($precio2 > $precio1){
        echo "$nombre2 gana";
    }else{
        echo "Empate";
    }
    //SI UNO DE LOS DOS NO ES VALIDO COMPARAMOS CON UNO U OTRO
} elseif ($valido1) {
    echo "Gana $nombre1\n";
} elseif ($valido2) {
    echo "Gana $nombre2\n";
} else {
    echo "No gana nadie\n";
}
