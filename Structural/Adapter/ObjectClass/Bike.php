<?php

declare(strict_types=1);

/**
 * Structural Patterns: Adapter
 * Bike class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Adapter\ObjectClass;

/**
 * Класс мотоцикла, который нужно "адаптировать"
 * к имеющемуся коду
 */
class Bike implements ITwoWheelsVehicle
{

	/**
	 * Можно бы было нагородить байку интерфейс и наверное так и надо будет сделать...
	 */
	public function rideBike(): string
	{
		return 'У-у-у, я еду на велосипеде!';
	}
}
