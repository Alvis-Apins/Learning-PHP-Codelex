<?php
# Exercise #10
/*
    See [calculate-area.php](./calculate-area.php)

Design a Geometry class with the following methods:

- A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
  - Area = π * r * 2
      - Use Math.PI for π and r for the radius of the circle
- A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
  Use the following formula:
  - Area = Length x Width
- A static method that accepts the length of a triangle’s base and the triangle’s height.
The method should return the area of the triangle. Use the following formula:
  - Area = Base x Height x 0.5

The methods should display an error message if negative values are used for the circle’s radius,
                                                                            the rectangle’s length or width, or the triangle’s base or height.

Next write a program to test the class, which displays the following menu and responds to the user’s selection:

```
Geometry calculator:

Calculate the Area of a Circle
Calculate the Area of a Rectangle
Calculate the Area of a Triangle
Quit
Enter your choice (1-4):
```

Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.
*/

class Geometry {

    public static function calculateCircle(float $r):string
    {
        if ($r < 0){
            return "Error: program does not accept negative numbers.";
        }else{
            return 'Area of the Circle is : ' . (M_PI * $r * 2) . PHP_EOL;
        }
    }

    public static function calculateRectangle(float $length, float $width):string
    {
        if ($length < 0 || $width < 0){
            return "Error: program does not accept negative numbers.";
        }else{
            return 'Area of the Rectangle is : ' . ($length * $width);
        }
    }

    public static function calculateTriangle(float $length, float $height):string
    {
        if ($length < 0 || $height < 0){
            return "Error: program does not accept negative numbers.";
        }else {
            return 'Area of the Triangle is : ' . ($length * $height * 0.5);
        }
    }
}

echo 'Geometry calculator:' . PHP_EOL . PHP_EOL .
        '1. - Calculate the Area of a Circle' . PHP_EOL .
        '2. - Calculate the Area of a Rectangle' . PHP_EOL .
        '3. - Calculate the Area of a Triangle' . PHP_EOL .
        '4. - Quit ' . PHP_EOL;
$a = readline( 'Enter Your choice: ');

switch ($a){
    case $a == 1:
        $b = readline('Enter radius of the Circle ');
        echo Geometry::calculateCircle($b) . PHP_EOL;
        break;
    case $a == 2:
        $c = readline('Enter length of the Rectangle ');
        $d = readline('Enter width of the Rectangle ');
        echo Geometry::calculateRectangle($c, $d) . PHP_EOL;
        break;
    case $a == 3:
        $e = readline('Enter length of the Triangle ');
        $f = readline('Enter height of the Triangle ');
        echo Geometry::calculateTriangle($e, $f) . PHP_EOL;
        break;
    case $a == 4:
        break;
    case ($a != 1 || $a != 2 || $a != 3 || $a != 4):
        echo 'Error: Non available option' . PHP_EOL .
                'Available options are - 1/2/3/4, please try again.' . PHP_EOL;
}