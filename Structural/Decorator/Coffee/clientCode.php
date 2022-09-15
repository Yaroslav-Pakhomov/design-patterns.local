<?php

declare(strict_types=1);

require_once("../../../vendor/autoload.php");

use DesignPatterns\Structural\Decorator\Coffee\DecoratorClass\MilkCoffee;
use DesignPatterns\Structural\Decorator\Coffee\DecoratorClass\VanillaCoffee;
use DesignPatterns\Structural\Decorator\Coffee\DecoratorClass\WhipCoffee;
use DesignPatterns\Structural\Decorator\Coffee\ObjectClass\SimpleCoffee;


$someCoffee = new SimpleCoffee();
echo $someCoffee->getDescription(); // Простой кофе
echo '<br>';
echo $someCoffee->getCost(); // 10
echo '<br>';

$someCoffee = new MilkCoffee($someCoffee);
echo '<br>';
echo $someCoffee->getDescription(); // Простой кофе, молоко
echo '<br>';
echo $someCoffee->getCost(); // 12
echo '<br>';

$someCoffee = new WhipCoffee($someCoffee);
echo '<br>';
echo $someCoffee->getDescription(); // Простой кофе, молоко, сливки
echo '<br>';
echo $someCoffee->getCost(); // 17
echo '<br>';

$someCoffee = new VanillaCoffee($someCoffee);
echo '<br>';
echo $someCoffee->getDescription(); // Простой кофе, молоко, сливки, ваниль
echo '<br>';
echo $someCoffee->getCost(); // 20
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';

// Декораторы
echo 'Декораторы';
echo '<br>';
$simpleCoffee = new SimpleCoffee(); // Простой кофе - 10
echo '<br>';
echo $simpleCoffee->getDescription();
echo '<br>';
echo $simpleCoffee->getCost();
echo '<br>';

$milkCoffee = new MilkCoffee($simpleCoffee); // Простой кофе, молоко - 12
echo '<br>';
echo $milkCoffee->getDescription();
echo '<br>';
echo $milkCoffee->getCost();
echo '<br>';

$whipCoffee = new WhipCoffee($simpleCoffee); // Простой кофе, сливки - 15
echo '<br>';
echo $whipCoffee->getDescription();
echo '<br>';
echo $whipCoffee->getCost();
echo '<br>';

$vanillaCoffee = new VanillaCoffee($simpleCoffee); // Простой кофе, ваниль - 13
echo '<br>';
echo $vanillaCoffee->getDescription();
echo '<br>';
echo $vanillaCoffee->getCost();
echo '<br>';


echo '<br>';
echo '<br>';
echo '<br>';


// Комбинации декораторов
echo 'Комбинации декораторов';
echo '<br>';
$milkWhipCoffee = new WhipCoffee($milkCoffee); // Простой кофе, молоко, сливки - 17
echo '<br>';
echo $milkWhipCoffee->getDescription();
echo '<br>';
echo $milkWhipCoffee->getCost();
echo '<br>';

$milkVanillaCoffee = new VanillaCoffee($milkCoffee); // Простой кофе, молоко, ваниль - 15
echo '<br>';
echo $milkVanillaCoffee->getDescription();
echo '<br>';
echo $milkVanillaCoffee->getCost();
echo '<br>';

$whipVanillaCoffee = new VanillaCoffee($whipCoffee); // Простой кофе, сливки, ваниль - 18
echo '<br>';
echo $whipVanillaCoffee->getDescription();
echo '<br>';
echo $whipVanillaCoffee->getCost();
echo '<br>';
