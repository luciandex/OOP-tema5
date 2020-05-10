<?php

namespace Classes;

class Boat extends Vehicle
{
    private const BOAT_SPEED_UNIT = 'nm';

    public function getSpeedUnit(): string
    {
        return self::BOAT_SPEED_UNIT;
    }

    public function __toString()
    {
        return parent::__toString();
    }
}