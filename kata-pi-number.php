<?php

echo "Cada cop que apretis una tecla apareixerà el següent nombre del número PI. Quan cliquis 'S' el programa s'aturarà." . PHP_EOL;

$input = '';
$counter = 0;

while ($input !== "s\n") 
{
    $input = fgets(STDIN);
    $counter++;
    echo $counter;
    echo printNextNumberFromPi($counter);
}


function printNextNumberFromPi(int $counter) {
    $factor = pow(10, $counter);
    return (M_PI * $factor) / $factor;
}

