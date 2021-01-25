<?php

namespace Vehicle;

class Vehicle
{
    protected $brand;
    protected $type;
    protected $price;
    protected $weight;
    protected $engine;
    protected $power;
    protected $maxSpeed;
    protected $description;
    protected $passengers;

    public function __construct($brand, $type)
    {
        $this->brand = $brand;
        $this->type = $type;
    }

    public function addData ($price, $weight,$engine,$power,$maxSpeed,$description,$passengers){
        $this->price = $price;
        $this->weight = $weight;
        $this->engine = $engine;
        $this->power = $power;
        $this->maxSpeed = $maxSpeed;
        $this->description = $description;
        $this->passengers = $passengers;
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
        ];
    }
}