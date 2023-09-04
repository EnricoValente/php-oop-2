<?php
require_once __DIR__.'/classes/Product.php';
require_once __DIR__.'/classes/Cat.php';
require_once __DIR__.'/classes/Dog.php';

$catProduct = new Cat(
    'croccantini',
    'lorem10',
    1.99,
    'canarini'
);
var_dump($catProduct);

$dogProduct = new Dog(
    'Ossi',
    'lorem10',
    10.85,
    'cani'
);
var_dump($dogProduct);