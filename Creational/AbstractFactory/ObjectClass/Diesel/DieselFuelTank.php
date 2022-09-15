<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * DieselFuelTank class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\ObjectClass\Diesel;

use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IFuelTank;

/**
 * Реализация интерфейса IFuelTank
 * для дизельного бака c горючим
 */
class DieselFuelTank implements IFuelTank
{
	protected string $allowableFuel;
	protected string $capacity;

	public function __construct()
	{
		$this->allowableFuel = "Diesel fuel";
		$this->capacity = "70 litres";
	}

	public function getAllowableFuel(): string
	{
		return $this->allowableFuel;
	}

	public function getCapacity(): string
	{
		return $this->capacity;
	}
}
