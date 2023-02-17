<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarA() {
        echo "[Class A][mostrarA] Publico = {$this->publico}<br>";
        echo "[Class A][mostrarA] Protegido = {$this->protegido}<br>";
        echo "[Class A][mostrarA] Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo "[Class A][vaiPorHeranca] Serei transmitido por herança!<br>";
    }

    private function naoMostrar() {
        echo "[Class A][naoMostrar] Não vou imprimir<br>";
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar(); //--> Não será exibido

class B extends A{
    public function mostrarB() {
        echo "[Class B][mostrarB] Publico = {$this->publico}<br>";
        echo "[Class B][mostrarB] Protegido = {$this->protegido}<br>";
        // echo "[Class B][mostrarB] Privado = {$this->privado}<br>"; //--> Não será exibido
        parent::vaiPorHeranca();
    }
}
echo "<hr><br>";
$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca(); //--> Não será exibido