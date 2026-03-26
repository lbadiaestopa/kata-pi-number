<?php

echo "Cada cop que apretis una tecla + enter apareixerà el següent nombre del número PI." . PHP_EOL;

$input = '';
$counter = 0;

while ($counter <= 14) 
{
    $input = fgets(STDIN);
    echo printNextNumberFromPi($counter) . PHP_EOL;
    $counter++;
}


function printNextNumberFromPi(int $counter) {
    $factor = pow(10, $counter);
    return floor(pi() * $factor) / $factor;
}

