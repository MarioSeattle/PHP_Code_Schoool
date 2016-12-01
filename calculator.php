<?php
// number in pounds we want to conver to kg
$pounds = 140;
//floating value for the pound to Kg convertion
$lb_to_kg  = 0.453592;
//Use the variables above to calculate pounds multiple by the kg convertion
$kg = $pounds * $lb_to_kg;
//Display the pound to kg
echo "weight = ";
echo $pounds;
echo " lb = ";
echo $kg;
echo " kg = ";

//We will also do miles to km
$miles = 2.5;
//Floating pint value for the mile to km convertion
$miles_to_km = 1.60935;
//use the variables above to calculate miles multiple by the km convertion
$km = $miles * $miles_to_km;
//finally we will display miles multiple by km convertion
echo "Distance = ";
echo  $miles;
echo "Miles = ";
echo $km;
echo "km";



?>
