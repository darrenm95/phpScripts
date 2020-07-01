<?php

/* PHP is a very loosely typed programming language. This means that the variables do not need to be declared (the
process in which the computer is told the type of variable and then puts it in the corresponding storage container for
that type). The type of variable is assessed based on the context it is accessed under. This means that a series of
digits can be treated as a number and then a string based on the methods being used. */

// e.g.

$pi = "3.141592654";
$radius = "5";
$area = $pi * ($radius * $radius);
echo $area;