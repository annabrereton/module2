<?php

//Pre-increment

$a = 5;

echo '<p>' . $a . '</p>'; //prints 5

echo '<p>' . ++$a . '</p>'; //prints 6

//Post-increment

$a = 5;

echo '<p>' . $a++ . '</p>'; // prints 5 - does the echo and concatenation operators first and then adds one to $a
// after $a is printed

echo '<p>' . $a . '</p>'; // prints 6

$c = $a++;

echo '<p>' . $c . '</p>'; // prints 6

echo '<p>' . $a . '</p>'; // prints 7

