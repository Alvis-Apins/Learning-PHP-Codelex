<?php
# Exercise #9
/*
Write a program that calculates and displays a person's body mass index (BMI).
A person's BMI is calculated with the following formula: ```BMI = weight x 703 / height ^ 2```.
Where weight is measured in pounds and height is measured in inches.
Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
If the BMI is less than 18.5, the person is considered underweight.
If the BMI value is greater than 25, the person is considered overweight.

Your program must accept metric units.
*/
function BMI(float $heightInMeters, float $weightInKilos): string{
    $metersToInches = $heightInMeters * 39.37;
    $kilosToPounds = $weightInKilos * 2.205;

    return round(($kilosToPounds * 703) / pow($metersToInches, 2)) . PHP_EOL;
}
//insert height and weight in metric system
echo BMI(1.82, 101);
echo BMI(1.03, 27);


