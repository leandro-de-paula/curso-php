<div class="titulo">Delete</div>

<?php
ini_set('diplay_errors', true);
error_reporting(E_ALL);

require_once "conexao.php";

$sql = "DELETE FROM cadastro WHERE id = 3";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso ;)";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();