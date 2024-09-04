<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Type.php';

class Product {
    public $name;
    public $details;
    public $image;
    public $price;
    public $category;

    public function __construct(string $_name, string $_details, string $_image, float $_price, Category $_category){
        $this->name = $_name;
        $this->details = $_details;
        $this->image = $_image;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function printInfos() {
        echo '<div><b>Dettagli:</b> ' . $this->details . '</div>' . '<div><b>Prezzo:</b> ' . $this->price . ' €</div>';
    }

}