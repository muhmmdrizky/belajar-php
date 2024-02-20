<?php
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rizky", function ($name): string {
    return strtoupper($name);
});
echo "<br>";
sayHello("Rizky", fn ($name) => strtolower($name));
echo "<br>";
sayHello("Rizky", "strtoupper");
