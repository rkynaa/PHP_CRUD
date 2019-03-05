<?php

/*
Name file: nestedif.php
Main objective(s):
    1. To learn how to use nested 'if else' condition in PHP language
*/

// In this file, you will learn how to use nested 'if else' condition.
// And it's usage is highly familiar with other languages as well.

// Also, you can make it in any kind of combination, no matter how much.
// For example:
$counter = true;
$counter2 = false;
    if ($counter == true) {
        if ($counter2 == false) {
            echo "Hello world! <br>";
        }
    }
// The code above shows you a simple example of nested 'if'.

// Here's another example:
$counter = null;
$counter1 = true;
$counter2 = false;
if ($counter == true){
    if ($counter == $counter1){
        echo "variable 'counter' and 'counter1' have the same value, which is ".$counter"<br>";
    } else if ($counter == $counter2) {
        echo "variable 'counter' and 'counter2' have the same value, which is ".$counter."<br>";
    } else {
        echo "variable 'counter' has a different value other than any other variables, which is ".$counter."<br>";
    }
} else {
    if ($counter != $counter1) {
    } if ($counter != $counter2) {
    } if ($counter1 != $counter2) {
    }
}
?>
