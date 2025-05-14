<?php

//Una dimensión

$semana = [
    "Lunes","martes", 5 , True 
];
print_r($semana); //xq es un array 
#Array ( [0] => Lunes [1] => martes [2] => 5 [3] => 1 )

echo $semana[0]; //imprime solo el indice indicado
#Lunes

var_dump($semana);//nos dira la longitus y el tipo 
#sarray(4) { [0]=> string(5) "Lunes" [1]=> string(6) "martes" [2]=> int(5) [3]=> bool(true) }


//====================================================


//crear un arreglo 
$personas = [];

$persona[]="ana";
$persona[]="lucas";
$persona[]="pedro";

print_r($persona);
#Array ( [0] => ana [1] => lucas [2] => pedro )


//agregar dato al arreglo 

$nuevosItem = array_merge($persona, ['andres']);
print_r($nuevosItem);
#Array ( [0] => ana [1] => lucas [2] => pedro [3] => andres )


//contar items 

echo count($nuevosItem);
#4



//modificar datos 
$nuevosItem[0]="anahi";
print_r($nuevosItem);
#Array ( [0] => anahi [1] => lucas [2] => pedro [3] => andres )

//borrar

unset($nuevosItem[1]);
print_r($nuevosItem);
#Array ( [0] => anahi [2] => pedro [3] => andres )

//para acomodar los indices los agregamos en un arreglo y un foreach 

$itemsActuales = [];
foreach ($nuevosItem as  $items){
    $itemsActuales[] = $items;
}

print_r($itemsActuales);
#Array ( [0] => anahi [1] => pedro [2] => andres )


//====================================================


//podemos sacar q letra hay x el indice
$nombre = "Richard";
echo $nombre[2];
#c

//cambiar la letra
$nombre = "Richard";
$nombre[2] = "K";
echo $nombre;
#RiKhard


//====================================================


//convertir string a array separandolos x el espacio

$frase = 'En un lugar de la mancha';
$arrayDeFrase = preg_split('/[\s,]+/', $frase);
echo $arrayDeFrase[2];
# "lugar"

var_dump($arrayDeFrase);
#ararray(6) { [0]=> string(2) "En" [1]=> string(2) "un" [2]=> string(5) "lugar" [3]=> string(2) "de" [4]=> string(2) "la" [5]=> string(6) "mancha" }




//====================================================


//2 dimensiones de arreglo 


$zara = [
    123 => [
      'nombre' => 'Camisa a cuadros',
      'precio' => 29.95,
      'sexo' => 'Hombre'
    ],
    234 => [
      'nombre' => 'Falda manga',
      'precio' => 19.95,
      'sexo' => 'Mujer'
    ]
];

var_dump($zara);
// array(2) { [123]=> array(3) { ["nombre"]=> string(16) "Camisa a cuadros" ["precio"]=> float(29.95) ["sexo"]=> string(6) "Hombre" } [234]=> array(3) { ["nombre"]=> string(11) "Falda manga" ["precio"]=> float(19.95) ["sexo"]=> string(5) "Mujer" } }

//si quiero todos los elementos del array seria con un bucle 
foreach ($zara as $producto) {  //array principal
    foreach ($producto as $elemento) {  //array del array 
        echo "$elemento \n";
    }
}

echo $zara[234]['nombre'];
#Falda manga

//====================================================

//range : genera un array de elementos. Admite 2 o 3 parámetros. => range($inicio, $fin, $pasos);

var_dump(range(0, 100, 20));//saltando 20
#array(6) { [0]=> int(0) [1]=> int(20) [2]=> int(40) [3]=> int(60) [4]=> int(80) [5]=> int(100) }

var_dump(range("a", "z", 5));//saltando 5
# array(6) { [0]=> string(1) "a" [1]=> string(1) "f" [2]=> string(1) "k" [3]=> string(1) "p" [4]=> string(1) "u" [5]=> string(1) "z" }

//====================================================


#-----array multiple --------------

$cal =[
    ["nombre"=>"juan" , "nota1" =>6 , "nota2" => 10, "nota3" => 10],
    ["nombre"=>"ana" , "nota1" =>5 , "nota2" => 5, "nota3" => 5],
    ["nombre"=>"lucas" , "nota1" =>10 , "nota2" => 10, "nota3" => 10],
];

$resultados = "";//guardo para poderlo mostrar junto 

    foreach ($cal as $alumno) {
        $prom = ($alumno['nota1'] + $alumno['nota2'] + $alumno['nota3']) / 3;
        $resultados .= "Alumno: " . $alumno['nombre'] . " - Promedio: " . $prom . "\n";//concateno
    }
echo "\n" .   $resultados;


