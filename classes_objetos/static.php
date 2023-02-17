<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (Estática)';

    public function mostrarA() {
        echo "Não estatático = {$this->naoStatic}<br>";

        // Tentativa 1;
        // echo "Estática = {$this->static}";
        
        // Tentativa 2
        echo "Estática = ". self::$static ."<br>";
    }

    public static function mostrarStaticA() {
        // echo "Não estatático = {$this->naoStatic}<br>";
        echo "Estática = ". self::$static ."<br>";
    }
}

$objetoA = new A ();
$objetoA->mostrarA();
// $objetoA->mostrarStaticA(); //-> Não é a forma ideal

A::mostrarStaticA(); //-> Acessar diretamente pela classe
echo A::$static, '<br>';//-> Acessar diretamente pela classe

A::$static = 'Alterado membro de classe';
echo A::$static, '<br>';//-> Acessar diretamente pela classe
