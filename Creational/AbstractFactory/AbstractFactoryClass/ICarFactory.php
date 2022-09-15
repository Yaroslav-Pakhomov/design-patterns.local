<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * ICarFactory interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\AbstractFactoryClass;


use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IEngine;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IFuelTank;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\ITransmission;

/**
 * Интерфейс нашей абстрактной фабрики
 */
interface ICarFactory
{
	public function createEngine(): IEngine;

	public function createFuelTank(): IFuelTank;

	public function createTransmission(): ITransmission;
}
