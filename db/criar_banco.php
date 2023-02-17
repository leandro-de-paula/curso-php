<div class="titulo">Criar Banco</div>

<?php 
ini_set('display_errors', true);
error_reporting(E_ALL); 

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso ;)";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();