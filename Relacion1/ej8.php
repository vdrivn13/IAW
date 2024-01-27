<?php
/*Determinar el tipo de triángulo. 
Haz un programa que pida la longitud de los tres lados de un triángulo y determine si es triángulo equilátero, isósceles o escaleno.*/
$lado1 = readline("Introduce una longitud: ");
$lado2 = readline("Introduce una longitud: ");
$lado3 = readline("Introduce una longitud: ");

if ($lado1 == $lado2 && $lado1 == $lado3) {
    echo("El triángulo es Equilátero.\n");
   }
   
    elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3 ){
    echo ("El triángulo es Isósceles.\n");
   }
    else {
    echo("El triángulo es Escaleno.\n");
}
?>