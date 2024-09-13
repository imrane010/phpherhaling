<?php
$pets = [
    ["species" => "Hond", "name" => "Buddy", "age" => 3],
    ["species" => "Papegaai", "name" => "Coco", "age" => 6],
    ["species" => "Konijn", "name" => "Nibbles", "age" => 2]
];


echo $pets[2]["name"] . " is een " . $pets[2]["species"] . "<br>";


$pets[1]["age"] += 1;


$pets[] = ["species" => "Kat", "name" => "Simba", "age" => 2];


echo "<pre>";
print_r($pets);
echo "</pre>";
?>
