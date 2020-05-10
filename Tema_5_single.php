<?php declare(strict_types = 1);

// namespace Classes;

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

// namespace Classes;

trait MovementTrait
{
    public function move($distance)
	{
		$this->distance += $distance;
	}
}

// namespace Classes;

abstract class Vehicle
{
    use EngineTrait, MovementTrait;
    
	protected $engineStatus;
	protected $speed;
	protected $speedUnit;
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
		return "Vehicle {$this->vehicleType} has the engine {$this->engineStatus} with the current speed at {$this->speed} {$this->speedUnit} and traveled distance of {$this->distance} " . str_replace("/h", "", $this->speedUnit) . " in " . $this->averageTimePerDistance() . " h.";
	}
}

// namespace Classes;

class Car extends Vehicle
{
	protected $speedUnit = "km/h";
	
		public function setSpeedUnit(string $speedUnit)
	{
		$this->speed = $speedUnit;
	}
	
	public function getSpeedUnit(): float
	{
		return $this->speedUnit;
	}
	
	public function __construct(string $vehicleType)
	{
	    return parent::__construct($vehicleType);
	}
}


// namespace Classes;

class Plane extends Vehicle
{
	protected $speedUnit = "kt";
	
		public function setSpeedUnit(string $speedUnit)
	{
		$this->speed = $speedUnit;
	}
	
	public function getSpeedUnit(): float
	{
		return $this->speedUnit;
	}
	
	public function __construct(string $vehicleType)
	{
	    return parent::__construct($vehicleType);
	}
}


// namespace Classes;

class Boat extends Vehicle
{
	protected $speedUnit = "nm/h";
	
		public function setSpeedUnit(string $speedUnit)
	{
		$this->speed = $speedUnit;
	}
	
	public function getSpeedUnit(): float
	{
		return $this->speedUnit;
	}
	
	public function __construct(string $vehicleType)
	{
	    return parent::__construct($vehicleType);
	}
}



// include "bootstrap.php";

// use Classes\Car;
// use Classes\Plane;
// use Classes\Boat;

echo "<hr>";
echo "CAR object";
$car = new Car("car");
$car->startEngine();
$car->setSpeed(60);
$car->move(120);
echo $car;
echo PHP_EOL."<br>";

echo "<hr>";
echo "PLANE object";
$plane = new Plane("plane");
$plane->startEngine();
$plane->setSpeed(10);
$plane->move(230);
echo $plane;
echo PHP_EOL."<br>";

echo "<hr>";
echo "BOAT object";
$boat = new Boat("boat");
$boat->startEngine();
$boat->setSpeed(60);
$boat->move(340);
echo $boat;
echo PHP_EOL."<br>";