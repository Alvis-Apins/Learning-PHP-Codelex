<?php
//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$a = readline('Pick the number You want to multiply : ');
$b = readline('Pick how many times to multiply the number : ');
for ($i = 1; $i < $b; $i++){
    $a *= $a;
}
echo $a . PHP_EOL;