<div class="titulo">Polimorfismo</div>

<?php
abstract class Food {
    public $weight;
}

class Rice extends Food {

}

class Pilaf extends Rice {

}

class Bean extends Food {

}

class IceCream extends Food {

}

class Person {
    public $weight;

    function __construct($newWeight) {
        $this->weight = $newWeight;
    }

    public function eat(Food $food) {
        $this->weight += $food->weight;
    }
}

$food1 = new Rice;
$food1->weight = 0.65;

$food2 = new Pilaf;
$food2->weight = 0.35;

$food3 = new IceCream;
$food3->weight = 0.20;

$person = new Person(75.80);
$person->eat($food1);
$person->eat($food2);
$person->eat($food3);
echo $person->weight;