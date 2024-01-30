<?php
include 'ej1.php';
// Usando la librería del ejercicio 1. Muestra los números primos que hay entre 1 y 1000.
echo "Números primos entre 1 y 1000:\n";
for ($i = 1; $i <= 1000; $i++) {
    if (esPrimo($i)) {
        echo $i . " ";
    }
}


include 'ej1.php';
// Usando la librería del ejercicio 1. Muestra los números capicúa que hay entre 1 y 99999.
echo "\n\nNúmeros capicúa entre 1 y 99999:\n";
for ($i = 1; $i <= 99999; $i++) {
    if (esCapicua($i)) {
        echo $i . " ";
    }
}
?>
