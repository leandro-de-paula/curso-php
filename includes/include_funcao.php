<div class="titulo">Include Função</div>

<?php 
echo "[LOADING]: include_funcao<br>";

function loadFile() {
    include('include_arquivo.php');

    echo $variable . '<br>';
    echo soma(2,5) . '!<br>';
}

echo "Novamente no arquivo include_funcao";

// echo soma(1,8) . '!<br>';
loadFile();

// echo "Variavel = '{$variable}'";
// var_dump($variable);

echo "<br>" . soma(3,8);