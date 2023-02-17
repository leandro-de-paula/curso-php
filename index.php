<?php
session_start();

if (isset($_COOKIE['usuario'])) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <nav class="navegacao">
       <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
       <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?= require_once('menu.php');?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>