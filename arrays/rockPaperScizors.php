<?php

echo 'Play rock paper scissors' . PHP_EOL;
echo 'For rock press 0, For paper press 1, for scissors press 2' . PHP_EOL;

$weapons = ['rock', 'paper', 'scissors'];
$a = readline('Pick your Weapon : ' . PHP_EOL);
$b = $weapons[rand(0, 2)];

if ($a == 0){
    if ($b == 'rock'){
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : Draw' . PHP_EOL;
        return;
    }elseif ($b == 'paper'){
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : You Win' . PHP_EOL;
        return;
    }else{
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : You Lost' . PHP_EOL;
        return;
    }
}

if ($a == 1){
    if ($b == 'rock'){
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : You Win' . PHP_EOL;
        return;
    }elseif ($b == 'paper'){
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : Draw' . PHP_EOL;
        return;
    }else{
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : You Lost' . PHP_EOL;
        return;
    }
}

if ($a == 2){
    if ($b == 'rock'){
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : You Lost' . PHP_EOL;
        return;
    }elseif ($b == 'paper'){
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : You Win' . PHP_EOL;
        return;
    }else{
        echo PHP_EOL . 'Computer picked :' . $b . PHP_EOL .
            'You picked: ' . $weapons[$a] . PHP_EOL .
            'Result : Draw' . PHP_EOL;
        return;
    }
}


