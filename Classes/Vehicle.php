<?php

namespace Classes;

abstract class Vehicle
{
    use EngineTrait, MovementTrait;


    protected $engineStatus;
    protected $speed;
    //protected $speedUnit;
    protected $distance;
    protected $vehicleType;

    public function setSpeed(float $speed)
    {
        $this->speed = $speed;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }

    public function getVehicleType(): string
    {
        return $this->vehicleType;
    }

    public function getDistance(): float
    {
        return $this->distance;
    }

    public function averageTimePerDistance(): float
    {
        return round($this->getDistance() / $this->getSpeed(), 1);
    }

    public function __construct(string $vehicleType)
    {
        $this->vehicleType = $vehicleType;
    }


    public function __toString()
    {
       return "Vehicle <strong style='color: red'>{$this->getVehicleType()}</strong> 
       has the engine $this->engineStatus 
       with the current speed at $this->speed {$this->getSpeedUnit()}/h 
       and traveled distance of $this->distance {$this->getSpeedUnit()} 
       in {$this->averageTimePerDistance()} h.";
    }
}