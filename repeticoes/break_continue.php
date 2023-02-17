<div class="titulo">Break countinue</div>

<?php 

$count = 16;
for(;;){
    echo "{$count} <br>";
    $count++;
    if ($count > 20) {
        break;
    }
}

echo "<br><hr>";

for(;;){
    $count++;
    if ($count % 2 === 1) {
        continue;
    }
    echo "{$count} <br>";
    if ($count >= 30) {
        break;
    }
}

echo "<br><hr>";

foreach (array(1,2,3,4,5) as $value) {
    if ($value === 5) break;
    if ($value % 2 === 0) continue;
    echo "{$value} <br>";
}

echo "Fim!";