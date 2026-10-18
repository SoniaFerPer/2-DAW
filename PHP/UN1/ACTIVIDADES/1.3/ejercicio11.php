<?php
$tipoVeh = "";
$velocidad = "";

$comprobar = strtoupper(readline("¿Quieres comprobar el vehiculo? (S/N): "));

while ($comprobar === "S"){

    $tipoVeh = strtoupper(readline("Que tipo de vehiculo es: "));
    $velocidad =intval(readline("a que velocidad va: "));

    if($tipoVeh === "T" && $velocidad > 120){
        echo "El turismo tiene sanción.\n";
    }elseif ($tipoVeh === "C" && $velocidad > 100){
        echo "El camión tiene sanción.\n";
    }elseif ($tipoVeh === "M" && $velocidad > 50){
        echo "El ciclomotor tiene sanción.\n";
    }else{
        echo "no tiene sanción";
    }

    $comprobar =strtoupper(readline("¿Quieres comprobar el vehiculo? (S/N): "));

};
