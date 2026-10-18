<?php
for($i = 0; $i <10;$i++){
    $num = rand(10,19);
    if($num < 15){
        echo $num. " es menor\n";
    }else if ($num > 15){
        echo $num. " es mayor\n";
    }else{
        echo $num. " es igual a 15\n";
    }
}
