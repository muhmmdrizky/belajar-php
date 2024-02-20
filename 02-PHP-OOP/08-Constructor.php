
<?php

class Person
{
  const AUTHOR = "Muhammad Rizky Ganteng";
  // Properties
  // Properties dengan type
  var string $name = "No name";
  var ?string $address; // ? artinya boleh null
  var string $country = "No country";

  function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hi, my name is {$this->name}";
    } else {
      echo "Hello $name, my name is {$this->name}";
    }
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
echo "<br>";
