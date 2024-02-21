<?php
require_once "22-Getter-dan-Setter.php";

$category = new Category();
$category->setName("Ipad");
$category->setExpensive(true);

echo "Name: {$category->getName()} <br>";
echo "Expensive: {$category->isExpensive()}";
