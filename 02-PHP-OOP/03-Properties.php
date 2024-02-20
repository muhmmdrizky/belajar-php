<?php

class Person
{
  // Properties
  // Properties dengan type
  var string $name = "No name";
  var ?string $address; // ? artinya boleh null
  var string $country = "No country";
}

// Manipulasi properties
$person = new Person("Hai", "hai");
$person->name = "Muhammad Rizky";
$person->address = "Bogor";
$person->country = "Indonesia";

echo "Nama: {$person->name}";
echo "<br>";
echo "Alamat: {$person->address}";
echo "<br>";
echo "Negara: {$person->country}";
