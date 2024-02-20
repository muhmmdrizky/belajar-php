<?php

require_once "15-Parent-Keyword.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . "<br>"; // hasilnya 0

$rectangle = new Rectangle();
echo $rectangle->getCorner() . "<br>"; // hasilnya 4
echo $rectangle->getParentCorner();
