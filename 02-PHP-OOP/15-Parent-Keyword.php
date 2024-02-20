<?php

namespace Data;

class Shape
{
  public function getCorner()
  {
    return 0;
  }
}

class Rectangle extends Shape
{
  public function getCorner()
  {
    return 4;
  }

  //akses function yang ada di shape
  public function getParentCorner()
  {
    // ini ngakses getCorner yang di dalem class ini
    // return $this->getCorner();

    // ngakses getCorner yang ada di class shape
    return parent::getCorner();
  }
}
