<?php
# Exercise #7
/*
Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in
meters. The formula in Math notation is:

[Gravity formula](./gravity-formula.png)

*Note:* The correct value is -490.5m.
 */
function howLow(int $time):float {
    $gravity = -9.81;
    $beginningSpeed = 0;
    $beginningPosition = 0;

    return 0.5 * $gravity * pow($time, 2) + $beginningSpeed + $beginningPosition;
}
echo howLow(10) . PHP_EOL;