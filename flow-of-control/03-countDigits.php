<?php
## Exercise #3
//Write a program that reads a positive integer and count the number of digits the number has.
$a = readline('Enter your number : ');
echo ($a > 0) ? count($arrayOfElements = str_split($a)) . PHP_EOL : 'Choose a positive number' . PHP_EOL;


