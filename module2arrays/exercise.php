<?php

echo '<h1>Exercise 1</h1>';

//EXERCISE
//Create an array of all the trainees’ names. Output each name in a <p> tag using a foreach.

$trainees = [
    'Phil',
    'James',
    'Henry',
    'Dom',
    'Adam',
    'Brent',
    'Michael',
    'Anna'
];

foreach ($trainees as $trainee) {
    echo '<p>' . $trainee . '</p>';
}

echo '<h1>Exercise 2</h1>';

//EXERCISE 2
//From this array [1, 2, 3, 4, 5, 6, 7, 8] add 9 to it using one method and then add 10 to
// it using a different method.
//Randomise the contents of the array using an array function.
//Iterate through this array and output all the even values then all the odd values.

$array = [1, 2, 3, 4, 5, 6, 7, 8];

echo '<pre>';
print_r($array);
echo '</pre>';

$array [] = 9;

echo '<pre>';
print_r($array);
echo '</pre>';

array_push($array, 10);

echo '<pre>';
print_r($array);
echo '</pre>';

foreach ($array as $numb) {
    if ($numb % 2 > 0)
        echo '<p>' . $numb . '</p>';
}

shuffle ($array);

echo '<pre>';
print_r($array);
echo '</pre>';

