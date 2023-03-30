<?php

echo '<h1>User-defined Functions</h1>';

// Below is a special version of a multi line comment (/** rather than /*) for
// describing functions. Called a DocBlock. Use the line directly above the function.
/**
 * Greet a given person by their name and confirm their age
 *
 * @param $name string A person's name
 * @param $age int A person's age
 * @return string The greeting
 */
function sayHello($name, $age)
{
    return '<p>Hello! ' . $name . '! You are ' . $age . '.</p>';
}

echo sayHello('Debbie', 42);

$greeting = sayHello('Harriet', 27);
echo $greeting;


echo '<h2>Another Function</h2>';
/**
 * @param $number float
 * @return float
 */
function timesBy3DividedBy2(float $number): float //here $number is a parameter
{
    return $number * 3 / 2;
}

echo timesBy3DividedBy2(5.5); //5.5 is the argument


//TRY OUT
//$name [
//    'Debbie';
//
//if ($age > 35) {
//    echo '<p>Hello! ' . $name . '! You are ' . $age . '. Bad luck!</p>';
//} else {
//    echo '<p>Hello! ' . $name . '! You are ' . $age . '. There \'s still time!</p>';
//}
