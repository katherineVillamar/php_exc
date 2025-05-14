<?php
class Funciones{

//datos de a 1
    public function promedio($n1 ,$n2,$n3){
    $prom = ($n1+$n2+$n3)/3 ;
    return $prom;
   } 

   //array datos 
   public function promedioArr($notas){
    $prom = ($notas['n1'] + $notas['n2']  +$notas['n3'] )/3 ;
    return $prom;
   } 


   public function promedioArrMultiple($notas) {
    $resultados = "";//guardo para poderlo mostrar junto 

    foreach ($notas as $alumno) {
        $prom = ($alumno['nota1'] + $alumno['nota2'] + $alumno['nota3']) / 3;
        $resultados .= "Alumno: " . $alumno['nombre'] . " - Promedio: " . $prom . "\n";//concateno
    }

    return $resultados;
}

}