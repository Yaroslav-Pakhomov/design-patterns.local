<?php

declare(strict_types=1);

/**
 * Structural Patterns: Adapter
 * IFourWheelsVehicle interface
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Adapter\ObjectClass;

/**
 * Интерфейс четырехколесного транспорта
 */
interface IFourWheelsVehicle
{

	public function ride(): string;
}
