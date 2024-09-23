<?php
$evenNumbers = array_filter(range(0, 20), fn($num) => $num % 2 === 0);

array_map(fn($num) => print($num . PHP_EOL), $evenNumbers);
?>
