<?php
###### Exercise 1
//Create an array with integers (up to 10) and print them out using foreach loop.
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($num as $value){
    echo $value . PHP_EOL;
}
echo '*******************************' . PHP_EOL;

###### Exercise 2
//Create an array with integers (up to 10) and print them out using for loop.
for ($q = 0; $q < count($num); $q++){
    echo $num[$q] . PHP_EOL;
}
echo '*******************************' . PHP_EOL;

###### Exercise 3
//Given variable $x = 1 while $x is lower than 10, print out text "codelex".
// (Note: To avoid infinite looping, after each print increase the variable $x by 1)
for ($x = 1; $x <= 10; $x++){
    echo 'codelex' . PHP_EOL;
}
echo '*******************************' . PHP_EOL;

###### Exercise 4
//Create a non-associative array with integers and print out only integers that divides by 3 without any left.
for ($q = 0; $q < count($num); $q++) {
    if ($num[$q] % 3 == 0){
        echo $num[$q] . PHP_EOL;
    }
}
echo '*******************************' . PHP_EOL;
###### Exercise 5
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday.
// Using loop (by your choice) print out every person personal data.
$persons = [
    [
        "name" => "Alvis",
        "surname" => "Apins",
        "age" => 27,
        "birthday" => 'June 1st'
    ],
    [
        "name" => "Zigfrīds",
        "surname" => "Muktupāvels",
        "age" => 14,
        "birthday" => 'January 3rd'
    ],
    [
        "name" => "Anna",
        "surname" => "Ribās",
        "age" => 117,5,
        "birthday" => 'February 30th'
    ]
];

for ($q = 0; $q < count($persons); $q++){
    echo $persons[$q]["name"] . ' ' . $persons[$q]["surname"]
        . ' - (' . $persons[$q]["age"] . ') ' . $persons[$q]["birthday"] . PHP_EOL;
};

echo '*******************************' . PHP_EOL;