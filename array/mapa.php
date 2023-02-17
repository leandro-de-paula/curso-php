<div class="titulo">Mapa</div>

<?php 
$dados = [
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
];

echo "<pre>";
print_r($dados);
echo "</pre>";

var_dump($dados[0]);
echo "<br>" . $dados["idade"];
echo "<br>" . $dados["cor"];
echo "<br>" . $dados["peso"];
echo "<br>";
var_dump($dados["outra_informacacao"]);

// Não fazer dessa forma 
$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h"
);

echo "<br>";
echo "<pre>";
print_r($lista);
echo "</pre>";