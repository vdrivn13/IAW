<?php
//Realiza un ejercicio en el que el usuario introduzca un número y determine si es positivo, negativo o cero.  
$num = readline("Introduce un numero: ");

if ($num > 0) {
    echo("Es positivo.\n");
   }
   
    elseif ($num == 0){
    echo ("Es cero.\n");
   }
    else {
    echo("Es negativo.\n");
}
?>