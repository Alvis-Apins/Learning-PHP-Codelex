<?php
## Exercise #6
/*
Write a console program in a class named *AsciiFigure* that draws a figure of the following form,
using for loops.

////////////////\\\\\\\\\\\\\\\\
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************
*/
$a = readline('Enter the size of the figure: ');
echo PHP_EOL;
$symbolCountStars = 0;
for ($i = 0; $i < $a; $i++)
{
    if (($a * 3) - ($i * 4) >= 0){
        $slashRepeatCount = ($a * 3) - ($i * 4);
    }else{
        $slashRepeatCount = 0;
        $symbolCountStars = $a * 6;
    }

    echo str_repeat('/', $slashRepeatCount);
    echo str_repeat('*', $symbolCountStars);
    echo str_repeat('\\', $slashRepeatCount);
    $symbolCountStars +=8;
    echo PHP_EOL;
}