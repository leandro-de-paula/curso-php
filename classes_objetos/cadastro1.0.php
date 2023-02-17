<style>
     [center] {
        width: 500px;
        min-height: 560px;    
        margin: 0px auto;
        position: relative;  
     }
    
    form > * {
        font-size: 1.8rem;
    }
    
    button {
        width: 68%;
        font-size: 1.8rem;
    }
</style>
<div class="titulo">Cadastro 1.0</div>

<div center>
    <form action="#" method="post">
        <input type="text" name="name" id="name" placeholder="Nome">
        <input type="number" name="age" id="age" placeholder="Idade">
        <input type="text" name="login" id="login" placeholder="@login">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password" placeholder="Senha">
        <div>
            <br>
            <button>Cadastrar</button>
        </div>
    </form>
</div>

<?php 

$void = 'empty';
$name = isset($_POST['name']) ? $_POST['name'] : $void;
$age = isset($_POST['age']) ? $_POST['age'] : $void;
$login = isset($_POST['login']) ? $_POST['login'] : $void;
$email = isset($_POST['email']) ? $_POST['email'] : $void;
$password = isset($_POST['password']) ? $_POST['password']: $void;




if ($name == $void || $age == $void || $login == $void || $email == $void || $password == $void) {
    echo "<script>alert('Todos os campos precisam estar preenchido') </script>";
    exit;
}


class Person {
    public $name;
    public $age;

    function __construct ($newName, $newAge) {
        $this->name = $newName;
        $this->age = $newAge;
    }

    function __destruct(){}

    public function ToPresent(){
        echo "Nome: {$this->name}<br> Idade: {$this->age} anos <br>";
    }
    
}


class User extends Person {
    public $login;
    public $email;
    public $password;

    function __construct($newName,$newAge, $newLogin, $newEmail, $newPassword) {
        parent::__construct($newName, $newAge);
        $this->login = $newLogin;
        $this->email = $newEmail;
        $this->password = $newPassword;
    }

    function __destruct() {
        parent::__destruct();
    }

    public function ToPresent() {
        parent::ToPresent();
        echo "Login: {$this->login}<br> Email: {$this->email}<br> Senha: {$this->password}<br>";
    }
}

$register = new User($name, $age, $login, $email, $password);
$register->ToPresent();


