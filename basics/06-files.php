<?php
###### Exercise 1
//Create while, for or foreach loop in separated file.
//Create main file that includes this script and gives an output.

include "../codalexStart/extras/loop.php";
loop(3);
echo '******************************'.PHP_EOL;

###### Exercise 2
//Create a file that stores 2 functions created by your choice.
//Create file that includes this file and executes the functions and displays output.

include "../codalexStart/extras/functions.php";
echo doubleNumber(3) . PHP_EOL;
echo tripleNumber(3) . PHP_EOL;
echo '******************************'.PHP_EOL;

###### Exercise 3
//Create functions file that stores function by your choice.
//Create 2nd file that includes your function file.
//Include your 2nd file into your main program file and execute function to display the output.

/*
include "../codalexStart/extras/favouriteFunction.php";
echo addText('Hello');
echo '******************************'.PHP_EOL;
*/

###### Exercise 4**
//Using PHP in-built functions create a program that accepts 1 argument - filename.
//Create a file with the filename of your choice and store information with comma separated (example. John, Doe, 10)
//Using PHP in-built functions read information from this file and create an object based on information from the file.
//Output the name, surname and age of the person in the output.
$textFile = fopen("info.txt", "w+");
$txt = "Sebastian White 20" . PHP_EOL;
fwrite($textFile, $txt);
$txt = "Olga Plank 28" . PHP_EOL;
fwrite($textFile, $txt);
$txt = "Katrina Squirrel 78" . PHP_EOL;
fwrite($textFile, $txt);
fclose($textFile);

$lines = file('/home/apo/PhpstormProjects/codalexstart/codalexStart/info.txt');
foreach ($lines as $line)
{
    $data[] = explode(' ', $line);
}
//print_r($data);
Class Persons
{
    public $name;
    public $surName;
    public $age;

    public function setName($name)
    {
        $this -> name = $name;
    }
    public function setSurname($surName)
    {
        $this->surName = $surName;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
}
$personsInfo = [];
for ($i = 0; $i < count($data); $i++)
{
    $person[$i] = new Persons();
    $person[$i]->setName($data[$i][0]);
    $person[$i]->setSurname($data[$i][1]);
    $person[$i]->setAge($data[$i][2]);
    array_push($personsInfo, $person[$i]);
}
for ($i = 0; $i < count($personsInfo); $i++) {
        echo $personsInfo[$i]->name . ' ' . $personsInfo[$i]->surName . ' ' . $personsInfo[$i]->age;
}
echo '******************************'.PHP_EOL;

###### Exercise 5**
//Create a .csv file that stores (ID, name, surname, age) of multiple persons.
//Create a program that accepts 1 argument (id of the user) and displays the user information if the user has been found.
//If the user has not been found, output that in the console.
$list = [
    ["0001", "Sasha", "Crown" ,45],
    ["0002", "Patricia", "Winston", 24],
    ["0003", "Kevin", "Berkly", 33]
];
$file = fopen("Persons.csv","w");

foreach ($list as $line) {
    fputcsv($file, $line);
}
print_r(fgetcsv($file));
fclose($file);


