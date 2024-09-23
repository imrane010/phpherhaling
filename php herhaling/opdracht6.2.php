<?php
$prices = [100, 200, 300, 400, 500];

$i = 0;

while ($i < count($prices) && $prices[$i] < 500) {
    echo "Oorspronkelijke prijs: " . $prices[$i] . PHP_EOL;

    $new_price = $prices[$i] + 50;
    echo "Nieuwe prijs: " . $new_price . PHP_EOL . PHP_EOL;
?>

