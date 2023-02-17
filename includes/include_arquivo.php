<?php
echo "[LOADING]: include_arquivo <br>";

$variable = "Estou definida";


if (!function_exists('soma')) {
    function soma($a, $b) {
        return $a + $b;
    }
}