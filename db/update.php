<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Alterar Dados</div>

<?php
ini_set('diplay_error', true);
error_reporting(E_ALL);
require_once "conexao.php";
$conexao = novaConexao();

if ($_GET['codigo']) {
    $sql = "SELECT * 
              FROM cadastro 
             WHERE id = ?";
   $query = $conexao->prepare($sql);
   $query->bind_param("i",$_GET['codigo']);

   if ($query->execute()) {
     $resultado = $query->get_result();
     if ($resultado->num_rows > 0) {
        $dados = $resultado->fetch_assoc();
        if ($dados['nascimento']) {
            $dt = new DateTime($dados['nascimento']);
            $dados['nascimento'] = $dt->format("d/m/Y");
        }
        if ($dados['salario']) {
            $dados['salario'] = str_replace(".",",",$dados['salario']);
        }
     }
   }
}


if (count($_POST) > 0 ) {
    $dados = $_POST;
    $erros = [];


    if (trim($dados['nome']) === "") {
        $erros["nome"] = "Nome é obrigatório";
    }

    if (isset($dados['nascimento'])) {
        $date = DateTime::createFromFormat('d/m/Y', $dados['nascimento']);
        if(!$date) {
            $erros["nascimento"] = 'Data deve estar no padrão dd/mm/aaaa';
        }
    }

    if (!filter_var($dados['email'],FILTER_VALIDATE_EMAIL)) {
        $erros["email"] = 'Email inválido';
    }

    if (!filter_var($dados['site'],FILTER_VALIDATE_URL)) {
        $erros["site"] = 'Site inválido';
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20] 
    ];
    if (!filter_var($dados['filhos'],FILTER_VALIDATE_INT,$filhosConfig) && $dados['filhos'] != 0) {
        $erros["filhos"] = "Quantidade de filhos inválida (0-20).";
    }

    $salarioConfig = [
        "options" => ["decimal" => ","]
    ];
    if (!filter_var($dados['salario'],FILTER_VALIDATE_FLOAT,$salarioConfig)) {
        $erros["salario"] = "Salário inválido";
    }

    if (!count($erros)) {
        $sql = "UPDATE cadastro 
                   SET nome = ?, 
                       nascimento = ?, 
                       email = ?, 
                       site = ?, 
                       filhos = ?, 
                       salario = ?
                 WHERE id = ?";

        $stmt = $conexao->prepare($sql);

        $params = [
            $dados["nome"],
            $date ? $date->format('Y-m-d') : null,
            $dados["email"],
            $dados["site"],
            $dados["filhos"],
            $dados["salario"] ? str_replace(",",".",$dados['salario']) : null,
            $dados["id"]
        ];

        $stmt->bind_param("ssssidi", ...$params);
        // $stmt->execute();

        if ($stmt->execute()) {
            unset($dados);
        }
    }
}

?>

<?php foreach($erros as $erro): ?>
    <!-- <div class="alert alert-danger" role="alert"> -->
        <?= ""// $erro ?>
    <!-- </div> -->
<?php endforeach ?>
<form action="exercicio.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="update">
    <div class="form-group row">
        <div class="col-sm-10">
            <input class="form-control" type="number" 
                name="codigo" value="<?= $_GET['codigo'] ?>"
                placeholder="Informe o codigo para consulta">
        </div>
        <div class="col-sm-2 mb-4">
            <button class="btn btn-success"> Consultar </button>
        </div>
    </div>
</form>
<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $dados["id"] ?>">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros["nome"] ? 'is-invalid' : '' ?>" 
                id="nome" name="nome" placeholder="Nome" 
                value="<?= isset($dados['nome']) ? $dados['nome'] : ''?>">
            <div class="invalid-feedback">
                <?= $erros["nome"] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control <?= $erros["nascimento"] ? 'is-invalid' : '' ?>" 
                id="nascimento" name="nascimento" placeholder="Nascimento" 
                value="<?= isset($dados['nascimento']) ? $dados['nascimento'] : ''?>">
            <div class="invalid-feedback">
                <?= $erros["nascimento"] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros["email"] ? 'is-invalid' : '' ?>" 
                id="email" name="email" placeholder="E-mail" 
                value="<?= isset($dados['email']) ? $dados['email'] : ''?>">
            <div class="invalid-feedback">
                <?= $erros["email"] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros["site"] ? 'is-invalid' : '' ?>" 
                id="site" name="site" placeholder="Site" 
                value="<?= isset($dados['site']) ? $dados['site'] : ''?>">
            <div class="invalid-feedback">
                <?= $erros["site"] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="text" class="form-control <?= $erros["filhos"] ? 'is-invalid' : '' ?>" 
                id="filhos" name="filhos" placeholder="Qtde de Filhos" 
                value="<?= isset($dados['filhos']) ? $dados['filhos'] : ''?>">
            <div class="invalid-feedback">
                <?= $erros["filhos"] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros["salario"] ? 'is-invalid' : '' ?>" 
                id="salario" name="salario" placeholder="Salário" 
                value="<?= isset($dados['salario']) ? $dados['salario'] : ''?>">
            <div class="invalid-feedback">
                <?= $erros["salario"] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>
