// Bucle for

for (variable inicio; condicional; incremento) {
...
}

<?php

for ($i = 0; $i < 10; $i++) {
    echo "$i \n";
}
#0 1 2 3 4 5 6 7 8 9

?>

<html>

<head>
    <title> tabla de numeros </title>
</head>

<body>
    <?php
    echo "<table border=1>";
    $n = 1;
    for ($n1 = 1; $n1 <= 10; $n1++) {
        echo "<tr>";
        for ($n2 = 1; $n2 <= 10; $n2++) {
            echo "<td>", $n, "</td>";
            $n = $n + 1;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>
una tabla mostrar la tabla de multiplicar de un numero entero con for
<html>

<body>
    <?php
    echo "<table border=1>";
    $n = 5;
    for ($n1 = 1; $n1 <= 1; $n1++) { //1 numero
        echo "<tr>";
        for ($n2 = 1; $n2 <= 1; $n2++) { // 1 multiplo
            foreach (range(1, 12) as $num) {
                echo "<td>", $n, "</td>";
                echo "<td>", "X", "</td>";
                echo "<td>", $num, "</td>";
                echo "<td>", "=", "</td>";
                echo "<td>", $n * $num, "</td>";
                echo "</tr>";
            }
            $n = $n + 1;
        }
    }
    echo "</table>"; ?>
</body>


</html>
una tabla mostrar la tabla de multiplicar de un numero entero con while
<html>

<body>
    <?php
    echo '<table border = "1" width = "150">';
    $n = 6;
    $num=1;
    while ($num <= 12) {
        echo "<tr>";
        echo "<td>", $n, "</td>";
        echo "<td>", "X", "</td>";
        echo "<td>", $num, "</td>";
        echo "<td>", "=", "</td>";
        echo "<td>", $n * $num, "</td>";
        echo "</tr>";
        $num++;
    }
    echo "</table>"; ?>
</body>

</html>

6.- Ingresar un numero y mostrar la suma del numero mas sus números anteriores.


<form action="" method="POST">
    <label for="">Ingrese un numero </label>
    <input type="text">
    <input type="submit">
</form>

<?php 

if (isset($_POST['submit'])) {

    $num = $_POST['text'];
    $n=1;
   
    while ($n == $num) { 
        echo "<td>", $n, "</td>";
        echo "<td>", "+", "</td>";
        echo "<td>", $num, "</td>";
        echo "<td>", "=", "</td>";
        echo "<td>", $n + $num, "</td>";
        echo "</tr>";
        $n++;
    }
 }