<div class="titulo">While/Do While</div>

<?php 
const VALOR_LIMITE = 5;
$counter = 0;
while ($counter < VALOR_LIMITE) {
    echo "while {$counter} <br>";
    $counter++;
}

$counter = 100;
do {
    echo "do-while {$counter} <br>";
    $counter++;
} while ($counter < VALOR_LIMITE);

$counter = 0;
while (true) {
    echo "while(true) {$counter} <br>";
    $counter++;
    if ($counter >= VALOR_LIMITE) break;
}