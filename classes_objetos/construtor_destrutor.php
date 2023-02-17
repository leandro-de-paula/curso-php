<div class="titulo">Construtor e Destrutor</div>

<?php 

class Person {
    public $name;
    public $age;

    function __construct($newName, $newAge = 18) {
        echo 'Construct Invoked! <br>';
        $this->name = $newName;
        $this->age = $newAge;
    }

    function __destruct() {
        echo 'Destruct Invoked! <br>';
    }

    public function ToPresent() {
        return "{$this->name}, {$this->age} anos <br>";
    }
}


$personA = new Person('Evellyn', 27);
echo $personA->ToPresent();
unset($personA);

$personB = new Person('Leandro', 35);
echo $personB->ToPresent();
$personB = null;