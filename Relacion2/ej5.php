<?php
//Define tres arrays de 20 números enteros cada una, con nombres “número”, “cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los valores que hay en “número”. A continuación, muestra el contenido de los tres arrays dispuestos entre columnas.
for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0, 100);
    $cuadrado[$i] = $numero[$i] * 2;
    $cubo[$i] = $numero[$i] * 3;
}

echo "Números: " . implode(', ', $numero) . "<br>";
echo "Cuadrados: " . implode(', ', $cuadrado) . "<br>";
echo "Cubos: " . implode(', ', $cubo) . "<br>";

?>
