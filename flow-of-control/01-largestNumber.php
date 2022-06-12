<?php
//todo print the largest number
$numbersArray = [0, 0, 0];
for ($i = 1; $i < 4; $i++){
    $a = readline('Enter Nr.' . $i  . ' :'. PHP_EOL);
    $numbersArray[$i -1] = $a;
}
echo 'The largest number is ; ' . max($numbersArray) . PHP_EOL;



