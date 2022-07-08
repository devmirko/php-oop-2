<?php
 require_once __DIR__.'/Product.php';
 


 class game extends Product {

    
    public string $size;

    public function __construct( $name_product, $price_product, $codebar_product, $quantity_product, $animal_gen_product,  $size_animal) 
    {
        parent::__construct($name_product, $price_product, $codebar_product, $quantity_product, $animal_gen_product);
        $this ->size = $size_animal;
       
        
    }
}