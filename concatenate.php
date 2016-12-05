<?php
$name = 'mario';
$string_one = "Learning how to display \"hello $name!\"to the screen.";
$string_one = 'Learning how to display';
$string_one .= '"hello';
$string_one .= $name;
$string_one .= '!" to the screen.';
$string_one .= "\n";
echo $string_one;

?>