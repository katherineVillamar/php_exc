<?php
require_once 'funciones.php';
$clase = new Funciones();

//notas de a 1-1
$promedio = $clase->promedio(6,5,10);
echo $promedio;

//====================================================

//array de notas
$notas =[
    "n1" => 6 ,
    "n2" => 10,
    "n3" => 10
];

$promedio2 = $clase->promedioArr($notas);
echo "\n" .$promedio2;

//====================================================


//array ,multiple
$cal =[
    ["nombre"=>"juan" , "nota1" =>6 , "nota2" => 10, "nota3" => 10],
    ["nombre"=>"ana" , "nota1" =>5 , "nota2" => 5, "nota3" => 5],
    ["nombre"=>"lucas" , "nota1" =>10 , "nota2" => 10, "nota3" => 10],
];

$promedio3 = $clase->promedioArrMultiple($cal);
echo "\n" . $promedio3;