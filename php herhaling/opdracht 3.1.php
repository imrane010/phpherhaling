<?php
$cities = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];

echo $cities[0] . "<br>";

echo $cities[count($cities) - 1] . "<br>";

$cities[] = "Groningen";

echo $cities[count($cities) - 1];
?>
