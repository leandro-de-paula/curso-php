<div class="titulo">Variáveis</div>

<?php 
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;


// Nomes de Variavel
$var = 'valida';
$var2 = 'valida';
$_var_4 = 'valida';
$vár5 = 'valida';
// $6var = 'invalida';
// $%var7 = 'invalida';
// $%var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);

echo '<p>Testes com Multiplicação usando somente soma</p>';
$x = 12;
$y = 4;
$result = 0;

for ($i=0; $i < $y; $i++) { 
    $result = $result + $x;
}
echo "<p>Resultado é igual a: {$result} com for</p>";

$e = 23;
$l = 11;
$counter = 1;
$result = 0;

while ($counter <= $l) {
    $result = $result + $e;
    $counter = $counter + 1;
}
echo "<p>Resultado é igual a: {$result} com while</p>";
echo '<hr>';

echo '<p>Testes com Divisão usando somente subtração</p>';

$c = 250; //numerador
$w = 5; //denominador
$counter = [];
$assumption = 1;
$result = 0;
while ($assumption <= $c) {
    array_push($counter,$w);
    $assumption = $assumption + $w;
}
$result = count($counter);
echo $result;



