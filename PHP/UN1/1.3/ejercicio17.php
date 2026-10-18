<?php
//hay que declararlo fuera
$palabras = [];
do{
    $cad = readline ("Escribe una frase: ");
    if ($cad !== "FIN") {
        //CON EXPLODE SEPARAMOS LAS PALABRAS DE LA FRASE
        $palabrasFrase = explode(" ", $cad);

        foreach($palabrasFrase as $palabra){
            $palabras[] = $palabra;
        }

    }

}while($cad !== "FIN");

//ORDENAMOS LAS PALABRAS EN ORDEN INVERSO
arsort($palabras);

foreach ($palabras as $palabra){
    echo $palabra . "\n";
}

/*
 * ESTE COMANDO SIRVE PARA DAR LA VUELTA A LAS PALABRAS CARACTER A CARACTER
foreach ($palabras as $palabra){
    echo strrev($palabra) . "\n";
}
*/

