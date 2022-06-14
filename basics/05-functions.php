<?php
###### Exercise 1
//Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
//Print this value out.
function addcodelex(string $someText): string
{
    return $someText . ' codelex' . PHP_EOL;
}
echo addcodelex('Buenos Notches');
echo '*******************************' . PHP_EOL;
###### Exercise 2
//Create a function that accepts 2 integer arguments. First argument is a base value and the second one is a value its been multiplied by.
//For example, given argument 10 and 5 prints out 50
function multiply(int $x, int $y): int
{
    return $x * $y;
}
echo multiply(2, 5) . PHP_EOL;
echo multiply(20, 500) . PHP_EOL;
echo '*******************************' . PHP_EOL;
###### Exercise 3
//Create a person object with name, surname and age. Create a function that will determine if the person has reached 18 years of age.
//Print out if the person has reached age of 18 or not.
$persons = [
    "name" => "Alvis",
    "surname" => "Apins",
    "age" => 27
];

function checkAge(int $a): bool{
    return $a >= 18;
}
if (checkAge($persons["age"])) echo 'Old enough' . PHP_EOL; else {
    echo 'Not old enough' . PHP_EOL;
}
echo '*******************************' . PHP_EOL;
###### Exercise 4
//Create an array of objects that uses the function of exercise 3 but in loop printing out
//if the person has reached age of 18.
$eric = new stdClass();
$eric->name = "Eric";
$eric->surname = "Ericsson";
$eric->age = "15";

$samantha = new stdClass();
$samantha->name = "Samantha";
$samantha->surname = "Samson";
$samantha->age = "17";

$matt = new stdClass();
$matt->name = "Matt";
$matt->surname = "Corby";
$matt->age = "38";

$kris = new stdClass();
$kris->name = "Kris";
$kris->surname = "Allen";
$kris->age = "34";

$persons = [$eric, $samantha, $matt, $kris];
for ($i = 0; $i < count($persons); $i++) {
    if (checkAge($persons[$i]->age))
        echo $persons[$i]->name . ' ' . $persons[$i]->surname . PHP_EOL;
}
    echo '*******************************' . PHP_EOL;
###### Exercise 5
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
//Create a secondary array with shipping costs per weight. Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.
$fruits = [
    [
        'fruit' => 'Apples',
        'Weight' => 15
    ],
    [
        'fruit' => 'Watermelon',
        'Weight' => 2
    ],
    [
        'fruit' => 'Strawberries',
        'Weight' => 5
    ],
    [
        'fruit' => 'Pumpkin',
        'Weight' => 35
    ],
];
$shippingCosts = ['1 euro', '2 euro'];

for ($i = 0; $i < count($fruits); $i++){
    if ($fruits[$i]['Weight'] >= 10){
        echo $fruits[$i]['fruit'] . ' shipping cost is - ' . $shippingCosts[1] . PHP_EOL;
    } else {
        echo $fruits[$i]['fruit'] . ' shipping cost is - ' . $shippingCosts[0] . PHP_EOL;
    }
}
echo '*******************************' . PHP_EOL;
###### Exercise 6
//Create a non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
//Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).
$elements = [ 3, 'čau', 5, 11.111, 7];

for ($i = 0; $i < count($elements); $i++){
    if (is_int($elements[$i] || is_float($elements[$i]))){
        echo $elements[$i] * 2 . PHP_EOL;
    }else{
        echo $elements[$i] . PHP_EOL;
    }
}
echo '*******************************' . PHP_EOL;

###### Exercise 7
//Imagine you own a gun store.
//Only certain guns can be purchased with license types.
//Create an object (person) that will be the requester to purchase a gun (object)
//Person object has a name, valid licenses (multiple) & cash.
//Guns are objects stored within an array.
//Each gun has license letter, price & name.
//Using PHP in-built functions determine if the requester (person) can buy a gun from the store.
$kris = new stdClass();
$kris->name = "Kris";
$kris->T1licence = "T1 Hand-gun";
$kris->T3licence = "T3 Rifle";
$kris->money = 3400;

$matt = new stdClass();
$matt->name = "Matt";
$matt->T2licence = "T2 Shot-gun";
$matt->T3licence = "T3 Rifle";
$matt->money = 2600;
// Licence types:
// Tier1Licence - Hand-gun
// Tier2Licence - Shot-gun
// Tier3Licence - Rifle
$persons = [$kris, $matt];

$hg = new stdClass();
$hg->name = "Hand-gun";
$hg->price = 1500;
$hg->requiredLicence = "T1";

$sg = new stdClass();
$sg->name = "Shot-gun";
$sg->price = 2500;
$sg->requiredLicence = "T2";

$rf = new stdClass();
$rf->name = "Rifle";
$rf->price = 3200;
$rf->requiredLicence = "T3";

$guns = [$hg, $sg, $rf];

//Kris and Matt tries to buy Hand-gun
for ($i = 0; $i < count($persons); $i++){
    if (property_exists($persons[$i], 'T1licence')){
        if ($persons[$i]->money >= $guns[0]->price){
            echo $persons[$i]->name . ' You can buy a Hand-gun' . PHP_EOL;
        }else{
            echo $persons[$i]->name . ' You dont have enough money to buy a Hand-gun' . PHP_EOL;
        }
    }else{
        echo $persons[$i]->name . ' You dont have the required Licence for a Hand-gun' . PHP_EOL;
    }
}
echo '*******************************' . PHP_EOL;

//Kris and Matt tries to buy Shot-gun
for ($i = 0; $i < count($persons); $i++){
    if (property_exists($persons[$i], 'T2licence')){
        if ($persons[$i]->money >= $guns[1]->price){
            echo $persons[$i]->name . ' You can buy a Shot-gun' . PHP_EOL;
        }else{
            echo $persons[$i]->name . ' You dont have enough money to buy a Shot-gun' . PHP_EOL;
        }
    }else{
        echo $persons[$i]->name . ' You dont have the required Licence for a Shot-gun' . PHP_EOL;
    }
}
echo '*******************************' . PHP_EOL;

//Kris and Matt tries to buy Rifle
for ($i = 0; $i < count($persons); $i++){
    if (property_exists($persons[$i], 'T3licence')){
        if ($persons[$i]->money >= $guns[2]->price){
            echo $persons[$i]->name . ' You can buy a Rifle' . PHP_EOL;
        }else{
            echo $persons[$i]->name . ' You dont have enough money to buy a Rifle' . PHP_EOL;
        }
    }else{
        echo $persons[$i]->name . ' You dont have the required Licence for a Rifle' . PHP_EOL;
    }
}