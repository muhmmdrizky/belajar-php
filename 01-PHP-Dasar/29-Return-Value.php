<?php
function tambah($a, $b)
{
    $hasil = $a + $b;
    return $hasil;
}
$tambah = tambah(5, 5);
echo "$tambah";
echo "<br>";

// return type declaration
function sum(int $firstNumber, int $secondNumber): int
{
    return $firstNumber + $secondNumber;
}

$hasil = sum(5, 6);
echo "Hasilnya = $hasil";
