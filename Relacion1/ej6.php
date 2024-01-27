<?php
//Realiza un ejercicio en el que el usuario introduzca un número del 1 al 7 y determine qué día de la semana es.  
$num = readline("Introduce un numero: ");

switch($num) {
    case 1:
        echo "El dia de la semana es lunes.\n";
        break;
    case 2:
        echo "El dia de la semana es martes.\n";
        break;
    case 3:
        echo "El dia de la semana es miercoles.\n";
        break;
    case 4:
        echo "El dia de la semana es jueves.\n";
        break;
    case 5:
        echo "El dia de la semana es viernes.\n";
        break;
    case 6:
        echo "El dia de la semana es sabado.\n";
        break;
    case 7:
        echo "El dia de la semana es domingo.\n";
        break;
}
?>