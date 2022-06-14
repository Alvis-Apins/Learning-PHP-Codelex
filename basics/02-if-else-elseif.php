<?php
###### Exercise 1
//Given variables (int) 10, string "10" determine if they both are the same.
$x = 10;
$y = '10';

if ($x === $y){
    echo 'They are the same and identical' . PHP_EOL;
} elseif ($x == $y){
    echo 'They are the same but not identical' . PHP_EOL;
} else {
    echo 'They are not the same' . PHP_EOL;
}
###### Exercise 2
//Given variable (int) 50, determine if its in the range of 1 and 100.
$q = 50;

if ($q > 1 && $q < 100) {
    echo 'In the range between 1 and 100' . PHP_EOL;
}else{
    echo 'Out of Range between 1 and 100' . PHP_EOL;
}
###### Exercise 3
//Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".
$hello = 'helloo';

if ($hello == 'hello') {
    echo 'world' . PHP_EOL;
} else {
    echo 'I want hello' . PHP_EOL;
}
###### Exercise 4
//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.
$w = 15;

if ($w > 10 && $w < 20 && $w == 12 ) {
    echo 'conditions met'.PHP_EOL;
} else {
    echo 'conditions not met'.PHP_EOL;
}
###### Exercise 5
//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.
$e = 50;
$min = 10;
$max = 70;

if ($e > $min && $e < $max){
    echo 'Number in the range'.PHP_EOL;
} else {
    echo 'Number out of range'.PHP_EOL;
}
###### Exercise 6
//Create a variable $plateNumber that stores your car plate number.
//Create a switch statement that prints out that its your car in case of your number.
$plateNumber = 'AB1234';

switch ($plateNumber) {
    case ($plateNumber == 'AB1234'):
        echo 'That is my car' . PHP_EOL;
        break;
    case ($plateNumber != 'AB1234'):
        echo 'Not my car' . PHP_EOL;
        break;
}
###### Exercise 7
//Create a variable $number with integer by your choice.
//Create a switch statement that prints out text "low" if the value is under 50,
//"medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.
$number = 27;

switch ($number) {
    case ($number < 50):
        echo 'low' . PHP_EOL;
        break;
    case ($number >= 50 && $number <= 100):
        echo 'medium' . PHP_EOL;
        break;
    case ($number > 100):
        echo 'high' . PHP_EOL;
        break;
    default:
        echo 'Something went wrong';
}