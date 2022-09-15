<?php

declare(strict_types=1);

require_once("../../vendor/autoload.php");

use DesignPatterns\Creational\Builder\DesktopAssembler;

$simplePC = DesktopAssembler::assembleSimpleDesktop();
$simplePC->getDescription();

echo '<br>';
echo '<br>';

$powerfulPC = DesktopAssembler::assemblePowerfulDesktop();
$powerfulPC->getDescription();

echo '<br>';
echo '<br>';

$powerfulPC = DesktopAssembler::assemblePowerfulDesktop();
$powerfulPC->getDescription();

echo '<br>';
echo '<br>';

$simplePC = DesktopAssembler::assembleSimpleDesktop();
$simplePC->getDescription();
