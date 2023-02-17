<div class="titulo">Desafio Equação</div>

<?php

// V1

// Left
$a = (6*(3+2))**2;
echo "<p>A = {$a}</p>";
$b = 3*2;
echo "<p>B = {$b}</p>";
$c = $a / $b;
echo "<p>C = {$c}</p>";

// Right
$d = (1-5) * (2-7);
echo "<p>D = {$d}</p>";
$e = $d / 2;
echo "<p>E = {$e}</p>";
$e2 = $e **2;
echo "<p>E2 = {$e2}</p>";


// Left & Right
$f = ($c - $e2) **3;
echo "<p>F = {$f}</p>";
$g = 10 **3;
echo "<p>G = {$g}</p>";
$h = $f / $g;
echo "<p>H = {$h}</p>";





// V2
$alpha = (((6*(3+2))**2) / (3*2));
echo "<p>alpha = {$alpha}</p>";
$betha = ((1-5) * (2-7) /2)**2;
echo "<p>betha = {$betha}</p>";
$deltha = (($alpha - $betha)**3)/(10**3);
echo "<p>deltha = {$deltha}</p>";
 
// V3
$omega = (((((6*(3+2))**2) / (3*2)) - ((1-5) * (2-7) /2)**2)**3)/(10**3);
echo "<p>omega = {$omega}</p>";