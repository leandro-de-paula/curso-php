<div class="titulo">Argumento Padrão</div>

<?php
function salutation($firstName = "Senhor(a)", $lastName = "Cliente") {
    return "Bem Vindo, {$firstName} {$lastName}!<br>";
}

echo salutation();
echo salutation(NULL);
echo salutation(NULL,NULL);
echo salutation("Mestre","Supremo");


function takeOrder($food, $drink = "Água"){
    echo "Para comer: {$food} <br>";
    echo "Para Beber: {$drink} <br>";
}

takeOrder("Hambuguer");
takeOrder("Pizza", "Refrigerante");


function takeOrder2($drink = "Água", $food){
    echo "Para comer: {$food} <br>";
    echo "Para Beber: {$drink} <br>";
}

takeOrder2("Suco de Laranja", "Pizza");