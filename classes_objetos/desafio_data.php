<div class="titulo">Desafio Classe Data</div>

<?php 
class Date {
    public $day = 01;
    public $month = 01;
    public $year = 1970;

    public function ToPresent() {
        return "{$this->day}/{$this->month}/{$this->year}";
    }
}

$birthday = new Date();
$birthday->day = 03;
$birthday->month = 12;
$birthday->year = 1994;
echo $birthday->ToPresent();