<?php
namespace Model\ToSaveModel;

class ToSaveModel {
    public $toSaveStart;
    public $toSaveEnd;
    public $toSavePrize;

    function __construct($newToSaveStart, $newToSaveEnd, $newToSavePrize){

        $this->toSaveStart = $newToSaveStart;
        $this->toSaveEnd = $newToSaveEnd;
        $this->toSavePrize = $newToSavePrize;
        // echo "<div center><h6>{$this->toSaveStart} | {$this->toSaveEnd} | {$this->toSavePrize}</h6></div>";
    }
}


