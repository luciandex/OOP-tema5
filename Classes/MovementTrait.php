<?php

namespace Classes;

trait MovementTrait
{
    public function move($distance)
	{
		$this->distance += $distance;
	}
}