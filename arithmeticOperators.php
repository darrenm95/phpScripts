<?php

$addition = 5 + 4;
$subtraction = 5 - 4;
$multiplication = 5 * 4;
$division = 5 / 4;
$modulus = 5 % 4;

$four = 4;

$increment = ++$four;
$decrement = --$four;

echo "5 + 4 = " . $addition . "\n";
echo "5 - 4 = " . $subtraction . "\n";
echo "5 * 4 = " . $multiplication . "\n";
echo "5 * 4 = " . $division . "\n";
echo "5 % 4 = " . $modulus . "\n"; // gives remainder after number a has been split into groups of size, number b
echo '++$four = ' . $increment . "\n"; // single quotes do not expand variables
echo '--$four = ' . $decrement . "\n"; // special characters are ignored, only characters that can be escaped by backslash is '\' and '\''