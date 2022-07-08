<?php
 require_once __DIR__.'/Product.php';
 


class eat extends Product {

    public string $calories;
    public int $age;

    public function __construct( $name_product, $price_product, $codebar_product, $quantity_product, $animal_gen_product, $calories_eat, $age_animal) 
    {
        parent::__construct($name_product, $price_product, $codebar_product, $quantity_product, $animal_gen_product);
        $this ->calories = $calories_eat;
        $this ->age = $age_animal;
       
        
    }
}