<?php
class Product {
   public string $name;
   public string $description;
   public float $price;
   

  public function __construct(
    $name,
    $description,
    $price
  )
  {
    $this->name = $name;
    $this->description = $description;

    if (is_numeric($price) && is_float($price)) {
        $this->price = $price;
    }
    
    }
    
}

    
   

