<div class="titulo">Primeira Classe</div>

<?php 
class Client {
    // Atributos
    public $name = 'Anônimo';
    public $age = 18;

    public function ToPresent() {
        return "Nome: {$this->name} Idade: {$this->age} <br>";
    }
}


$client1 = new Client();
echo $client1->name, '<br>';
$client1->name = 'Evellyn Fontenele';
echo $client1->name, '<br>';
$client1->age = 27;
echo $client1->ToPresent();


$client2 = new Client();
$client2->name = 'Leandro de Paula';
$client2->age = 35;
echo $client2->ToPresent();