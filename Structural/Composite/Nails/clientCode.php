<?php

declare(strict_types=1);

require_once("../../../vendor/autoload.php");

use DesignPatterns\Structural\Composite\Nails\Nail;
use DesignPatterns\Structural\Composite\Nails\NailBox;

$nail1 = new Nail(10);
$nail2 = new Nail(25);
$nail3 = new Nail(38);
$nail4 = new Nail(51);

$nailBox1 = new NailBox();
$nailBox1->addItem($nail1);
$nailBox1->addItem($nail2);
$nailBox1->addItem($nail3);

$nailBox2 = new NailBox();
$nailBox2->addItem($nailBox1);
$nailBox2->addItem($nail4);

echo "Общая стоимость гвоздей в коробке 2 для гвоздей: " . $nailBox2->getPrice() . '. Количество контейнеров: ' . count($nailBox2->getContainer()) . '.';

echo '<br>';
echo '<br>';

print_r($nailBox2->getContainer());

echo '<br>';
echo '<br>';
echo '<br>';

echo "Общая стоимость гвоздей в коробке 1 для гвоздей: " . $nailBox1->getPrice() . '. Количество контейнеров: ' . count($nailBox1->getContainer()) . '.';

echo '<br>';
echo '<br>';

print_r($nailBox1->getContainer());

echo '<br>';
echo '<br>';
echo '<br>';

echo "Price of nail 4: " . $nail4->getPrice() . '.';
