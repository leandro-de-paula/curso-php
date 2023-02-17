<div class="titulo">Include com Objeto</div>

<?php
require_once('user.php');

$register = new User("Evellyn", 26,"@fontenele");
echo $register->ToPresent();