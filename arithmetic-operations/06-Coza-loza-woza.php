<?php
# Exercise #6
/*
Write a program called `coza-loza-woza.php` which prints the numbers 1 to 110, 11 numbers per line.
The program shall print "Coza" in place of the numbers which are multiples of 3, "Loza" for multiples of 5,
"Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on.
*/
$startingNum = 1;
$endingNum = 110;

for ($i = $startingNum; $i <= $endingNum; $i++)
{
    $variable = $i;
    if ((($variable - 1) % 11 == 0) && ($variable - 1 != 0)){
        echo PHP_EOL . $variable . ' ';
    }elseif (($variable % 3 == 0) && ($variable % 5 == 0)){
        echo $variable = 'CazaLaza ';
    }elseif (($variable % 3 == 0) && ($variable % 7 == 0)){
        echo $variable = 'CazaWaza ';
    }elseif (($variable % 7 == 0) && ($variable % 5 == 0)){
        echo $variable = 'LazaWaza ';
    }elseif ($variable % 3 == 0){
        echo $variable = 'Caza ';
    }elseif ($variable % 5 == 0){
        echo $variable = 'Laza ';
    }elseif ($variable % 7 == 0){
        echo $variable = 'Waza ';
    }else{
        echo $variable . ' ';
    }
}
echo PHP_EOL;