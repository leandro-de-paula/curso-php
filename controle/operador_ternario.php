<div class="titulo">Operador Ternário</div>

<?php 
$idade = 70;
$status;

if ($idade >= 18) {
    $status = "Maior de Idade";
} else {
    $status = "Menor de Idade";
}

echo "{$status}<br>";

$idade = 17;
$status = $idade >= 18 ? 'Maior Idade' : 'Menor de Idade';
echo "{$status} <br>";

$cheio = 10;
$conteudo = 10;
$return = $conteudo == $cheio ? 'Cheio' : 'Da para encher ainda';
echo "{$return} <br>";