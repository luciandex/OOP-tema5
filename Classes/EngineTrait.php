<?php

namespace Classes;

trait EngineTrait
{   
    public function startEngine()
	{
		$this->engineStatus = "started";
	}
	
	public function stopEngine()
	{
		$this->engineStatus = "stoped";
	}
}