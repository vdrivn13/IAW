<?php

class FuncionesArrays {
    function generaArrayInt($tamanio) {
        $array = array();
        for ($i = 0; $i < $tamanio; $i++) {
            $array[] = rand(0, 100);
        }
        return $array;
    }
    function minimoArrayInt($array) {
        return min($array);
    }
   function maximoArrayInt($array) {
        return max($array);
    }
}
?>