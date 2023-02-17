<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Deletar Registro 2</div>

<?php
ini_set('diplay_errors', true);
error_reporting(E_ALL);

require_once "conexao.php";

$conexao = novaConexao();

if ($_GET["del"]) {
  $deleteSQL = "DELETE FROM cadastro WHERE id = ?";
  $stmt = $conexao->prepare($deleteSQL);
  $stmt->bind_param("i",$_GET["del"]);
  $stmt->execute();
}

$sql = "SELECT id,
               nome,
               nascimento,
               email
          FROM cadastro";
$resultado = $conexao->query($sql);


$registros = [];

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
      $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Error: " . $conexao->error;
}

$conexao->close();

?>

<table class="table table-hover table-bordered table-striped">
  <thead class="bg-primary">
    <th>ID</th>
    <th>Nome</th>
    <th>Nascimento</th>
    <th>email</th>
    <th>Ações</th>
  </thead>
  <tbody>
    <?php foreach($registros as $registro): ?>
      <tr>
        <td><?= $registro["id"] ?></td>
        <td><?= $registro["nome"] ?></td>
        <td><?= date("d/m/Y",strtotime($registro["nascimento"])) ?></td>
        <td><?= $registro["email"] ?></td>
        <td> 
          <a href="/curso-php/exercicio.php?dir=db&file=delete_2&del=<?=$registro["id"]?>" 
             class="btn btn-danger"> 
             Excluir 
          </a> 
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
<style>
  table > * {
    font-size: 1.2rem;
  }
</style>