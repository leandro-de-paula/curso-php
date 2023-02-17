<div class="titulo">Operadores Lógicos</div>

<?php 
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo "<br>";
var_dump(!true); // not
echo "<br>";

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true AND true);
var_dump(true AND false);
var_dump(false AND true);
var_dump(false AND false);

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true OR true);
var_dump(true OR false);
var_dump(false OR true);
var_dump(false OR false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true XOR true);
var_dump(true XOR false);
var_dump(false XOR true);
var_dump(false XOR false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 62 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pose se aponsentar -> {$podeSeAposentar} <br>";

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> {$sexo}";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> {$sexo}";
} else {
    echo "Vai ter que trabalhar mais um pouco...";
}


