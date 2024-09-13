<?php
$books = [
    "book1" => ["title" => "1984", "author" => "George Orwell", "pages" => 300],
    "book2" => ["title" => "Brave New World", "author" => "Aldous Huxley", "pages" => 311],
    "book3" => ["title" => "Fahrenheit 451", "author" => "Ray Bradbury", "pages" => 256]
];


echo $books["book2"]["title"] . " is geschreven door " . $books["book2"]["author"] . "<br>";


$books["book1"]["pages"] = 350;


$books["book4"] = ["title" => "De Ontdekking van de Hemel", "author" => "Harry Mulisch", "pages" => 900];


echo "<pre>";
print_r($books);
echo "</pre>";
?>
