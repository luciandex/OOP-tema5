<?php declare (strict_types=1);

include "bootstrap.php";

use Classes\Car;
use Classes\Plane;
use Classes\Boat;

echo "<br>";
echo "CAR object <br>";
$car = new Car("car");
$car->startEngine();
$car->setSpeed(60);
$car->move(120);
echo $car;
echo PHP_EOL."<br>";

echo "<hr><br>";
echo "PLANE object <br>";
$plane = new Plane("plane");
$plane->startEngine();
$plane->setSpeed(10);
$plane->move(230);
echo $plane;
echo PHP_EOL."<br>";

echo "<hr><br>";
echo "BOAT object <br>";
$boat = new Boat("boat");
$boat->startEngine();
$boat->setSpeed(60);
$boat->move(340);
echo $boat;
echo PHP_EOL."<br>";