<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * GasolineCarFactory class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\AbstractFactoryClass;


// Интерфейсы компонентов
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IEngine;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IFuelTank;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\ITransmission;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\Gas\AutomaticTransmission;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\Gas\GasEngine;
use DesignPatterns\Creational\AbstractFactory\ObjectClass\Gas\GasFuelTank;
use JetBrains\PhpStorm\Pure;


/**
 * Классы семейства "Бензин"
 * Реализация интерфейса ICarFactory
 * Фабрика по производству компонентов для
 * автомобиля на бензине
 */
class GasolineCarFactory implements ICarFactory
{
	#[Pure]
	public function createEngine(): IEngine
	{
		return new GasEngine;
	}

	#[Pure]
	public function createFuelTank(): IFuelTank
	{
		return new GasFuelTank();
	}

	#[Pure]
	public function createTransmission(): ITransmission
	{
		return new AutomaticTransmission();
	}
}
