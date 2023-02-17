<div class="titulo">Métodos Mágicos</div>

<?php
class Person {
    public $name;
    public $age;

    function __construct($newName, $newAge) {
        echo "[CONSTRUCT INVOKED]<br>";
        $this->name = $newName;
        $this->age = $newAge;

    }

    function __destruct() {
        echo "[DESTRUCT INVOKED]<br>";
    }

    public function __toString()  {
        return "{$this->name} tem  {$this->age} anos.";
    }

    public function ToPresent () {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "[WARNING] Lendo atributo não declarado: {$atrib} <br>";
    }
    
    public function __set($atrib, $value) {
        echo "[WARNING] Não é possível alterar atributo não declarado: {$atrib}/{$value}<br>";
    }

    public function __call($method, $params) {
        echo "[WARNING] Tentando executar método '{$method}', com os parâmetros: <br>";
        print_r($params);
        echo "<br>";
    }


}

// __construct
$person = new Person('Evellyn', 26);

// Chamando o __toString
$person->ToPresent();
// Chamando o __toString
echo $person, "<br>";
// Chamando o __toString
$person->name = "Caroline";

// Chama o método diretamente sem __call
$person->ToPresent();

// __get
$person->lastName;

// __set
$person->lastName = 'Muito Legal!!!';

// Acessa o atributo diretamente sem __get
echo $person->name, "<br>"; 

// Chama o __call porque o método não exite no objeto
$person->exec(1, 'teste', true, [1,2,3]);

// __destruct
$person = null;