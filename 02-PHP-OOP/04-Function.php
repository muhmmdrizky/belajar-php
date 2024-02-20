<?php

class Person
{
  // Properties
  // Properties dengan type
  var string $name = "No name";
  var ?string $address; // ? artinya boleh null
  var string $country = "No country";

  function sayHello(string $name)
  {
    echo "Hello $name";
  }
}

// Manipulasi properties
$person = new Person("Hai", "Hai");
$person->name = "Muhammad Rizky";
$person->address = "Bogor";
$person->country = "Indonesia";


echo "Nama: {$person->name}";
echo "<br>";
echo "Alamat: {$person->address}";
echo "<br>";
echo "Negara: {$person->country}";
echo "<br>";
$person->sayHello("Rizky");
