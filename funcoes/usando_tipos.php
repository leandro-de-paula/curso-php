<div class="titulo">Usando Tipos</div>

<?php
function sum1($a, $b) {
    echo "<span>Somando: $a + $b = </span>";
    return $a + $b;
}
echo sum1(1, 2) . "<br>";
echo sum1(1.7, 2.5) . "<br>";
// echo sum1(1, '4dois') . "<br>";


function sum2(int $a, int $b) {
    echo "<span>Somando: $a + $b = </span>";
    return $a + $b;
}
echo sum2(1, 2) . "<br>";
echo sum2(1.7, 2.5) . "<br>";
// echo sum2(1, '4dois') . "<br>";


function sum3($a, $b): int {
    echo "<span>Somando: $a + $b = </span>";
    return $a + $b;
}
echo sum3(1, 2) . "<br>";
echo sum3(1.7, 2.5) . "<br>";
// echo sum2(1, '4dois') . "<br>";