<!DOCTYPE html>
<html>
<body>

<?php
//starting php

/*
Calculation Program with at least 10 Variable Statements
Program to calculate the sum, average and their product
*/

//assigning the values to variables that remains unchanged throughout the program
$a = 10;
$b = 20;
$c = 3; 
$d = 45;
$e = 50;
$f = 15;
$g = 8;
$h = 19;
$i = 29;
$j = 6;

//Assigning the summation of all values to variable Sum.
$Sum = $a + $b + $c + $d + $e + $f + $g + $i + $j;

$Average = $Sum / 10;

//Assigning the product of all values to Product
$Product = $a * $b * $c * $d * $e * $f * $g * $i * $j;

//Printing the output
echo "\nThe Sum is ".$Sum;
echo "\nThe Average is ".$Average;
echo "\nThe Product is ".$Product;

//end of php
?> 
</body>
</html>
