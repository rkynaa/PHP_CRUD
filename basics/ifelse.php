<?php

/*
Name file: if.php
Main objective(s):
    1. To learn how to use 'if, elseif and else' condition in PHP language
    2. To understand its characteristics
*/

// Just like any other languages, PHP also have the standard 'if', 'elseif' and 'else' condition.
// And it's usage is highly familiar with other languages as well.

// For example, here's how to use the 'if' condition:
$counter = true;
if ($counter)
{
    echo "Hello World! What a great day! <br>";
}
// It means that if the 'counter' variable has 'true' value,
// it will print "Hello World! What a great day! <br>",
// which it will because the 'counter' has 'true' value

// if you want to use 'if else' condition:
$counter = false;
if ($counter)
{
    echo "What a lovely day it is, is it? <br>";
}
else
{
    echo "Well, when life gave you lemons, make a lemonade!<br>";
}
// It means that if the 'counter' variable has 'true' value,
// it will print "What a lovely day it is, is it? <br>" and if it's not,
// then it will print "Well, when life gave you lemons, make a lemonade!<br>",
// which it will because the 'counter' has 'false' value

// if you want to use all 'if', 'elseif' and 'else' condition:
$counter = null;
if ($counter)
{
    echo "Well, it is true. <br>";
}
elseif (!$counter)
{
    echo "Well, you are wrong! <br>";
}
else
{
    echo "I can't say if you're right or wrong. <br>";
}
// It means that if the 'counter' variable has 'true' value,
// it will print "Well, it is true. <br>".
// if it has 'false' value, then it will print "Well, you are wrong! <br>".
// However, if it has any other value beside 'true' and 'false',
// it will print "I can't say if you're right or wrong. <br>"
// which it will because the 'counter' has 'null' value

// Now, you can fully understand how to use 'if', 'elseif' and 'else' in PHP
?>
