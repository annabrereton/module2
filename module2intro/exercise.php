<?php
//EXERCISE
//Create a selection of variables and constants to represent at least one example of each of the following data types.
//null
//bool
//int
//float
//string
//array
//Output these using echo.
//Now output them using var_dump.
//Now output them again using print_r.

$null = 0;
$int = 4;
$bool = (bool)$int;
$float = 5.5;
$string = 'the cat sat on the mat';
$array = ['1', '2', '3'];

echo $null . ' ' . $bool . ' ' . $int . ' ' . $float . ' ' . $string;
echo '<p></p>';
var_dump($null . ' ' . $bool . ' ' . $int . ' ' . $float . ' ' . $string);
echo '<p></p>';
print_r($null . ' ' . $bool . ' ' . $int . ' ' . $float . ' ' . $string);;
echo '<p></p>';
print_r($bool); //??
echo '<p></p>';

echo '<p></p>';

//Arrays
$nums = [1, 2, 3, 4, 5];
echo '<p></p>';
var_dump($nums);
echo '<p></p>';
echo '<pre>'; //<pre> displays each array value on a new line
print_r($nums);
echo '</pre>';


$first = 'Hello'; // the value Hello is out into the variable $first, and $first has the type string

$first .= ' world'; // equiv to $first = $first . ' world';

echo '<p>' . $first . '</p>';

$a = 99;

$a -= 33; //equiv to $a = $a - 33;

echo '<p>' . $a . '</p>';

$x = 10;
$y = 4;
$z = $x % $y; // % (modulus) gives the remainder

echo '<p>' . $z . '</p>';
