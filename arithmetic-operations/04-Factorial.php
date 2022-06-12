<?php
# Exercise #4
//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
//Take note that it is the same as factorial of N.

$lowerBound = 1;
$upperBound = 10;
$factorial = $lowerBound;
for ($i = $lowerBound; $i <= $upperBound; $i++){
    $factorial *= $i;
}
echo "the factorial of $lowerBound to $upperBound is $factorial" . PHP_EOL;




