<?php


class Product {
    public $name;
    public $price;
    public $codebar;
    public $quantity;
    public $animal_gen;

    public function __construct(string $name_product, int $price_product, int $codebar_product, int $quantity_product, string $animal_gen_product)
    {
        $this->name = $name_product;
        $this->price = $price_product;
        $this->codebar = $codebar_product;
        $this->quantity = $quantity_product;
        $this->animal_gen =  $animal_gen_product;



        
        
    }

}