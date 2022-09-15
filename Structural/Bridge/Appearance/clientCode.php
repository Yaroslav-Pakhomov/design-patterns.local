<?php

declare(strict_types=1);


require_once("../../../vendor/autoload.php");

// Классы Темы
use DesignPatterns\Structural\Bridge\Appearance\ObjectClass\AquaTheme;
use DesignPatterns\Structural\Bridge\Appearance\ObjectClass\DarkTheme;
use DesignPatterns\Structural\Bridge\Appearance\ObjectClass\LightTheme;

// Классы страниц (паттерн "Мост")
use DesignPatterns\Structural\Bridge\Appearance\BridgeClass\About;
use DesignPatterns\Structural\Bridge\Appearance\BridgeClass\Careers;

$darkTheme = new DarkTheme();
$lightTheme = new LightTheme();
$aquaTheme = new AquaTheme();

$aboutDark = new About($darkTheme);
$careersDark = new Careers($darkTheme);

$aboutLight = new About($lightTheme);
$careersLight = new Careers($lightTheme);

echo $aboutDark->getContent(); // "Страница "About page" в теме "Dark Black"";
echo '<br>';
echo $careersDark->getContent(); // "Страница "Careers page" в теме "Dark Black"";

echo '<br>';
echo '<br>';
echo '<br>';


echo $aboutLight->getContent();
echo '<br>';
echo $careersLight->getContent();
