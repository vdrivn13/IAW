<?php
//Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.
echo ("Introduce un numero: ");
$num = trim(fgets(STDIN));

if (!is_numeric($num)){
    echo "Por favor, introduce un numero valido .\n";
    exit;
}

$cantidadDigitos = strlen($num);
echo "El numero $num tiene $cantidadDigitos dígitos .\n";
?>
