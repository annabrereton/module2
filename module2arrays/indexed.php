<?php

echo '<h1>Indexed Arrays</h1>';

$days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

echo '<pre>';
print_r($days);
echo '</pre>';

echo '<pre>';
echo $days[1];
echo '</pre>';


$fruits = array("a" => "orange", "b" => "banana", "c" => "apple");

print_r($fruits);
echo $fruits["c"];


$rando = [1 => 'One', 4 => 'Four', 7 => 'Seven'];

echo '<pre>';
print_r($rando);
echo '</pre>';

$rando[] = 'Nine'; // added a new item to an array - php finds the highest key and adds one to it
$rando[3] = 'Three'; // the order of the print_r keys is in which they were added (insertion order)

echo '<pre>';
print_r($rando);
echo '</pre>';