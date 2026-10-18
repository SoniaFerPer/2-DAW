<?php
$contador = 0;


$numeros = [
    "pares" => [],
    "impares" => []
];

/*se puede hacer sin nombre y con nombres
$numeros = [
    [],
    []
];
*/
do{
    $num =intval(readline("di un numero: "));

    if($num != 0){
        if ($num % 2 === 0) {
            $numeros[0][] = $num;
        } else {
            $numeros[1][] = $num;
        }
    }
        $contador++;
}while($num !== 0);

echo "hay " . $contador . " números.\n";

foreach ($numeros[0] as $numero) {
    echo "pares: " . $numero . " ";
}

echo "  ";

foreach ($numeros[1] as $numero) {
    echo "impares: " . $numero . " ";
}
//imprimir todo el array de golpe
//print_r($numeros);

