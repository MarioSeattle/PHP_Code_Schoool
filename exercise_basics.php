<?php
//store each exercise in a string value
$exercise1 = 'Display "Hello World';
$exercise2 = 'Convert Pounds to Kilograms';
$exercise3 = 'Covert Kilograms to Pounds';
$exercise4 = 'Covert Miles to Kilometers';
$exercise5 = 'Convert Kilometers to Miles';
$exercise6 = 'Month Long string of the day';
//Create a variable containing the day of the week
$day = date('N');
var_dump($day);
//use statement to check for day of the week
if ($day == 1){
    echo $exercise1;
}
if ($day == 2){
    echo $exercise2;
}
if ($day == 3){
    echo $exercise3;
}
if ($day == 4){
    echo $exercise4;
}
if ($day == 5){
    echo $exercise5;
}
if ($day == 6){
    echo $exercise6;
}
if ($day == 7){
    echo $exercise7;
}
?>