<?php

declare(strict_types=1);

/**
 * Creation Patterns: Simple Factory
 * VehicleEngine interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 20.08.2022
 */

namespace DesignPatterns\Creational\SimpleFactory\ObjectClass;

/**
 * Интерфейс двигателя
 */
interface IVehicleEngine
{
	public function setFuelType(string $fuelType): void;

	public function setCylindersAmount(int $cylindersAmount): void;

	public function setMaxRPM(int $maxRPM): void;


	public function getFuelType(): string;

	public function getCylindersAmount(): int;

	public function getMaxRPM(): int;
}
