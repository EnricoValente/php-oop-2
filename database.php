<?php
require_once __DIR__.'/classes/Category.php';
require_once __DIR__.'/classes/Product.php';
require_once __DIR__.'/classes/Food.php';
require_once __DIR__.'/classes/Toy.php';
require_once __DIR__.'/classes/Kennel.php';

$dogCategory = new Category('cani', 'icona');
$catCategory = new Category('gatti', 'icona');
 try {
     $genericProduct = new Product(
    'ciotola',
        7.99,
    $dogCategory

);

var_dump($genericProduct);


$catFood = new Food(
    'vaschetta umido',
    3.99,
    $catCategory,
    '1/01/2023'
    
);
var_dump($catFood);


$dogToy = new Toy(
    'Osso',
    7.99,
    $dogCategory,
    'gam'
);
var_dump($dogToy);


$kennel = new Kennel(
    'cuccia cani',
    19.99,
    $dogCategory,
    196
);

var_dump($kennel);
 } catch (Exception $e) {
     echo '<div> Si è verificato un errore durante l\'inserimento del prezzo:'.$e->getMessage().'</div>';
 }
