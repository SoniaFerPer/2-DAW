<?php
$mensaje1 = readline("Primera cadena: ");
$mensaje2 = readline("Segunda cadena: ");
if (strcmp($mensaje1, $mensaje2) <= 0) {
    echo $mensaje1 . " " . $mensaje2;
} else {
    echo $mensaje2 . " " . $mensaje1;
}


