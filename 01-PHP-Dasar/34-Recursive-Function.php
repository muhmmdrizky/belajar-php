<?php
// Factorial loop
function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}
echo factorialLoop(5) . PHP_EOL;

echo "<br>";

// Factorial Recursive
function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}
echo factorialRecursive(5) . PHP_EOL;
