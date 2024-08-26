<?php

//Task 1 Solution

// Given array of random numbers
$randomNumbers = [208, 54, 376, 162, 440, 64, 390, 482, 67, 209];

// Filter out even numbers greater than 50
$filteredNumbers = array_filter($randomNumbers, function($number) {
    return $number % 2 == 0 && $number > 50;
});

// Multiply each element of the filtered array by 2
$mappedNumbers = array_map(function($number) {
    return $number * 2;
}, $filteredNumbers);

// Display the resulting array
print_r($mappedNumbers);

?>
