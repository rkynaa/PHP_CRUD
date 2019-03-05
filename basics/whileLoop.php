<?php

/*
Name file: whileLoop.php
Main objective(s):
    1. To learn about'while' loop in PHP language
*/

// PHP language has its own loops, just like other langauges.
// Those common loops are 'while', 'for', 'do while' and 'foreach'.
// in this file, you will learn 'while' loop and its standard use in PHP language.

// 'while' loop is one of the most common loop that people ever use in any language.
// To use it, you have to set a variable and put a data inside of it.
// Set that variable as the loop's limiter so the loop can stop later.

// For instance:
$count = 1;
while ($count != 3) {
    echo "number ".$count."<br>";
    $count++;
}
// In this case, we set the 'count' variable at 1
// and while the variable is not 3, the program will print a string.
// Every time it prints a string, the 'count' variable will be added with 1.
// Thus, it will print 3 times and the loop will stop because eventually, the variable will become 3.

// Another example:
while (true) {
    echo "Not yet..."
    $count--;
    if ($count == 1) {
        echo "Now!";
        break;
    }
}
?>
