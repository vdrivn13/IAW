<?php
// Incluye las funciones de la biblioteca anterior
include 'ej4.php';

// Genera un array de tamaño 10 con números aleatorios
$tamanoArray = 10;
$arrayAleatorio = generaArrayInt($tamanoArray);

// Muestra el array
echo "Array: " . implode(", ",$arrayAleatorio) . "\n";

// Muestra el número máximo y mínimo del array
echo "Número máximo del array: " . maximoArrayInt($arrayAleatorio) . "\n";
echo "Número mínimo del array: " . minimoArrayInt($arrayAleatorio) . "\n";
