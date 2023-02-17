<div class="titulo">PDO: Excluir</div>

<?php
ini_set("error_display", true);
error_reporting(E_ALL);

require_once "conexao_pdo.php";
$conexao = novaConexaoPDO();
$sql = "DELETE 
          FROM cadastro 
         WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":id", 8);

try {
    $stmt->execute();
    echo "Success!";
} catch (\Throwable $th) {
    $result = $stmt->errorInfo()[2];
    echo $result;
}




