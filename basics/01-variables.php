<?php
###### Exercise 1
//Create variable that prints out an integer 10, float 10.10, string "hello world"
$sayHello = 'Hello World';
$x = 10;
$y = 10.10;

echo  $sayHello . PHP_EOL . $x . PHP_EOL . $y . PHP_EOL;

###### Exercise 2
//Dump the same values that should display both data type & its value. (Note, usage of var_dump)
var_dump($sayHello . PHP_EOL, $x . PHP_EOL, $y . PHP_EOL);

###### Exercise 3
//Concatenate your name, surname and integer of your age.
$name = 'Alvis';
$surname = 'Apins';
$age = 27;

echo $name . ' ' . $surname . ' age - ' . $age . PHP_EOL;
