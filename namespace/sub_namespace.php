<?php namespace App; ?>

<div class="titulo">Sub-Namespace</div>

<?php 

echo __NAMESPACE__ . "<br>";
const constant = 123;

namespace App\Principal;
echo __NAMESPACE__ . "<br>";
const constante = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . "<br>";
const constante = 345;

echo constante . "<br>";
echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>';
echo \App\constant . '<br>';
echo \App\Principal\constante . "<br>";
echo \App\Principal\Especifico\constante;