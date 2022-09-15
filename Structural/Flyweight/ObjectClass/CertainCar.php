<?php

declare(strict_types=1);

/**
 * Structural Patterns: Flyweight
 * CertainCar class
 *
 * @author  Yaroslav Pahomov <pahomstyle90@mail.com>
 * @version 24.08.2022
 */

namespace DesignPatterns\Structural\Flyweight\ObjectClass;


/**
 * Конкретная машина
 */
class CertainCar
{
	/**
	 * У конкретной машины будет свой собственный владелец
	 */
	public string $owner;

	/**
	 * Производитель
	 */
	public string $manufacturer;

	/**
	 * Вариация цвет/кузов/трансмиссия, которые
	 * могут и будут повторяться
	 */
	private CarVariation $carVariation;

	public function __construct(string $owner, string $manufacturer, CarVariation $carVariation)
	{
		$this->owner = $owner;
		$this->manufacturer = $manufacturer;
		$this->carVariation = $carVariation;
	}

	/**
	 * Для описания конкретной машины - вызовем метод описания вариации
	 * и передадим в него уникальные имя владельца
	 * и производителя
	 */
	public function describeCertainCar(): void
	{
		$this->carVariation->describeCarVariant($this->owner, $this->manufacturer);
	}
}
