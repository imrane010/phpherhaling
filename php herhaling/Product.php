<?php

class Product
{
   public $name = "een bepaald spel";
}

$game1 = new Product();
$game1->name = "Fifa23";

$game2 = new Product();
$game2->name = "fortnite";

$game3 = new Product();


var_dump($game1);
var_dump($game2);


echo $game1->name."<br>";
echo $game2->name."<br>";
echo $game3->name."<br>";

$game1->name = "fifa22";
echo $game1->name;
