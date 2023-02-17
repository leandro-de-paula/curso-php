<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Evellyn', 'idade' => 26];
$arr2 = ['nome' => 'Evellyn', 'idade' => 26];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);


$arr3 = ['idade' => 26, 'nome' => 'Evellyn'];
echo "<br>";
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

echo "<br>";
$arr4 = ['idade' => '26', 'nome' => 'Evellyn'];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);