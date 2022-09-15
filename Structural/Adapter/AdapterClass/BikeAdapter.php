<?php

declare(strict_types=1);

/**
 * Structural Patterns: Adapter
 * BikeAdapter class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 23.08.2022
 */

namespace DesignPatterns\Structural\Adapter\AdapterClass;

use DesignPatterns\Structural\Adapter\ObjectClass\IFourWheelsVehicle;
use DesignPatterns\Structural\Adapter\ObjectClass\ITwoWheelsVehicle;

/**
 * Класс-адаптер, который реализует интерфейс IFourWheelsVehicle.
 * Адаптирует несовместимый класс Bike, реализующий интерфейс ITwoWheelsVehicle
 * под требования класса Driver в методе showRide().
 * Реализует метод интерфейса ride().
 */
class BikeAdapter implements IFourWheelsVehicle
{

	/**
	 * Хранит в себе объект класса Bike
	 */
	private ITwoWheelsVehicle $bike;

	/**
	 * Конструктор принимает объект Bike путём внедрения зависимости (Dependency Injection - DI)
	 * с помощью агрегации, который реализует интерфейс ITwoWheelsVehicle
	 */
	public function __construct(ITwoWheelsVehicle $bike)
	{
		$this->bike = $bike;
	}

	/**
	 * Метод, который нужно реализовать при
	 * имплементации IFourWheelsVehicle
	 */
	public function ride(): string
	{
		/**
		 * Вызываем тот метод у переданного объекта $this->bike,
		 * который примем за метод ride() в интерфейсе
		 * IFourWheelsVehicle
		 */
		return $this->bike->rideBike();
	}
}
