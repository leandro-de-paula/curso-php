<div class="titulo">Criar Tabela</div>

<?php
ini_set('display_errors', true);
error_reporting(E_ALL); 

require_once "conexao.php";

// DDL
$sql = "CREATE TABLE IF NOT EXISTS cadastro(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100) NOT NULL,
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso ;)";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();