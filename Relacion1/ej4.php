<?php
//Realiza un ejercicio en el que el usuario introduce dos números y determine si son iguales.
$num1 = readline("Introduce un numero: ");
$num2 = readline("Introduce un numero: ");

if ($num1 == $num2) {
    echo("Introdujo el mismo número.\n");
   }
   
   else{
    echo ("Introdujo diferentes números.\n");
   }
?>