<?php
# Exercise #2
//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
//or “Even Number” otherwise. The program shall always print “bye!” before exiting.
function CheckIfOdd(int $x): string
{
    if ($x % 2 == 0){
        return 'Even Number ' . 'bye!' . PHP_EOL;
    } else {
        return 'Odd Number ' . 'bye!' . PHP_EOL;
    }
}

echo checkIfOdd(1);
echo checkIfOdd(2);
echo checkIfOdd(4);
echo checkIfOdd(6);
echo checkIfOdd(7);
echo checkIfOdd(8);
echo checkIfOdd(9);
echo checkIfOdd(11);