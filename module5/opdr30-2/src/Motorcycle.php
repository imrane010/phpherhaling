<?php

namespace Opdr300;

class Motorcycle extends Vehicle
{
    private $offRoad;

    public function __construct($brand, $model, $year, $color, $offRoad)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->offRoad = $offRoad;
    }

    public function isOffRoad()
    {
        return $this->offRoad;
    }

    public function setOffRoad($offRoad)
    {
        $this->offRoad = $offRoad;
    }

}
