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
$day = 6;

//use statement to check for day of the week
if ($day == 1){
    echo $exercise1;
}
elseif ($day == 2){
    echo $exercise2;
}
elseif ($day == 3){
    echo $exercise3;
}
elseif ($day == 4){
    echo $exercise4;
}
elseif ($day == 5){
    echo $exercise5;
}
elseif ($day == 6){
    echo $exercise6;
}
elseif ($day == 7){
    echo $exercise7;
}
?>