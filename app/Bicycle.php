<?php
namespace Vehicle;

class Bicycle extends Vehicle
{
    private $category;

    public function __construct($brand, $type, $category)
    {
        parent::__construct($brand, $type);

        $this->category = $category;
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
            $this->category,
        ];
    }
}