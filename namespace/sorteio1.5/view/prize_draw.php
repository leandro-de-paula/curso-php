<link rel="stylesheet" href="namespace/sorteio1.5/view/prize_draw.css"> 
<div class="titulo">Sorteio 1.5</div>
<div center>
    <form action="#" method="post">
        <input type="number" name="start" id="start" placeholder="Número Inicia.">
        <input type="number" name="end" id="end" placeholder="Número Final.">
        <input type="number" name="prize" id="prize" placeholder="Quantidade de Prêmios">
        <button>Sortear</button>
    </form>
</div>

<?php
require_once('namespace/sorteio1.5/controller/prize_draw_controller.php');

$start = isset($_POST['start']) ? $_POST['start'] : 'uninitialized';
$end = isset($_POST['end']) ? $_POST['end'] : 'uninitialized';
$prize = isset($_POST['prize']) ? $_POST['prize'] : 'uninitialized';

$dataInput = new \Controller\PrizeDrawController\GeneratesDraw($start, $end, $prize);
