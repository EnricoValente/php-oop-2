<?php
require_once __DIR__.'/Product.php';

class Kennel extends Product {
    public $dimension;

    public function __construct(
        $title,
        $price,
        $category,
        $dimension,
        $image = null
    )
    {
        parent::__construct($title,$price,$category,$image);
        $this->dimension = $dimension;

    }
}