<?php

class Person
{
  const AUTHOR = "Muhammad Rizky Ganteng";
  // Properties
  // Properties dengan type
  var string $name = "No name";
  var ?string $address; // ? artinya boleh null
  var string $country = "No country";

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hi, my name is {$this->name}";
    } else {
      echo "Hello $name, my name is {$this->name}";
    }
  }
}

// self keyword
function info()
{
  echo "Author : " . self::AUTHOR;
}
