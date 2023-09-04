<?php
require_once __DIR__.'/Product.php';

class Dog extends Product {
    public $category;

    public function __construct(
        $name,
        $description,
        $price,
        $category
    )
    {
        parent::__construct($name,$description,$price);

        if (!is_numeric($category) && $category === 'cani') {
            $this->category = $category;
        }
    }
}