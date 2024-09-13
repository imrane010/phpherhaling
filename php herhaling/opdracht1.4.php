<?php

$a = 10;
$b = 3.14;
$c = "PHP";


$a = "Tien";
$b = 3;
$c = false;


echo "Waarde van a: $a<br>";
echo "Waarde van b: $b<br>";
echo "Waarde van c: " . ($c ? "True" : "False") . "<br>";


echo "<br>var_dump resultaten:<br>";
var_dump($a);
var_dump($b);
var_dump($c);
?>
