<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\SimpleFactory\SimpleFactoryClass\CarEngineFactory;

// Простая фабрика для создания двигателей
$carEngineFactory = new CarEngineFactory();

$dieselMotor = $carEngineFactory->makeCarEngine("DIESEL");
$gasMotor = $carEngineFactory->makeCarEngine("GAS");

echo $dieselMotor;
echo '<br>';
echo '<br>';

echo $gasMotor;
echo '<br>';
echo '<br>';
