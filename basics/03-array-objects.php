<?php
###### Exercise 1
//Create a non-associative array with 3 integer values and display the total sum of them.
$nums = [1, 2, 3];
echo array_sum($nums) . PHP_EOL;

###### Exercise 2
$person1 = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
//Using dump method, dump out all 3 values.
var_dump($person1);

###### Exercise 3
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;
//Using dump method, dump out all 3 values.
var_dump($person);
echo '****************************************************************************' . PHP_EOL;
###### Exercise 4
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//Program should display concatenated value of - Jane Doe 41
//  [0] [1] [name] piekļūst konkrētam elementam iekš masīva kas ir iekš citat masīva.
echo $items[0][1]['name'] . ' ' . $items[0][1]['surname'] . ' ' . $items[0][1]['age'] . PHP_EOL;

###### Exercise 5
$items1 = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//Program should display concatenated value of - John & Jane Doe`s
echo '*****************************************************************************'.PHP_EOL;
echo $items1[0][0]['name'] . ' & ' . $items1[0][1]['name'] . ' ' . $items1[0][0]['surname'] . '`s' . PHP_EOL;
//print_r($items1);