<?php

// Función para comprobar si un número es capicúa
function esCapicua($numero) {
    $numeroInvertido = strrev((string)$numero);
    return (int)$numeroInvertido === $numero;
}

// Función para comprobar si un número es primo
function esPrimo($numero) {
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }

    return true;
}

