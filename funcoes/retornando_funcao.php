<div class="titulo">Retornando Função</div>


<?php

function sum($a) {
    // Algorithm (30s)
    return function($b) use($a) {
        return $a + $b; //3s
    };

}

echo sum(13)(3);

$twoPlus = sum(2);
echo "<br>" . $twoPlus(10);
echo "<br>" . $twoPlus(18);

