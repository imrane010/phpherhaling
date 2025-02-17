<?php

require_once 'vendor/autoload.php';

use Opdr300\Car;
use Opdr300\Vehicle;
use Opdr300\Truck;
use Opdr300\Motorcycle;

$auto = new Car("Toyota", "Corolla", 2022, "Blauw", 5);
$motor = new Motorcycle("Yamaha", "XT500", 2020, "Rood", true);
$vrachtwagen = new Truck("Volvo", "FH16", 2019, "Wit", 20000);


echo "Auto: " . $auto->getBrand() . " " . $auto->getModel() . ", Kleur: " . $auto->getColor() . ", Zitplekken: " . $auto->getSeats() . "<br>";
echo "Motor: " . $motor->getBrand() . " " . $motor->getModel() . ", Off-road: " . ($motor->isOffRoad() ? "Ja" : "Nee") . "<br>";
echo "Vrachtwagen: " . $vrachtwagen->getBrand() . " " . $vrachtwagen->getModel() . ", Laadcapaciteit: " . $vrachtwagen->getLoadCapacity() . " kg<br>";
