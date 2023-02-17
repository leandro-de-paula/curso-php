<div class="titulo">Desafio Arquivo 2</div>

<?php
 ini_set('display_errors', 1);
/**
 * Reproduzir o mesmo do desafio anterior
 */

$fileName = 'challenge2.txt';
$fileText = "File writing CHALLENGE 2\n-->\n".
"Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n".
"Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer \n".
"took a galley of type and scrambled it to make a type specimen book. \n".
"It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. \n".
"It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, \n".
"and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$file = fopen($fileName,'w');
fwrite($file,$fileText);
fclose($file);

$file = fopen($fileName,'r');
while (!feof($file)) {
    echo fgets($file);
}

