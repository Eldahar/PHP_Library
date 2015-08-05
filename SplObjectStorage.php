<?php

class Product {
    public $id;
}

class ProductDescription {
    public $desc;
}

$products = [
    0 => new Product(),
    1 => new Product(),
    2 => new Product()
];

$products[0]->id = 1;
$products[1]->id = 2;
$products[2]->id = 3;

$descriptions = [
    0   => new ProductDescription(),
    1   => new ProductDescription(),
    2   => new ProductDescription()
];

$descriptions[0]->desc = 'elso';
$descriptions[1]->desc = 'masodik';
$descriptions[2]->desc = 'harmadik';

$storage = new SplObjectStorage();
foreach ($products as $k=>$p) {
    $storage->attach($p, $descriptions[$k]);
}

var_dump($storage);

printf("%s => %s\n", $products[0]->id, $storage[$products[0]]->desc);
printf("%s => %s\n", $products[1]->id, $storage[$products[1]]->desc);
printf("%s => %s\n", $products[2]->id, $storage[$products[2]]->desc);

foreach($storage as $key) {
    $value = $storage[$key];
    printf("%s => %s\n", $key->id, $value->desc);
}