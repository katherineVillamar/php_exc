<?php

$a = "casa3";

$b = "casa1" ;
$c = "casa2" ;
$d = "casa3" ;


$res = match($a){
    
    $b => "IGUAL B " ,
    $c => "IGUAL C" ,
    $d => "IGUAL D" ,
    default => "no conincide"
};
echo $res;

echo "\n-----------------\n";

$edad = 16;

$res2 = match(true){
    $edad >= 60 => "jubilado",
    $edad >= 30 => "adulto",
    $edad >= 18 => "mayor de edad",
    default => "niño"
};
echo $res2;