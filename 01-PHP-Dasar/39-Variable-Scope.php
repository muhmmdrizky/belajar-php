<?php
// Global scope (ga bisa di akses dalam function)
$name = "Rizky";

function sayName()
{
  // Local scope (ga bisa di akses di luar function)
  global $name; // global keyword
  echo $name;
}

sayName();
