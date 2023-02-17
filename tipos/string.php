<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação
echo ("Nós também" . ' Somos');
echo '<br>', "Também aceito", " virgurlas";

echo '<br>';
echo "'teste' " . '"teste" ' . '\'teste\' ' . "\"teste\" ";

print("<br> Também existe a função print");
print "<br> Também existe a função print";

// Algumas Funções
echo '<br>' . strtoupper('maximizando');
echo '<br>' . strtolower('MINIMIZANDO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('Todas as palavras');
echo '<br>' . strlen('Quantas Letras?');
// echo '<br>' . mb_strlen("Eu também");
echo '<br>' . substr("Só uma parte mesmo", 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso');


