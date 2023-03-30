<?php

//Switch statements work similarly to if statements. But no point in using a boolean as there will be only 2 cases,
// true or false.
//The case statement MUST be indented once from switch, and the break keyword (or other terminating keywords)
// MUST be indented at the same level as the case body. There MUST be a comment such as // no break when
// fall-through is intentional in a non-empty case body.

$i = 4;

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo '<p>i is less than 3 but not negative</p>';
        break; //this stops the 'fall through'
    case 3:
        echo '<p>i is 3</p>';
        break;
    default: // default should always be at the end and best practice to always have a break
        echo '<p>i is unknown</p>';
        break;
}