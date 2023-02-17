<div class="titulo">Desafio PI</div>

<?php 
echo pi();
$pi = 3.14;
$piErrado = 2.8;

// Exemplo desafio
if ($pi === pi()) {
    echo "<br> Iguais!";
} else {
    echo "<br> Diferentes!";
}

// Minha Resposta
if ($pi || pi()) {
    echo "<br> Iguais!";
} else {
    echo "<br> Diferentes!";
}
if ($piErrado == $pi || $piErrado == pi()) {
    echo "<br> Iguais!";
} else {
    echo "<br> Diferentes!";
}

// Resposta do curso
if ($pi - pi() <= 0.01) {
    echo "<br>Patricamente iguais!";
}
if ($pi - $piErrado <= 0.01) {
    echo "<br>Patricamente iguais!";
} else {
    echo "<br>Valor errado";
}