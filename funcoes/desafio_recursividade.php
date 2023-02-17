<div class="titulo">Desafio Recursividade</div>

<?php 
/**
 * > 1
 * > 2
 * >> 3
 * >> 4
 * >> 5
 * > 6
 * >> 7
 * >>> 8
 * >>> 9
 * > 10
 */

 $array = [1,2,[3,4,5],6,[7,[8,9]],10];

function printArray($array, $nivel = '>') {
    foreach ($array as $element) {
        if (is_array($element)) {
            printArray($element, $nivel . $nivel[0]);
        } else {
            echo "$nivel $element<br>";
        }
    }
}

printArray($array);