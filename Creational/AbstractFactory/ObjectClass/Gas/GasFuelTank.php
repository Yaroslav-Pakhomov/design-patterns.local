<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * GasFuelTank class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\ObjectClass\Gas;

use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IFuelTank;

/**
 * Реализация интерфейса IFuelTank
 * для бензобака с... бензином!
 */
class GasFuelTank implements IFuelTank
{
	protected string $allowableFuel;
	protected string $capacity;

	public function __construct()
	{
		$this->allowableFuel = "Gasoline fuel";
		$this->capacity = "50 litres";
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
