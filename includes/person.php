<?php

class Person {
    public $name;
    public $age;

    function __construct($newName, $newAge){
        $this->name = $newName;
        $this->age = $newAge;
    }

     public function ToPresent() {
        $person =  "Nome: {$this->name}<br> Idade: {$this->age}";
        return $person;
    }
    
}