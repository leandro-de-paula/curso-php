<div class="titulo">Desafio Erros</div>

<?php
interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3(){
        echo "Estou funcionando <br>";
    }

    function metodo1()  {
        echo "Executando Método 1 <br>";
    }

    function metodo2($parametro)  {
        echo "Executando Método 2 {$parametro} <br>";
    }

}

class Classe extends ClasseAbstrata {
    public $parametro;
    function __construct($parametro) {
        parent::metodo2($parametro);
    }

    public function metodo1() {
        parent::metodo1();
    }

    public function metodo3() {
        parent::metodo3();
    }


}

$exemplo = new Classe('Evellyn');
$exemplo->metodo3();
$exemplo->metodo1();