<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<div class="titulo">$_POST</div>
<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado" id="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
    <button>Enviar</button>
</form>
<?php

print_r($_GET);
echo "<br>";
print_r($_POST);