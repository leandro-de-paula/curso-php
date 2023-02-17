<div class="titulo">Operações no Array</div>

<?php 
//Juntando dois Arrays
$dados1 = [
    "nome" => "Evellyn",
    "idade" => 27
];

$dados2 = [
    "naturalidade" => "Diadema"
];

$dados2["endereco"] = "Americana - SP";

$dadosCompletos = $dados1 + $dados2;
echo "<pre>";
print_r($dadosCompletos);
echo "</pre>";

// Verifica se é um array
echo '<br>' . is_array($dadosCompletos); 

// Conta quantos elementos tem dentro do array
echo '<br>' . count($dadosCompletos);

//Buscar um elemento dentro de array de forma randomica(aleatório) 
echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";

//Interpolar Array
echo '<br>';
echo "{$dadosCompletos['idade']}";

//Remover um elemento de um array
echo '<br>';
unset($dadosCompletos['nome']);
echo "<pre>";
print_r($dadosCompletos);
echo "</pre>";

//Remove todos os elementos de um array
echo '<br>';
unset($dadosCompletos);
var_dump($dadosCompletos);



/** ATENÇÃO 
 * Quando for fazer junção de array usando "+"
 * procure usar indices definidos e não deixar 
 * que os indices sejam automaticos, pois não
 * será gerado um array com todos os números 
 * 
 * EXEMPLO:
 */
$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];

$decimais = $pares + $impares;
echo "<pre>";
print_r($decimais);
echo "</pre>";

/**
 * Para fazer uma junão entre arrays onde os
 * indices sejam automaticos, deve ser usado
 * a função >> arra_merge() <<, vale deixar 
 * claro que essa função não faz ordenação
 * dos elementos unificados
 */
$decimais = array_merge($pares,$impares);
echo "<pre>";
print_r($decimais);
echo "</pre>";

//Ordena os elementos de um array
sort($decimais);
echo "<pre>";
print_r($decimais);
echo "</pre>";
