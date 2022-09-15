<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Цвет
use DesignPatterns\Creational\FactoryMethod\FactoryMethodClass\ColorTypographerFactory;
use DesignPatterns\Creational\FactoryMethod\FactoryMethodClass\MonochromeTypographerFactory;

// ЧБ


$typographyTaskList = [];
$typographyTaskList[] = new MonochromeTypographerFactory();
$typographyTaskList[] = new ColorTypographerFactory();
$typographyTaskList[] = new ColorTypographerFactory();

foreach ($typographyTaskList as $employee) {
	$employee->printImage();
}

$monochromeTypographerFactory = [];
$monochromeTypographerFactory[] = new MonochromeTypographerFactory();
$monochromeTypographerFactory[] = new MonochromeTypographerFactory();
$monochromeTypographerFactory[] = new MonochromeTypographerFactory();
$monochromeTypographerFactory[] = new MonochromeTypographerFactory();

foreach ($monochromeTypographerFactory as $monochromeTypographer) {
	echo $monochromeTypographer->printImage();
	echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';

$colorTypographerFactory = [];
$colorTypographerFactory[] = new ColorTypographerFactory();
$colorTypographerFactory[] = new ColorTypographerFactory();
$colorTypographerFactory[] = new ColorTypographerFactory();
$colorTypographerFactory[] = new ColorTypographerFactory();

foreach ($colorTypographerFactory as $colorTypographer) {
	echo $colorTypographer->printImage();
	echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';

$typographerFactory = [];
$typographerFactory[] = new MonochromeTypographerFactory();
$typographerFactory[] = new MonochromeTypographerFactory();
$typographerFactory[] = new ColorTypographerFactory();
$typographerFactory[] = new ColorTypographerFactory();
$typographerFactory[] = new MonochromeTypographerFactory();
$typographerFactory[] = new MonochromeTypographerFactory();
$typographerFactory[] = new ColorTypographerFactory();
$typographerFactory[] = new MonochromeTypographerFactory();


foreach ($typographerFactory as $typographer) {
	if ($typographer instanceof MonochromeTypographerFactory) {
		echo $typographer->printImage();
		echo $typographer->getPrinter() . '<br>';
	} else {
		echo $typographer->printImage();
	}
	echo '<br>';
}
