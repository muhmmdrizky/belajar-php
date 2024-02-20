<?php
$firstName = "Muhammad";
$lastName = "Rizky";

$sayHello = fn () => "Hello, $firstName $lastName" . PHP_EOL;

echo $sayHello();

echo "<br>";

$result = fn ($firstNumber, $secondNumber) => $firstNumber + $secondNumber;

echo $result(5, 6);
