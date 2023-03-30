<?php

echo '<h1>Exercises</h1>';

//EXERCISE 1
//Write a function called monthName that works as below.
//echo '<p>Month 4 is ' . monthName(4) . '</p>'; // April
//echo '<p>Month 13 is ' . monthName(13) . '</p>'; // Invalid month
//echo '<p>Month 0 is ' . monthName(0) . '</p>'; // Invalid month
//echo '<p>Month -1 is ' . monthName(-1) . '</p>'; // Invalid month

function monthName(int $month): string
{
    $monthList = [
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
];
    if ($month >= 1 && $month <= 12) {
        return $monthList[$month];
        } else {
        return 'Invalid month';
    }
}

echo monthName(14);

echo '<p></p>';


//EXERCISE 2

function sumSquares(array $someNames):array
{
    $someNames = ['Anna', 'Michael', 'Brent', 'Adam', 'Dom', 'Henry', 'James'];
    $someNames = array_insert($someNames, 'Phil', 4);

    return $allNames;
}

echo '<pre>';
print_r($allNames);
echo '</pre>';


echo '<p></p>';

//EXERCISE 4
//Create a function called multiply that takes two ints and multiplies them,
// then returns the result. If only one int is supplied then the second should
// be assumed to be 2, so that the function doubles the given int. (Don’t forget
// type hinting!)

function multiply(int $num1, int $num2 = 2): int
{
    return $num1 * $num2;
}

echo multiply(9, 3);