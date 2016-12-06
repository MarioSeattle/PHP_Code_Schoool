<?php
//Check if each student has a GPA of 4.0. If the student has a GPA of 4.0, use the student's
// name variable to display "NAME made the Honor Roll". If not, use the variable to display
// "NAME has a GPA of GPA".
$studentOneName = 'Dave';
$studentOneGPA = 3.8;

$studentTwoName = 'Treasure';
$studentTwoGPA = 4.0;

if($studentOneGPA == 4.0) {
    echo $studentOneName . 'made the Honor Roll';
}else{
    echo $studentOneName . 'has a GPA of ' . "$studentOneGPA";
}
if($studentTwoGPA == 4.0) {
    echo $studentTwoName .'made the Honor Roll';
}else{
    echo $studentTwoName . 'has a GPA of' . "$studentTwoGPA";
}




?>