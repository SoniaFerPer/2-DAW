<?php
$cad1 = readline("Introduce una cadena: ");
$cad2 = readline("Introduce una cadena: ");
if(strlen($cad1) > strlen($cad2)) {
    echo $cad2 . " " . $cad1;
}else if(strlen($cad2) > strlen($cad1)) {
    echo $cad1 . " " . $cad2;
}else{
    echo $cad1 . " " . $cad2;
}