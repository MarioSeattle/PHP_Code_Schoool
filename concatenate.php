<?php
$name = 'mario';
$string_one = "Learning how to display \"hello $name!\"to the screen.";
$string_one = 'Learning how to display';
$string_one .= '"hello';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one = $string_one . "\n";

$string_one = 'I am' . $string_one;
//echo $string_one;

$isReady = true;
//var_dump($isReady);
$isReady = false;
//var_dump($isReady);
//One plus the string 2 ""
var_dump(1 + "2");


?>