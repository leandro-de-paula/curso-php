<div class="titulo">Closure & Callable</div>

<?php 
$sum1 = function ($a, $b){
    return $a + $b;
};

function sum2($a, $b) {
    return $a + $b;
}

echo $sum1(2,3) . " ";
echo (is_callable($sum1) ? 'Yes' : 'No') . "<br>";

echo sum2(2,3) . " ";
echo (is_callable(sum2(2,3)) ? 'Yes' : 'No') . "<br>";

var_dump($sum1);
var_dump(sum2(2,3));

function run($a, $b, $op, Callable $function) {
    $result = $function($a, $b);
    echo "{$a} {$op} {$b} = $result <br>";
}


run(2, 3, '+', $sum1);
// run(2, 3, '+', sum2);

function run2($a, $b, $op, Closure $function) {
    $result = $function($a, $b);
    echo "{$a} {$op} {$b} = $result <br>";
}


run2(2, 3, '+', $sum1);
// run(2, 3, '+', sum2);