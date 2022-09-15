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
 * Engine interface
 * Интерфейс двигателя: содержит
 * информацию об используемом топливе
 * и максимальном количестве оборотов двигателя
 */
interface IEngine
{
	public function getFuelType(): string;

	public function getMaxRPM(): string;
}
