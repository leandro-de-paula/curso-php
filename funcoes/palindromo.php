<div class="titulo">Desafio Palindromo</div>

<?php
function palindrome($word) {
    $lastIndex = strlen($word) -1;
    for ($i=0; $i <= $lastIndex; $i++) { 
        if ($word[$i] !== $word[$lastIndex - $i]) {
            return "Não";
        }
    }
    return "Sim";
}

echo palindrome('arara') . ' ';
echo palindrome('evelyleve') . ' ';
echo palindrome('ana') . ' ';
echo palindrome('bola') . ' ';

echo "<br>";
function simplePalindrome($word) {
    return $word === strrev($word) ? "Sim" : "Não";
}

echo simplePalindrome('arara') . ' ';
echo simplePalindrome('evelyleve') . ' ';
echo simplePalindrome('ana') . ' ';
echo simplePalindrome('bola') . ' ';
