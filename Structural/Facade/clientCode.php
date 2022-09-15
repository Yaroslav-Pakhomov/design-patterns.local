<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Structural\Facade\FacadeClass\CarFacade;
use DesignPatterns\Structural\Facade\ObjectClass\CarElectronics;
use DesignPatterns\Structural\Facade\ObjectClass\CarEngine;

$facadeCar = new CarFacade();
$facadeCar->startTheCar();

echo '<br>';
echo '<br>';

$BMWEngine = new CarEngine('BMW');
$BMWElectronics = new CarElectronics('BMW');

$facadeBMW = new CarFacade($BMWEngine, $BMWElectronics);
$facadeBMW->startTheCar();
