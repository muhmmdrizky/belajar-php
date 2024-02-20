<?php
function checkVote(string $name, int $age)
{
    if ($age >= 18) {
        return "Hello $name, you are eligible for Vote";
    } else {
        return "Hello $name, you are not eligible for Vote";
    }
}

$check = checkVote("Rizky", 18);
echo $check;
