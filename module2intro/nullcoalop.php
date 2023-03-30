<?php

// Null Coalescing Operator

$undefined = 'Hello';
$val1 = $undefined ?? 0;  // if $undefined has value, use it; otherwise use fallback

echo '<p>' . $val1 . '</p>';

$unassigned;
$val1 = $unassigned ?? 'Fallback for unassigned';

echo '<p>' . $val1 . '</p>';

$a = null;
$b = null;

$val1 = $a ?? $b ?? 99; // check $a - value is null so check $b - value is null so print last value (as not
//null)

echo '<p>' . $val1 . '</p>';