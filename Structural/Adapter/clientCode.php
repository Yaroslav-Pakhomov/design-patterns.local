<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Класс, использующий объекты других классов и вызывающий их методы.
use DesignPatterns\Structural\Adapter\ObjectClass\Driver;

// Объекты классов для работы
use DesignPatterns\Structural\Adapter\ObjectClass\Bike;
use DesignPatterns\Structural\Adapter\ObjectClass\Car;

// Адаптер
use DesignPatterns\Structural\Adapter\AdapterClass\BikeAdapter;


$bike = new Bike();

$car = new Car();

$bikeAdapter = new BikeAdapter($bike);

$riderJoe = new Driver();

echo $riderJoe::showRide($car);
echo '<br>';
echo '<br>';

echo Driver::showRide($bike);
echo '<br>';
echo '<br>';

echo Driver::showRide($bikeAdapter);
echo '<br>';
echo '<br>';
