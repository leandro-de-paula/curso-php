<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    
    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

    form > * {
        font-size: 1.8rem;
    }
</style>

<div class="titulo">Desafio Tabela #02</div>

<p>Gerador de Tabela</p>
<form action="#" method="POST">
    <input type="number" name="lines" placeholder="Nº Linhas">
    <input type="number" name="columns" placeholder="Nº Colunas">  
    <button>Gerar</button>
</form>

<?php
$lines = !isset($_POST['lines']) ? $_POST['lines'] : 'vazio';
$columns = !isset($_POST['columns']) ? $_POST['columns'] : 'vazio';

if ($lines <= 0 || $columns <= 0) {
    echo "<script>alert('Entre número maior que zero')</script>";
} else {

echo "Nº Linhas: {$lines} - Nº Colunas {$columns}<br><hr>";
?>
<table>
    <?php
    
    for ($i=0; $i < $lines; $i++) { 
        $matrix[$i] = [];
        for ($j=1; $j <= $columns; $j++) { 
            $matrix[$i][$j] = $j;
        }
    }

    foreach ($matrix as $key => $lines) {
        $style = $key % 2 === 1 ? 'background-color: lightblue' : '';
        echo "<tr style='{$style}'>";
        foreach ($lines as $value) {
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<?php 
}