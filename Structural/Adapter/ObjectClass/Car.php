<?php

declare(strict_types=1);

/**
 * Structural Patterns: Adapter
 * Car class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Adapter\ObjectClass;

/**
 * Класс автомобиля, который реализует интерфейс
 * IFourWheelsVehicle для нашего водителя
 */
class Car implements IFourWheelsVehicle
{

	/**
	 * Реализация метода интерфейса
	 */
	public function ride(): string
	{
		return 'У-у-у, я еду на машине!';
	}
}
