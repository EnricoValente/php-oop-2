<?php
require_once __DIR__.'/Product.php';

class Toy extends Product {
    public $material;

    public function __construct(
        $title,
        $price,
        $category,
        $material,
        $image = null
    )
    {
        parent::__construct($title,$price,$category,$image);
        $this->material = $material;

    }
}