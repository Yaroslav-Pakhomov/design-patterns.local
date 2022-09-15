<?php

declare(strict_types=1);

require_once("../../../vendor/autoload.php");

use DesignPatterns\Structural\Facade\Computer\FacadeClass\ComputerFacade;
use DesignPatterns\Structural\Facade\Computer\ObjectClass\Computer;


$computer = new ComputerFacade(new Computer());

$computer->turnOn(); // Ouch! Beep beep! Loading.. Ready to be used!

echo '<br>';
echo '<br>';

$computer->turnOff(); // Bup bup buzz! Haah! Zzz
