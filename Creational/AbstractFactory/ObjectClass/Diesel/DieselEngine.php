<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * DieselEngine class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory\ObjectClass\Diesel;

use DesignPatterns\Creational\AbstractFactory\ObjectClass\ComponentInterface\IEngine;

/**
 * Реализация интерфейса IEngine
 * для дизельного мотора
 */
class DieselEngine implements IEngine
{
	protected string $fuelType;
	protected string $maxRPM;

	public function __construct()
	{
		$this->fuelType = "Diesel";
		$this->maxRPM = "4000";
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
