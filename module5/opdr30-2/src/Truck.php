<?php

namespace Opdr300;

class Truck extends Vehicle
{
    private $loadCapacity;

    public function __construct($brand, $model, $year, $color, $loadCapacity)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity()
    {
        return $this->loadCapacity;
    }

    public function setLoadCapacity($loadCapacity)
    {
        $this->loadCapacity = $loadCapacity;
    }
}
