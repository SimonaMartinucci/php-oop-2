<?php

class Category {
    public $category;
    public $description;

    public function __construct(string $_category, string $_description){
        $this->category = $_category;
        $this->description = $_description;
    }

    public function printCategory(){
        echo '<div><b>Categoria:</b> ' . $this->category . '</div>' . '<div><b>Descrizione:</b> ' . $this->description . '</div>';
    }

}