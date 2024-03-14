<?php

$numbers = [0, 1, 2];

$evenNumbers = []; 

$total = 0;

for ($i = 2; $i < 10; $i++)
{
   $numbers[] = $numbers[$i] + $numbers[$i - 1]; 
}

$numbersLenght = count($numbers);

for ($j = 0; $j < $numbersLenght; $j++)
{
    if ($numbers[$j] % 2 == 0) {
        $evenNumbers[] = $numbers[$j];    
    }
}

$numbersEvenLenght = count($evenNumbers);

for ($l = 0; $l < $numbersEvenLenght; $l++)
{
    $total += $evenNumbers[$l];
}


print_r($total);