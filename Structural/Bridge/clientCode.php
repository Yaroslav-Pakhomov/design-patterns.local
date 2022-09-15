<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Классы водителей
use DesignPatterns\Structural\Bridge\ObjectClass\John;
use DesignPatterns\Structural\Bridge\ObjectClass\Mike;

// Классы транспорта
use DesignPatterns\Structural\Bridge\BridgeClass\AbstractVehicle;
use DesignPatterns\Structural\Bridge\BridgeClass\Bike;
use DesignPatterns\Structural\Bridge\BridgeClass\Car;

$driverJohn = new John();
$driverMike = new Mike();

// реализация паттерна "Мост" (Bridge)
$bike = new Bike($driverJohn);
$car = new Car($driverMike);

function exploreBridgeDriving(AbstractVehicle $vehicle) {
    $vehicle->drive();
}

exploreBridgeDriving($bike);
exploreBridgeDriving($car);

$bike->changeDriver($driverMike);
$car->changeDriver($driverJohn);

exploreBridgeDriving($car);
exploreBridgeDriving($bike);
