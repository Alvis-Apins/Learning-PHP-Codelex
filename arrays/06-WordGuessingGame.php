<?php
## Exercise #6

//Write a program to play a word-guessing game like Hangman.

//- It must randomly choose a word from a list of words.
$wordsToGuess = [
    'sympathy', 'employee', 'software', 'stranger',
    'activity', 'audience', 'customer', 'computer',
    'medicine', 'patience'
];
$wordToGuess = $wordsToGuess[rand(0, 9)];
$letterArray = str_split($wordToGuess);
$coveredArray = array_fill(0, count($letterArray), '- ');
$wrongGuessArray = [];
echo 'Word Guessing Game' . PHP_EOL .
        'You lose if you guess wrong 5 times' . PHP_EOL . PHP_EOL;

while (count($wrongGuessArray) != 6)
{
    echo PHP_EOL . 'Word : ';
    foreach ($coveredArray as $value)
    {
        echo $value;
    }
    echo PHP_EOL . PHP_EOL;

    echo 'Misses :';
    foreach ($wrongGuessArray as $value)
    {
        echo $value . ' ';
    }
    echo PHP_EOL . PHP_EOL;

    $a = readline('Your guess ;');

    if (in_array($a, $wrongGuessArray)){
        continue;
    }

    if (in_array($a, $letterArray)){
        for ($i = 0; $i<=count($letterArray); $i++){
            if (in_array($a, $letterArray) && $a == $letterArray[$i]){
                $coveredArray[$i] = $a;
                $letterArray[$i] = '-';
            }
        }
    }else{
        array_push($wrongGuessArray, $a);
    }

    if (count($wrongGuessArray) == 5){
        echo PHP_EOL . 'You lost : ' . $wordToGuess . PHP_EOL;
        break;
    }

    if (! in_array('- ', $coveredArray)){
        echo PHP_EOL . 'You win : ' . $wordToGuess . PHP_EOL;
        break;
    }
}
/*
YOU GOT IT!

Play "again" or "quit"? quit
```
*/


