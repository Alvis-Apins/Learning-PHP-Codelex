<?php
# Exercise #5
//On your phone keypad, the alphabets are mapped to digits as follows:
//ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//Write a program called PhoneKeyPad, which prompts user for a String (case in-sensitive),
// and converts to a sequence of keypad digits.

$a = readline('Enter your WORD or SENTENCE in CAPITAL LETTERS :');
$phoneAlphabet = [
    ' ' => '1',
    'A' => '2', 'B' => '22', 'C' => '222',
    'D' => '3', 'E' => '33', 'F' => '333',
    'G' => '4', 'H' => '44', 'I' => '444',
    'J' => '5', 'K' => '55', 'L' => '555',
    'M' => '6', 'N' => '66', 'O' => '666',
    'P' => '7', 'Q' => '77', 'R' => '777', 'S' => '7777',
    'T' => '8', 'U' => '88', 'V' => '888',
    'W' => '9', 'X' => '99', 'Y' => '999', 'Z' => '9999'
];

$splitString = str_split($a);

foreach ($splitString as $value){
    if (preg_match("/[A-Z ]/", $value)){
        echo $phoneAlphabet[$value] . '/';
    }else{
        echo 'NaN' . '/';
    }
}