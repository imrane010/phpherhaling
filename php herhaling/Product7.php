<?php

class Product
{


    public function __construct(public $price,public $name, public $currency = "&euro")
{
$this->name = ucfirst($name);
}

public function formatPrice()
{
    return number_format($this->price, decimals 2);
}
}

$game1 = new Product(price: 40,  "fifa 2023", currency: "$");


$game1->price = 40;


//$game2 = new Product();
//$game2->name = "Fifa24";
//$game2->price = 80;

echo $game1->name."<br>";
echo $game1->price."<br>";
//echo $game1->formatPrice()."<br>";


var_dump($game1);
//var_dump($game2);
<?php
