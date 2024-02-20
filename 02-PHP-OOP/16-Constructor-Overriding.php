<?php

class Manager
{
  var string $name;
  var string $title;

  public function __construct(string $name = "", string $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(string $name): void // artinya void adalah tidak mengembalikan value
  {
    echo "Hi, $name, i'm a Manager my name is $this->name.<br>";
  }
}

class VicePresident extends Manager
{

  public function __construct(string $name = "")
  {
    //tidak wajib tapi direkomendasikan
    parent::__construct($name, "VP");
  }

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
