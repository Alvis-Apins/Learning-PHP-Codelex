<?php
# Exercise #5
/*
Write a program that picks a random number from 1-100. Give the user a chance to guess it.
If they get it right, tell them so. If their guess is higher than the number, say "Too high."
If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)
*/

function guessNumber(int $x): string
{
    $numberToGuess = rand(1, 100);
    if ($x == $numberToGuess){
        return 'You guessed - ' . $x . PHP_EOL . 'You guessed it!  What are the odds!?' . PHP_EOL;
    }elseif ($x < $numberToGuess){
        return 'You guessed - ' . $x . PHP_EOL . "Sorry, you are too low.  I was thinking of $numberToGuess" . PHP_EOL;
    }else{
        return 'You guessed - ' . $x . PHP_EOL . "Sorry, you are too high.  I was thinking of $numberToGuess" . PHP_EOL;
    }
}
echo guessNumber(45);