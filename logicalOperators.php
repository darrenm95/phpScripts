<?php

// &&, ||, and, or, xor

$num1 = rand(0,9);
$num2 = rand(0,9);

if ( $num1 % 2 == 0 && $num2 % 2 == 0 ) echo "Both numbers are even.\n";
if ( $num1 % 2 == 0 and $num2 % 2 == 0 ) echo "Both numbers are even.\n";

if ( $num1 % 2 == 1 && $num2 % 2 == 1 ) echo "Both numbers are odd. \n";
if ( $num1 % 2 == 1 and $num2 % 2 == 1 ) echo "Both numbers are even.\n";

if ( $num1 % 2 == 0 || $num2 % 2 == 0 ) echo "At least one of the numbers is even.\n";
if ( $num1 % 2 == 0 or $num2 % 2 == 0 ) echo "At least one of the numbers is even.\n";

if ( $num1 % 2 == 1 || $num2 % 2 == 1 ) echo "At least one of the numbers is odd.\n";
if ( $num1 % 2 == 1 or $num2 % 2 == 1 ) echo "At least one of the numbers is odd.\n";

if ( $num1 % 2 == 0 xor $num2 % 2 == 0) echo "One number is even and one number is odd.\n";

echo '$num1 = ' . $num1 . "\n";
echo '$num2 = ' . $num2 . "\n";