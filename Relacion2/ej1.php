<?php

//Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for, while y do-while.

for($i = 0; $i < 100; $i += 5){
    echo $i . "\n";
}
?>

<?php
$i = 0;
while ($i < 100){
    echo $i . "\n";
    $i += 5;
}
?>

<?php
$i = 0;
do{
    echo $i . "\n";
    $i += 5;
} while($i < 100)
?>
