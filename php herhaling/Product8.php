<?php

class Product
{
    public $name;
    public $price;

    public $currency;

    public function __construct( $price, $name = "een game",  $currency = "&euro")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice()
    {
        return number_format($this->price, decimals 2);
}
public function getProduct()
{
    return "Het product".$this->name."kost".$this->currency." ".$this->price;
}
}

$game1 = new Product(price: 40,  "fifa 2023", currency: "$");
echo $game1->getProduct();

//$game1->price = 40;


//$game2 = new Product();
//$game2->name = "Fifa24";
//$game2->price = 80;

//echo $game1->name."<br>";
//echo $game1->price."<br>";
//echo $game1->formatPrice()."<br>";


//var_dump($game1);
//var_dump($game2);
//<?php

