<?php 

// Declareer date
$d = new DateTime();
$today = $d->format('d-m-Y');

// Declareer seizoenen
$winter = new DateTime('December 21');
$spring = new DateTime('March 20');
$summer = new DateTime('June 20');
$autumn = new DateTime('September 22');

echo "De datum is: " . $today . "<br>";

switch(true) {
    case $d >= $winter && $d < $spring:
        echo 'Het is winter';
        break;

    case $d >= $spring && $d < $summer:
        echo 'Het is lente';
        break;

    case $d >= $summer && $d < $autumn:
        echo 'Het is zomer';
        break;

    default:
        echo 'Het is herfst';
}