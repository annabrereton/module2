<?php

echo '<h1>Default arguments</h1>';

//the end " = 'Earthling'" is an assignment statement, so the parameter $ name
// is given a value of Earthling.
// If another $name is entered further below, Earthling will be overwritten.
// Optional parameters must be at the end of the list.
function greet(string $greeting, string $name = 'Earthling'): string
{
    return '<p>' . $greeting . ', ' . $name . '!</p>';
}

echo greet('Good morning', 'Mary');

echo greet('Greetings');