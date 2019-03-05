<?php

/*
Name file: intro.php
Main objective(s):
    1. To learn about variables, data types and case-sensitivity in PHP
*/

// In PHP Language, just like any other languages, there are variables.
// You can put any kind of data in it and you don't have to define what kind of data you can put inside the variable.

// Interger-type of data:
$intExp = 1;
echo "The number that exist before 2 is ".$intexp."<br>";

// Float-type of data:
$flExp = 3.14;
echo "The 'Pi' constant has a unique value, which is ".$flExp."<br>";
// Tip: if you only want to show n-many numbers behind the dot, you can simply type '.' and n-many numbers after the '%' sign.
// For instance, if you want to print only two numbers bed=hind the dot, you can type '.2' after the '%' sign.
// However, you can use this in printf only.
// For instance:
$flExp = 1.23456789
printf ("Before: %f\nAfter: %.2f", $flExp, $flExp)

// String-type of data:
$strExp = "Hello world!"
echo $strExp."<br>";

// Character-type of data:
$charExp = 'A'
echo "The first alphabet in order is ".$charExp."<br>";

// Boolean-type of data:
$boolExp = true;
echo "one of the values of boolean is ".$boolExp."<br>";

// And just like most other languages, PHP is a case-sensitive language.
// For instance, a variable with a name 'Var' is different with the with a name 'var'
$var = "Alpha";
$Var = "Gamma";
echo "The value of 'var' variable is ".$var." and the value of 'Var' value is ".$Var."<br>";

// Now, you can fully understand about variables, data types and case-sensitivity in PHP

?>
