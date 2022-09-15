<?php

declare(strict_types=1);

/**
 * Creation Patterns: Abstract Factory
 * CarAssembler class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 21.08.2022
 */

namespace DesignPatterns\Creational\AbstractFactory;

use DesignPatterns\Creational\AbstractFactory\AbstractFactoryClass\ICarFactory;

/**
 * Класс с клиентским кодом для демонстрации работы
 * абстрактной фабрики по производству автомобилей.
 * Для сборки машины нам потребуется фабрика, которая будет присылать
 * нам компоненты и собственно кузов автомобиля и будет
 * символизировать ассоциативный массив.
 */
class CarAssembler
{

	/**
	 * Объект определённой фабрики
	 */
	private object $carFactory;

	/**
	 * Массив семейства объектов определённой фабрики
	 */
	private array $car = [];

	/**
	 * В конструкторе принимаем фабрику и присваиваем ее свойству класса, путём внедрения зависимости (Dependency Injection - DI)
	 */
	public function __construct(ICarFactory $carFactory)
	{
		$this->carFactory = $carFactory;
	}

	/**
	 * Собираем автомобиль, собирает объекты конкретного семейства классов в массив
	 */
	public function assembleCar(): array
	{
		$this->car["Engine"] = $this->carFactory->createEngine();
		$this->car["FuelTank"] = $this->carFactory->createFuelTank();
		$this->car["Transmission"] = $this->carFactory->createTransmission();
		return $this->car;
	}

	/**
	 * Описываем собранный автомобиль, если попросят
	 */
	public function describeCar(): void
	{
		echo "So, our car engine is: " . $this->car["Engine"]->getFuelType() . ", and maximum RPM is: "
			. $this->car["Engine"]->getMaxRPM() . ". Fuel tank contains " . $this->car["FuelTank"]->getAllowableFuel()
			. " and is " . $this->car["FuelTank"]->getCapacity() . " capacity. Also, the transmission is " . $this->car["Transmission"]->getTransmissionType() . ".<br>";
	}

	/**
	 * И предоставляем автомобиль. Само собой, такая реализация автомобиля в виде массива
	 * была создана исключительно в демонстративных целях, пример и так получился большой
	 */
	public function provideCar(): array
	{
		return $this->car;
	}

	/**
	 * "Обнуляем" автомобиль для, например, следующего автомобиля
	 */
	public function resetCar(): void
	{
		unset($this->car);
	}

	/**
	 * Сменим компоненты
	 */
	public function changeFactory(ICarFactory $carFactory): object
	{
		$this->carFactory = $carFactory;
		return $this;
	}
}
