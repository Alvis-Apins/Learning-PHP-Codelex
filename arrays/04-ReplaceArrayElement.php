<?php
## Exercise #4
/*
  - Create an array of ten integers
  - Fill the array with ten random numbers (1-100)
  - Copy the array into another array of the same capacity
  - Change the last value in the first array to a -7
  - Display the contents of both arrays
```
Array 1: 45 87 39 32 93 86 12 44 75 -7
Array 2: 45 87 39 32 93 86 12 44 75 50
```
*/
$size = 20;

$numbers = [];
for ($i = 0; $i < $size; $i++){
    array_push($numbers, rand(1,100));
}
$arrayCopy = $numbers;
array_pop($numbers);
array_push($numbers, -7);

echo 'Array 1: ';
foreach ($numbers as $number){
    echo $number . ' ';
}
echo PHP_EOL;
echo 'Array 2: ';
foreach ($arrayCopy as $value){
    echo $value . ' ';
}