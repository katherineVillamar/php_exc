<?php 

//foreach con claves 


$items =["casa", "carro" , "perro"];
foreach($items as $item){
    echo $item."\n";
}


echo "\n";

$items2 =[
    "casa" =>"Azul", 
    "carro" =>"vmw", 
    "perro"=>"labrador"
];
foreach($items2 as $clave => $item2){
    echo $clave . " " . $item2."\n";
}
echo "\n";
//araay principal
$items3 =[
    ["casa" =>"Azul","carro" =>"vmw","perro"=>"labrador"], //array secund
    ["casa" =>"negro","carro" =>"toyota","perro"=>"box"],
    ["casa" =>"blanco","carro" =>"kia","perro"=>"corgy"],
];

foreach($items3 as $item){
echo $item['carro']."\n"; //todos los carros del array
echo $item['casa'] ." + ".$item['carro']."\n"; //todos los carros del array
}

echo "\n";

foreach ($items3 as $item) {  //array principal
    foreach ($item as $elemento) {  //array del array 
        echo "$elemento \n";
    }
}