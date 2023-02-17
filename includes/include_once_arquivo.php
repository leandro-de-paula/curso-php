<?php 
echo "[LOADING]: include_onde_arquivo <br>";

$variavel = "Estou definida";

if(!function_exists('sum')) {
    function sum($a, $b) {
        return $a + $b;
    }
}

