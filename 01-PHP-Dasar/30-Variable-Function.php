<?php
// Variable Function
function helloName()
{
    echo "Hello" . PHP_EOL;
}

$getName = "helloName";
$getName();

echo "<br>";

// Penggunaan variable function
function sayHello(string $name, $filter)
{
    $getData = $filter($name);
    echo "Hello $getData" . PHP_EOL;
}
sayHello("Muhammad Rizky", "strtolower");
echo "<br>";
sayHello("Muhammad Rizky", "strtoupper");
