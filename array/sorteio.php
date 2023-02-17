<style>
    [center] {
        display: flex;
        justify-content: center;
    }
    form > * {
        font-size: 1.8rem;
    }
</style>

<div class="titulo">Sorteio</div>
<div center>
    <form action="#" method="post">
        <input type="number" name="start" placeholder="Entre com numero inicial">
        <input type="number" name="end" placeholder="Entre com numero final">
        <input type="number" name="prizes" placeholder="Quantidade de Premios">
        <button>Sortear</button>
    </form>
</div>

<?php 
$start = 0;
$end = 0;
$prizes = 0;

//Validando dados para operação de sorteio
if (isset($_POST['start']) && isset($_POST['end']) && isset($_POST['prizes'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    $prizes = $_POST['prizes'];
} else {
    echo "<script>alert('Entre com números para iniciar o sorteio')</script>";
}

if (!is_numeric($start) && !is_numeric($end) && !is_numeric($prizes)) {
    echo "<script>alert('Entre somente com numeros')</script>";
} else if ($start <> 0 && $end <> 0 && $prizes <> 0) {
    echo "<span class='divisao'>Número inicial: {$start} - Número Final: {$end} - Quantidade de prêmios: {$prizes}</span><hr>";
} else {
    echo "<script>alert('Entre número maior que 0')</script>";
}



//Criando um array com os numero setados para o sorteio
$prizeDraw = [];

for ($e=1; $e <= $prizes ; $e++) { 
   
    for ($i=$start; $i <= $end; $i++) { 
        $prizeDraw[] = $i;
    }
    //Sorteando numero e apresentando em tela
    $index = array_rand($prizeDraw);
    echo "<div center><h1>{$prizeDraw[$index]}</h1></div>";
    
    //Removendo Número sorteado do sorteio
    unset($prizeDraw[$index]);
}






