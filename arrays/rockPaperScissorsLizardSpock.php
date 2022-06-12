<?php
echo 'Play: Rock Paper Scissors Lizard Spock' . PHP_EOL;
echo 'For rock press 0 ' . PHP_EOL;
echo 'For paper press 1' . PHP_EOL;
echo 'For scissors press 2' . PHP_EOL;
echo 'For lizard press 3' . PHP_EOL;
echo 'For spock press 4' . PHP_EOL;

$weapons = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
$a = readline('Pick your Weapon : ' . PHP_EOL);
$b = $weapons[rand(0, 4)];
$win =
    [
        ['lizard', 'scissors'],
        ['rock', 'spock'],
        ['paper', 'lizard'],
        ['spock', 'paper'],
        ['scissors', 'rock'],
    ];

if ($weapons[$a] == $b)
{
    echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
        'You picked: ' . $weapons[$a] . PHP_EOL .
        'Result : Draw' . PHP_EOL;
    return;
}
elseif (in_array($b, $win[$a]))
{
    echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
        'You picked: ' . $weapons[$a] . PHP_EOL .
        'Result : You Win' . PHP_EOL;
    return;
}
else
{
    echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
        'You picked: ' . $weapons[$a] . PHP_EOL .
        'Result : You Lost' . PHP_EOL;
    return;
}