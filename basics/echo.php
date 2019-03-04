<?php

/*
Name file: echo.php
Main objective(s):
    1. To learn how to use 'echo' in PHP language
    2. To understand its characteristics
*/

// In PHP language, there are many ways to print any kind of value
// There are 'echo', 'print' and 'printf'.
// You will learn how to use echo in this file.

// It is very simple to use echo. For instance, if you want to print a string:
echo "Hello World! <br>";

// Now, to print the value of a variable, you can see how here:
$text = "Hello world! <br>";
echo $text;

$value = 9
echo $value."<br>";

// You noticed some HTML code somehow part of those examples, right?
// Yes, in echo, you can't use the basic newline symbol (\n).
// However, you can use HTML's standard newline symbol (<br>).

// (Note that everytime you 'fuse' some string and/or HTML standards with a variable,
// you have to use the dot sign '.' between each part of a sentence.)

// And since you can use HTML's newline signature, you can use any parts of HTML inside echo.
// Another example:
$price = 100000000;
echo "<h1>".$price." is a big number, unlike '9' <h1><br>";

// Now, you can fully understand how to use echo in PHP and its characteristics.

?>
