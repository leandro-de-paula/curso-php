<?php
namespace Controller\PrizeDrawController;

use Model\ToSaveModel\ToSaveModel;
include_once('namespace/sorteio1.5/model/to_save_model.php');

interface Input {
    function dataInput($a, $b, $c);
}

trait dataValidation {
    public function numberDataVatidation($num) {
        return isset($num) && trim($num) && is_numeric($num) && !is_null($num);
    }
}

Class Receive implements Input {

    use dataValidation;

    public $start;
    public $end;
    public $prize;

    function dataInput($newStart, $newEnd, $newPrize) {
        $this->start = $newStart;
        $this->end = $newEnd;
        $this->prize = $newPrize;

    }
    
}

Class DataProcess extends Receive{
    
    public $hdStart;
    public $hdEnd;
    public $hdPrize;
    public $saveData;
    
    function handlesData(){
        $this->hdStart = parent::numberDataVatidation($this->start);
        $this->hdEnd = parent::numberDataVatidation($this->end);
        $this->hdPrize = parent::numberDataVatidation($this->prize);

        if($this->start == 'uninitialized' && $this->end == 'uninitialized' && $this->prize == 'uninitialized') {
            echo "<strong>[INSTRUÇÕES]:</strong><br>";
            echo "O Sorteio 1.5 aceita somente números para serem sorteados, <br>";
            echo "não entre com sequências de números que quebrem a lógica, exemplo: <br>";
            echo "----------------------------------------------------------------------<br>";
            echo "Número final menor que número inicial, ou quantidade de prêmios<br>";
            echo "maior ou igual que o número de sorteios a serem realizados.<br>";
            echo "----------------------------------------------------------------------<br>";
            echo "Nessa versão da aplicação, todos os números sorteados são apresentados<br>";
            echo "em tela ao mesmo tempo.<br>";
            exit;
        }

    
        if ($this->hdStart <> true || $this->hdEnd <> true || $this->hdPrize <> true ) {
            echo "<strong><font color=orangered>[ATENÇÃO]!</font></strong><br>";
            echo "<font color=orangered>---------------------------</font><br>";
            echo "<font color=orangered>Entre somente com números!</font><br>";
            echo "<font color=orangered>---------------------------</font><br>";
            exit;
        } else if ($this->start > $this->end){
            echo "<strong><font color=orange>[ATENÇÃO]!</font></strong><br>";
            echo "<font color=orange>---------------------------</font><br>";
            echo "<font color=orange>Número final: " . '"' . "{$this->end}". '"' ."</font><br>";
            echo "<font color=orange>não pode ser menor que número inicial: ". '"' ."{$this->start}". '"' ."</font><br>";
            echo "<font color=orange>---------------------------</font><br>";
            exit;
        } else if ($this->prize >= $this->end) {
            echo "<strong><font color=orange>[ATENÇÃO]!</font></strong><br>";
            echo "<font color=orange>---------------------------</font><br>";
            echo "<font color=orange>A quantidade de prêmios: ". '"' ."{$this->prize}". '"' ."</font> <br>";
            echo "<font color=orange>não pode ser maior ou igual a quantidade de números: ". '"' ."{$this->end}". '"' ." a serem sorteados</font><br>";
            echo "<font color=orange>---------------------------</font><br>";
            exit;
        } else {
            echo "Número inicial do sorteio: {$this->start}. <br>";
            echo "Número final do sorteio: {$this->end}. <br>";
            echo "Quantidade de Prêmios: {$this->prize}. <br><hr>";
        }

        // converting to integer
        $this->start = intval($this->start);
        $this->end = intval($this->end);
        $this->prize = intval($this->prize);

        // Save Data
        $this->saveData = new ToSaveModel($this->start,$this->end,$this->prize);
                 
    }
}

Class RenderingEngine extends DataProcess{
    // Creating an array with the numbers defined for the draw
    public $prizeDraw = [];
    public $index;
    public $i;
    public $e;

    function Engine (){
        for ($this->e=1; $this->e <= $this->prize ; $this->e++) { 
        
            for ($this->i=$this->start; $this->i <= $this->end; $this->i++) { 
                $this->prizeDraw[] = $this->i;
            }
            // Sorting numbers and displaying on screen
            $this->index = array_rand($this->prizeDraw);
            echo "<div center><h1>{$this->prizeDraw[$this->index]}</h1></div>";
            
            // Removing Draw Number from the draw
            unset($this->prizeDraw[$this->index]);
        }
    }

}


Class GeneratesDraw extends RenderingEngine {
    function __construct($newStart, $newEnd, $newPrize){
        parent::dataInput($newStart, $newEnd, $newPrize);
        parent::handlesData();
        parent::Engine();

    }
    
}
