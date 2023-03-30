<?php

$name = 'Fred';

echo '<p>$name</p>'; //outputs $name

echo "<p>$name</p>"; //outputs Fred

$pet = 'crocodile';

echo "<p>I have three {$pet}s</p>"; //concatenation is preferred

//Type juggling - the automatic conversion from one type to another

$a = '3'; //this is a string
$b = 4; //this is an integer
$result = $a * $b; //type juggling means that PHP will treat $a as an integer
// even though it is a string as it can see a number
var_dump($result); //var_dump is not for finished code only for checking what code is doing
print_r($result); //print_r also not for production code (use echo) and displays result differently from var_dump
echo '<p></p>';

//Type casting - this is the explicit conversion of one type to another

$a = 'Hello';
$result = (bool)$a;
var_dump($result);

echo '<p></p>'; //for new line

$a = ''; //empty values will be false
$result = (bool)$a;
var_dump($result);

echo '<p></p>';

$a = [];
$result = (bool)$a;
var_dump($result);

echo '<p></p>'; //for new line

$a = ' '; //with a space the result is true
$result = (bool)$a;
var_dump($result);

echo '<p></p>'; //for new line

$a = 0.0; // also false as long as written as an integer and not a string
$result = (bool)$a;
var_dump($result);