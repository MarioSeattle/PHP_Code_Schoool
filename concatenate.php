<?php
$name = 'mario';
$string_one = "Learning how to display \"hello $name!\"to the screen.";
$string_one = 'Learning how to display "hello' . $name . '!" to the screen.' . "\n";
echo $string_one;

?>