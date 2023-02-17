<style>
    button, select {
        font-size: 1.8rem;
    }
</style>
<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabahos -> terça e Quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça): </label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>
<?php
if (empty($_POST['t1'])) {
    $t1 = 0;
} else {
    $t1 =  $_POST['t1'];
}

if (empty($_POST['t2'])) {
    $t2 = 0;
} else {
    $t2 =  $_POST['t2'];
}

echo $t1;
echo $t2;
echo "<br><hr>";
if (!!$t1 == true && !!$t2 == true) {
    echo "TV 50' e Sorvete";
} elseif (!!$t1 == true || !!$t2 == true) {
    echo "TV 32' e sorvete";
} else {
    echo "Fica em casa mais saudável!";
}