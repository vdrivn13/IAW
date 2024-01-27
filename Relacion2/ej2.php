<?php
//Muestra la tabla de multiplicar de un número introducido por teclado
echo ("Introduce un numero: ");
$num = fgets(STDIN);
echo "Tabla de multiplicar del $num: \n";
for($i = 1; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo "$num x $i = $resultado \n";
}
?>
