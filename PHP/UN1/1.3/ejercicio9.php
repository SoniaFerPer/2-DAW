<?php
$horaActual = intval(readline("Dime la hora actual: "));
$minActual = intval(readline("dime los minutos actuales: "));

$minutosDia = 1440;

$tiempoRes = $minutosDia - ($horaActual * 60 + $minActual);

echo "Quedan " . $tiempoRes . " minutos.";

