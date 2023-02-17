<div class="titulo">Array</div>

<?php 
$lista = [1,2,3.4,"texto"]; // Essa forma ou
$lista = array(1,2,3.4,"texto");// Essa forma
// echo $lista; // --> echo não exibe array
echo "<pre>";
var_dump($lista);
echo "</pre>";

echo "<pre>";
print_r($lista);
echo "</pre>";

$lista[0] = 1234;
echo "<pre>";
print_r($lista);
echo "</pre>";


echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11];// cuidado! --> valores com acento [UTF8]
// echo '<br>' . mb_substr($texto, 11, 1);
