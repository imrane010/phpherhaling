<?php

namespace Opdr300;

class Car extends Vehicle
{
    private $seats;

    public function __construct($brand, $model, $year, $color, $seats)
    {
        parent::__construct($brand, $model, $year, $color);
        $this->seats = $seats;
    }

    public function getSeats()
    {
        return $this->seats;
    }

    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

}
