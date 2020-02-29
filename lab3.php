<!DOCTYPE html>
<html>
<body>

<?php

//modifying lab2 for lab3!
//starting php

/*
Calculation Program with at least 10 Variable Statements
Program to calculate the sum, average and their product
*/

//assuming the products and their prices. products variable assigned as a,b,c,d

//assigning the values to variables that remains unchanged throughout the program
$ProductA = 10;
$ProductB = 20;
$ProductC = 3; 
$ProductD = 45;
$ProductE = 50;
$ProductF = 15;
$ProductG = 8;
$ProductH = 19;
$ProductI = 29;
$ProductJ = 6;

//Assigning the summation of all values to variable Sum.
$Sum = $ProductA + $ProductB + $ProductC + $ProductD + $ProductE + $ProductF + $ProductG + $ProductH + $ProductI + $ProductJ;

$Average = $Sum / 10;

//Assigning the product of all values to Product
$Product = $ProductA * $ProductB * $ProductC * $ProductD * $ProductE * $ProductF * $ProductG * $ProductH * $ProductI * $ProductJ;

//Printing the output
echo "<br>OUTPUT of LAB2";
echo "<br>-------------------";
echo "<br>The Sum is ".$Sum;
echo "<br>The Average is ".$Average;
echo "<br>The Product is ".$Product;
echo "<br>-------------------";
echo "<br>OUTPUT After Modifying for Lab 3";
echo "<br>-------------------";

//MODIFICATION FOR LAB 3

$person = "Teacher";    //assigning intial value

if ($person=="Teacher"){        //condition, executes if it is true
    $discount = 0.2;
    echo "<br>Your total before the 20% discount was: ".$Sum;

    $CalculateDiscount = ($Sum)*$discount;
    $TotalAfterDiscount = $Sum - $CalculateDiscount;

    echo"<br>Your total after the discount is: ".$TotalAfterDiscount;
}
else if($person=="Emergency_service_official"){     //condition, executes if first one was false
    $discount = 0.25;
    echo "<br>Your total before the 25% discount was: ".$Sum;

    $CalculateDiscount = ($Sum)*$discount;
    $TotalAfterDiscount = $Sum - $CalculateDiscount;

    echo"<br>Your total after the discount is: ".$TotalAfterDiscount;
}
else{       //condition, executes if all the above conditions are false
    echo"<br>Your total is: ".$Sum;
}


//end of php
?> 
</body>
</html>
