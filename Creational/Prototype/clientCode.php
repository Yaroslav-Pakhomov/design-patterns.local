<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\Prototype\Prototype;

$firstPrototype = new Prototype("Object One", 1);

$clonedPrototype = clone $firstPrototype;

$clonedPrototype_1 = clone $clonedPrototype;

echo '<br>';
echo '<br>';

echo $firstPrototype;

echo '<br>';
echo '<br>';

echo $firstPrototype;

echo '<br>';
echo '<br>';

echo $clonedPrototype;

echo '<br>';
echo '<br>';

echo $clonedPrototype_1;
