<?php
## Exercise #7
/*
Write a console program in a class named *RollTwoDice* that prompts the user for a desired sum,
then repeatedly rolls two six-sided dice (using a Random object to generate
random numbers from 1-6) until the sum of the two dice values is the desired sum.
Here is the expected dialogue with the user:

```
Desired sum: 9
4 and 3 = 7
3 and 5 = 8
5 and 6 = 11
5 and 6 = 11
1 and 5 = 6
6 and 3 = 9
```
*/
echo 'Roll Two Dice Game!' . PHP_EOL;
$a = readline('Enter desired sum between 2 and 12: ');
echo PHP_EOL;
echo 'Desired Sum = ' . $a . PHP_EOL;

if ($a < 2 || $a > 12){
    echo 'Try again' . PHP_EOL;
    $a = readline('Enter desired sum between 2 and 12: ');
    echo PHP_EOL;
}

$sum = 0;
while ($sum != $a){
    $randomDiceRoll1 = rand(1,6);
    $randomDiceRoll2 = rand(1,6);
    $sum = $randomDiceRoll1 + $randomDiceRoll2;

    echo $randomDiceRoll1 . ' and ' . $randomDiceRoll2 . ' = ' . $sum;
    echo PHP_EOL;

}
echo 'You win' . PHP_EOL;



