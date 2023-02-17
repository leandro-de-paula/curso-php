<div class="titulo">Escrever Arquivo</div>

<?php
ini_set('display_errors', 1);

$arquivo = fopen('test.txt','w');
fwrite($arquivo,"Valor incial\n");
$str = "Segunda Linha\n";
fwrite($arquivo,$str);
fclose($arquivo);

$arquivo = fopen('test.txt', 'w');
fwrite($arquivo,"Novo valor");
fclose($arquivo);

$arquivo = fopen('test.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, 'Adicionando em um segundo momento');
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('test.txt', 'x');
// fwrite($arquivo, 'Arquivo novo!!!');
// fclose($arquivo);


