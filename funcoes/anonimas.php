<div class="titulo">Funções Anônimas</div>

<?php
function run($a, $b, $op, $function) {
    $result = $function($a, $b);
    echo "{$a} {$op} {$b} = $result <br>";
}


$sum = function ($a, $b){
    return $a + $b;
};

$multiplication = function ($a, $b){
    return $a * $b;
};

$division = function ($a, $b){
    return $a / $b;
};


run(2, 3, '+', $sum);
run(2, 3, '*', $multiplication);
run(2, 3, '/', $division);