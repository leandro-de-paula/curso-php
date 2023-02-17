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
</style>
<div class="titulo">Desafio Tabela #01</div>
<table>
    <?php
    $matrix = [
        ['01','02','03','04','05'],
        ['06','07','08','09','10'],
        ['11','12','13','14','15'],
        ['16','17','18','19','20']
    ];

    foreach ($matrix as  $lines) {
        echo "<tr>";
        foreach ($lines as $value) {
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<table>
    <?php
    $matrix = [
        ['01','02','03','04','05'],
        ['06','07','08','09','10'],
        ['11','12','13','14','15'],
        ['16','17','18','19','20']
    ];

    foreach ($matrix as  $lines) {
        echo "<tr>";
        foreach ($lines as $value) {
            if ($value % 2 === 0) {
                echo "<td bgcolor='blue' style='color:white'>{$value}</td>";
            } else {
                echo "<td>{$value}</td>";
            }
            
        }
        echo "</tr>";
    }
    ?>
</table>
<table>
    <?php
    $matrix = [
        ['01','02','03','04','05'],
        ['06','07','08','09','10'],
        ['11','12','13','14','15'],
        ['16','17','18','19','20']
    ];

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