<div class="titulo">Desafio Impressão</div>

<!-- 
Enunciado:
- Imprima apenas os valores deo array que contém indice par
- Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE 
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for ($i=0; $i < count($array); $i++) { 
    if ($i % 2 === 0) {
        echo "{$array[$i]} ";
    }
}

echo "<br><hr>";

for ($i=0; $i < count($array); $i++) { 
    if ($i % 2 === 1) continue;
        echo "{$array[$i]} ";
}

echo "<br><hr>";
foreach ($array as $key => $value) {
    if ($key % 2 === 0) {
        echo "{$array[$key]} ";
    }
}

echo "<br><hr>";
foreach ($array as $key => $value) {
    if ($key === 5) break;
    if ($key % 2 === 1) continue;
    echo "{$value} ";
}