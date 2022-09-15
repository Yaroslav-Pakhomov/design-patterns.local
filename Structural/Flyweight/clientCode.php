<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Flyweight\FlyweightClass\CarDataBase;

// Класс "Легковес"
$carDataBase = new CarDataBase();

// Запишем немножечко клиент-кода и проверим, действительно ли конкретные машины с одинаковыми вариациями будут ссылаться на один и тот же объект вариации
$carDataBase->addCar("Vasya", "Mercedes", "Perambulator", "Hatchback", "Manual Transmission");
$carDataBase->addCar("Ksenia", "KIA", "Perambulator", "Hatchback", "Manual Transmission");
$carDataBase->addCar("Vova", "Toyota", "Perambulator", "Hatchback", "Manual Transmission");
$carDataBase->addCar("Kolya", "Subaru", "Dirty", "SUV", "CVT");

// Получим 4 конкретных машины и всего 2 вариации
$carDataBase->printCertainCars();
$carDataBase->printCarVariations();
