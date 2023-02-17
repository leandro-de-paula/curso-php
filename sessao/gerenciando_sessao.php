<?php session_start(); ?>
<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('6b513248b567c3705986f5a994881772');
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo "<br>" . $_SESSION['contador'];

if ($_SESSION['contador'] % 5 === 0) { 
    session_regenerate_id();
    }

if ($_SESSION['contador'] >= 15) { 
    session_destroy();
    }
