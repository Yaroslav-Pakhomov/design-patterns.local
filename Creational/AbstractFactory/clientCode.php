<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\AbstractFactory\AbstractFactoryClass\DieselCarFactory;
use DesignPatterns\Creational\AbstractFactory\AbstractFactoryClass\GasolineCarFactory;
use DesignPatterns\Creational\AbstractFactory\CarAssembler;

// Бензиновая фабрика

// Дизельная фабрика

echo '<br>';
echo '<br>';

$gasolineCar = new CarAssembler(new GasolineCarFactory());

$arrGasolineCar = $gasolineCar->assembleCar();

echo $arrGasolineCar["Engine"]->getFuelType(); // Gasoline
echo '<br>';
echo '<br>';
$gasolineCar->describeCar(); // So, our car engine is: Gasoline, and maximum RPM is: 9000. Fuel tank contains Gasoline fuel and is 50 litres capacity. Also, the transmission is Automatic.
$gasolineCar->resetCar();

echo '<br>';
echo '<br>';

$dieselCar = $gasolineCar->changeFactory(new DieselCarFactory());

$dieselCar->assembleCar();
$dieselCar->describeCar(); // So, our car engine is: Diesel, and maximum RPM is: 4000. Fuel tank contains Diesel fuel and is 70 litres capacity. Also, the transmission is Mechanic.
echo '<br>';
echo '<br>';
echo '<br>';
