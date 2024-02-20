<?php

require "17-Polymorphism.php";

$company = new Company();
$company->programmer = new Programmer("Muhammad");
$company->programmer = new BackendProgrammer("Rizky");
$company->programmer = new FrontendProgrammer("Mantap");

sayHelloProgrammer(new Programmer("Haha"));
sayHelloProgrammer(new BackendProgrammer("Hihi"));
sayHelloProgrammer(new FrontendProgrammer("Huhu"));
