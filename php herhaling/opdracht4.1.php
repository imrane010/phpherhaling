<?php
$products = [
    ["Laptop", 999.99, 30],
    ["Smartphone", 699.99, 50],
    ["Monitor", 199.99, 75],
    ["Toetsenbord", 49.99, 100]
];


echo $products[1][0] . " kost " . $products[1][1] . " euro<br>";


$products[3][2] = 120;


$products[] = ["Tablet", 299.99, 50];


echo "<pre>";
print_r($products);
echo "</pre>";
?>

