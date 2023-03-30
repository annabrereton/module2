<?php

echo '<h1>Associative Arrays</h1>';

//mapping unique keys to their associative values. Also described as an ordered map -
// and can contain different data types.
// => is the 'fat arrow' or key value pair identifier

$personalDetails = [
    'name' => 'Jane Doe',
    'age' => 21,
    'town' => 'Bath'
];

echo '<pre>';
var_dump($personalDetails);
echo '</pre>';

echo '<pre>';
echo $personalDetails['age'];
echo '</pre>';

echo '<p>' . $personalDetails['name'] . "'s age is "
    . $personalDetails['age'] . '.</p>'; //written over 2 lines for readability,
// pushed the concatenator to the 2nd line, so as to give context for the remainder of the text

$newKey = 'favColour'; // in some cases may want to add a new key like this, or amend original array
$personalDetails['favColour'] = 'Red'; // adding another key to $personalDetails

echo '<pre>';
print_r($personalDetails);
echo '</pre>';

echo count($personalDetails) . ' elements in personal details';



