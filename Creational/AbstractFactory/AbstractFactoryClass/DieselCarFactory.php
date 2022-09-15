<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * DieselCarFactory class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\AbstractFactoryClass;

// Интерфейсы компонентов
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IEngine;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IFuelTank;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\ITransmission;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\Diesel\DieselEngine;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\Diesel\DieselFuelTank;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\Diesel\MechanicalTransmission;
use JetBrains\PhpStorm\Pure;


/**
 * Классы семейства "Дизель"
 * Реализация интерфейса ICarFactory
 * Фабрика по производству компонентов для
 * автомобиля на дизеле
 */
class DieselCarFactory implements ICarFactory
{
	#[Pure]
	public function createEngine(): IEngine
	{
		return new DieselEngine();
	}

	#[Pure]
	public function createFuelTank(): IFuelTank
	{
		return new DieselFuelTank();
	}

	#[Pure]
	public function createTransmission(): ITransmission
	{
		return new MechanicalTransmission();
	}
}
