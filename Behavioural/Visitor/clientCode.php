<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

// Классы "Посетителя" убийца
use DesignPatterns\Behavioural\Visitor\VisitorClass\IGloryKiller;
use DesignPatterns\Behavioural\Visitor\VisitorClass\DoomSlayer;

// Классы объектов демоны
use DesignPatterns\Behavioural\Visitor\ObjectClass\AbstractDemon;
use DesignPatterns\Behavioural\Visitor\ObjectClass\Cacodemon;
use DesignPatterns\Behavioural\Visitor\ObjectClass\Imp;

function killEmAll(IGloryKiller $killer, AbstractDemon $demon)
{
	$demon->gloryDeath($killer);
}

// Убийца
$doomSlayer = new DoomSlayer();

// Демоны
$imp = new Imp();
$cacodemon = new Cacodemon();

killEmAll($doomSlayer, $cacodemon);

echo '<br>';

killEmAll($doomSlayer, $imp);