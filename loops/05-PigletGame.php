<?php
## Exercise #5
/*
Write a console program in a class named Piglet that implements a simple 1-player dice game
called "Piglet" (based on the game "Pig"). The player's goal is to accumulate as many points
as possible without rolling a 1. Each turn, the player rolls the die; if they roll a 1,
the game ends, and they get a score of 0. Otherwise, they add this number to their running total score.
The player then chooses whether to roll again, or end the game with their current point total.
Here is an example dialogue where the user plays until rolling a 1, which ends the game with 0 points:
*/
echo 'Start the game - Piglet' . PHP_EOL;
echo 'To roll the dice press Y' . PHP_EOL;
echo 'To stop an evaluate score press N' . PHP_EOL;
echo PHP_EOL;
$score = 0;
for ($i = 0; $i < 100; $i++){
    $a = readline('Roll the dice? ');
    echo PHP_EOL;

    if ($a == 'n'){
        echo 'Game stopped ' . PHP_EOL;
        echo 'Your Score: ' . $score . PHP_EOL;
        return;
    }

    if ($a == 'y'){
        $rolledDice = rand(1,6);
        if ($rolledDice != 1){
            echo 'You Rolled: ' . $rolledDice . PHP_EOL;
            echo 'Your Score: ' . ($score += $rolledDice) . PHP_EOL;
        }else{
            echo 'You Rolled 1' . PHP_EOL . 'Game over' . PHP_EOL;
            echo 'Your Score: ' . $score = 0 . PHP_EOL;
            return;
        }
    }
    echo '***************'.PHP_EOL;
}


