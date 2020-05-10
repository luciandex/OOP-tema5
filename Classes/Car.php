<?php

namespace Classes;

class Car extends Vehicle
{
    private const CAR_SPEED_UNIT = 'km';

	public function getSpeedUnit(): string
	{
		return self::CAR_SPEED_UNIT;
	}

	public function __toString()
    {
        return parent::__toString();
    }
}