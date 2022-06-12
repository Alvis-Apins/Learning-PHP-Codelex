<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
//todo check if an array contains a value user entered

echo (in_array(2264, $numbers)) ?
    'That number exits in this array' :
    'That number does not exist in this array';
echo PHP_EOL;
