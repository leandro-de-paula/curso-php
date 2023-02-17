<div class="titulo">Valor vs Referência</div>

<?php 
$variavel = 'Valor Inicial';
echo $variavel; 

// Atribuição por valor
$variavelValor = $variavel;
echo "<br> {$variavelValor}";
$variavelValor = 'novo valor';
echo "<br> {$variavel} vs {$variavelValor}";

// Atribuição por Referência
$variavelRefencia = &$variavel;
$variavelRefencia = 'Mesma Referência';
echo "<br> {$variavel} vs {$variavelRefencia}";