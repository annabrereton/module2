<?php
//Variables
//$4site = 'not yet'; - does not work as variables need to start with a letter or an underscore

$fourSite = 'not yet';

echo '<p>' . $fourSite . '</p>';

//Constants

define('PI', 3.1415927); #grey warning squiggle is to inform us that const is better than define

const EULER = 2.7182818;

if (PI < 4) {
    define('HEIGHT', '100vh');
    //const WIDTH = '90vw'; const only works at top level and not nested within a block of code (between curly brackets)
    // not allowed here
}

echo '<p>' . HEIGHT . '</p>';

$testVar = null;

echo '<p>$testVar is ' .$testVar . '</p>';
echo '<p>' . gettype($testVar) . '</p>';

$address = '10 High Street';
$result = $address * 5; //this gives a warning msg AND the result of 50 - the value of $address is parsed until it
// reaches a none numeric number

echo '<p>' . $result . '</p>';

$address = 'High Street 10';
$result = $address * 5; //this gives a fatal error msg

echo '<p>' . $result . '</p>';

echo '<p>Finished now!</p>';