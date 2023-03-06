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

$message = "";
if (count($_POST) > 0) {
    $message = "Erros encontrados: ";

    if (empty($_POST['name'])) {
        $message = $message . "Campo nome vazio" . " | ";
    }

   
    if (empty($_POST['age'])) {
        $message = $message . "Campo idade vazio" . " | ";
    } elseif (is_numeric($_POST['age']) && $_POST['age'] > "150") {
        $message = $message . "Idade não pode ser maior que 150 anos" . " | ";
    } elseif (!is_numeric($_POST['age'])) {
        $message = $message . "Campo idade é numerico" . " | ";
    }

    if (empty($_POST['login'])) {
        $message = $message . "Campo login vazio" . " | ";
    }

    if (empty($_POST['email'])) {
        $message = $message . "Campo email vazio" . " | ";
    }

    if (empty($_POST['password'])) {
        $message = $message . "Campo senha vazio" . " | ";
    }
    if (strlen($message) > 0 ) {
       echo "<script>alert('$message')</script>";
       exit;
    }

} else {
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


