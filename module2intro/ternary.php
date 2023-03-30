<?php

// Ternary Operators - The ternary operator is used to shorten if/else structures.

$a = 9;
$b = 4;

// Instead of writing this:

if ($a < $b) {
    $greeting = '<p>less</p>';
} else {
    $greeting = '<p>equal or more</p>';
}

echo $greeting;

// You can write this:

$greeting = $a < $b ? '<p>less</p>' : '<p>more</p>';
// true/false statement - true is after the ? and before the colon and false is after- ? <true> : false;
echo $greeting;

// The second operand can be omitted.

$name = 'Ada';

$greeting = '<p>Hello ' . ($name ?: 'Guest') . '. Welcome!</p>';

echo $greeting;

$name = '';

$greeting = '<p>Hello ' . ($name ?: 'Guest') . '. Welcome!</p>';

echo $greeting;