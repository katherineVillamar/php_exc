<?php //bucle foreach ?>

<html>

<body>
    <h1>¿Cuantos años tienes?</h1>
    <select>
        <?php foreach (range(1, 10) as $num): ?>
            <option value="<?php echo $num; ?>"><?php echo $num . ' años'; ?></option>
            <?php //↑ es lo mismo que →  <option value="1">1 años</option> .x10 ..  ?>
        <?php endforeach; ?>
    </select>
</body>

</html>
<?php

$animalesFantasticos = ['fénix', 'dragón', 'grifo', 'pegaso', 'cerbero'];
foreach ($animalesFantasticos as $animal) {
    echo $animal . ' ';
}
#fénix dragón grifo pegaso cerbero 

$animalesFantasticos = ['fénix', 'dragón', 'grifo', 'pegaso', 'cerbero'];
// key es la posicion 
foreach ($animalesFantasticos as $posicion => $animal) {
    echo "El animal $animal ocupa la posición $posicion \n";
}
# El animal fénix ocupa la posición 0



//range : genera un array de elementos. Admite 2 o 3 parámetros. => range($inicio, $fin, $pasos);

var_dump(range(0, 100, 20));
#array(6) { [0]=> int(0) [1]=> int(20) [2]=> int(40) [3]=> int(60) [4]=> int(80) [5]=> int(100) }

foreach (range(1, 5) as $num) {
    echo $num;
}
# 12345




$zara = [ //array principal 
    123 => [ //array del array   
      'nombre' => 'Camisa a cuadros',
      'precio' => 29.95,
      'sexo' => 'Hombre'
    ],
    234 => [
      'nombre' => 'Falda manga',
      'precio' => 19.95,
      'sexo' => 'Mujer'
    ],
    345 => [
      'nombre' => 'Bolso minúsculo',
      'precio' => 50,
      'sexo' => 'Mujer'
    ]
];

//cuando es multidimension 1 foreach me devuelve cada array del array 
foreach ($zara as $producto) {
    print_r($producto);
}

/*array(3) {
  'nombre' =>
  string(16) "Camisa a cuadros"
  'precio' =>
  double(29.95)
  'sexo' =>
  string(6) "Hombre"
}*/


//cuando es multidimension 2 foreach me devuelve todos los elementos de los array en 1 solo
foreach ($zara as $producto) {
    foreach ($producto as $elemento) {
        echo "$elemento \n";
    }
}
// Camisa a cuadros
// 29.95
// Hombre
// Falda manga
// 19.95
// Mujer
// Bolso minúsculo
// 50
// Mujer