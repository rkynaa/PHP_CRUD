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

// Now, you can fully understand how to use 'if', 'elseif' and 'else' in PHP
?>
