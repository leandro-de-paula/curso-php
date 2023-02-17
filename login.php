<?php 
session_start();
$email = isset($_POST['email'])? $_POST['email']: null;
$senha = isset($_POST['senha'])? $_POST['senha']: null;

if (isset($_POST['email'])) {
    $usuarios = [
        
        [
            "nome" => "Leandro de Paula",
            "email" => "leandro@gmail.com.br",
            "senha" => "123456"
        ],
        [
            "nome" => "Evellyn Fontenele",
            "email" => "evellyn@gmail.com.br",
            "senha" => "123456",
        ]
    ];
        
    foreach ($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            //Entrando com COOKIE
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario',$usuario['nome'],$exp);
            (header('Location: index.php'));
        }
    }

    if(!isset($_SESSION['usuario'])) {
        $_SESSION['erros'] = ['Usuários/Senha inválido!'];
    }
}
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
          <h3>Identifique-se</h3>
          <?php if (isset($_SESSION['erros'])): ?>
            <div class="erros">
                <?php foreach ($_SESSION['erros'] as $erro):?>
                    <p><?= $erro ?></p>
                <?php endforeach ?>
            </div>
          <?php endif ?>
          <form action="#" method="post">
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <button>Entrar</button>
          </form>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>