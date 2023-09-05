<?php
require_once __DIR__.'/Product.php';

class Food extends Product {
    public $expirationDate;

    public function __construct(
        $title,
        $price,
        $category,
        $expirationDate,
        $image = null
    )
    {
        parent::__construct($title,$price,$category,$image);
        $this->expirationDate = $expirationDate;

    }
}