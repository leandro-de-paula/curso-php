<div class="titulo">Argumentos Variáveis</div>

<?php
function sum($a, $b) {
    return $a + $b;
}

echo sum(14, 15) . '<br>';
echo sum(6, 5, 4) . '<br>';

function fullSum(...$numbers) {
    // print_r($numbers);
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num;
    }
    return $sum;
}

echo fullSum(1,2,3,4,5);

echo "<br>";

$array = [6,7,8];
echo fullSum(...$array);

function members($holder, ...$dependents) {
    echo "Titular: {$holder} <br>";
    if ($dependents) {
        foreach ($dependents as $dep) {
            echo "Dependente: {$dep} <br>";
        }
    }
}

echo "<br>";
members("Leandro", "Evellyn", "Aysha", "Thomas Lean");

echo "<br>";
members("Ana Clara");

