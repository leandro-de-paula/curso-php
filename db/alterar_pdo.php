<div class="titulo">PDO: Alterar</div>
<?php
ini_set("display_errors", true);
error_reporting(E_ALL);

require_once "conexao_pdo.php";

$conexao = novaConexaoPDO();
$sql = "UPDATE cadastro
           SET nome = ?,
               nascimento = ?,
               email = ?,
               site = ?,
               filhos = ?,
               salario = ?
         WHERE id = ?";

$stmt = $conexao->prepare($sql);
$resultado  = $stmt->execute([
    'Evellyn Caroline Fontenele',
    '1994-12-03',
    'evellyn.ff.fontenele@gmail.com',
    'https://pedacinhodepano.com',
    1,
    4500,
    17
]);

try {
    $resultado;
    echo "Sucesso ;)";
} catch (\Throwable $th) {
    throw $th;
}
