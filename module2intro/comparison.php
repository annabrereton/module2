<?php


$a = 5;
$b = '5';
if ($a == $b) { // double == is equality
    echo '<p>Same value</p>';
} else {
    echo '<p>Different values</p>';
}

if ($a === $b) { // identity === compares types first, if types not the same, as in this case, it returns false
    echo '<p>Same value</p>';
} else {
    echo '<p>Different values</p>';
}