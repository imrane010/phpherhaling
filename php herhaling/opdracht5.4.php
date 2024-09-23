<?php
$countries = [
    'Nederland' => 'Amsterdam',
    'België' => 'Brussel',
    'Duitsland' => 'Berlijn'
];

foreach ($countries as $country => $capital) {
    echo "De hoofdstad van $country is $capital" . PHP_EOL;
}
?>
