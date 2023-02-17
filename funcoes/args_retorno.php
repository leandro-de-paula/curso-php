<div class="titulo">Argumentos & retorno</div>

<?php 
function getMessage() {
    return "Seja bem vindo(a)!";
}

getMessage();
$m = getMessage();
echo $m;

echo "<br>", getMessage();
echo "<br>";

var_dump(getMessage());

function getMessageWithName($name) {
    return "Bem Vindo {$name}";
}

echo "<br>", getMessageWithName('Evellyn');
echo "<br>", getMessageWithName('Leandro');

function sum($a, $b){
    return $a + $b;
}
$x = 4;
$y = 5;

echo "<br>", sum(45, 78);
echo "<br>", sum($x, $y);

function exchangeValue($a, $newValue) {
    $a = $newValue;
}

$variable = 1;
exchangeValue($variable,3);
echo "<br>", $variable;

function exchangeTrueValue(&$a, $newValue) {
    $a = $newValue;
}

exchangeTrueValue($variable,5000);
echo "<br>", $variable;