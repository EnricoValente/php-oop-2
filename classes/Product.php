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
        
    
    if (is_numeric($price) && is_float($price)) {
      $this->price = $price;
    }

    $this->category = $category;
    
    $this->image = $image;
  }
    
}

    
   

