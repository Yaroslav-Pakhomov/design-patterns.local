<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface;

/**
 *  FuelTank interface
 *  Интерфейс бака для горючего
 */
interface IFuelTank
{
	public function getAllowableFuel(): string;

	public function getCapacity(): string;
}
