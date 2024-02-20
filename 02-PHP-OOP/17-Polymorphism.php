<?php
class Programmer
{
  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}

class Company
{
  public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
  if ($programmer instanceof BackendProgrammer) {
    echo "Hello Backend Programmer $programmer->name <br>";
  } else if ($programmer instanceof FrontendProgrammer) {
    echo "Hello Frontend Programmer $programmer->name <br>";
  } else if ($programmer instanceof Programmer) {
    echo "Hello Programmer $programmer->name <br>";
  }
}