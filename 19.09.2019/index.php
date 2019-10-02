<?php

// include 'ClassOne/index1.php';
// include 'ClassTwo/index2.php';

use ClassOne\index1;
use ClassTwo\index2;

class First extends ClassOne{

}

$a = new First;

$a->pressF();

class Second extends ClassTwo{

}

$b = new Second;

$b->pressF2();

?>