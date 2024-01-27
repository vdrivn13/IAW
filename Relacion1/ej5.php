<?php
//Realiza un ejercicio en el que el usuario introduzca 3 números y determine cuál de los tres es mayor.  
$num1 = readline("Introduce un numero: ");
$num2 = readline("Introduce un numero: ");
$num3 = readline("Introduce un numero: ");

if ($num1 > $num2 && $num1 > $num3) {
    echo("El número mayor es $num1.\n");
   }
   
   elseif ($num2 > $num1 && $num2 > $num3){
    echo ("El número mayor es $num2.\n");
   }
else {
    echo("El número mayor es $num3.\n");
}

?>