<div class="titulo">Desafio Index</div>

<?php
$lista = [
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
];
// array([0]=> 8, [4]=> 5, [3]=> 3, ['a']=> 4, [5]=> 5)
echo "<pre>";
print_r($lista);
echo "</pre>";