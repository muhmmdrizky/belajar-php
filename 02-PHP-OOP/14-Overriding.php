<?php

// Overriding -> mendeklarasikan ulang function yang ada di class
class Manager
{
  var string $name;

  function sayHello(string $name): void // artinya void adalah tidak mengembalikan value
  {
    echo "Hi, $name, i'm a Manager my name is $this->name.<br>";
  }
}

class VicePresident extends Manager
{
  function sayHello(string $name): void // artinya void adalah tidak mengembalikan value
  {
    echo "Hi, $name, i'm a VP my name is VP $this->name.<br>";
  }
}

$manager = new Manager();
$manager->name = "Muhammad Abdul";
$manager->sayHello("Abdul Ahmad");

$vp = new VicePresident();
$vp->name = "Rony";
$vp->sayHello("Paul");
