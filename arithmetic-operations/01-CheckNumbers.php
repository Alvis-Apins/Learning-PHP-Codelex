<?php
# Exercise #1
//Write a program to accept two integers and return true if the either-one is 15 or if their sum or difference is 15.
function checkNumbers(int $x, int $y): string
{
    if ($x == 15 || $y == 15 || $x + $y == 15) return 'true'; else return 'false';
}

    echo checkNumbers(10, 5) . PHP_EOL;
    echo checkNumbers(1,2) . PHP_EOL;
    echo checkNumbers(15,1) . PHP_EOL;
    echo checkNumbers(2,15) . PHP_EOL;
    echo checkNumbers(4, 5) . PHP_EOL;



