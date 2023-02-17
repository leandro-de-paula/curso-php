<?php 
require_once('person.php');

class User extends Person {
    public $login;

    function __construct($newName, $newAge, $newLogin) {
        parent::__construct($newName, $newAge);
        $this->login = $newLogin;
    }

    public function ToPresent()
    {
        $loginUser = "Login: {$this->login}";
        return $loginUser . parent::ToPresent();
    }
}
