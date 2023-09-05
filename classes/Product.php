<?php
class Product {
   public $title;
   public $price;
   public $category;
   public $image;
   

  public function __construct(
    $title,
    $price,
    $category,
    $image = null
  )
  {
    if (!is_numeric($title) && is_string($title)) {
        $this->title = $title;
    }
        
    
    if (is_numeric($price) && is_float($price) && $price >0) {
      $this->price = $price;
    }
    else {
      throw new InvalidArgumentException('Prezzo non valido');
    }

    $this->category = $category;
    
    $this->image = $image;
  }
    
}

    
   

