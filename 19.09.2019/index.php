<?php

include 'ClassOne/index1.php';
include 'ClassTwo/index2.php';

use ClassOne\ClassOne;
use ClassTwo\ClassTwo;

class First extends ClassOne{

}

$a = new First;

$a->pressF();

class Second extends ClassTwo{

}

$b = new Second;

$b->pressF2();

?>