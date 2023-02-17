<div class="titulo">Desafio For</div>

<!-- 
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Não pode usar incremento $i++ 
-->

<?php
$count = 5;
$resultElements = '';
for ($i=0; $i < $count; $i++) { 
    $resultElements .= "#";
    echo "{$resultElements} <br>";
}

for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .= '#') {
        echo "{$impressao2} <br>";
}