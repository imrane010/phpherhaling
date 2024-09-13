<?php
$score = 60;


switch (true) {
    case ($score > 90):
        echo "Geweldig<br>";
        break;
    case ($score >= 75 && $score <= 90):
        echo "Goed<br>";
        break;
    case ($score >= 55 && $score < 75):
        echo "Voldoende<br>";
        break;
    default:
        echo "Onvoldoende<br>";
        break;
}


echo ($score > 55) ? "Geslaagd" : "Gezakt";
?>
