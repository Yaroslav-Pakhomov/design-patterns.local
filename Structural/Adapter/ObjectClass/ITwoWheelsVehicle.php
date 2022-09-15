<?php

declare(strict_types=1);

/**
 * Structural Patterns: Adapter
 * ITwoWheelsVehicle interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Adapter\ObjectClass;

/**
 * Интерфейс четырехколесного транспорта
 */
interface ITwoWheelsVehicle
{

	public function rideBike(): string;
}
