<div class="titulo">Recursividade</div>

<?php
function sumAUpUntil($number) {
    $sum = 0;
    for ($i=1; $i <= $number; $i++) { 
        $sum += $i;
    }
    return $sum;
}
echo sumAUpUntil(150) . "<br>";


function sumRecursiveAUpUntil($number) {
    // Condição de Parada
    if ($number === 1) {
        return 1;
    } else {
        return $number + sumRecursiveAUpUntil($number - 1);
    }
    
}
echo sumRecursiveAUpUntil(150) . "<br>";


function sumRecursiveEconomic($number) {
    return $number === 1 ? 1 : $number + sumRecursiveEconomic($number - 1);
}
echo sumRecursiveEconomic(150) . "<br>";