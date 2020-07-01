<?php

// comparison operators: >, <, >=, <=, ==, !=

$num1 = rand(0,9);
$num2 = rand(0,9);

echo '$num1 = ' . $num1 . "\n";
echo '$num2 = ' . $num2 . "\n";

if ( $num1 == 5) echo '$num1 equals 5' . "\n";

if ( $num1 != 5) echo '$num1 does not equal 5' ."\n";

if ( $num1 > $num2 ) echo '$num1 is greater than $num2' . "\n";

if ( $num1 < $num2 ) echo '$num1 is less than $num2' . "\n";

if ( $num1 >= $num2 ) echo '$num1 is greater than or equal to $num2' . "\n";

if ( $num1 <= $num2 ) echo '$num1 is less than or equal to $num2' . "\n";



