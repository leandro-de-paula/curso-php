<div class="titulo">PDO: Consultar</div>

<?php
ini_set("display_error",true);
error_reporting(E_ALL);

require_once "conexao_pdo.php";

$conexao = novaConexaoPDO();

$sql = "SELECT * FROM cadastro";
// PDO::FETCH_NUM
// PDO::FETCH_ASSOC
// PDO::FETCH_CLASS
// PDO::FETCH_BOTH
$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($resultado);
echo "</pre>";

echo "<hr>";

$sql = "SELECT * FROM cadastro LIMIT :quantidade OFFSET :inicio";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":quantidade",2,PDO::PARAM_INT);
$stmt->bindValue(":inicio",3,PDO::PARAM_INT);

// print_r(get_class_methods($stmt)

if ($stmt->execute()) {
   $resultado = $stmt->fetchAll();
   echo "<pre>";
   print_r($resultado);
   echo "</pre>";
} else {
   echo "Codigo: " . $stmt->errorCode() . "<br>";
   echo "<pre>";
   print_r($stmt->errorInfo());
   echo "</pre>";
}

echo "<hr>";

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
// $stmt->bindValue(':id', 15);
// if($stmt->execute()) {
// if($stmt->execute([14])) {

if($stmt->execute([':id' => 1])) {
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

// $conexao->close();