<?php

class Type extends Product {
    public $type;

    public function __construct(string $_name, string $_details, string $_image, float $_price, Category $_category, string $_type){

       parent::__construct($_name, $_details, $_image, $_price, $_category);
       
       $this->type = $_type;
    }

    public function printType(){
        echo parent::printInfos() . '<div><b>Tipologia:</b> ' . $this->type . '</div>';
    }

}