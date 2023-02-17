<div class="titulo">PDO: Inserir</div>

<?php
ini_set("display_error", true);
error_reporting(E_ALL);

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro(nome,email,nascimento,site,filhos,salario)
          VALUES (
            'Lian Thomas Fontenele de Paula',
            'lian@gmail.com.br',
            '2023-08-18',
            'https://lian.com.br',
            0,
            3000
          )";

$conexao = novaConexaoPDO();
// print_r(get_class_methods($conexao));

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id $id.";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}

// $conexao->close();
