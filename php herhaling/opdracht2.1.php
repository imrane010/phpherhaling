<?php
$age = 20;

echo match(true) {
    $age >= 18 => "Je bent volwassen",
    default => "Je bent niet volwassen",
}
?>
