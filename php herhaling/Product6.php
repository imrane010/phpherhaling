<?php

class Product
{
    public $name;
    public $price;

    public function __construct( $price,$name ="Een spel, $currency = "&euro")
{
$this->name = ucfirst($name);
$this->price = $price;
$this->currency = $currency;
}

public function formatPrice()
{
    return number_format($this->price, decimals 2);
}
}

$game1 = new Product(price: 40, currency: "$");


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

