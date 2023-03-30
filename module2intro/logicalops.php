<?php

$x = 100;
$y = 50;

//AND

if ($x >= 120 && $y <=50) {
    echo '<p>AND successful</p>';
    } else {
        echo '<p>something else</p>';
    }



//OR

$a = true;
$b = false;
$c = $a or $b;
var_dump($c);

echo '<p></p>';

$c = $b || $c;

var_dump($c);

echo '<p></p>';

$bool = true && false;
var_dump($bool); //false, that's expected

$bool = true and false;
var_dump($bool); //true, ouch!

