<?php

declare(strict_types=1);

use DesignPatterns\Structural\Flyweight\Tea\FlyweightClass\TeaShop;
use DesignPatterns\Structural\Flyweight\Tea\ObjectClass\TeaMaker;

require_once("../../../vendor/autoload.php");

$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('меньше сахара', 1);
$shop->takeOrder('больше молока', 2);
$shop->takeOrder('без сахара', 5);

$shop->serve();
