<?php

function novaConexaoPDO($banco = 'curso_php') {
    $servidor = '127.0.1';
    $usuario = 'root';
    $senha = 'root';

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco;",$usuario,$senha);
        return $conexao;
    } catch (PDOException $e) {
        die("Error: ". $e->getMessage());
    }
}

novaConexaoPDO();
// echo "FIM";