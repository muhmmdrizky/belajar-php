<?php

require_once "13-Visibility.php";

$product = new Product("Apple", 5000000);

echo $product->getName();
echo $product->getPrice();

$dummy = new ProductDummy("Dummy", 5000);
$dummy->info();
