<?php

class Product
{
    public $name;
    public $price;
    public function formatPrice();
{
return number_format($this->price, decimals 2);
}
}

$game1 = new Product();
$game1->name = "Fifa23";
$game1->price = 40;

$game2 = new Product();
$game2->name = "Fifa24";
$game2->price = 80;

echo $game1->name."<br>";
echo $game1->price."<br>";
echo $game1->formatPrice()."<br>";


var_dump($game1);
