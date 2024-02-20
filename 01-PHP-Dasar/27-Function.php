<?php
function sayHello()
{
    echo "Hello hello" . PHP_EOL;
}
sayHello();

echo "<br>";

// ---------------------------

$buatFunction = true;

if ($buatFunction) {
    function hallo($name)
    {
        echo "Selamat datang, $name" . PHP_EOL;
    }
}
hallo("Rizky");

echo "<br>";

// ---------------------------
function perkalian($angkaPertama, $angkaKedua)
{
    $hasil = $angkaPertama * $angkaKedua;
    echo "Hasil dari $angkaPertama * $angkaKedua adalah: $hasil";
}
perkalian(5, 6);
