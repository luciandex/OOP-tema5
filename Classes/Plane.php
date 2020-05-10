<?php

namespace Classes;

class Plane extends Vehicle
{
    private const PLANE_SPEED_UNIT = 'kt';

    public function getSpeedUnit(): string
    {
        return self::PLANE_SPEED_UNIT;
    }

    public function __toString()
    {
        return parent::__toString();
    }

}