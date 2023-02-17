<div class="titulo">Desafio String</div>

<?php 

$text = '!AbcaBcabc';
$find = 'abc';

echo strripos($text,$find);
echo stripos('!AbcaBcabc','abc');
echo strpos($text,$find);

echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';