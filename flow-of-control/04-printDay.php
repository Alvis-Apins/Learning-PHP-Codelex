<?php
## Exercise #4

//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6, respectively.  Otherwise, it shall print "Not a valid day".
echo 'Choose a day of the week:' . PHP_EOL .
    ' 1 = Sunday ...7 = Saturday' . PHP_EOL;
$a = readline('Enter your number : ');
$daysOftTheWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

echo ($a >= 1 && $a <= 7) ? $daysOftTheWeek[$a - 1] . PHP_EOL : 'Not a valid day.';

/*
Use:

 - a "nested-if" statement
- a "switch-case-default" statement.
*/


