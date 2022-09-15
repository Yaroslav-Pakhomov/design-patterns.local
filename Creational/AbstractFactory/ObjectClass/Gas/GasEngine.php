<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * GasEngine class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\ObjectClass\Gas;

use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IEngine;

/**
 * Реализация интерфейса IEngine
 * для бензинового мотора
 */
class GasEngine implements IEngine
{
	protected string $fuelType;
	protected string $maxRPM;

	public function __construct()
	{
		$this->fuelType = "Gasoline";
		$this->maxRPM = "9000";
	}

	public function getFuelType(): string
	{
		return $this->fuelType;
	}

	public function getMaxRPM(): string
	{
		return $this->maxRPM;
	}
}
