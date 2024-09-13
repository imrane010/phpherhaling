<?php
$day = date('l');

switch ($day) {
    case "Monday":
        echo "Vandaag is het maandag";
        break;
    case "Tuesday":
        echo "Vandaag is het dinsdag";
        break;
    case "Wednesday":
        echo "Vandaag is het woensdag";
        break;
    default:
        echo "Vandaag is het geen maandag, dinsdag of woensdag, maar $day";
        break;
}
?>
