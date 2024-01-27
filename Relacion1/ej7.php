<?php
/*Una persona sólo puede conducir si tiene carnet de conducir y si es mayor de 18 años. 
Haz un programa que pida por pantalla estas dos condiciones y determine si puede o no conducir.*/
$edad = readline("Introduce una edad: ");
$carnet = readline("¿Tienes Carnet de conducir? (s/n): ");

if ($edad >= 18 && $carnet == 's') {
    echo("Puede conducir.\n");
   }
   
   else{
    echo ("No puede conducir.\n");
   }

?>
