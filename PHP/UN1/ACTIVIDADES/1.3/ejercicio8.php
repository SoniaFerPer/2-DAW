<?php
$dia = intval(readline("valor: "));
$mes = intval(readline("valor: "));
if (($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) && ($dia >= 1 && $dia <= 31)){
    echo "Es valido";
}else if (($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && ($dia >= 1 && $dia <= 30)){
    echo "Es valido";
}else if ($mes == 2 && ($dia >= 1 && $dia <= 28)) {
    echo "Es válido";
}else{
    echo "Es invalido";
}
