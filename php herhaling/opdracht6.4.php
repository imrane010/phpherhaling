<?php
$grades = [8.5, 7.0, 6.5, 9.0, 4.5];

foreach ($grades as $grade) {
    echo "Het cijfer is: $grade" . PHP_EOL;

    if ($grade >= 5.5) {
        echo "Voldoende" . PHP_EOL;
    } else {
        echo "Onvoldoende" . PHP_EOL;
    }

    echo PHP_EOL;
}
?>
