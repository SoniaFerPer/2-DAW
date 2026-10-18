<?php
$num1 = readline("Nota 1: ");
$num2 = readline("Nota 2: ");
$num3 = readline("Nota 3: ");
$total = ($num1 + $num2 + $num3)/ 3;
if($total >= 5) {
    //PARA PRINTEAR SOLO DOS DECIMALES
    printf("%.2f Estas aprobado\n", $total);
}else{
    printf("%.2f Estas Suspenso\n", $total);
}

