<?php
namespace Vehicle;

class Motorcycle extends Vehicle
{
    private $motorWheels;

    public function __construct($brand, $type, $motorWheels)
    {
        parent::__construct($brand, $type);

        $this ->motorWheels = $motorWheels;
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
            $this->motorWheels,
        ];
    }
}