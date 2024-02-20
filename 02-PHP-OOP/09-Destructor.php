
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

  function __destruct()
  {
    echo "Object person $this->name is destroyed. <br>";
  }
}

// Manipulasi properties
$person = new Person("Muhammad Rizky", "Bogor");
$person = new Person("Rony Parulian", "Bogor");
