<?php

$numbers = [];

$newNumbers = [];

$total = 0;

for ($i = 0; $i < 1000; $i++)
{
    $numbers[] = $i;
}

$lengthNumbers = count($numbers);

for ($j = 0; $j < $lengthNumbers; $j++)
{
    if ($numbers[$j] % 3 == 0 or $numbers[$j] % 5 == 0)
    {
        $newNumbers[] = $j;
    }
}

$lengthNewNumbers = count($newNumbers);

for ($l = 0; $l < $lengthNewNumbers; $l++) 
{
    $total += $newNumbers[$l];
}

print_r($total);