<?php
// Anonymous function
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Muhammad");
$sayHello("ٌRizky");

echo "<br>";

// Anonymous function sebagai argumen
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Goodbye $finalName" . PHP_EOL;
}
sayGoodBye("Rony", function (string $name) {
    return strtoupper($name);
});

echo "<br>";

$filterFunction = function (string $name): string {
    return strtolower($name);
};
sayGoodBye("Ahmad", $filterFunction);

echo "<br>";
// Mengakses variabel luar
$firstName = "Muhammad";
$lastName = "Rizky";

$sayHellowww = function () use ($firstName, $lastName) {
    echo "Hello, $firstName $lastName" . PHP_EOL;
};
$sayHellowww();
