<?php 
session_start();
?>
<div class="titulo">Sessão</div>

<?php
print_r($_SESSION);
echo "<br>";

if (!$_SESSION['name']) {
    $_SESSION['name'] = 'Evellyn';
}


if (!$_SESSION['email']) {
    $_SESSION['email'] = 'evellyn@gmail.com';
}


print_r($_SESSION);

?>

<p>
    <a href="http://localhost/curso-php/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>

