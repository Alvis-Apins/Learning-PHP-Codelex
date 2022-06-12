<?php
## Exercise #3
/*
Write a program that asks the user to enter two words. The program then prints out both words on one line.
The words will be separated by enough dots so that the total line length is 30:
*/

$a = readline('Enter first word: ');
echo $a . PHP_EOL;
$b = readline('Enter your second word: ');
echo $b . PHP_EOL;
$c = strlen($a);
$d = strlen($b);

echo $a;
for ($i = 0; $i < 30 - $c - $d; $i++)
{
    echo '.';
}
echo $b;