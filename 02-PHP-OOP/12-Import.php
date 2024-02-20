<?php
require_once "11-Namespace.php";
require_once "conflict.php";

// group use declaration {}
use function Helper\{helpMe as help}; //alias
use One\{First as Satu, Second as Dua, Third as Tiga};

help();

$first = new Satu();
$second = new Dua();
$third = new Tiga();
