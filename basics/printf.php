<?php

/*
Name file: printf.php
Main objective(s):
    1. To learn how to use 'printf' in PHP language
    2. To understand its characteristics
*/

// The standard of 'printf()' is equally the same thing like in C language.
// For instance, if you want to print a string:
printf ("Hello World!\n");

// However, if you want to print the value of a variable,
// in any kind of value:
$text = "PHP";
printf ("Hello world! %s is the best!\n", $text);

// You notice the difference?
// Yes, instead of using '&' sign, you use the dollar sign ($)
// Another example:
$price = 100000000;
printf ("The price for the 'famous' wall that Mexico 'have' to pay is $%.2f \n", $price);

// Now, you can fully understand how to use printf in PHP.
// You can also see the similarities and its differences between PHP's printf and C's printf.

?>
