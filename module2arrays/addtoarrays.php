<?php

echo '<h1>Adding to Arrays</h1>';

$programmingLanguages = ['PHP', 'C++', "C#", 'Python', 'Java'];

$programmingLanguages[] = 'Ruby';


array_push($programmingLanguages, 'Perl', 'C'); // [] brackets easier but array_push
//allows you to add multiple values at the same time

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$personalDetails = [
    'name' => 'Jane Doe',
    'age' => 21,
    'town' => 'Bath'
];

// Don't use array_push with an associative array
array_push($personalDetails, 'Perl', 'C');
// has no facility to accept keys - so the above adds 2 new keys numbered from 0

echo '<pre>';
print_r($personalDetails);
echo '</pre>';
