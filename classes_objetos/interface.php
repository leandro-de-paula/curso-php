<div class="titulo">Interface</div>

<?php 
interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
    function correr();
}

interface felino {
    function correr();
}

class Cachorro implements Canino {
    function respirar()  {
        return "Irei usar Oxigênio!";
    }
    
    function latir(): string {
        return "au au";
    }

    function mamar() {
        return "Irei consumir leite";
    }

    function correr() {
        return "Vrummm";
    }
}

$animal = new Cachorro();
echo $animal->respirar(), "<br>";
echo $animal->latir(), "<br>";
echo $animal->mamar(), "<br>";
echo $animal->correr(), "<br>";

echo "<hr><br>";

var_dump($animal);

echo "<br>";
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof felino);
