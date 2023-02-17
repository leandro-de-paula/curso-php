<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo "Não vou mudar!<br>";
    }
}

class ClasseM extends Abstrata {
    public function metodo1() {
        echo "Executando Método 1<br>";
    }
    
    // public function metodo2() {
    //     echo "Executando Método 2<br>";
    // }
}

$classe = new ClasseM;
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $attr = 'Valor Único';
}

$unica = new Unica();
echo $unica->attr;

// class Duplicata extends Unica {
//     public $attr2;
// }

