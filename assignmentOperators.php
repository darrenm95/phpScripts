<?php

//Assignment operators =, +=, -=, *=, /=, %=, .=

$num = 10;
echo '$num = ' . $num . "\n";
echo "\n";

echo '$num = ' . $num . "\n";
$num += 5;
echo '$num += 5' . "\n";
echo '$num = ' . $num . "\n";
echo "\n";

echo '$num = ' . $num . "\n";
$num -= 5;
echo '$num -= 5' . "\n";
echo '$num = ' . $num . "\n";
echo "\n";

echo '$num = ' . $num . "\n";
$num *= 5;
echo '$num *= 5' . "\n";
echo '$num = ' . $num . "\n";
echo "\n";

echo '$num = ' . $num . "\n";
$num /= 5;
echo '$num /= 5' . "\n";
echo '$num = ' . $num . "\n";
echo "\n";

echo '$num = ' . $num . "\n";
$num %= 5;
echo '$num %= 5' . "\n";
echo '$num = ' . $num . "\n";
echo "\n";

$str1 = "Ghillies";
$str2 = " in the mist.";
echo '$str1 = ' . $str1 . "\n" . '$str2 = ' . $str2 . "\n";
$str1 .= $str2;
echo '$str1 .= $str2' . "\n";
echo '$str1 = ' . $str1;