<div class="titulo">Desafio Meses</div>

<?php 
//Meu codigo
$meses = [
    1 => "janeiro",
    2 => "fevereiro",
    3 => "março",
    4 => "abril",
    5 => "maio",
    6 => "junho",
    7 => "julho",
    8 => "agosto",
    9 => "setembro",
    10 => "outubro",
    11 => "novembro",
    12 => "dezembro"

];

echo "<pre>";
print_r($meses);
echo "</pre>";

echo "<br>" . $meses[10];
echo "<br>" . $meses[12];

//Codigo do professor
$meses = [
    1 => "janeiro",
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro"

];

echo "<pre>";
print_r($meses);
echo "</pre>";

echo "<br>" . $meses[10];
echo "<br>" . $meses[12];