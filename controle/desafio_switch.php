<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<div class="titulo">Desafio Switch</div>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="°C-°F">°C > °F</option>
        <option value="°F-°C">°F > °C</option>
    </select>
    <button>Calcular</button>
</form>

<?php 
$param = isset($_POST['param']) ? $_POST['param'] : 0;
$conversao = isset($_POST['conversao']) ? $_POST['conversao'] : 0;
$pS = $param > 1 ? 's' : ''; 

const FATOR_CONVERSAO_MILHA = 1.60934;
const FATOR_CONVERSAO_METRO = 1000;

switch ($conversao) {
    case 'km-milha':
        $result = $param / FATOR_CONVERSAO_MILHA;
        $rS = $result > 1 ? 's' : ''; 
        echo "<span>Resultado: {$param} Km{$pS} equilave {$result} Milha{$rS}.</span><hr>";
        break;
    case 'milha-km':
        $result = $param * FATOR_CONVERSAO_MILHA;
        $rS = $result > 1 ? 's' : ''; 
        echo "<span>Resultado: {$param} Milha{$pS} equilave {$result} Km{$rS}.</span><hr>";
        break;
    case 'metro-km':
        $result = $param / FATOR_CONVERSAO_METRO;
        $rS = $result > 1 ? 's' : ''; 
        echo "<span>Resultado: {$param} Metro{$pS} equilave {$result} Km{$rS}.</span><hr>";
        break;
    case 'km-metro':
        $result = $param * FATOR_CONVERSAO_METRO;
        $rS = $result > 1 ? 's' : ''; 
        echo "<span>Resultado: {$param} Km{$pS} equilave {$result} Metro{$rS}.</span><hr>";
        break;
    case '°C-°F':
        $result = ($param * 9/5) + 32;
        echo "<span>Temperatura: {$result} °F.</span><hr>";
        break;
    case '°F-°C':
        $result = ($param -32) * 5/9;
        echo "<span>Temperatura: {$result} °C.</span><hr>";
        break;
    default:
        echo "<span>Entre com valores para calcular</span><hr>";
        break;
}