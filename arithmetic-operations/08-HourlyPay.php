<?php
# Exercise #8
/*
Foo Corporation needs a program to calculate how much to pay their hourly employees. The US Department of Labor
requires that employees get paid time and a half for any hours over 40 that they work in a single week. For example, if an
employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay. The State of Massachusetts requires
that hourly employees be paid at least $8.00 an hour. Foo Corp requires that an employee not work more than 60 hours in
a week.

## Summary

 - An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
 - For every hour over 40, they get overtime = (base pay) × 1.5.
 - The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
 - If the number of hours is greater than 60, print an error message.

Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
Write a main method that calls this method for each of these employees:

| Employee | Base Pay | Hours Worked |
| ---      | ---      | ---          |
| Employee 1 | $7.50 | 35 |
| Employee 2 | $8.20 | 47 |
| Employee 3 | $10.00 | 73 |

*/
$E1 = new stdClass();
$E1->name = "Employee 1";
$E1->basePay = 7.50;
$E1->hoursWorked = 35;

$E2 = new stdClass();
$E2->name = "Employee 2";
$E2->basePay = 8.20;
$E2->hoursWorked = 47;

$E3 = new stdClass();
$E3->name = "Employee 3";
$E3->basePay = 10.00;
$E3->hoursWorked = 73;

$employees = [$E1, $E2, $E3];
$minHourlyPay = 8.00;
$maxHoursWorked = 60;



for ($i = 0; $i < count($employees); $i++)
{
    if ($employees[$i]->basePay < $minHourlyPay){
        echo ($employees[$i]->name) . " - You are not being paid enough" . PHP_EOL;
    }elseif ($employees[$i]->hoursWorked > $maxHoursWorked){
        echo ($employees[$i]->name) . " - You have worked too many hours" . PHP_EOL;
    }else{
        if ($employees[$i]->hoursWorked < 40){
            $salary = $employees[$i]->hoursWorked * $employees[$i]->basePay;
            echo ($employees[$i]->name) . ' - You have earned ' . $salary . ' Dollars' . PHP_EOL;
        }else{
            $salary = 40 * $employees[$i]->basePay;
            $overtime = ($employees[$i]->hoursWorked - 40) * ($employees[$i]->basePay * 1.5);
            $total = $salary + $overtime;
            echo ($employees[$i]->name) . ' - You have earned ' . $salary . ' Dollars' . ' + ' .
                $overtime . ' Dollars for overtime' . PHP_EOL . 'Your total salary is - ' . $total . ' Dollars' . PHP_EOL;
        }
    }
}



