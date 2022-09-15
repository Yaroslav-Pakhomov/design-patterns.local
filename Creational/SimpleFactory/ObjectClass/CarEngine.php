<?php

declare(strict_types=1);

/**
 * Creation Patterns: Simple Factory
 * CarEngine class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\SimpleFactory\ObjectClass;

use JetBrains\PhpStorm\Pure;

/**
 * Автомобильный двигатель, реализующий
 * интерфейс IVehicleEngine
 */
class CarEngine implements IVehicleEngine
{

	/**
	 * Количество цилиндров
	 */
	private int $cylindersAmount;

	/**
	 * Максимальное число оборотов
	 */
	private int $maxRPM;

	/**
	 * Тип двигателя
	 */
	private string $fuelType;

	#[Pure]
	public function __toString(): string
	{
		return "Это двигатель типа " . $this->getFuelType() . ". Количество цилиндров = " . $this->getCylindersAmount() . " и максимальное число оборотов = " . $this->getMaxRPM() . ".";
	}

	public function setFuelType(string $fuelType): void
	{
		$this->fuelType = $fuelType;
	}

	public function setCylindersAmount(int $cylindersAmount): void
	{
		$this->cylindersAmount = $cylindersAmount;
	}

	public function setMaxRPM(int $maxRPM): void
	{
		$this->maxRPM = $maxRPM;
	}

	public function getFuelType(): string
	{
		return $this->fuelType;
	}

	public function getCylindersAmount(): int
	{
		return $this->cylindersAmount;
	}

	public function getMaxRPM(): int
	{
		return $this->maxRPM;
	}

}
