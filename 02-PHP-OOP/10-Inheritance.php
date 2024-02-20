<?php
class Manager
{
  var string $name;

  function sayHello(string $name): void // artinya void adalah tidak mengembalikan value
  {
    echo "Hi, $name, my name is $this->name.<br>";
  }
}

class VicePresident extends Manager
{
}

$manager = new Manager();
$manager->name = "Muhammad Abdul";
$manager->sayHello("Abdul Ahmad");

$vp = new VicePresident();
$vp->name = "Rony";
$vp->sayHello("Paul");
