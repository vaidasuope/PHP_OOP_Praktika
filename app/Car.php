<?php

namespace Vehicle;

class Car extends Vehicle
{
    private $fuel;

    public function __construct($brand, $type, $fuel)
    {
        parent::__construct($brand, $type);

        $this->fuel=$fuel;
    }

    public function getData (){
        return $data = [
            $this->brand,
            $this->type,
            $this->price,
            $this->weight,
            $this->engine,
            $this->power,
            $this->maxSpeed,
            $this->description,
            $this->passengers,
            $this->fuel,
        ];
    }
}