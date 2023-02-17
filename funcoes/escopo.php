<div class="titulo">Função & Escopo</div>

<?php
function printMessage(){
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

printMessage();
printMessage();
printMessage();

$variavel = 1;

function exchangeValue(){
    $variavel = 2;
    echo "Durante a função: {$variavel} <br>";
}

echo "Antes: {$variavel} <br>";
exchangeValue();
echo "Depois: {$variavel} <br>";

function exchangeTrueValue() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: {$variavel} <br>";
}

echo "Antes: {$variavel} <br>";
exchangeTrueValue();
echo "Depois: {$variavel} <br>";

var_dump(exchangeTrueValue());