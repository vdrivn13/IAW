<?php
/*Escribe un programa que muestre los n primeros términos de la serie de Fibonacci.
El primer término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34,  55, 89, 144... El número n se debe introducir por teclado.*/

$primernumero = 0;
$segundonumero = 1;
$cantidad = readline("Introduce la cantidad: ");
echo $primernumero . "\n";

for ($i=0; $i < $cantidad; $i++) {
    $variabletemporal = $primernumero;
    $primernumero = $segundonumero;
    $segundonumero = $variabletemporal + $primernumero;
    echo $primernumero . "\n";
}
?>
