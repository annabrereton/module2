<?php

echo '<h1>Iterating Through Arrays</h1>';

$days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

$personalDetails = [
    'name' => 'Jane Doe',
    'age' => 21,
    'town' => 'Bath',
    'favColour' => 'green'
];

echo '<h2>While loops</h2>';

$daysArrayLength = count($days);

$i = 0; // $i is the 'counter'

while ($i < $daysArrayLength) { //count controlled while loop (as opposed to a condition cont. loop)
    echo '<p>' . $days[$i] . '</p>';
    $i++;
    }


echo '<h2>For loops</h2>';

for ($i=0; $i < $daysArrayLength; $i++) { // shorthand for the above while loop
    echo '<p>' . $days[$i] . '</p>';
}

echo '<h2>Foreach loops</h2>';

foreach ($days as $day) {
    echo '<p>' . $day . '</p>';
}

foreach ($days as $day) {
    if ($day === 'Sat') {
        continue; // when $day is 'Sat' jump back to start of loop and continue (does not print 'Sat')
    }
    echo '<p>' . $day . '</p>';
}

foreach ($personalDetails as $detail) {
    echo '<p>' . $detail . '</p>';
}

foreach ($personalDetails as $key => $detail) { // the $ in front of the fat arrow receives the key
    echo '<p>' . $key . ' is ' . $detail . '</p>';
}

echo '<h2>Echo the even numbers</h2>';

$numbs = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo '<h3>With for loop</h3>';

for ($i=1; $i < count($numbs); $i+= 2) { // to echo all even values in $numbs
    echo '<p>' . $numbs[$i] . '</p>';
}

echo '<h3>With foreach loop</h3>';

foreach ($numbs as $numb) { // another way of doing the above with a foreach statement
    if ($numb % 2 === 0)
        echo '<p>' . $numb . '</p>';
}