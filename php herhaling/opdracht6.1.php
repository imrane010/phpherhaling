<?php
$numbers = [5, 10, 15, 20, 25];

for ($i = 0; $i < count($numbers); $i++) {
    // Print het originele getal
    echo "Origineel getal: " . $numbers[$i] . PHP_EOL;


    $multiplied = $numbers[$i] * 2;
    echo "Vermenigvuldigd met 2: " . $multiplied . PHP_EOL . PHP_EOL;
}
?>
