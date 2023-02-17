<div class="titulo">Herança</div>

<?php

class Person {
    public $name;
    public $age;

    function __construct($newName, $newAge){
        echo "[Person] Construct Invoked!<br>";
        $this->name = $newName;
        $this->age = $newAge;
    }

    function __destruct() {
        echo "[Person] Destruct Invoked!<br>";
    }

    public function ToPresent() {
        echo "Nome: {$this->name}<br> Idade: {$this->age}<br>";
    }
    
}

class User extends Person {
    public $login;

    function __construct($newName, $newAge, $newLogin) {
        echo "[User] Construct Invoked!<br>";
        parent::__construct($newName, $newAge);
        $this->login = $newLogin;
    }

    function __destruct() {
        parent::__destruct();
        echo "[User] User say created!<br>";
    }

    public function ToPresent()
    {
        parent::ToPresent();
        echo "Login: {$this->login}<br>";
    }
}


$register = new User("Evellyn", 26,"@fontenele");
$register->ToPresent();
unset($register);