<div class="titulo">Inserindo na tabela</div>


<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require_once "conexao.php";

$sql = "INSERT INTO cadastro(nome, nascimento, email, site, filhos, salario)
          VALUES(
            'Lian Thomas Fontenele de Paula',
            '2023-08-16',
            'lian@gmail.com',
            'https://lian.com',
            0,
            0.0
          )";


$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso ;)";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();